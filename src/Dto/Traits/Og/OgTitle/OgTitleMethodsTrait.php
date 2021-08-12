<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgTitle;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait OgTitleMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgTitleMethodsTrait
{
    /**
     * @return string|null
     */
    public function getOgTitle(): ?string
    {
        return $this->ogTitle;
    }

    /**
     * @param string|null $og_title
     */
    public function setOgTitle(?string $og_title = null): void
    {
        $this->ogTitle = AbstractPrepareTextHelper::prepareText($og_title);
    }

    /**
     * @return string
     */
    public function getOgTitleWithHtml(): string
    {
        $og_title = $this->getOgTitle();

        return sprintf("<meta property=\"og:title\" content=\"%s\"/>", $og_title) .
            sprintf("<meta property=\"twitter:title\" content=\"%s\"/>", $og_title);
    }
}
