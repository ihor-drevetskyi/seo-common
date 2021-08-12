<?php

namespace SeoCommonBundle\Entity;

use SeoCommonBundle\Dto\Traits\H1\H1MethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgImage\OgImageMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgTitle\OgTitleMethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaTitle\MetaTitleMethodsInterface;
use SeoCommonBundle\Dto\Traits\Breadcrumb\BreadcrumbMethodsInterface;
use SeoCommonBundle\Dto\Traits\RobotsType\RobotsTypeMethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaKeyword\MetaKeywordMethodsInterface;
use ComponentBundle\Entity\Translation\AbstractEntityTranslationInterface;
use SeoCommonBundle\Dto\Traits\LinkCanonical\LinkCanonicalMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgDescription\OgDescriptionMethodsInterface;
use SeoCommonBundle\Dto\Traits\MetaDescription\MetaDescriptionMethodsInterface;

/**
 * Interface EntitySeoTranslationInterface
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface EntitySeoTranslationInterface extends
    H1MethodsInterface,
    OgImageMethodsInterface,
    OgTitleMethodsInterface,
    MetaTitleMethodsInterface,
    BreadcrumbMethodsInterface,
    RobotsTypeMethodsInterface,
    MetaKeywordMethodsInterface,
    OgDescriptionMethodsInterface,
    LinkCanonicalMethodsInterface,
    MetaDescriptionMethodsInterface,
    AbstractEntityTranslationInterface
{
}
