<?php

namespace SeoCommonBundle\Entity;

use SeoCommonBundle\Dto\SeoDto;
use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\SeoOgDto;
use SeoCommonBundle\Dto\SeoDtoInterface;
use ComponentBundle\Model\Traits\Id\IdAutoTrait;
use ComponentBundle\Entity\Translatable\AbstractEntityTranslatable;

/**
 * Class EntitySeo
 * @ORM\Table(name="seo")
 * @ORM\Entity
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class EntitySeo extends AbstractEntityTranslatable implements EntitySeoInterface
{
    use IdAutoTrait;

    /**
     * @return SeoDtoInterface
     */
    public function getSeoForPage(): SeoDtoInterface
    {
        /**
         * @var EntitySeoTranslationInterface $translate
         */
        $translate = $this->translate();
        $current_locale = $this->getCurrentLocale();
        /**
         * @var EntitySeoTranslationInterface $translate_fallback_to_default
         */
        $translate_fallback_to_default = $this->translate($current_locale, false);

        $seo_og_dto = new SeoOgDto(
            $translate->getOgImage(),
            $translate->getOgImageName(),
            $translate->getOgTitle(),
            $translate->getOgDescription()
        );

        $seo_dto = new SeoDto(
            $translate->getH1(),
            $translate_fallback_to_default->getRobotsType(),
            $translate->getMetaTitle(),
            $translate->getBreadcrumb(),
            $translate->getMetaKeyword(),
            $seo_og_dto,
            $translate_fallback_to_default->getLinkCanonical(),
            $translate->getMetaDescription()
        );

        if (!$seo_og_dto->getOgDescription()) {
            $seo_og_dto->setOgDescription($translate->getMetaDescription());
        }

        if (!$seo_og_dto->getOgTitle()) {
            $seo_og_dto->setOgTitle($translate->getMetaTitle());
        }

        $seo_dto->setOg($seo_og_dto);

        return $seo_dto;
    }
}
