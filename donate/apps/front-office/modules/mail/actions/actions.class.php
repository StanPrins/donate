<?php

/**
 * mail actions.
 *
 * @package    donate
 * @subpackage mail
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class mailActions extends sfActions
{
  public function executeTest()
  {
  	
           $mail = new sfMail();
           $mail->setMailer('smtp');
           $mail->setCharset('GB2312');
           $mail->setEncoding('base64');
           
           
           $mail->setFrom('123');
           
                      
           $mail->setHostname('ssl:smtp.gmail.com');
           $mail->setPort(587);
           
           $mail->setUsername('ericsson.symfony@gmail.com');
           $mail->setPassword('donatesvn');
           
           
           $mail->addAddress('xirongguo@163.com');

           $mail->setSubject('�ٴα����ҳ���ļ�');
           $mail->setBody('
hahaha
�ٴα����ҳ���ļ�
������
'
);	 
           $mail->setPriority(1);
           $mail -> send();
 
  }
}
