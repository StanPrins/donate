<?php use_helper('Validation')?>
<div>
<p>请提供您的用户名或密码: </p>
<?php echo form_tag('@user_require_password') ?>
  <?php echo form_error('username') ?>
  <label for="email">用户名:</label>
  <?php echo input_tag('username', $sf_params->get('username'), 'style=width:150px') ?><br />
  <?php echo form_error('email') ?>
  <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;邮箱:</label>
  <?php echo input_tag('email', $sf_params->get('email'), 'style=width:150px') ?><br />
  <?php echo submit_tag('提交') ?>
</form>
</div>