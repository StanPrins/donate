<?php

class myUser extends sfBasicSecurityUser
{
  protected function generate_random_key ($len = 20)
  {
	$string = '';
	$pool   = 'abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRSTUVWZYZ0123456789';
	for ($i = 1; $i <= $len; $i++) {
		$string .= substr($pool, rand(0,61), 1);
	}

  	return md5($string);
  }
	
  public function signIn($user,$remember = false)
  {
    $this->setAuthenticated(true);
    $this->setAttribute('name', $user->getName());
    $this->setAttribute('user_id', $user->getId()); 
    $this->setAttribute('department_id',$user->getDepartmentId());
    
    if ($remember)
    {
    	// determine a random key
    	
	    if (!$user->getRememberKey())
	    {
	      $rememberKey = $this->generate_random_key();	      
	 
	      // save the key to the User table
	      $user->setRememberKey($rememberKey);
	      $user->save();
	    }
	 
	    // save the key to the cookie
	    $value = base64_encode(serialize(array($user->getRememberKey(), $user->getUsername())));
	    sfContext::getInstance()->getResponse()->setCookie('QQchong', $value, time()+60*60*24*30, '/');
    }
        
  }
 
  public function signOut()
  {
    $this->setAuthenticated(false);
    $this->clearCredentials();
    $this->getAttributeHolder()->removeNamespace('');
    sfContext::getInstance()->getResponse()->setCookie('QQchong', '', time() - 3600, '/');
    return true;
  }
	
}
