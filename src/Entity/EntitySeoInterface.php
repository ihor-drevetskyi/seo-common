<?php

namespace SeoCommonBundle\Entity;

use SeoCommonBundle\Dto\SeoDtoInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityTranslatableInterface;

/**
 * Interface EntitySeoInterface
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface EntitySeoInterface extends AbstractEntityTranslatableInterface
{
    /**
     * @return SeoDtoInterface
     */
    public function getSeoForPage(): SeoDtoInterface;
}
