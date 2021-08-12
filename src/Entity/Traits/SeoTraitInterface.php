<?php

namespace SeoCommonBundle\Entity\Traits;

use SeoCommonBundle\Entity\EntitySeoInterface;

/**
 * This interface is responsible to mark a content to be aware of SEO metadata.
 * Interface SeoTraitInterface
 * @package SeoCommonBundle\Entity\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoTraitInterface
{
    /**
     * Gets the SEO metadata for this content.
     * @return EntitySeoInterface
     */
    public function getSeo(): ?EntitySeoInterface;

    /**
     * Sets the SEO metadata for this content.
     * @param EntitySeoInterface $seo
     */
    public function setSeo(EntitySeoInterface $seo): void;
}
