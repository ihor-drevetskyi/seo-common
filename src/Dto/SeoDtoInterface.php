<?php

namespace SeoCommonBundle\Dto;

use SeoCommonBundle\Dto\Traits\H1\H1MethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaTitle\MetaTitleMethodsInterface;
use SeoCommonBundle\Dto\Traits\Breadcrumb\BreadcrumbMethodsInterface;
use SeoCommonBundle\Dto\Traits\RobotsType\RobotsTypeMethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaKeyword\MetaKeywordMethodsInterface;
use SeoCommonBundle\Dto\Traits\LinkCanonical\LinkCanonicalMethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaDescription\MetaDescriptionMethodsInterface;

/**
 * Interface SeoDtoInterface
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoDtoInterface extends
    H1MethodsInterface,
    MetaTitleMethodsInterface,
    BreadcrumbMethodsInterface,
    RobotsTypeMethodsInterface,
    MetaKeywordMethodsInterface,
    LinkCanonicalMethodsInterface,
    MetaDescriptionMethodsInterface
{
    /**
     * @return SeoOgDtoInterface
     */
    public function getOg(): SeoOgDtoInterface;

    /**
     * @param SeoOgDtoInterface $og
     */
    public function setOg(SeoOgDtoInterface $og): void;
}
