<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNbClick($id){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT COUNT(*) AS clicked FROM donation c WHERE c.user_id = :id';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }
}