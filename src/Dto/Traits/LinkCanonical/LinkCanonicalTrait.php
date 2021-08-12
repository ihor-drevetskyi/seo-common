<?php

namespace SeoCommonBundle\Dto\Traits\LinkCanonical;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait LinkCanonicalTrait
 * @package SeoCommonBundle\Dto\Traits\LinkCanonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkCanonicalTrait
{
    use LinkCanonicalMethodsTrait;

    /**
     * @var string|null
     * @Assert\Url()
     */
    protected ?string $linkCanonical = null;
}
