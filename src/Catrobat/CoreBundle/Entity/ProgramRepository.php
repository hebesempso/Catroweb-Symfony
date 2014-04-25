<?php

namespace Catrobat\CoreBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
 * ProgramRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProgramRepository extends EntityRepository
{
  public function findByOrderedByDownloads($limit = null, $offset = null)
  {
    //return $this->findBy(array(),array('downloads' => 'desc'), $limit, $offset);
  	return $this->createQueryBuilder('e')
  	->select('e')
  	->orderBy('e.downloads', 'DESC')
  	->setFirstResult($offset)
  	->setMaxResults($limit)
  	->getQuery()
  	->getResult();
//  	->getResult(Query::HYDRATE_ARRAY);
  	 
  }

  public function findByOrderedByViews($limit = null, $offset = null)
  {
    return $this->findBy(array(),array('views' => 'desc'), $limit, $offset);
  }
  
  public function findByOrderedByDate($limit = null, $offset = null)
  {
    return $this->findBy(array(),array('uploaded_at' => 'desc'), $limit, $offset);
  }
  
}