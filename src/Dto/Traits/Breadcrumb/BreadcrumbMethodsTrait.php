<?php

namespace SeoCommonBundle\Dto\Traits\Breadcrumb;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait BreadcrumbMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\Breadcrumb
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait BreadcrumbMethodsTrait
{
    /**
     * @return string
     */
    public function getBreadcrumb(): ?string
    {
        return $this->breadcrumb;
    }

    /**
     * @param string|null $breadcrumb
     */
    public function setBreadcrumb(?string $breadcrumb = null): void
    {
        $this->breadcrumb = AbstractPrepareTextHelper::prepareText($breadcrumb);
    }
}
