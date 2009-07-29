<?php
// Login page
?>

<div id="content_login">
<br/>
<h2>用户登录</h2>
<br/>

<?php echo form_tag('login/login') ?>
 
  <fieldset>
  
  <?php use_helper('Validation') ?>

  <div class="form_row">
  	<?php echo form_error('username') ?>
    <label for="username"><b>用户名：</b></label>
    <?php echo input_tag('username', $sf_params->get('username')) ?>
  </div>
 
  <div class="form_row">
  	<?php echo form_error('password') ?>
    <label for="password"><b>密码：&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <?php echo input_password_tag('password') ?>（区分大小写）    
  </div>

  <?php echo input_hidden_tag('referer', $sf_request->getAttribute('referer')) ?>
  <?php echo submit_tag('登录') ?>
 
  </fieldset>
   
</form>

  <?php echo link_to('新建账户', '/user/create')?>
<br/>


<?php use_helper('Javascript') ?>


<!-- 

<?php echo link_to_function('Forget Your Password?', visual_effect('BlindDown','secret_div')) ?>
<div id="secret_div" style="display:none">
<?php echo form_remote_tag(
            array(
              'url' => 'mail/sendPassword',
             'update' => 'content_sendPassword',
             'complete' => visual_effect('highlight', 'content_sendPassword')
            ))
 ?>
Input your ECoreID here and system will send your password to your mailbox.<br/>
<strong>ECoreID:</strong><?php echo input_tag('forgetEcoreid', $sf_params->get('forgetEcoreid')) ?>
<?php echo submit_tag('Retrieve My Password') ?> 
</form>

<?php echo link_to_function('Close It!', visual_effect('BlindUp','secret_div')) ?>
</div>


 
<br/>Notice:<br/>1.<strong>Do not</strong> re-register your account. 
<br/>2.<strong>Enable Javascript</strong> in your browser.
<br/>3.If you find any problem, contact the administrator ASAP.
<br/><strong>Admin Contact: Pang Bo 13522143964</strong>

<br/>
<br/>

<div id="content_sendPassword">
</div>
 -->
</div>
   


