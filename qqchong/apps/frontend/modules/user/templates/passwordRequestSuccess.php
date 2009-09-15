<?php use_helper('Validation')?>
<div>
<br />
<p>Input your registered email: </p>
<br />
<?php echo form_tag('user/passwordRequest') ?>
  <label for="email">Email:</label>
  <?php echo input_tag('email', $sf_params->get('email'), 'style=width:150px') ?><br />
  <?php echo form_error('email')?>
  <br />
  <?php echo submit_tag('Send') ?>
<?php echo "</form>"?>
</div>