<?php

namespace SeoCommonBundle\Model\Traits\Og;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\Og\OgDescription\OgDescriptionMethodsTrait;

/**
 * Trait OgDescriptionTrait
 * @package SeoCommonBundle\Model\Traits\Og
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgDescriptionTrait
{
    use OgDescriptionMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="og_description", type="text", nullable=true)
     */
    protected ?string $ogDescription = null;
}
