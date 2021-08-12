<?php

namespace SeoCommonBundle\Dto\Traits\MetaTitle;

/**
 * Interface MetaTitleMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\MetaTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface MetaTitleMethodsInterface
{
    /**
     * @return string|null
     */
    public function getMetaTitle(): ?string;

    /**
     * @param string|null $meta_title
     */
    public function setMetaTitle(?string $meta_title = null): void;

    /**
     * @return string
     */
    public function getTitleWithHtml(): string;
}
