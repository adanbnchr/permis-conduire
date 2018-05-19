<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class TestRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t FROM AppBundle:Test t ORDER BY t.id ASC'
            )
            ->getResult();
    }
    
}
