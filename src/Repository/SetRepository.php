<?php

namespace App\Repository;

use App\Entity\Sets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use FOS\RestBundle\Request\ParamFetcherInterface;

/**
 * @extends ServiceEntityRepository<Sets>
 *
 * @method Sets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sets[]    findAll()
 * @method Sets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sets::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Sets $entity, bool $flush = true): void
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
    public function remove(Sets $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    public function findOneWithStatus(int $id)
    {
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.id = :p1');
        $qb->setParameter('p1', $id);
        return $qb->getQuery()->getOneOrNullResult();
    }


    public function findWithParameters(ParamFetcherInterface $fetcher){
        $qb=$this->createQueryBuilder('s');
        //return $fetcher->get('status');
        if($fetcher->get('status')){
            $qb->andWhere('s.status = :p1');
            $qb->setParameter('p1', $fetcher->get('status'));
        }
        if($fetcher->get('search')){
            $qb->andWhere('s.name LIKE :p2 OR s.set_num LIKE :p3');
            $qb->setParameter('p2','%'. $fetcher->get('search').'%');
            $qb->setParameter('p3', $fetcher->get('search').'%');
        }
        if($fetcher->get('theme')){
            $qb->andWhere('s.theme_id=:p4');
            $qb->setParameter('p4', $fetcher->get('theme'));
        }
        return $qb->getQuery()->getResult();
}





}

// /**
//  * @return Sets[] Returns an array of Sets objects
//  */
/*
public function findByExampleField($value)
{
    return $this->createQueryBuilder('s')
        ->andWhere('s.exampleField = :val')
        ->setParameter('val', $value)
        ->orderBy('s.id', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult()
    ;
}
*/

/*
public function findOneBySomeField($value): ?Sets
{
    return $this->createQueryBuilder('s')
        ->andWhere('s.exampleField = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getOneOrNullResult()
    ;
}
*/
