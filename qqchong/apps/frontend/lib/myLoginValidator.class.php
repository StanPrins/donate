<?php

class myLoginValidator extends sfValidator
{
	public function initialize($context, $parameters = null)
	{
		// initialize parent
		parent::initialize($context);

		// set defaults
		$this->setParameter('login_error', 'Invalid input');

		$this->getParameterHolder()->add($parameters);

		return true;
	}

	public function execute(&$value, &$error)
	{
		$password_param = $this->getParameter('password');
		$password = $this->getContext()->getRequest()->getParameter($password_param);

		$login = $value;

		$c = new Criteria();
		$c->add(UserPeer::USERNAME, $login);
		$user = UserPeer::doSelectOne($c);
		

		// username exists?
		if ($user)
		{
			// password is OK?
			if (sha1($user->getSalt().$password) == $user->getSha1Password())
            {
            	if($user->getDroit()>0)
            	{
	              $remember_param = $this->getParameter('remember');
	              $remember = $this->getContext()->getRequest()->getParameter($remember_param);
				  $this->getContext()->getUser()->signIn($user,$remember);              
			      // proceed to home page
			      return true;
            	}
            	else
            	{
            	  $error = $this->getParameter('no_droit');
            	}
			}
			else
		    {
		      $error = $this->getParameter('password_error');
		    }			
		}
		else
	    {
	      $error = $this->getParameter('username_error');
	    }		
		return false;
	}

}
?>