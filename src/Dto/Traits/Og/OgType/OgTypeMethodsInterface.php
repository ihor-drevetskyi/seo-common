<?php

namespace SeoCommonBundle\Dto\Traits\Og\OgType;

/**
 * Interface OgTypeMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\Og\OgType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface OgTypeMethodsInterface
{
    /**
     * @return int
     */
    public function getOgType(): int;

    /**
     * @param int $og_type
     */
    public function setOgType(int $og_type): void;

    /**
     * @return string
     */
    public function getOgTypeWithHtml(): string;
}
