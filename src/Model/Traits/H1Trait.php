<?php

namespace SeoCommonBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\H1\H1MethodsTrait;

/**
 * Trait H1Trait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait H1Trait
{
    use H1MethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="h1", type="text", nullable=true)
     */
    protected ?string $h1 = null;
}
