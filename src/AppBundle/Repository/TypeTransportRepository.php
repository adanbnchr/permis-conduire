<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class TypeTransportRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT tt FROM AppBundle:TypeTransport tt ORDER BY tt.id ASC'
            )
            ->getResult();
    }
    
}