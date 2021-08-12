<?php

namespace SeoCommonBundle\Model\Traits\Og;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use SeoCommonBundle\Dto\Traits\Og\OgImage\OgImageMethodsTrait;

/**
 * Trait OgImageTrait
 * @package SeoCommonBundle\Model\Traits\Og
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait OgImageTrait
{
    use OgImageMethodsTrait;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @var File|null
     * @Assert\File(
     *     maxSize="20M",
     *     mimeTypes={"image/png", "image/jpg", "image/jpeg", "image/pjpeg"}
     * )
     * @Vich\UploadableField(mapping="seo_og_image", fileNameProperty="ogImageName")
     */
    protected ?File $ogImage = null;

    /**
     * @var string|null
     * @ORM\Column(name="og_image", type="text", nullable=true)
     */
    protected ?string $ogImageName = null;

    /**
     * @var string|null
     * @ORM\Column(name="temp_og_image", type="text", nullable=true)
     */
    protected ?string $tempOgImage = null;
}
