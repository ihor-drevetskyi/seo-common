<?php

namespace SeoCommonBundle\Dto\Traits\MetaKeyword;

/**
 * Interface MetaKeywordMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\MetaKeyword
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface MetaKeywordMethodsInterface
{
    /**
     * @return string|null
     */
    public function getMetaKeyword(): ?string;

    /**
     * @param string|null $meta_keyword
     */
    public function setMetaKeyword(?string $meta_keyword = null): void;
}
