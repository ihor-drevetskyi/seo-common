<?php

namespace SeoCommonBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use SeoCommonBundle\Entity\EntitySeoInterface;

/**
 * This trait plugs into your model to implement SeoTraitInterface
 * Class SeoTrait
 * @package SeoCommonBundle\Entity\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SeoTrait
{
    /**
     * @var EntitySeoInterface|null
     * @ORM\OneToOne(targetEntity="SeoCommonBundle\Entity\EntitySeo", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="seo_id", referencedColumnName="id", nullable=true)
     */
    protected ?EntitySeoInterface $seo = null;

    /**
     * @return EntitySeoInterface
     */
    public function getSeo(): ?EntitySeoInterface
    {
        return $this->seo;
    }

    /**
     * @param EntitySeoInterface $seo
     */
    public function setSeo(EntitySeoInterface $seo): void
    {
        $this->seo = $seo;
    }
}
