<?php

namespace SeoCommonBundle\Dto;

use ComponentBundle\Dto\Traits\Img\ImgTrait;
use SeoCommonBundle\Dto\Traits\Og\OgType\OgTypeTrait;
use Symfony\Component\Validator\Constraints as Assert;
use ComponentBundle\Dto\Traits\Translatable\Title\TitleTrait;
use ComponentBundle\Dto\Traits\Translatable\Description\DescriptionTrait;

/**
 * Class SeoHelperDto
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class SeoHelperDto implements SeoHelperDtoInterface
{
    use ImgTrait;
    use TitleTrait;
    use DescriptionTrait;
    use OgTypeTrait;

    /**
     * @var string|null
     * @Assert\Length(max="255")
     */
    protected ?string $titlePatternSuffix = null;

    /**
     * @var string|null
     */
    protected ?string $descriptionPatternSuffix = null;

    /**
     * @return string|null
     */
    public function getTitlePatternSuffix(): ?string
    {
        return $this->titlePatternSuffix;
    }

    /**
     * @return string|null
     */
    public function getDescriptionPatternSuffix(): ?string
    {
        return $this->descriptionPatternSuffix;
    }

    /**
     * @param string|null $titlePatternSuffix
     */
    public function setTitlePatternSuffix(?string $titlePatternSuffix): void
    {
        $this->titlePatternSuffix = $titlePatternSuffix;
    }

    /**
     * @param string|null $descriptionPatternSuffix
     */
    public function setDescriptionPatternSuffix(?string $descriptionPatternSuffix): void
    {
        $this->descriptionPatternSuffix = $descriptionPatternSuffix;
    }
}
