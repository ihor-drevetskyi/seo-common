<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgImage;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Trait OgImageMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgImage
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgImageMethodsTrait
{
    /**
     * @return File|null
     */
    public function getOgImage(): ?File
    {
        return $this->ogImage;
    }

    /**
     * @param File|null $og_image
     */
    public function setOgImage(?File $og_image = null): void
    {
        $this->ogImage = $og_image;
    }

    /**
     * @return string|null
     */
    public function getOgImageName(): ?string
    {
        return $this->ogImageName;
    }

    /**
     * @param string|null $og_image_name
     */
    public function setOgImageName(?string $og_image_name = null): void
    {
        $this->ogImageName = $og_image_name;
    }

    /**
     * @return string|null
     */
    public function getTempOgImage(): ?string
    {
        return $this->tempOgImage;
    }

    /**
     * @param string|null $temp_og_image
     */
    public function setTempOgImage(?string $temp_og_image = null): void
    {
        $this->tempOgImage = $temp_og_image;
    }
}
