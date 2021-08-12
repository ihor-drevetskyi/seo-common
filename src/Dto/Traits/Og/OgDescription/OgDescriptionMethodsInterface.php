<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgDescription;

/**
 * Interface OgDescriptionMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\Og\OgDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface OgDescriptionMethodsInterface
{
    /**
     * @return string|null
     */
    public function getOgDescription(): ?string;

    /**
     * @return string
     */
    public function getOgDescriptionWithHtml(): string;

    /**
     * @param string|null $og_description
     */
    public function setOgDescription(?string $og_description = null): void;
}
