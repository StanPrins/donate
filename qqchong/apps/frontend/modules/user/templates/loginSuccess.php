<?php
// Login page
?>
<div id="LayoutA" class="Layout">
<div id="Top">
<div id="MailAddressLogin" class="loginForm">
<?php echo form_tag('@login') ?>
<?php use_helper('Validation') ?> 
  <fieldset>  
  <table>
  <tr>
    <td>
    <label for="username"><b>Mail address</b></label>
    </td>
    <td>
    <?php echo input_tag('username', $sf_params->get('username')) ?>
    </td>
  </tr>
  <tr><td colspan="2"><?php echo form_error('username') ?></td></tr>
  <tr>
    <td>
    <label for="password"><b>Password</b></label>
    </td>
    <td>
    <?php echo input_password_tag('password') ?>  
    </td>
  </tr>
  <tr><td colspan="2"><?php echo form_error('password') ?></td></tr>
  <tr>
    <td>
    <label for="rememberMe"><b>Remember:</b></label>
    </td>
    <td>
    <?php echo checkbox_tag('remember','true',false) ?>  
    </td>
  </tr>
  <tr>
  <td colspan="2">
  <?php echo input_hidden_tag('referer', $sf_request->getAttribute('referer')) ?>
  <?php echo submit_tag('Login') ?>
  <?php echo button_to('Register','user/create') ?>
  </td>
  </tr>
  </table>
  </fieldset>
<?php echo "</form>"?>
<?php echo link_to('Forget Password?','user/passwordRequest')?>
</div>
</div><!-- Top -->
</div><!-- Layout -->
