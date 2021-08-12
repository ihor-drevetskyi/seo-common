<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgTitle;

/**
 * Interface OgTitleMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\Og\OgTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface OgTitleMethodsInterface
{
    /**
     * @return string|null
     */
    public function getOgTitle(): ?string;

    /**
     * @param string|null $og_title
     */
    public function setOgTitle(?string $og_title = null): void;

    /**
     * @return string
     */
    public function getOgTitleWithHtml(): string;
}
