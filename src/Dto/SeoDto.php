<?php

namespace SeoCommonBundle\Dto;

use SeoCommonBundle\Dto\Traits\H1\H1Trait;
use Symfony\Component\Validator\Constraints as Assert;
use SeoCommonBundle\Dto\Traits\MetaTitle\MetaTitleTrait;
use SeoCommonBundle\Dto\Traits\RobotsType\RobotsTypeTrait;
use SeoCommonBundle\Dto\Traits\Breadcrumb\BreadcrumbTrait;
use SeoCommonBundle\Dto\Traits\MetaKeyword\MetaKeywordTrait;
use SeoCommonBundle\Dto\Traits\LinkCanonical\LinkCanonicalTrait;
use SeoCommonBundle\Dto\Traits\MetaDescription\MetaDescriptionTrait;

/**
 * Class SeoDto
 * @package SeoCommonBundle\Dto
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class SeoDto implements SeoDtoInterface
{
    use H1Trait;
    use MetaTitleTrait;
    use RobotsTypeTrait;
    use BreadcrumbTrait;
    use MetaKeywordTrait;
    use LinkCanonicalTrait;
    use MetaDescriptionTrait;

    /**
     * @var SeoOgDtoInterface
     * @Assert\NotBlank()
     */
    protected SeoOgDtoInterface $og;

    /**
     * SeoDto constructor.
     * @param string|null $h1
     * @param int $robots_type
     * @param string|null $meta_title
     * @param string|null $breadcrumb
     * @param string|null $meta_keyword
     * @param SeoOgDtoInterface $og
     * @param string|null $link_canonical
     * @param string|null $meta_description
     */
    public function __construct(
        ?string           $h1,
        int               $robots_type,
        ?string           $meta_title,
        ?string           $breadcrumb,
        ?string           $meta_keyword,
        SeoOgDtoInterface $og,
        ?string           $link_canonical,
        ?string           $meta_description
    )
    {
        $this->setOg($og);
        $this->setH1($h1);
        $this->setMetaTitle($meta_title);
        $this->setBreadcrumb($breadcrumb);
        $this->setRobotsType($robots_type);
        $this->setMetaKeyword($meta_keyword);
        $this->setLinkCanonical($link_canonical);
        $this->setMetaDescription($meta_description);
    }

    /**
     * @return SeoOgDtoInterface
     */
    public function getOg(): SeoOgDtoInterface
    {
        return $this->og;
    }

    /**
     * @param SeoOgDtoInterface $og
     */
    public function setOg(SeoOgDtoInterface $og): void
    {
        $this->og = $og;
    }
}
