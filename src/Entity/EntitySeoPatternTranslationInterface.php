<?php

namespace SeoCommonBundle\Entity;

use ComponentBundle\Entity\Translation\AbstractEntityTranslationInterface;

/**
 * Interface EntitySeoPatternTranslationInterface
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface EntitySeoPatternTranslationInterface extends AbstractEntityTranslationInterface
{
    /**
     * @return string|null
     */
    public function getTitlePattern(): ?string;

    /**
     * @return string|null
     */
    public function getDescriptionPattern(): ?string;

    /**
     * @param string|null $titlePattern
     */
    public function setTitlePattern(?string $titlePattern): void;

    /**
     * @param string|null $descriptionPattern
     */
    public function setDescriptionPattern(?string $descriptionPattern): void;
}
