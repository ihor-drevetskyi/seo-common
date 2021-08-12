<?php

namespace SeoCommonBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\MetaKeyword\MetaKeywordMethodsTrait;

/**
 * Trait MetaKeywordTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait MetaKeywordTrait
{
    use MetaKeywordMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="meta_keyword", type="text", nullable=true)
     */
    protected ?string $metaKeyword = null;
}
