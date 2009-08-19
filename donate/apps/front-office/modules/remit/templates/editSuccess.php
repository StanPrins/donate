<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:33:07
?>
<div id="sf_admin_container">

<h1>到款信息编辑</h1>

<?php use_helper('Object') ?>
<?php use_helper('Validation')?>

<?php echo form_tag('@remit_update') ?>

<?php echo object_input_hidden_tag($remit, 'getRemitId') ?>
<?php echo object_input_hidden_tag($remit, 'getDonationId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <label for="remit_donation_id" class="required">捐助号：</label> 
  <div class="content">
  <?php if ($remit->getDonationID())
           echo $remit->getDonationID();
        else
           echo object_select_tag($remit, 'getDonationId', array ('related_class' => 'Donation'));
  ?>
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
<?php echo form_error('amount')?>
<div class="form-row">
  <label for="remit_amount" class="required">金额：</label> 
  <div class="content">  
  <?php
  if (($remit->getAmount() == null) || ($sf_user->getAttribute('usertype', '')=='surveyor') || ($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator'))
     echo object_input_tag($remit, 'getAmount', array ('size' => 7));
  else 
     echo $remit->getAmount();
     
  if (($remit->getAmount() == null) && ($sf_user->getAttribute('usertype', '')=='volunteer'))
     echo "（注意：一经输入，不得修改，请慎重！）" 
  ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_date" class="required">捐款方式：</label> 
  <div class="content">
   通过OFS捐款  
  </div>
</div>  
<script type="text/javascript">
function rExamine(){
	var rCheck = document.getElementById('is_received').checked;
	var sCheck = document.getElementById('is_sendout').checked;
	if(rCheck)
	{
		document.getElementById('rExamine').style.display = "block";
		document.getElementById('sExamine').style.display = sCheck?"block":"none";
	}
	else
	{
		document.getElementById('rExamine').style.display = "none";
		document.getElementById('receive_date').value = "";
		document.getElementById('receive_user_id').value = "";
		document.getElementById('receive_amount').value = "";
		document.getElementById('is_sendout').checked = false;
		document.getElementById('sendout_date').value = "";
		document.getElementById('sendout_user_id').value = "";
		document.getElementById('sendout_amount').value = "";
		document.getElementById('sendout_receiver').value = "";
		document.getElementById('report_id').value = "";
		document.getElementById('discription').value = "";
	}	
}
function sExamine(){
	var sCheck = document.getElementById('is_sendout').checked;
	if(sCheck)
	{
		document.getElementById('sExamine').style.display = "block";
	}
	else
	{
		document.getElementById('sExamine').style.display = "none";
		document.getElementById('sendout_date').value = "";
		document.getElementById('sendout_user_id').value = "";
		document.getElementById('sendout_amount').value = "";
		document.getElementById('sendout_receiver').value = "";
		document.getElementById('report_id').value = "";
		document.getElementById('discription').value = "";
	}
}
</script>
<?php if (($sf_user->getAttribute('usertype', '')=='surveyor') || ($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator')):?>
<div class="form-row">
  <label for="remit_is_ceived" class="required">OFS收到：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($remit, 'getIsReceived', array ('onClick'=>"rExamine()"
  )) ?>
  </div>
</div> 


<div id="rExamine" style="display:none">
<script>
if(document.getElementById('is_received').checked)
	document.getElementById('rExamine').style.display="block";
else
	document.getElementById('rExamine').style.display="none";
</script>

<?php echo form_error('receive_date')?>
<div class="form-row">
  <label for="remit_receive_date" class="required">到款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getReceiveDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_receive_user_id" class="required">OFS收款人：</label> 
  <div class="content">   
	<?php echo select_tag('receive_user_id',objects_for_select($user,'getUserId','getNickname',$remit->getReceiveUserId(),array('include_custom'=>"--请选择--")))?>
  </div>
</div>   
<?php echo form_error('receive_amount')?>
<div class="form-row">
  <label for="remit_receive_amount" class="required">到款金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getReceiveAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div> 

<div class="form-row">
  <label for="remit_is_sendout" class="required">OFS发出：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($remit, 'getIsSendout', array ('onClick'=>"sExamine()"
  )) ?>
  </div>
</div>  


<div id="sExamine" style="display:none">
<script>
if(document.getElementById('is_sendout').checked)
	document.getElementById('sExamine').style.display="block";
else
	document.getElementById('sExamine').style.display="none";
</script>
<?php echo form_error('sendout_date')?>  
<div class="form-row">
  <label for="remit_sendout_date" class="required">发款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getSendoutDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   

<div class="form-row">
  <label for="remit_sendout_user_id" class="required">OFS发款人：</label> 
  <div class="content">
  <?php if(is_null($remit->getSendoutUserId()))
  			echo select_tag('sendout_user_id',objects_for_select($user,'getUserId','getNickname',null,array('include_custom'=>'--请选择--')));
  		else
  			echo select_tag('sendout_user_id',objects_for_select($user,'getUserId','getNickname',$remit->getSendoutUserId(),array('include_custom'=>'--请选择--')));
  ?> 
  </div>
</div> 
<?php echo form_error('sendout_amount')?>
<div class="form-row">
  <label for="remit_sendout_amount" class="required">发款金额：</label> 
  <div class="content">  
  <?php echo object_input_tag($remit, 'getSendoutAmount', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('sendout_receiver')?>  
<div class="form-row">
  <label for="remit_sendout_receiver" class="required">受援助收款人：</label> 
  <div class="content">   
  <?php echo object_input_tag($remit, 'getSendoutReceiver', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('report')?>
<div class="form-row">
  <label for="remit_report" class="required">走访报告：</label> 
  <div class="content">  
  <?php echo object_select_tag($remit, 'getReportId', array (
    'related_class' => 'ReportCard',
    'include_blank' => true,
  )) ?>
  </div>
</div> 
<div class="form-row">
  <label for="remit_discription" class="required">发放详情：</label> 
  <div class="content">  
  <?php echo object_textarea_tag($remit, 'getDiscription', array ('size' => '70x3')) ?>
  </div>
</div> 
</div> 
</div> 
<div class="form-row">
  <label for="remit_remark" class="required">备注：</label> 
  <div class="content">  
  <?php echo object_textarea_tag($remit, 'getRemark', array ( 'size' => '70x3')) ?>
  </div>
</div>  
<?php else:?>
<?php endif;?>


<?php else:?>

<?php echo input_hidden_tag('is_by_ofs', 0) ?>
<?php echo form_error('amount')?>
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
<?php echo form_error('sendout_date')?>  
<div class="form-row">
  <label for="remit_sendout_date" class="required">发款日期：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($remit, 'getSendoutDate', array (
    'rich' => true,
  )) ?>
  </div>
</div>   
<?php echo form_error('sendout_receiver')?>  
<div class="form-row">
  <label for="remit_sendout_receiver" class="required">受援助收款人：</label> 
  <div class="content">   
  <?php echo object_input_tag($remit, 'getSendoutReceiver', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php endif;?>
</fieldset>

<?php echo submit_tag('提交') ?>

<a href="javascript:history.go(-1)">返回</a>
</form>
</div>
