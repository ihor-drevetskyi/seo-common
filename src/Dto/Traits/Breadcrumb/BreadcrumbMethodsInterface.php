<?php

namespace SeoCommonBundle\Dto\Traits\Breadcrumb;

/**
 * Interface BreadcrumbMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\Breadcrumb
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface BreadcrumbMethodsInterface
{
    /**
     * @return string|null
     */
    public function getBreadcrumb(): ?string;

    /**
     * @param string|null $breadcrumb
     */
    public function setBreadcrumb(?string $breadcrumb = null): void;
}
