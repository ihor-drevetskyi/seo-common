<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgImage;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Interface OgImageMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\Og\OgImage
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface OgImageMethodsInterface
{
    /**
     * @return File|null
     */
    public function getOgImage(): ?File;

    /**
     * @param File|null $og_image
     */
    public function setOgImage(?File $og_image = null): void;

    /**
     * @return string|null
     */
    public function getOgImageName(): ?string;

    /**
     * @param string|null $og_image_name
     */
    public function setOgImageName(?string $og_image_name = null): void;
}
