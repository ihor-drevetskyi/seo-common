<?php

namespace SeoCommonBundle\Dto\Traits\RobotsType;

/**
 * Trait RobotsTypeMethodsTrait
 * @package SeoCommonBundle\Dto\Traits\RobotsType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait RobotsTypeMethodsTrait
{
    /**
     * @return int
     */
    public function getRobotsType(): int
    {
        return $this->robotsType;
    }

    /**
     * @param int $robots_type
     */
    public function setRobotsType(int $robots_type): void
    {
        $this->robotsType = $robots_type;
    }

    /**
     * @return string
     */
    public function getRobotsWithHtml(): string
    {
        $robots_type_value = $this->getRobotsType();

        if ($robots_type_value == RobotsTypeMethodsInterface::ROBOTS_INDEX_FOLLOW) {
            $robots_result = '<meta name="robots" content="index,follow,max-image-preview:large" />';
        } elseif ($robots_type_value == RobotsTypeMethodsInterface::ROBOTS_NO_INDEX_FOLLOW) {
            $robots_result = '<meta name="robots" content="noindex,follow,max-image-preview:large" />';
        } elseif ($robots_type_value == RobotsTypeMethodsInterface::ROBOTS_INDEX_NO_FOLLOW) {
            $robots_result = '<meta name="robots" content="index,nofollow,max-image-preview:large" />';
        } elseif ($robots_type_value == RobotsTypeMethodsInterface::ROBOTS_NO_INDEX_NO_FOLLOW) {
            $robots_result = '<meta name="robots" content="noindex,nofollow,max-image-preview:large" />';
        } else {
            $robots_result = '';
        }

        return $robots_result;
    }
}
