<?php

namespace SeoCommonBundle\Model\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Dto\Traits\Breadcrumb\BreadcrumbMethodsTrait;

/**
 * Trait BreadcrumbTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait BreadcrumbTrait
{
    use BreadcrumbMethodsTrait;

    /**
     * @var string|null
     * @ORM\Column(name="breadcrumb", type="text", nullable=true)
     */
    protected ?string $breadcrumb = null;
}
