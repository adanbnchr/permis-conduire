<?php

namespace AppBundle\Repository;

use AppBundle\Repository\base\BaseRepository;


class QuestionRepository extends BaseRepository
{
    /**
     * 
     * @return type
     */
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT q FROM AppBundle:Question q ORDER BY q.id ASC'
            )
            ->getResult();
    }
    
}