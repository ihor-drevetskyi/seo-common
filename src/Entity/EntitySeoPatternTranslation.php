<?php

namespace SeoCommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ComponentBundle\Entity\Translation\AbstractEntityTranslation;

/**
 * Class EntitySeoPatternTranslation
 * @ORM\Table(name="seo_pattern_translation", uniqueConstraints={
 *     @ORM\UniqueConstraint(columns={"translatable_id", "locale"})
 * })
 * @ORM\Entity
 * @UniqueEntity(fields={"translatable_id", "locale"})
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class EntitySeoPatternTranslation extends AbstractEntityTranslation implements EntitySeoPatternTranslationInterface
{
    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(max="255")
     * @ORM\Column(name="title_pattern", type="string", length=255, nullable=false)
     */
    protected ?string $titlePattern = null;

    /**
     * @var string|null
     * @ORM\Column(name="description_pattern", type="text", nullable=true)
     */
    protected ?string $descriptionPattern = null;

    /**
     * @return string|null
     */
    public function getTitlePattern(): ?string
    {
        return $this->titlePattern;
    }

    /**
     * @return string|null
     */
    public function getDescriptionPattern(): ?string
    {
        return $this->descriptionPattern;
    }

    /**
     * @param string|null $titlePattern
     */
    public function setTitlePattern(?string $titlePattern): void
    {
        $this->titlePattern = $titlePattern;
    }

    /**
     * @param string|null $descriptionPattern
     */
    public function setDescriptionPattern(?string $descriptionPattern): void
    {
        $this->descriptionPattern = $descriptionPattern;
    }
}
