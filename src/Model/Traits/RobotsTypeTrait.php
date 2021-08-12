<?php

namespace SeoCommonBundle\Model\Traits;

use SeoCommonBundle\Dto\Traits\RobotsType\RobotsTypeMethodsTrait;
use SeoCommonBundle\Dto\Traits\RobotsType\RobotsTypeMethodsInterface;

/**
 * Trait RobotsTypeTrait
 * @package SeoCommonBundle\Model\Traits
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait RobotsTypeTrait
{
    use RobotsTypeMethodsTrait;

    /**
     * @var integer
     */
    protected int $robotsType = RobotsTypeMethodsInterface::ROBOTS_INDEX_FOLLOW;
}
