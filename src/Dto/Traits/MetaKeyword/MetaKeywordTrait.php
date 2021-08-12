<?php

namespace SeoCommonBundle\Dto\Traits\MetaKeyword;

/**
 * Trait MetaKeywordTrait
 * @package SeoCommonBundle\Dto\Traits\MetaKeyword
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaKeywordTrait
{
    use MetaKeywordMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $metaKeyword = null;
}
