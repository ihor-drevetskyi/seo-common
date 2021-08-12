<?php

namespace SeoCommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ComponentBundle\Model\Traits\Id\IdAutoTrait;
use ComponentBundle\Model\Traits\SystemNameTrait;
use Symfony\Bridge\Doctrine\Validator\Constraints as UniqueEntity;
use ComponentBundle\Entity\Translatable\AbstractEntityTranslatable;

/**
 * Class EntitySeoPattern
 * @ORM\Table(name="seo_pattern", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="system_name_UNIQUE", columns={"system_name"})
 * }, indexes={
 *     @ORM\Index(name="system_name_idx", columns={"system_name"})
 * })
 * @ORM\Entity
 * @UniqueEntity\UniqueEntity(fields="systemName")
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class EntitySeoPattern extends AbstractEntityTranslatable implements EntitySeoPatternInterface
{
    use IdAutoTrait;
    use SystemNameTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->getSystemName();
    }
}
