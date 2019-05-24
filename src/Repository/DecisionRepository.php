<?php

namespace App\Repository;
use App\Entity\Decision;
use App\Entity\Document;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Decision|null find($id, $lockMode = null, $lockVersion = null)
 * @method Decision|null findOneBy(array $criteria, array $orderBy = null)
 * @method Decision[]    findAll()
 * @method Decision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecisionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Decision::class);
    }

    /**
     * Function return all Not Taken Decisions for the $id Contributor
     * @return Decision[] Returns an array of Decision objects
     */
    public function getAllDecisionsNotTaken($id){
        return $this->createQueryBuilder('d')
               ->where("d.contributor = '$id'")
            ->andWhere('d.isTaken = false')
            ->getQuery()
            ->getResult();
    }


    /**
     * Function return all Not Taken Decisions for the $id Contributor
     * @return Decision[] Returns an array of Decision objects
     */
    public function getAllNotTaken(){
        return $this->createQueryBuilder('d')
            ->where("d.isTaken = false")
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Decision[] Returns an array of Decision objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Decision
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
