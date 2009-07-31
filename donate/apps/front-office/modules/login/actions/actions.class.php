<?php

/**
 * login actions.
 *
 * @package    BookSystem
 * @subpackage login
 * @author     Pang Bo
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class loginActions extends sfActions
{
	//Login
	public function executeLogin()
	{
		if ($this->getRequest()->getMethod() != sfRequest::POST)
		{
			// display the form
			$this->getRequest()->getParameterHolder()->set('referer', $this->getRequest()->getReferer());

			return sfView::SUCCESS;
		}
		else
		{
			// handle the form submission
			// redirect to last page
			return $this->redirect('donation/list');
		}
	}

	//User log out
	public function executeLogout()
	{
		$this->getUser()->setAuthenticated(false);
		$this->getUser()->clearCredentials();

		$this->getUser()->getAttributeHolder()->removeNamespace('');

		$this->redirect('login/login');
	}
		
	//Error actioin of login
	public function handleErrorLogin()
	{
		return sfView::SUCCESS;
	}
}
