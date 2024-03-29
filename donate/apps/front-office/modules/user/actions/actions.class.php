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

	public function executeLicense()
	{
	}
	
	public function executeCreate()
	{
       if ($this->getRequest()->getMethod() != sfRequest::POST)
       {
          return $this->forward404();	   	
       }  			
		$this->user = new User();
		$this->setTemplate('edit');
		$this->new = 1;
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
			$password = $this->getRequestParameter('password');
			if(empty($password))
			{
				$this->getRequest()->setError('password', '密码不能为空');
				return $this->forward('user','create');
			}
	        else
	        {
	        	$user = new User();
	        	$user->setPassword($this->getRequestParameter('password'));
	        }
		}
		else
		{
			$user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));
			$this->forward404Unless($user);
			if ($this->getRequestParameter('password'))
	        {
	           $user->setPassword($this->getRequestParameter('password'));
	        }
	        $approve = $user->getApprove();
		}

		$user->setUserId($this->getRequestParameter('user_id'));
		$user->setUserName($this->getRequestParameter('username'));
		$user->setNickName($this->getRequestParameter('nickname'));
		$user->setName($this->getRequestParameter('name'));
		$user->setIdCard($this->getRequestParameter('id_card'));
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

		if ($this->getRequestParameter('new'))
		{
			$this->getRequest()->setAttribute('password', $this->getRequestParameter('password'));
	    	$this->getRequest()->setAttribute('username', $this->getRequestParameter('username'));
	    	try
	    	{
	    		$raw_email = $this->sendEmail('mail', 'register');
	    	}
	    	catch(Exception $e)
	    	{
	    		$this->getRequest()->setError('email', '邮件不能送达指定邮箱，请检查您输入的邮箱！');
	    		return $this->forward('user','create');
	    	}
		}


		$user->save();
		
        if ($this->getRequestParameter('new'))
        {
        	return $this->forward('user','submitted');
        }
        if(isset($approve))
        {
        	$approve_u = $user->getApprove();
        	if(empty($approve) && !empty($approve_u))
        	{
        		$this->getRequest()->setAttribute('password', $this->getRequestParameter('password'));
		    	$this->getRequest()->setAttribute('username', $this->getRequestParameter('username'));
		    	try
		    	{
		    		$raw_email = $this->sendEmail('mail', 'join');
		    	}
		    	catch(Exception $e)
		    	{
		    		$this->getRequest()->setParameter('u_name',$user->getUsername());
		    		$this->getRequest()->setParameter('u_email',$user->getEmail());
	    			return $this->forward('user','emailError');
		    	}
        	}        	  	
        }
		return $this->redirect('@user_show?user_id='.$user->getUserId().'&after_edit=1');
		
	
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
		$user_id = $this->getRequestParameter('user_id');
		if(empty($user_id))
		{
			return $this->forward('user','create');
		}
		else
		{
			$this->getRequest()->setParameter('user_id',$user_id);
	    	return $this->forward('user','edit');
		}
	}
	
	public function executeSubmitted()
	{
	}	
	
	public function executePasswordRequest()
	{
		if ($this->getRequest()->getMethod() != sfRequest::POST)
		 {
		    // display the form
		    return sfView::SUCCESS;
		 }
	 	 $email = $this->getRequestParameter('email');
		  // handle the form submission
		  $c = new Criteria();
		  $c->add(UserPeer::EMAIL, $email);
		  $user = UserPeer::doSelectOne($c);
		  // email exists?
		  if ($user)
		  {
		    // set new random password
		    $password = substr(md5(rand(100000, 999999)), 0, 6);
		    $user->setPassword($password);
		    $this->getRequest()->setAttribute('password', $password);
		    $this->getRequest()->setAttribute('username', $user->getUsername());		    
		    try
		    {
		    	$raw_email = $this->sendEmail('mail', 'sendPassword');
		    }
		    catch(Exception $e)
		    {
		    	$this->getRequest()->setError('email', '无法送达指定邮箱，请联系管理员^_^');
		    	return sfView::SUCCESS;
		    }
//		    $this->logMessage($raw_email, 'debug');
		    // save new password
		    $user->save();
		    return 'MailSent';
		  }
		  else
		  {
		    $this->getRequest()->setError('email', '用户账号不存在，请重试或者注册！');
		    return sfView::SUCCESS;
		  }
	}
	public function handleErrorPasswordRequest()
	{
	  return sfView::SUCCESS;
	}	
	public function executeEmailError()
	{
		$this->u_name = $this->getRequestParameter('u_name');
		$this->u_email = $this->getRequestParameter('u_email');
		return sfView::SUCCESS;
	}
}
