<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:33:07
?>
<div id="sf_admin_container">

<h1>到款信息编辑</h1>

<?php use_helper('Object') ?>

<?php echo form_tag('remit/update') ?>

<?php echo object_input_hidden_tag($remit, 'getRemitId') ?>
<?php echo object_input_hidden_tag($remit, 'getDonationId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <label for="remit_donation_id" class="required">捐助号：</label> 
  <div class="content">
  <?php echo $remit->getDonationID()?>
  </div>
</div>  
  
<?php 
      $flag_by_ofs = 0;
      if ($sf_params->has('is_by_ofs'))
      {
         if ($sf_params->get('is_by_ofs'))
         {
            $flag_by_ofs = 1;
         }
      }  
      else
      {
         if ($remit->getIsByOfs())
         {
            $flag_by_ofs = 1;
         }
      }
?>

<?php if ($flag_by_ofs):?>
 
<?php echo input_hidden_tag('is_by_ofs', 1) ?>

<div class="form-row">
  <label for="remit_amount" class="required">金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_date" class="required">捐款方式：</label> 
  <div class="content">
   通过OFS捐款  
  </div>
</div>  

<?php if (($sf_user->getAttribute('usertype', '')=='surveyor') || ($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator')):?>
<div class="form-row">
  <label for="remit_is_ceived" class="required">OFS收到：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($remit, 'getIsReceived', array (
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="remit_receive_date" class="required">到款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getReceiveDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_receive_user_id" class="required">收款人：</label> 
  <div class="content">   
  <?php echo object_select_tag($remit, 'getReceiveUserId', array (
    'related_class' => 'User',
    'include_blank' => true,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_amount" class="required">到款金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getReceiveAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div> 

<div class="form-row">
  <label for="remit_is_sendout" class="required">OFS发出：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($remit, 'getIsSendout', array (
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <label for="remit_sendout_date" class="required">发款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getSendoutDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_user_id" class="required">发款人：</label> 
  <div class="content">   
  <?php echo object_select_tag($remit, 'getSendoutUserId', array (
    'related_class' => 'User',
    'include_blank' => true,
  )) ?>
  </div>
</div> 

<div class="form-row">
  <label for="remit_amount" class="required">发款金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getSendoutAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php else:?>
<?php endif;?>


<?php else:?>

<?php echo input_hidden_tag('is_by_ofs', 0) ?>

<div class="form-row">
  <label for="remit_amount" class="required">金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_date" class="required">捐款方式：</label> 
  <div class="content">
  自己捐款  
  </div>
</div> 

<div class="form-row">
  <label for="remit_is_sendout" class="required">已发出：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($remit, 'getIsSendout', array (
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <label for="remit_sendout_date" class="required">发款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getSendoutDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   

<?php endif;?>
</fieldset>

<?php echo submit_tag('提交') ?>

<a href="javascript:history.go(-1)">返回</a>
</form>
</div>
</div>