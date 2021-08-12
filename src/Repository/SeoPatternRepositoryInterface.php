<?php

namespace SeoCommonBundle\Repository;

use ComponentBundle\Repository\AbstractRepositoryInterface;

/**
 * Interface SeoPatternRepositoryInterface
 * @package SeoCommonBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
interface SeoPatternRepositoryInterface extends AbstractRepositoryInterface
{
    /**
     * @param string $system_name
     * @return object|null
     */
    public function findSeoPatternBySystemName(string $system_name): ?object;
}
