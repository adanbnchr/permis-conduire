<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class CategorieRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Categorie c ORDER BY c.id ASC'
            )
            ->getResult();
    }
    
}
