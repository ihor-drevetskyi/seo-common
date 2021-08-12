<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgImage;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait OgImageTrait
 * @package SeoCommonBundle\Dto\Traits\Og\OgImage
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
     */
    protected ?string $ogImageName = null;
}
