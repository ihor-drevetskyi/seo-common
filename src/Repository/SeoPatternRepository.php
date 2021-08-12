<?php

namespace SeoCommonBundle\Repository;

use Doctrine\ORM\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use SeoCommonBundle\Entity\EntitySeoPattern;
use ComponentBundle\Helper\RequestHelperInterface;
use Doctrine\Persistence\Mapping\MappingException;
use ComponentBundle\Repository\AbstractRepository;
use ComponentBundle\Dto\Traits\Id\ResourceInterface;

/**
 * Class SeoPatternRepository
 * @package SeoCommonBundle\Repository
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class SeoPatternRepository extends AbstractRepository implements SeoPatternRepositoryInterface
{
    /**
     * SeoPatternRepository constructor.
     * @param ManagerRegistry $registry
     * @param RequestHelperInterface $request_helper
     */
    public function __construct(ManagerRegistry $registry, RequestHelperInterface $request_helper)
    {
        parent::__construct($registry, EntitySeoPattern::class, $request_helper);
        $this->addDefaultRelationToSelect('translations');
    }

    /**
     * @param string $system_name
     * @return object|null
     */
    public function findSeoPatternBySystemName(string $system_name): ?object
    {
        $construct_filter = $this->getConstructFilter();
        $construct_filter->setSystemName($system_name);
        $construct_filter->setUseGetQueryBuilder(false);

        return $this->getOneOrNullResult($this->constructQueryBuilder($construct_filter), true, 86400);
    }


    /**
     * @param ResourceInterface $resource
     * @param bool $and_flush Whether to flush the changes (default true)
     * @throws ORMException
     * @throws OptimisticLockException
     * @throws MappingException
     */
    public function persist(ResourceInterface $resource, bool $and_flush = true): void
    {
        $this->_em->clear();
        $this->_em->persist($resource);
        if ($and_flush) {
            $this->_em->flush();
        }
    }
}
