<?php

namespace SeoCommonBundle\Dto\Traits\Breadcrumb;

/**
 * Trait BreadcrumbTrait
 * @package SeoCommonBundle\Dto\Traits\Breadcrumb
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait BreadcrumbTrait
{
    use BreadcrumbMethodsTrait;

    /**
     * @var string|null
     */
    protected ?string $breadcrumb = null;
}
