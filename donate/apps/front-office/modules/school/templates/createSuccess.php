<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:33:53
?>
<div id="sf_admin_container">

<h1>学校信息</h1>

<?php use_helper('Object') ?>

<?php echo form_tag('school/update') ?>

<?php echo object_input_hidden_tag($school, 'getSchoolId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">

<?php if ($sf_params->has('site_id')):?>

<div class="form-row">
  <label for="school_site_id" class="required">捐助点：</label> 
  <div class="content">   
  <?php
     echo $projectsite->getSiteName();
     echo input_hidden_tag('site_id',$sf_params->get('site_id'));  
   ?>
  </div>
</div>  

<?php else:?>

<div class="form-row">
  <label for="school_site_id" class="required">捐助点：</label> 
  <div class="content">   
  <?php echo object_select_tag($school, 'getSiteId', array (
  'related_class' => 'ProjectSite',
  )) ?>
  </div>
</div>
  
<?php endif?>

<div class="form-row">
  <label for="school_school_name" class="required">学校名：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getSchoolName', array (
  'size' => 20,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="school_type" class="required">类型：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getType', array (
  'size' => 20,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="school_master" class="required">校长：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getMaster', array (
  'size' => 20,
  )) ?>
  </div>
</div>
  
<div class="form-row">
  <label for="school_contact" class="required">联系人：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getContact', array (
  'size' => 20,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="school_phone" class="required">电话：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getPhone', array (
  'size' => 32,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="school_address" class="required">地址：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getAddress', array (
  'size' => 70,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <label for="school_postal" class="required">邮政编码：</label> 
  <div class="content">   
  <?php echo object_input_tag($school, 'getPostal', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <label for="school_discription" class="required">简介：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($school, 'getDiscription', array (
  'size' => '70x20',
  )) ?>
  </div>
</div>  

  
</fieldset>
<?php echo submit_tag('提交') ?>
&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>
</form>

</div>
</div>