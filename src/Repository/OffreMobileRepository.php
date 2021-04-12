<?php

namespace App\Repository;

use App\Entity\Offre;
use App\Entity\OffreMobile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
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

    public function findAllFilters(array $search = [], array $filter = [], array $orderBy = [], int $limit = 9, int $offset = 0)
    {
        $qb = $this->createQueryBuilder('obi')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
        ;

        $qb = $this->searchQuery($qb, $search);
        $qb = $this->filterQuery($qb, $filter);
        $qb = $this->orderQuery($qb, $orderBy);

        return $qb
            ->getQuery()
            ->getArrayResult()
            ;
    }

    public function countAllFilters(array $search = [], array $filter = [], array $orderBy = [], int $limit = 9, int $offset = 0)
    {
        $qb = $this->createQueryBuilder('obi')
            ->select("count(obi)")
        ;

        $qb = $this->searchQuery($qb, $search);
        $qb = $this->filterQuery($qb, $filter);
        $qb = $this->orderQuery($qb, $orderBy);

        return $qb
            ->getQuery()
            ->getSingleScalarResult()
            ;
    }

    public function filterQuery(QueryBuilder $qb, array $filter)
    {
        foreach ($filter as $property => $value) {
            if($property == "min" || $property == "max" || $property == "type"){
                continue;
            }
            $qb
                ->andWhere("obi.$property = :filter_$property")
                ->setParameter("filter_$property", $value);
        }
        if (array_key_exists("min",$filter)){
            $qb
                ->andWhere("obi.prix <= :filter_max")
                ->andWhere("obi.prix >= :filter_min")
                ->setParameter("filter_max", $filter["max"])
                ->setParameter("filter_min", $filter["min"]);
        }
        if (array_key_exists("type",$filter)){
            foreach ($filter["type"] as $key=>$type){
                $searchQuery[] = "obi.type = :type$key";
                $qb->setParameter("type$key", $type);
            }
        }
        if (!empty($searchQuery)) {
            $qb->andWhere('(' . implode(' OR ', $searchQuery) . ')');
        }
        return $qb;
    }

    public function orderQuery(QueryBuilder $qb, array $orderBy)
    {
        foreach ($orderBy as $column => $dir) {
            switch ($column) {
                default:
                    $qb->addOrderBy("obi.$column", $dir);
                    break;
            }
        }

        return $qb;
    }

    public function searchQuery(QueryBuilder $qb, array $search)
    {
        foreach ($search as $property => $value) {
            $qb
                ->andWhere("obi.$property LIKE :filter_$property")
                ->setParameter("filter_$property", "%$value%");
        }

        return $qb;
    }
}
