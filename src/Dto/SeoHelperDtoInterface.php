<?php

namespace SeoCommonBundle\Dto;

use ComponentBundle\Dto\Traits\Img\ImgMethodsInterface;
use SeoCommonBundle\Dto\Traits\Og\OgType\OgTypeMethodsInterface;
use ComponentBundle\Dto\Traits\Translatable\Title\TitleMethodsInterface;
use ComponentBundle\Dto\Traits\Translatable\Description\DescriptionMethodsInterface;

/**
 * Interface SeoHelperDtoInterface
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoHelperDtoInterface extends
    ImgMethodsInterface,
    TitleMethodsInterface,
    OgTypeMethodsInterface,
    DescriptionMethodsInterface
{
    public const TYPE_SITE = 0;
    public const TYPE_ARTICLE = 1;
    public const TYPE_PRODUCT = 2;

    /**
     * @return string|null
     */
    public function getTitlePatternSuffix(): ?string;

    /**
     * @return string|null
     */
    public function getDescriptionPatternSuffix(): ?string;

    /**
     * @param string|null $titlePatternSuffix
     */
    public function setTitlePatternSuffix(?string $titlePatternSuffix): void;

    /**
     * @param string|null $descriptionPatternSuffix
     */
    public function setDescriptionPatternSuffix(?string $descriptionPatternSuffix): void;
}
