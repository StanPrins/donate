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
    $mail->setCharset('UTF-8');
    $mail->setEncoding('base64');
    $mail->setHostname('smtp.sohu.com');
    $mail->setUsername('our_freesky');
    $mail->setPassword('hahaha888');
    $mail->addAddress($this->getRequestParameter('email'));
	$mail->setFrom('我们自由的天空<our_freesky@sohu.com>');
	$mail->setSubject('密码找回');
	$mail->setPriority(1);
    $mail->addEmbeddedImage(sfconfig::get('sf_web_dir').'/images/banner.jpg', 'CID1', '我们的自由天空', 'base64', 'image/jpg');
    $this->mail = $mail;
    $this->username = $this->getRequest()->getAttribute('username');
    $this->password = $this->getRequest()->getAttribute('password');
  }
}

?>