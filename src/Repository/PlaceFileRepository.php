<?php

namespace App\Repository;

use App\Entity\PlaceFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PlaceFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlaceFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlaceFile[]    findAll()
 * @method PlaceFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaceFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlaceFile::class);
    }

    // /**
    //  * @return PlaceFile[] Returns an array of PlaceFile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlaceFile
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
