<?php

namespace SeoCommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Model\Traits\H1Trait;
use SeoCommonBundle\Model\Traits\MetaTitleTrait;
use SeoCommonBundle\Model\Traits\Og\OgTitleTrait;
use SeoCommonBundle\Model\Traits\Og\OgImageTrait;
use SeoCommonBundle\Model\Traits\BreadcrumbTrait;
use SeoCommonBundle\Model\Traits\RobotsTypeTrait;
use SeoCommonBundle\Model\Traits\MetaKeywordTrait;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use SeoCommonBundle\Model\Traits\LinkCanonicalTrait;
use SeoCommonBundle\Model\Traits\MetaDescriptionTrait;
use SeoCommonBundle\Model\Traits\Og\OgDescriptionTrait;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ComponentBundle\Entity\Translation\AbstractEntityTranslation;

/**
 * Class EntitySeoTranslation
 * @ORM\Table(name="seo_translation", uniqueConstraints={
 *     @ORM\UniqueConstraint(columns={"translatable_id", "locale"})
 * })
 * @ORM\Entity
 * @Vich\Uploadable
 * @UniqueEntity(fields={"translatable_id", "locale"})
 * @package SeoCommonBundle\Entity
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class EntitySeoTranslation extends AbstractEntityTranslation implements EntitySeoTranslationInterface
{
    use MetaTitleTrait;
    use OgTitleTrait;
    use H1Trait;
    use BreadcrumbTrait;
    use MetaDescriptionTrait;
    use OgDescriptionTrait;
    use MetaKeywordTrait;
    use OgImageTrait;
    use LinkCanonicalTrait;
    use RobotsTypeTrait;
}
