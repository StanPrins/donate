<?php
// auto-generated by sfPropelCrud
// date: 2009/07/22 03:42:29
?>
<?php

/**
 * remit actions.
 *
 * @package    donate
 * @subpackage remit
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class remitActions extends sfActions
{
	public function executeListdonate()
	{
       $c = new Criteria();
       $c -> add(RemitPeer::DONATION_ID, $this->getRequestParameter('donation_id'));

       $pager = new sfPropelPager('Remit', sfConfig::get('app_pager_homepage_max'));
       $pager->setCriteria($c);
       $pager->setPage($this->getRequestParameter('page', 1));
       $pager->init();
       $this->pager = $pager;
       
       $donations = $pager->getResults();
       
       if (sizeof($donations)!=0)
       {
          $donation_user_id = $donations[0]->getDonation()->getUserId();
          $usertype = $this->getContext()->getUser()->getAttribute('usertype','');
          $user_id = $this->getContext()->getUser()->getAttribute('user_id','');
          if (!(($usertype == 'administrator' ) || ($usertype == 'manager') || ($usertype == 'surveyor') || ($user_id == $donation_user_id)))
          {
             return $this->forward404();
          }
       }
	}
	
	public function executeListpend()
	{
		$c = new Criteria();
		$c -> add(RemitPeer::IS_BY_OFS, 1);
		
		$cton1 = $c->getNewCriterion(RemitPeer::IS_RECEIVED, 0);
        $cton2 = $c->getNewCriterion(RemitPeer::IS_SENDOUT, 0); 
        $cton1->addOr($cton2);
        $c->add($cton1);		

		$pager = new sfPropelPager('Remit', sfConfig::get('app_pager_homepage_max'));
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}

	public function executeListpenduser()
	{
		$c = new Criteria();
		$c -> add(RemitPeer::IS_BY_OFS, 1);
		$c -> add(DonationPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
		
		$cton1 = $c->getNewCriterion(RemitPeer::IS_RECEIVED, 0);
        $cton2 = $c->getNewCriterion(RemitPeer::IS_SENDOUT, 0); 
        $cton1->addOr($cton2);
        $c->add($cton1);		

		$pager = new sfPropelPager('Remit', sfConfig::get('app_pager_homepage_max'));
		$pager->setCriteria($c);
		$pager->setPeerMethod('doSelectJoinDonation');
        $pager->setPeerCountMethod('doCountJoinDonation');
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}	

	public function executeShow()
	{
	   $this->remit = RemitPeer::retrieveByPk($this->getRequestParameter('remit_id'));
	   $this->forward404Unless($this->remit);
	   $usertype = $this->getContext()->getUser()->getAttribute('usertype','');
	   $user_id = $this->getContext()->getUser()->getAttribute('user_id','');
	   if (!(($usertype == 'administrator' ) || ($usertype == 'manager') || ($user_id == $this->remit->getDonation()->getUserId())))
	   {
	      return $this->forward404();
	   }		
	}

	public function executeCreate()
	{
		$this->remit = new Remit();

		if($this->getRequestParameter('donation_id'))
		{
			$this->remit->setDonationId($this->getRequestParameter('donation_id'));
		}

		$this->setTemplate('edit');
	}

	public function executeEdit()
	{
	   if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {
	     return $this->forward404();	   	
	   }				
		$this->remit = RemitPeer::retrieveByPk($this->getRequestParameter('remit_id'));
		$this->forward404Unless($this->remit);
	}

	public function executeUpdate()
	{
	   if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {
	     return $this->forward404();	   	
	   }		
		if (!$this->getRequestParameter('remit_id'))
		{
			$remit = new Remit();
		}
		else
		{
			$remit = RemitPeer::retrieveByPk($this->getRequestParameter('remit_id'));
			$this->forward404Unless($remit);
		}

		$remit->setRemitId($this->getRequestParameter('remit_id'));
		$remit->setDonationId($this->getRequestParameter('donation_id') ? $this->getRequestParameter('donation_id') : null);
		$remit->setAmount($this->getRequestParameter('amount'));
		$remit->setIsByOfs($this->getRequestParameter('is_by_ofs', 0));
		$remit->setIsReceived($this->getRequestParameter('is_received', 0));
		if ($this->getRequestParameter('receive_date'))
		{
			list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('receive_date'), $this->getUser()->getCulture());
			$remit->setReceiveDate("$y-$m-$d");
		}
		$remit->setReceiveUserId($this->getRequestParameter('receive_user_id') ? $this->getRequestParameter('receive_user_id') : null);
		$remit->setReceiveAmount($this->getRequestParameter('receive_amount'));
		
		if($this->getRequestParameter('is_received'))
		{
		   $remit->setReceiveSubmitter($this->getContext()->getUser()->getAttribute('user_id',''));
		}
		else
		{
		   $remit->setReceiveSubmitter(null);			
		}
		
		$remit->setIsSendout($this->getRequestParameter('is_sendout', 0));
		if ($this->getRequestParameter('sendout_date'))
		{
			list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('sendout_date'), $this->getUser()->getCulture());
			$remit->setSendoutDate("$y-$m-$d");
		}
		$remit->setSendoutUserId($this->getRequestParameter('sendout_user_id') ? $this->getRequestParameter('sendout_user_id') : null);
		$remit->setSendoutAmount($this->getRequestParameter('sendout_amount'));
		
		if($this->getRequestParameter('is_sendout') && $this->getRequestParameter('is_by_ofs'))
		{
		   $remit->setSendoutSubmitter($this->getContext()->getUser()->getAttribute('user_id',''));
		}
		else
		{
		   $remit->setSendoutSubmitter(null);
		}

		$remit->save();

		return $this->redirect('remit/show?remit_id='.$remit->getRemitId().'&after_edit=1');
	}
	public function executeDelete()
	{
		$remit = RemitPeer::retrieveByPk($this->getRequestParameter('remit_id'));

		$this->forward404Unless($remit);

		$remit->delete();

		//return $this->redirect('remit/list');
		return $this->redirect($this->getRequest()->getReferer());
	}
}
