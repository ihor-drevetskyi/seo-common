<?php

namespace SeoCommonBundle\Dto;

use SeoCommonBundle\Dto\Traits\Og\OgType\OgTypeMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgImage\OgImageMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgTitle\OgTitleMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgDescription\OgDescriptionMethodsInterface;

/**
 * Interface SeoOgDtoInterface
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoOgDtoInterface extends
    OgTypeMethodsInterface,
    OgTitleMethodsInterface,
    OgImageMethodsInterface,
    OgDescriptionMethodsInterface
{
}
