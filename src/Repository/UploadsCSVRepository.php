<?php

namespace App\Repository;

use App\Entity\UploadCSV;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UploadCSV|null find($id, $lockMode = null, $lockVersion = null)
 * @method UploadCSV|null findOneBy(array $criteria, array $orderBy = null)
 * @method UploadCSV[]    findAll()
 * @method UploadCSV[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UploadsCSVRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UploadCSV::class);
    }

    // /**
    //  * @return UploadsCSV[] Returns an array of UploadsCSV objects
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
    public function findOneBySomeField($value): ?UploadsCSV
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
