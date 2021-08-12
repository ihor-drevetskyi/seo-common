<?php

namespace SeoCommonBundle\Dto\Traits\H1;

/**
 * Interface H1MethodsInterface
 * @package SeoCommonBundle\Dto\Traits\H1
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface H1MethodsInterface
{
    /**
     * @return string|null
     */
    public function getH1(): ?string;

    /**
     * @param string|null $h1
     */
    public function setH1(?string $h1 = null): void;
}
