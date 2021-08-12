<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgDescription;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait OgDescriptionMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgDescriptionMethodsTrait
{
    /**
     * @return string|null
     */
    public function getOgDescription(): ?string
    {
        return $this->ogDescription;
    }

    /**
     * @param string|null $og_description
     */
    public function setOgDescription(?string $og_description = null): void
    {
        $this->ogDescription = AbstractPrepareTextHelper::prepareText($og_description);
    }

    /**
     * @return string
     */
    public function getOgDescriptionWithHtml(): string
    {
        $og_description = $this->getOgDescription();
        if ($og_description) {
            $og_description_result = sprintf("<meta property=\"og:description\" content=\"%s\"/>\n", $og_description) .
                sprintf("<meta name=\"twitter:description\" content=\"%s\"/>\n", $og_description);
        } else {
            $og_description_result = sprintf("<meta property=\"og:description\" content=\"%s\"/>\n", '') .
                sprintf("<meta name=\"twitter:description\" content=\"%s\"/>\n", '');
        }

        return $og_description_result;
    }
}
