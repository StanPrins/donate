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
      //if ($user->getPassword() == $password)
      if (sha1($user->getSalt().$password) == $user->getSha1Password())
      {
        $this->getContext()->getUser()->setAuthenticated(true);
        
  		$usertype = $user->getUsertype();

        if($usertype == 'volunteer')
        {
           $this->getContext()->getUser()->addCredential('volunteer');
           $this->getContext()->getUser()->setAttribute('name', $user->getName());
           $this->getContext()->getUser()->setAttribute('user_id', $user->getUserId());
           $this->getContext()->getUser()->setAttribute('usertype', 'volunteer');
        }
        else if($usertype == 'surveyor') 
        {
           $this->getContext()->getUser()->addCredential('surveyor');
           $this->getContext()->getUser()->setAttribute('name', $user->getName());
           $this->getContext()->getUser()->setAttribute('user_id', $user->getUserId());
           $this->getContext()->getUser()->setAttribute('usertype', 'surveyor');
        }
        else if($usertype == 'manager')
        {
           $this->getContext()->getUser()->addCredential('manager');
           $this->getContext()->getUser()->setAttribute('name', $user->getName());
           $this->getContext()->getUser()->setAttribute('user_id', $user->getUserId());
           $this->getContext()->getUser()->setAttribute('usertype', 'manager');        
        }
        else if($usertype == 'administrator')
        {
           $this->getContext()->getUser()->addCredential('administrator');
           $this->getContext()->getUser()->setAttribute('name', $user->getName());
           $this->getContext()->getUser()->setAttribute('user_id', $user->getUserId());
           $this->getContext()->getUser()->setAttribute('usertype', 'administrator');        
        }
        else
        {
        
        }
 
        return true;
      }
    }
 
    $error = $this->getParameter('login_error');
    return false;
  }

}
?>