<?php

namespace SeoCommonBundle\Model\Traits;

use SeoCommonBundle\Dto\Traits\LinkCanonical\LinkCanonicalMethodsTrait;

/**
 * Trait LinkCanonicalTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkCanonicalTrait
{
    use LinkCanonicalMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $linkCanonical = null;
}
