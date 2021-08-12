<?php

namespace SeoCommonBundle\Dto\Traits\LinkCanonical;

/**
 * Interface LinkCanonicalMethodsInterface
 * @package SeoCommonBundle\Dto\Traits\LinkCanonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface LinkCanonicalMethodsInterface
{
    /**
     * @return string|null
     */
    public function getLinkCanonical(): ?string;

    /**
     * @return string|null
     */
    public function getLinkCanonicalWithHtml(): ?string;

    /**
     * @param string|null $link_canonical
     */
    public function setLinkCanonical(?string $link_canonical = null): void;
}
