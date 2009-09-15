<?php
	use_helper('Object');
?>
<div class="dparts searchResultList">
<div class="parts">
<div class="partsHeading">
<h3>Assign right to <?php echo $customer->getNickname()?></h3>
</div>
<div class="block">
<div class="ditem">
<div class="item">
<?php echo form_tag('user/admin')?>
<?php echo object_input_hidden_tag($customer, 'getId') ?>
<table>
<tbody>
<tr>
  <th>Right*:</th>  
  <td><input name='droit' id='droit' size='10' value='<?php echo $customer->getDroit()?>' onChange='checkNum()'>(A integer betweent 0 and 100)
</td>
</tr>
</tbody>
</table>
<input type="submit" name="submit" id="submit" value="Assign" disabled="disabled" />
  &nbsp;<?php echo button_to('cancel', 'user/show?id='.$customer->getId()) ?>
<?php echo "</form>"?>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->