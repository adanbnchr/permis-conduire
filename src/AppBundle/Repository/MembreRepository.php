<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class MembreRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM AppBundle:Membre m ORDER BY m.id ASC'
            )
            ->getResult();
    }
    
}
