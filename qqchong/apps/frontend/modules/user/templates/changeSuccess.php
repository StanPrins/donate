<?php
?>
<div class="dparts searchResultList">
<div class="parts">
<div class="partsHeading"><h3>Change password</h3></div>

<div class="block">
<div class="ditem">
<div class="item">
<?php echo form_tag('user/change')?>
<table>
<tbody>
<tr>
  <th>New password*:</th>
  <td><?php echo input_password_tag('password')?></td>
</tr>
<tr>
  <th>Confirm*:</th>
  <td><input type="password" name="password_confirm" id="password_confirm" onChange="checkpassword()" /></td>
</tr>
</tbody>
</table>
<hr />
<input type="submit" name="submit" id="submit" value="Submit" disabled="disabled" />
<?php echo "</form>"?>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->