<?php

namespace SeoCommonBundle\Entity;

use ComponentBundle\Dto\Traits\Id\ResourceInterface;
use ComponentBundle\Dto\Traits\SystemName\SystemNameMethodsInterface;
use ComponentBundle\Entity\Translatable\AbstractEntityTranslatableInterface;

/**
 * Interface EntitySeoPatternInterface
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface EntitySeoPatternInterface extends
    ResourceInterface,
    SystemNameMethodsInterface,
    AbstractEntityTranslatableInterface
{
}
