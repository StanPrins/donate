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
	public function executeIndex()
	{
		return $this->forward('user', 'list');
	}

	public function executeList()
	{
		//$this->users = UserPeer::doSelect(new Criteria());
		$c = new Criteria();
		//$pager = new sfPropelPager('User', 2);
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
	}

	public function executeCreate()
	{
		$this->user = new User();

		$this->setTemplate('edit');
	}

	public function executeEdit()
	{
		$this->user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));
		$this->forward404Unless($this->user);
	}

	public function executeUpdate()
	{
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
		$user->setPassword($this->getRequestParameter('password'));
		$user->setName($this->getRequestParameter('name'));
		$user->setPhoto($this->getRequestParameter('photo'));
		$user->setBbsId($this->getRequestParameter('bbs_id'));
		$user->setOfsId($this->getRequestParameter('ofs_id'));
		$user->setDuty($this->getRequestParameter('duty'));
		$user->setMobile($this->getRequestParameter('mobile'));
		$user->setTel($this->getRequestParameter('tel'));
		$user->setUsertype($this->getRequestParameter('usertype'));
		$user->setIdentity($this->getRequestParameter('identity'));
		$user->setEmail($this->getRequestParameter('email'));
		$user->setQq($this->getRequestParameter('qq'));
		$user->setMsn($this->getRequestParameter('msn'));
		$user->setAddress($this->getRequestParameter('address'));

		$user->save();

		return $this->redirect('user/show?user_id='.$user->getUserId());
	}

	public function executeDelete()
	{
		$user = UserPeer::retrieveByPk($this->getRequestParameter('user_id'));

		$this->forward404Unless($user);

		$user->delete();

		return $this->redirect('user/list');
	}
}
