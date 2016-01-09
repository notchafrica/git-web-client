<?php
namespace VersionContol\GitControlBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IssueRepository extends EntityRepository
{
    

 /**
  * 
  * @param type $project
  * @return integer
  */
  public function countIssuesForProjectWithStatus($project,$status = 'open',$keyword=false,$milestone=null)
  {
      
    $qb = $this->findByProjectAndStatus($project,$status,$keyword,$milestone,true);
    
    $qb->select('count(a)');
    
    return $qb->getQuery()->getSingleScalarResult();
    
  }
  
  public function findByProjectAndStatus($project,$status = 'open',$keyword = false,$milestone=null,$queryOnly= false){
     $em=$this->getEntityManager();
     $qb = $em->createQueryBuilder();
     
     $where = 'a.project = :project';
     $parameters = array('project'=>$project);
     

     $qb->select('a')
       ->from('VersionContolGitControlBundle:Issue','a')
       ->where($where)
       ->setParameters($parameters);
     
     if($status){
          $qb->andWhere(
            $qb->expr()->like('a.status', ':status')
          )->setParameter('status', $status);
     }
      //If keyword is set 
      if($keyword){
        $qb->andWhere(
            $qb->expr()->like('a.title', ':keyword')
        )->setParameter('keyword', '%'.$keyword.'%')
        ->andWhere(
            $qb->expr()->like('a.description', ':keyword')
        )->setParameter('keyword', '%'.$keyword.'%');
      }
      
      if($milestone != null){
          $qb->andWhere(
            $qb->expr()->eq('a.issueMilestone', ':milestone')
          )->setParameter('milestone', $milestone);
     }
     
     $qb->orderBy('a.updatedAt','desc');
    
     if($queryOnly === true){
         return $qb;
     }else{
         return $qb->getQuery()->getResult();
     }
    
  }
  
}
?>