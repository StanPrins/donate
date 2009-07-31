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
			$approve = $user->getApprove();
			if($approve)
			{
			    // password is OK?
				if (sha1($user->getSalt().$password) == $user->getSha1Password())
                {
                    $usertype = $user->getUsertype();
	
                    if($usertype == 'administrator')
                    {
                    	$this->getContext()->getUser()->addCredential('administrator');
                    	$this->getContext()->getUser()->setAttribute('name', $user->getName());
                    	$this->getContext()->getUser()->setAttribute('user_id', $user->getUserId());
                    	$this->getContext()->getUser()->setAttribute('usertype', 'administrator');
                    	
                    	$this->getContext()->getUser()->setAuthenticated(true);
                    	return true;
                    }
				}
			}
		}

		$error = $this->getParameter('login_error');
		return false;
	}

}
?>