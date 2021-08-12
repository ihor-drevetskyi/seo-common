<?php

namespace SeoCommonBundle\Dto\Traits\H1;

use ComponentBundle\Helper\AbstractPrepareTextHelper;

/**
 * Trait H1MethodsTrait
 * @package SeoCommonBundle\Dto\Traits\H1
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait H1MethodsTrait
{
    /**
     * @return string|null
     */
    public function getH1(): ?string
    {
        return $this->h1;
    }

    /**
     * @param string|null $h1
     */
    public function setH1(?string $h1 = null): void
    {
        $this->h1 = AbstractPrepareTextHelper::prepareText($h1);
    }
}
