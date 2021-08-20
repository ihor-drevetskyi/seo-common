<?php

namespace SeoCommonBundle\Service;

use InvalidArgumentException;
use Doctrine\ORM\ORMException;
use SeoCommonBundle\Dto\SeoHelperDto;
use SeoCommonBundle\Helper\SeoHelper;
use SeoCommonBundle\Dto\SeoDtoInterface;
use Doctrine\ORM\OptimisticLockException;
use SeoCommonBundle\Entity\EntitySeoPattern;
use SeoCommonBundle\Entity\EntitySeoPatternInterface;
use SeoCommonBundle\Repository\SeoPatternRepositoryInterface;
use SeoCommonBundle\Entity\EntitySeoPatternTranslationInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityElementInterface;
use ComponentBundle\Entity\Translation\AbstractEntityElementTranslationInterface;

/**
 * Class SeoService
 * @package SeoCommonBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class SeoService implements SeoServiceInterface
{
    /**
     * @var string|null
     */
    protected ?string $default_seo_pattern_title_suffix;

    /**
     * @var string|null
     */
    protected ?string $default_seo_pattern_description_suffix;

    /**
     * @var SeoPatternRepositoryInterface
     */
    protected SeoPatternRepositoryInterface $seo_pattern_repository;

    /**
     * PageSeoService constructor.
     * @param SeoPatternRepositoryInterface $seo_pattern_repository
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function __construct(SeoPatternRepositoryInterface $seo_pattern_repository)
    {
        $this->seo_pattern_repository = $seo_pattern_repository;
        $default_seo_pattern_suffix = $this->getDefaultSeoPatternSuffix();
        /**
         * @var EntitySeoPatternTranslationInterface $default_seo_pattern_suffix_t
         */
        $default_seo_pattern_suffix_t = $default_seo_pattern_suffix->translate();
        $this->default_seo_pattern_title_suffix = $default_seo_pattern_suffix_t->getTitlePattern();
        $this->default_seo_pattern_description_suffix = $default_seo_pattern_suffix_t->getDescriptionPattern();
    }

    /**
     * @param string $system_name
     * @param string|null $title_pattern_uk
     * @param string|null $title_pattern_ru
     * @param string|null $title_pattern_en
     * @param bool $use_cache
     * @return EntitySeoPatternInterface
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function createOrReturnSeoPattern(
        string  $system_name,
        ?string $title_pattern_uk = null,
        ?string $title_pattern_ru = null,
        ?string $title_pattern_en = null,
        bool    $use_cache = true
    ): EntitySeoPatternInterface
    {
        $seo_pattern = $this->getSeoPattern($system_name, false, $use_cache);

        if (!($seo_pattern instanceof EntitySeoPatternInterface)) {
            $seo_pattern = new EntitySeoPattern();
            $seo_pattern->setSystemName($system_name);

            if ($title_pattern_uk) {
                $seo_pattern->translate('uk', false)->setTitlePattern($title_pattern_uk);
            } else {
                $seo_pattern->translate('uk', false)->setTitlePattern('');
            }

            if ($title_pattern_ru) {
                $seo_pattern->translate('ru', false)->setTitlePattern($title_pattern_ru);
            } else {
                $seo_pattern->translate('ru', false)->setTitlePattern('');
            }

            if ($title_pattern_en) {
                $seo_pattern->translate('en', false)->setTitlePattern($title_pattern_en);
            } else {
                $seo_pattern->translate('en', false)->setTitlePattern('');
            }

            $seo_pattern->mergeNewTranslations();

            $this->seo_pattern_repository->persist($seo_pattern, true);

            $seo_pattern_from_db = $this->getSeoPattern($system_name, false);
            if ($seo_pattern_from_db) {
                $seo_pattern = $seo_pattern_from_db;
            }
        }

        return $seo_pattern;
    }

    /**
     * @return EntitySeoPatternInterface
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function getDefaultSeoPatternSuffix(): EntitySeoPatternInterface
    {
        return $this->createOrReturnSeoPattern(
            'default_suffix',
            '| Назва проекту',
            '| Название проекта',
            '| The name of the project'
        );
    }

    /**
     * @param string $system_name
     * @param bool $exception
     * @param bool $use_cache
     * @return EntitySeoPatternInterface|null
     */
    public function getSeoPattern(string $system_name, bool $exception = true, bool $use_cache = true): ?EntitySeoPatternInterface
    {
        $seo_pattern = $this->seo_pattern_repository->findSeoPatternBySystemName($system_name, $use_cache);

        if (!($seo_pattern instanceof EntitySeoPatternInterface) && $exception) {
            throw new InvalidArgumentException($system_name . ' - does not exist!');
        }

        return $seo_pattern;
    }

    /**
     * @param AbstractEntityElementInterface $element
     * @param bool $with_html
     * @param string|null $seo_pattern_system_name
     * @return SeoDtoInterface
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function getSeoForItem(
        AbstractEntityElementInterface $element,
        bool                           $with_html = false,
        ?string                        $seo_pattern_system_name = null
    ): SeoDtoInterface
    {
        /**
         * @var AbstractEntityElementTranslationInterface $element_t
         */
        $element_t = $element->translate();
        $seo_dto = new SeoHelperDto();

        $title = $element_t->getTitle();
        if ($title) {
            $seo_dto->setTitle($title);
        }

        if ($seo_pattern_system_name) {
            $seo_pattern = $this->createOrReturnSeoPattern($seo_pattern_system_name);
            /**
             * @var EntitySeoPatternTranslationInterface $seo_pattern_t
             */
            $seo_pattern_t = $seo_pattern->translate();

            $seo_pattern_description = $seo_pattern_t->getDescriptionPattern();
            if (!empty($seo_pattern_description) && !$seo_dto->getDescription()) {
                $seo_pattern_description = str_replace([
                    '[title]'
                ], [
                    $seo_dto->getTitle()
                ], $seo_pattern_description);
                $seo_dto->setDescription($seo_pattern_description);
            }

            $seo_pattern_title = $seo_pattern_t->getTitlePattern();
            if (!empty($seo_pattern_title)) {
                $seo_pattern_title = str_replace([
                    '[title]'
                ], [
                    $seo_dto->getTitle()
                ], $seo_pattern_title);
                $seo_dto->setTitle($seo_pattern_title);
            }
        }

        $seo_dto->setTitlePatternSuffix($this->default_seo_pattern_title_suffix);
        $seo_dto->setDescriptionPatternSuffix($this->default_seo_pattern_description_suffix);

        if (!method_exists($element, 'getSeo')) {
            throw new InvalidArgumentException();
        }

        if ($with_html) {
            return SeoHelper::getSeoForPageWithHtml($element->getSeo(), $seo_dto);
        } else {
            return SeoHelper::getSeoForPage($element->getSeo(), $seo_dto);
        }
    }
}
