<?php use_helper('Validation')?>
<div>
<br />
<p>请输入您注册时的邮箱: </p>
<br />
<?php echo form_tag('@user_require_password') ?>
  <?php echo form_error('email')?>
  <label for="email">邮箱:</label>
  <?php echo input_tag('email', $sf_params->get('email'), 'style=width:150px') ?><br />
  <br />
  <?php echo submit_tag('提交') ?>
</form>
</div>