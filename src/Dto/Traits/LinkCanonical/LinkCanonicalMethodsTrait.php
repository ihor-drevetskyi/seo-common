<?php

namespace SeoCommonBundle\Dto\Traits\LinkCanonical;

/**
 * Trait LinkCanonicalMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\LinkCanonical
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait LinkCanonicalMethodsTrait
{
    /**
     * @return string|null
     */
    public function getLinkCanonical(): ?string
    {
        return $this->linkCanonical;
    }

    /**
     * @param string|null $link_canonical
     */
    public function setLinkCanonical(?string $link_canonical = null): void
    {
        $this->linkCanonical = $link_canonical;
    }

    /**
     * @return string|null
     */
    public function getLinkCanonicalWithHtml(): ?string
    {
        $link_canonical_value = $this->getLinkCanonical();

        if ($link_canonical_value) {
            $link_canonical_value_result = sprintf("<link rel=\"canonical\" href=\"%s\"/>\n", $link_canonical_value);
        } else {
            $link_canonical_value_result = null;
        }

        return $link_canonical_value_result;
    }
}
