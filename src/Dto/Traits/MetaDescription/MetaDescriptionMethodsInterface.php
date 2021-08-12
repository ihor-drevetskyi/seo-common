<?php

namespace SeoCommonBundle\Dto\Traits\MetaDescription;

/**
 * Interface MetaDescriptionMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\MetaDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface MetaDescriptionMethodsInterface
{
    /**
     * @return string|null
     */
    public function getMetaDescription(): ?string;

    /**
     * @param string|null $meta_description
     */
    public function setMetaDescription(?string $meta_description = null): void;

    /**
     * @return string
     */
    public function getMetaDescriptionWithHtml(): string;
}
