<?php

namespace SeoCommonBundle\Dto\Traits\MetaDescription;

/**
 * Trait MetaDescriptionTrait
 * @package SeoCommonBundle\Dto\Traits\MetaDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaDescriptionTrait
{
    use MetaDescriptionMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $metaDescription = null;
}
