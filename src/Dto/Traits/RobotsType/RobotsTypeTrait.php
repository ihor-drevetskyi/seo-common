<?php

namespace SeoCommonBundle\Dto\Traits\RobotsType;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait RobotsTypeTrait
 * @package SeoCommonBundle\Dto\Traits\RobotsType
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
trait RobotsTypeTrait
{
    use RobotsTypeMethodsTrait;

    /**
     * @var integer
     * @Assert\NotBlank()
     */
    protected int $robotsType = RobotsTypeMethodsInterface::ROBOTS_INDEX_FOLLOW;
}
