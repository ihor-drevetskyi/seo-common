<?php

namespace SeoCommonBundle\Model\Traits\Og;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\Og\OgTitle\OgTitleMethodsTrait;

/**
 * Trait OgTitleTrait
 * @package SeoCommonBundle\Model\Traits\Og
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgTitleTrait
{
    use OgTitleMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="og_title", type="text", nullable=true)
     */
    protected ?string $ogTitle = null;
}
