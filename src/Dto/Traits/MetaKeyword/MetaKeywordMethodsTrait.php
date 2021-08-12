<?php

namespace SeoCommonBundle\Dto\Traits\MetaKeyword;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait MetaKeywordMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\MetaKeyword
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaKeywordMethodsTrait
{
    /**
     * @return string
     */
    public function getMetaKeyword(): ?string
    {
        return $this->metaKeyword;
    }

    /**
     * @param string|null $meta_keyword
     */
    public function setMetaKeyword(?string $meta_keyword = null): void
    {
        $this->metaKeyword = AbstractPrepareTextHelper::prepareText($meta_keyword);
    }
}
