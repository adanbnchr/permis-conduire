<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class ChoixRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT ch FROM AppBundle:Choix ch ORDER BY ch.id ASC'
            )
            ->getResult();
    }
    
}