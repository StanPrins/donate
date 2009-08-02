<?php
// auto-generated by sfPropelCrud
// date: 2009/07/22 01:20:45
?>
<?php

/**
 * user actions.
 *
 * @package    donate
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class userActions extends sfActions
{
	public function executeApprove()
	{
		$c = new Criteria();
        $c->add(UserPeer::APPROVE,0);
		$pager = new sfPropelPager('User', sfConfig::get('app_pager_homepage_max'));
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;

	}	

	public function executeListall()
	{
		$c = new Criteria();
		$pager = new sfPropelPager('User', sfConfig::get('app_pager_homepage_max'));
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;

	}

	public function executeShow()
	{
	   $this->user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));
	   $this->forward404Unless($this->user);		
	   $usertype = $this->getContext()->getUser()->getAttribute('usertype','');
	   $user_id = $this->getContext()->getUser()->getAttribute('user_id','');
	   if (!(($usertype == 'administrator' ) || ($usertype == 'manager') || ($user_id == $this->getRequestParameter('user_id'))))
	   {
	      return $this->forward404();
	   }
	}

	public function executeCreate()
	{
		$this->user = new User();

		$this->setTemplate('edit');
	}

	public function executeEdit()
	{
       if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {	
	     return $this->forward404();
	   }	
	   $this->user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));
	   $this->forward404Unless($this->user);
	  
	}

	public function executeUpdate()
	{
	   if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {
	     return $this->forward404();	   	
	   }
	   
		if (!$this->getRequestParameter('user_id'))
		{
			$user = new User();
		}
		else
		{
			$user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));
			$this->forward404Unless($user);
		}

		$user->setUserId($this->getRequestParameter('user_id'));
		$user->setUserName($this->getRequestParameter('username'));
		$user->setNickName($this->getRequestParameter('nickname'));
	    if ($this->getRequestParameter('password'))
        {
           $user->setPassword($this->getRequestParameter('password'));
        }
		$user->setName($this->getRequestParameter('name'));
		if(is_file($this->getRequest()->getFilePath('photo')))
	    {
	    	$filename = md5(uniqid(mt_rand()));
	    	$file = $this->getRequest()->getFilePath('photo');
	    	$extension = $this->getRequest()->getFileExtension('photo');
	    	$newfilename = $filename.$extension;
	    	$img = new sfImage($file);
	    	$response = $this->getResponse();
	    	$response->setContentType($img->getMIMEType());
	    	$width = sfConfig::get('sf_image_width');
	    	$height = sfConfig::get('sf_image_height');
	    	$width = ($img->getWidth()>$width)?$width:($img->getWidth());
	    	$height = ($img->getHeight()>$height)?$height:($img->getHeight());
	    	$img->resize($width,$height);
	    	$img->saveAs(sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'users'.DIRECTORY_SEPARATOR.$newfilename);
	    	$user->setPhoto($newfilename);    	
	    }
		$user->setBbsId($this->getRequestParameter('bbs_id'));
		$user->setOfsId($this->getRequestParameter('ofs_id'));
		$user->setDuty($this->getRequestParameter('duty'));
		$user->setMobile($this->getRequestParameter('mobile'));
		$user->setTel($this->getRequestParameter('tel'));
		$user->setUsertype($this->getRequestParameter('usertype'));
		$user->setApprove($this->getRequestParameter('approve', 0));
		$user->setIdentity($this->getRequestParameter('identity'));
		$user->setEmail($this->getRequestParameter('email'));
		$user->setQq($this->getRequestParameter('qq'));
		$user->setMsn($this->getRequestParameter('msn'));
		$user->setAddress($this->getRequestParameter('address'));

		$user->save();

		return $this->redirect('user/show?user_id='.$user->getUserId().'&after_edit=1');
		
	
	}

	public function executeDelete()
	{
		$user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));

		$this->forward404Unless($user);

		$user->delete();

		return $this->redirect($this->getRequest()->getReferer());
	}
	public function handleErrorUpdate()
	{
		return $this->forward('user','edit');
	}
}
