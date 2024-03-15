<?php

namespace App\Repository;

use App\Entity\NetworksHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NetworksHistory>
 *
 * @method NetworksHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method NetworksHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method NetworksHistory[]    findAll()
 * @method NetworksHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NetworksHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NetworksHistory::class);
    }

    //    /**
    //     * @return NetworksHistory[] Returns an array of NetworksHistory objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('n.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?NetworksHistory
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
