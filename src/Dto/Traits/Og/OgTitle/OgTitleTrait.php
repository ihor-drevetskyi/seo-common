<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgTitle;

/**
 * Trait OgTitleTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgTitle
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgTitleTrait
{
    use OgTitleMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $ogTitle = null;
}
