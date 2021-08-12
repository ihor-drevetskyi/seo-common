<?php

namespace SeoCommonBundle\Dto\Traits\H1;

/**
 * Trait H1Trait
 * @package SeoCommonBundle\Dto\Traits\H1
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait H1Trait
{
    use H1MethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $h1 = null;
}
