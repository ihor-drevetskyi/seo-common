<?php

namespace SeoCommonBundle\Dto\Traits\MetaDescription;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait MetaDescriptionMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\MetaDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaDescriptionMethodsTrait
{
    /**
     * @return string
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $meta_description
     */
    public function setMetaDescription(?string $meta_description = null): void
    {
        $this->metaDescription = AbstractPrepareTextHelper::prepareText($meta_description);
    }

    /**
     * @return string
     */
    public function getMetaDescriptionWithHtml(): string
    {
        $meta_description = $this->getMetaDescription();
        if ($meta_description) {
            $meta_description_result = sprintf("<meta name=\"description\" content=\"%s\"/>\n", $meta_description);
        } else {
            $meta_description_result = sprintf("<meta name=\"description\" content=\"%s\"/>\n", '');
        }

        return $meta_description_result;
    }
}
