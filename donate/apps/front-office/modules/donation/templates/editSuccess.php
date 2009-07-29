<?php
// auto-generated by sfPropelCrud
// date: 2009/07/23 05:44:28
?>
<div id="sf_admin_container">

<h1>修改捐助信息</h1>

<?php use_helper('Object') ?>

<?php echo form_tag('donation/update') ?>

<?php echo object_input_hidden_tag($donation, 'getDonationId') ?>
<?php echo object_input_hidden_tag($donation, 'getStudentId') ?>
<?php echo object_input_hidden_tag($donation, 'getUserId') ?>


<div id="sf_admin_content">
<fieldset id="sf_fieldset_none" class="">


<div class="form-row">
  <label for="donation_user" class="required">捐助人：</label> 
  <div class="content">
  <?php echo $donation->getStudent()->getName() ?>
  </div>
</div>  

<div class="form-row">
  <label for="donation_student" class="required">被捐助人：</label> 
  <div class="content">
  <?php echo $donation->getUser()->getName() ?>
  </div>
</div>  

<div class="form-row">
  <label for="donation_amount" class="required">金额：</label> 
  <div class="content">
  <?php echo object_input_tag($donation, 'getAmount', array (
  'size' => 20,
  )) ?>
  </div>
</div>  


<div class="form-row">
  <label for="donation_start_date" class="required">开始日期：</label> 
  <div class="content">
  <?php if (($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator'))
           echo object_input_date_tag($donation, 'getStartDate', array ('rich' => true));
        else 
           echo $donation->getStartDate(); 
   ?>
        
  </div>
</div>     


<div class="form-row">
  <label for="donation_end_date" class="required">结束日期：</label> 
  <div class="content">
  <?php echo object_input_date_tag($donation, 'getEndDate', array (
     'rich' => true,
  )) ?>
  </div>
</div> 

<?php if (($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator')): ?>   
<div class="form-row">
  <label for="donation_block" class="required">批准：</label> 
  <div class="content">
  <?php echo object_checkbox_tag($donation, 'getApprove', array (
  'checked' => true 
  )) ?>
  </div>
</div> 

<div class="form-row">
  <label for="donation_end_date" class="required">激活：</label> 
  <div class="content">
  <?php echo object_checkbox_tag($donation, 'getIsActive', array (
  'checked' => true
  )) ?>
  </div>
</div> 
<?php else:?>
<?php echo object_input_hidden_tag($donation, 'getIsActive') ?>
<?php echo object_input_hidden_tag($donation, 'getApprove') ?>
<?php endif;?>

</fieldset>
<?php echo submit_tag('提交') ?>
&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>


</form>
</div>
</div>