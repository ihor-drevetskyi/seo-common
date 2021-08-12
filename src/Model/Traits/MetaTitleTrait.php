<?php

namespace SeoCommonBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\MetaTitle\MetaTitleMethodsTrait;

/**
 * Trait MetaTitleTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaTitleTrait
{
    use MetaTitleMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="meta_title", type="text", nullable=true)
     */
    protected ?string $metaTitle = null;
}
