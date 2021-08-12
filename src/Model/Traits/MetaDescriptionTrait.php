<?php

namespace SeoCommonBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\MetaDescription\MetaDescriptionMethodsTrait;

/**
 * Trait MetaDescriptionTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaDescriptionTrait
{
    use MetaDescriptionMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    protected ?string $metaDescription = null;
}
