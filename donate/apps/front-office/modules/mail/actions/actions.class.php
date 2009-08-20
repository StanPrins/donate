<?php

/**
 * mail actions.
 *
 * @package    askeet
 * @subpackage mail
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 29 2005-12-12 11:33:22Z fabien $
 */
class mailActions extends sfActions
{
  public function executeSendPassword()
  {
    $mail = new sfMail();
    $mail->setMailer('smtp');
    $mail->setCharset('GB2312');
    $mail->setEncoding('base64');
      
    $mail->setHostname('smtp.sohu.com');
    $mail->setUsername('our_freesky');
    $mail->setPassword('hahaha888');
      
	$mail->addAddress('xirongguo@163.com');
	$mail->setFrom('我们自由的天空<our_freesky@sohu.com');
	$mail->setSubject('密码找回');
	$mail->setBody('');
	 
	$mail->setPriority(1);
	$mail->send();
	
//    $mail->addAddress($this->getRequestParameter('email'));
//    $mail->addEmbeddedImage(SF_WEB_DIR.'/images/askeet_logo.gif', 'CID1', 'Askeet Logo', 'base64', 'image/gif');

    $this->mail = $mail;

    $this->nickname = $this->getRequest()->getAttribute('nickname');
    $this->password = $this->getRequest()->getAttribute('password');
  }
}

?>