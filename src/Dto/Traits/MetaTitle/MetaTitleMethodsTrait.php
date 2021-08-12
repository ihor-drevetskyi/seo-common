<?php

namespace SeoCommonBundle\Dto\Traits\MetaTitle;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait MetaTitleMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\MetaTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaTitleMethodsTrait
{
    /**
     * @return string
     */
    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    /**
     * @param string|null $meta_title
     */
    public function setMetaTitle(?string $meta_title = null): void
    {
        $this->metaTitle = AbstractPrepareTextHelper::prepareText($meta_title);
    }

    /**
     * @return string
     */
    public function getTitleWithHtml(): string
    {
        $title = $this->getMetaTitle();

        return $title ? sprintf('<title>%s</title>', AbstractPrepareTextHelper::prepareText($title)) : '';
    }
}
