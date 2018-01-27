<?php

namespace AppBundle\Repository;

/**
 * NextEpisodeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NextEpisodeRepository extends \Doctrine\ORM\EntityRepository
{

    public function getReleasedEpisodes()
    {
        return $this->createQueryBuilder('e')
            ->where('e.date < :date')
            ->setParameter('date', date('Y-m-d', (time()-(24*3600))))
            ->getQuery()
            ->getResult();
    }
}