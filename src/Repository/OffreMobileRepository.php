<?php

namespace App\Repository;

use App\Entity\Offre;
use App\Entity\OffreMobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OffreMobileRepository|null find($id, $lockMode = null, $lockVersion = null)
 * @method OffreMobileRepository|null findOneBy(array $criteria, array $orderBy = null)
 * @method OffreMobileRepository[]    findAll()
 * @method OffreMobileRepository[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreMobileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OffreMobile::class);
    }

    // /**
    //  * @return Offre[] Returns an array of Offre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Offre
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findAllMax3()
    {
        return $this->createQueryBuilder('om')
            ->setMaxResults(3)
            ->getQuery()
            ->getArrayResult()
            ;
    }

    public function findAllFilters($prix = null, $operateur = null, $data = null, $type = null)
    {
        $req = $this->createQueryBuilder('obi');
        if($prix != null){
            $req ->andWhere('obi.prix LIKE :prix')
            ->setParameter('prix', $prix);
        }
        if($operateur != null){
            $req ->andWhere('obi.operateur LIKE :operateur')
            ->setParameter('operateur', $operateur);
        }if($data != null){
            $req ->andWhere('obi.data LIKE :data')
            ->setParameter('data', $data);
        }
        if($type != null){
            $req ->andWhere('obi.type LIKE :type')
            ->setParameter('type', $type);
        }
        return $req
            ->getQuery()
            ->getArrayResult()
            ;
    }
}
