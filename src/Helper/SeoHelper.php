<?php

namespace SeoCommonBundle\Helper;

use SeoCommonBundle\Dto\SeoDtoInterface;
use SeoCommonBundle\Dto\SeoHelperDtoInterface;
use SeoCommonBundle\Entity\EntitySeoInterface;

/**
 * Class SeoHelper
 * @package SeoCommonBundle\Helper
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
abstract class SeoHelper
{
    /**
     * @param EntitySeoInterface $seo
     * @param SeoHelperDtoInterface $seo_helper_dto
     * @return SeoDtoInterface
     */
    public static function getSeoForPage(
        EntitySeoInterface    $seo,
        SeoHelperDtoInterface $seo_helper_dto
    ): SeoDtoInterface
    {
        $seo_dto = $seo->getSeoForPage();
        $seo_og_dto = $seo_dto->getOg();

        if (!$seo_og_dto->getOgImage() && $seo_helper_dto->getImg()) {
            $seo_og_dto->setOgImage($seo_helper_dto->getImg());
        }

        $title = $seo_helper_dto->getTitle();

        if (!$seo_dto->getH1()) {
            $seo_dto->setH1($title);
        }

        if (!$seo_dto->getMetaTitle()) {
            $seo_dto->setMetaTitle($title);
        }

        if (!$seo_dto->getMetaDescription()) {
            $seo_dto->setMetaDescription($seo_helper_dto->getDescription());
        }

        if (!$seo_og_dto->getOgDescription()) {
            $seo_og_dto->setOgDescription($seo_helper_dto->getDescription());
        }

        $title_pattern_suffix = $seo_helper_dto->getTitlePatternSuffix();
        if ($title_pattern_suffix) {
            $seo_dto->setMetaTitle($seo_dto->getMetaTitle() . ' ' . $title_pattern_suffix);
        }

        $description_pattern_suffix = $seo_helper_dto->getDescriptionPatternSuffix();
        if ($description_pattern_suffix) {
            $seo_dto->setMetaDescription(
                $seo_dto->getMetaDescription() . ' ' . $description_pattern_suffix
            );
        }

        if (!$seo_og_dto->getOgTitle()) {
            $seo_og_dto->setOgTitle($title);
        }

        if (!$seo_dto->getBreadcrumb()) {
            $seo_dto->setBreadcrumb($title);
        }

        return $seo_dto;
    }

    /**
     * @param EntitySeoInterface $seo
     * @param SeoHelperDtoInterface $seo_helper_dt
     * @return SeoDtoInterface
     */
    public static function getSeoForPageWithHtml(
        EntitySeoInterface    $seo,
        SeoHelperDtoInterface $seo_helper_dt
    ): SeoDtoInterface
    {
        $seo_dto = SeoHelper::getSeoForPage($seo, $seo_helper_dt);
        $seo_dto_og = $seo_dto->getOg();
        $seo_dto->setMetaTitle($seo_dto->getTitleWithHtml());
        $seo_dto_og->setOgTitle($seo_dto_og->getOgTitleWithHtml());
        $seo_dto->setLinkCanonical($seo_dto->getLinkCanonicalWithHtml());
        $seo_dto->setMetaDescription($seo_dto->getMetaDescriptionWithHtml());
        $seo_dto_og->setOgDescription($seo_dto_og->getOgDescriptionWithHtml());

        return $seo_dto;
    }
}
