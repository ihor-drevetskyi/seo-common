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
     * @param bool $use_cache
     * @return object|null
     */
    public function findSeoPatternBySystemName(string $system_name, bool $use_cache = true): ?object;
}
