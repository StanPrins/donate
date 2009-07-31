<?php
// Login page
?>

<div id="content_login">
<br/>
<h2>管理员登录</h2>
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

