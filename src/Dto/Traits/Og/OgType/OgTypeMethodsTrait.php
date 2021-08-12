<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgType;

use SeoCommonBundle\Dto\SeoHelperDtoInterface;

/**
 * Trait OgTypeMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgTypeMethodsTrait
{
    /**
     * @return int
     */
    public function getOgType(): int
    {
        if ($this->ogType) {
            return $this->ogType;
        }

        return SeoHelperDtoInterface::TYPE_SITE;
    }

    /**
     * @param int $og_type
     */
    public function setOgType(int $og_type): void
    {
        $this->ogType = $og_type;
    }

    /**
     * @return string
     */
    public function getOgTypeWithHtml(): string
    {
        $og_type_value = $this->getOgType();

        if ($og_type_value == SeoHelperDtoInterface::TYPE_SITE) {
            $og_type_result = '<meta property="og:type" content="website" />';
        } elseif ($og_type_value == SeoHelperDtoInterface::TYPE_ARTICLE) {
            $og_type_result = '<meta property="og:type" content="article" />';
        } elseif ($og_type_value == SeoHelperDtoInterface::TYPE_PRODUCT) {
            $og_type_result = '<meta property="og:type" content="product" />';
        } else {
            $og_type_result = '';
        }

        return $og_type_result;
    }
}
