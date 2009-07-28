<?php
// auto-generated by sfPropelCrud
// date: 2009/07/22 02:53:45
?>
<?php

/**
 * donation actions.
 *
 * @package    donate
 * @subpackage donation
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class donationActions extends sfActions
{
  public function executeListstu()
  {
  	$c = new Criteria();
    $c -> add(DonationPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  }

  public function executeListall()
  {
  	$c = new Criteria();
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
  }
    
  public function executeListmy()
  {
  	$c = new Criteria();
  	$c -> add(DonationPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
  	$c -> add(DonationPeer::IS_ACTIVE, 1);
  	$c -> add(DonationPeer::APPROVE, 1);
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinStudent');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;    
  }

  public function executeListold()
  {
  	$c = new Criteria();
  	$c -> add(DonationPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
  	$c -> add(DonationPeer::IS_ACTIVE, 0);
  	$c -> add(DonationPeer::APPROVE, 1);
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinStudent');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;    
  }    

  public function executeListpend()
  {
  	$c = new Criteria();
  	$c -> add(DonationPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
  	$c -> add(DonationPeer::IS_ACTIVE, 0);
  	$c -> add(DonationPeer::APPROVE, 0);
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinStudent');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;    
  }    
  
  public function executeApprove()
  {
  	$c = new Criteria();
  	$c -> add(DonationPeer::IS_ACTIVE, 0);
  	$c -> add(DonationPeer::APPROVE, 0);
    $pager = new sfPropelPager('Donation', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinStudent');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;    
  }    
  
  public function executeShow()
  {
    $this->donation = DonationPeer::retrieveByPk($this->getRequestParameter('donation_id'));
    $this->forward404Unless($this->donation);    
  }

  public function executeCreate()
  {
    $this->donation = new Donation();
    
    $this->donation->setStudentId($this->getRequestParameter('student_id'));
    $this->donation->setUserId($this->getUser()->getAttribute('user_id'));
    
    $c = new Criteria();
  	$c -> add(StudentPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
  	$this->student = StudentPeer::doSelectOne($c);

    $d = new Criteria();
  	$d -> add(UserPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
  	$this->user = UserPeer::doSelectOne($d);  	

  }

  public function executeEdit()
  {
    $this->donation = DonationPeer::retrieveByPk($this->getRequestParameter('donation_id'));
    $this->forward404Unless($this->donation);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('donation_id'))
    {
      $donation = new Donation();
    }
    else
    {
      $donation = DonationPeer::retrieveByPk($this->getRequestParameter('donation_id'));
      $this->forward404Unless($donation);
    }

    $donation->setDonationId($this->getRequestParameter('donation_id'));
    $donation->setStudentId($this->getRequestParameter('student_id') ? $this->getRequestParameter('student_id') : null);
    $donation->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
    $donation->setAmount($this->getRequestParameter('amount'));
    if ($this->getRequestParameter('start_date'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('start_date'), $this->getUser()->getCulture());
      $donation->setStartDate("$y-$m-$d");
    }
    if ($this->getRequestParameter('end_date'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('end_date'), $this->getUser()->getCulture());
      $donation->setEndDate("$y-$m-$d");
    }
    $donation->setApprove($this->getRequestParameter('approve', 0));
    $donation->setIsActive($this->getRequestParameter('is_active', 0));
    $donation->save();
    
    if( ($this->getRequestParameter('approve')) && ($this->getRequestParameter('is_active')) )
    {
       $student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
       $student->setIsDonated(1);
       $student->save();       
    }
    
    else
    {
       $student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
       $ifSetDonatedZero = 0;
       if($student -> getIsDonated())         //取消后若没有其他资助就标记学生为未资助
       {
          $c1 = new Criteria();
          $c1 -> add(DonationPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
          $donation1s = DonationPeer::doSelect($c1);
          
          foreach( $donation1s as $donation1)
          {
             if (($donation1->getApprove()) && ($donation1->getIsActive()))
             {
                $ifSetDonatedZero = 1;
             } 
          }
       }
       $student->setIsDonated($ifSetDonatedZero);
       $student->save();  
    }

    return $this->redirect('donation/show?donation_id='.$donation->getDonationId());
  }

  public function executeDelete()
  {
    $donation = DonationPeer::retrieveByPk($this->getRequestParameter('donation_id'));

    $this->forward404Unless($donation);
    
    $c = new Criteria();
    $c -> add(RemitPeer::DONATION_ID, $donation->getDonationId());  
    $remits = RemitPeer::doSelect($c);
    if(sizeof($remits) != 0)
    {
       foreach($remits as $remit)
       {
          $remit->delete();
       }
    }
    
    $donation->delete();
    
    $d = new Criteria();
    $d -> add(DonationPeer::STUDENT_ID, $donation->getStudentId());
    $d -> add(DonationPeer::APPROVE, 1);
    $d -> add(DonationPeer::IS_ACTIVE, 1);
    $has_donation = DonationPeer::doSelect($d);
    
    if(sizeof($has_donation) == 0)
    {
       $student = StudentPeer::retrieveByPk($donation->getStudentId());
       $student->setIsDonated(0);
       $student->save();
    }
    
    //return $this->redirect('student/listall');
    return $this->redirect($this->getRequest()->getReferer());
    //$this->a =$this->getRequest()->getReferer();
  }
}
