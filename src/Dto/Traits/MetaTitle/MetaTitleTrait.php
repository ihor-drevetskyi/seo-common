<?php

namespace SeoCommonBundle\Dto\Traits\MetaTitle;

/**
 * Trait MetaTitleTrait
 * @package SeoCommonBundle\Dto\Traits\MetaTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaTitleTrait
{
    use MetaTitleMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $metaTitle = null;
}
