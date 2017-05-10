<?php
namespace JTIR\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ClasseRepository extends EntityRepository {

    public function findAllClasses($enseignant) {
        $qb = $this->createQueryBuilder('e');

        $qb->where('e.enseignant <> :enseignant')
            ->setParameter('enseignant', $enseignant);

        return $qb
            ->getQuery()
            ->getResult();
    }
}