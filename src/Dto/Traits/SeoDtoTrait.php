<?php

namespace SeoCommonBundle\Dto\Traits;

/**
 * Trait SeoDtoTrait
 * @package SeoCommonBundle\Dto\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait SeoDtoTrait
{
    /**
     * @var null
     */
    protected $seo = null;

    /**
     * @return $this->seo
     */
    public function getSeo()
    {
        return $this->seo;
    }

    /**
     * @param $seo
     */
    public function setSeo($seo): void
    {
        $this->seo = $seo;
    }
}
