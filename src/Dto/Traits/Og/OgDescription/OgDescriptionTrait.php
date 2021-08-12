<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgDescription;

/**
 * Trait OgDescriptionTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgDescription
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgDescriptionTrait
{
    use OgDescriptionMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $ogDescription = null;
}
