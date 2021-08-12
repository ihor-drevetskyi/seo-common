<?php

namespace SeoCommonBundle\Service;

use SeoCommonBundle\Dto\SeoDtoInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityElementInterface;

/**
 * Interface SeoServiceInterface
 * @package SeoCommonBundle\Service
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoServiceInterface
{
    /**
     * @param AbstractEntityElementInterface $element
     * @param bool $with_html
     * @param string|null $seo_pattern_system_name
     * @return SeoDtoInterface
     */
    public function getSeoForItem(
        AbstractEntityElementInterface $element,
        bool                           $with_html = false,
        ?string                        $seo_pattern_system_name = null
    ): SeoDtoInterface;
}
