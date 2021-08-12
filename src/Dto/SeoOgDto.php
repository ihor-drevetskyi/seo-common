<?php

namespace SeoCommonBundle\Dto;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use SeoCommonBundle\Dto\Traits\Og\OgType\OgTypeTrait;
use SeoCommonBundle\Dto\Traits\Og\OgImage\OgImageTrait;
use SeoCommonBundle\Dto\Traits\Og\OgTitle\OgTitleTrait;
use SeoCommonBundle\Dto\Traits\Og\OgDescription\OgDescriptionTrait;

/**
 * Class SeoOgDto
 * @Vich\Uploadable
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class SeoOgDto implements SeoOgDtoInterface
{
    use OgTypeTrait;
    use OgImageTrait;
    use OgTitleTrait;
    use OgDescriptionTrait;

    /**
     * SeoOgDto constructor.
     * @param File|null $og_image
     * @param string|null $og_image_name
     * @param string|null $og_title
     * @param string|null $og_description
     */
    public function __construct(
        ?File   $og_image,
        ?string $og_image_name,
        ?string $og_title,
        ?string $og_description
    )
    {
        $this->setOgImage($og_image);
        $this->setOgImageName($og_image_name);
        $this->setOgTitle($og_title);
        $this->setOgDescription($og_description);
    }
}
