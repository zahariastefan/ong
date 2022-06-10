<?php

namespace App\Repository;

use App\Entity\UniqueCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UniqueCodes>
 *
 * @method UniqueCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method UniqueCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method UniqueCodes[]    findAll()
 * @method UniqueCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UniqueCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UniqueCodes::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(UniqueCodes $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(UniqueCodes $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return UniqueCodes[] Returns an array of UniqueCodes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UniqueCodes
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
