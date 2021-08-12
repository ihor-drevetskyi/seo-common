<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgType;

use SeoCommonBundle\Dto\SeoHelperDtoInterface;

/**
 * Trait OgTypeTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgTypeTrait
{
    use OgTypeMethodsTrait;

    /**
     * @var integer
     */
    protected int $ogType = SeoHelperDtoInterface::TYPE_SITE;
}
