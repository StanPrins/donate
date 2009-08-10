<?php
// auto-generated by sfPropelCrud
// date: 2009/07/17 08:16:12
?>
<div id="sf_admin_container">

<h1>资助点管理</h1>

<?php use_helper('Object') ?>
<?php use_helper('Validation')?>

<?php echo form_tag('@site_update') ?>

<?php echo object_input_hidden_tag($project_site, 'getSiteId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">
<?php echo form_error('site_name')?>
<div class="form-row">
  <label for="project_site_site_name" class="required">名称:</label> 
  <div class="content">
  <?php echo object_input_tag($project_site, 'getSiteName', array (
  'size' => 20
  )) ?>
  </div>
</div>
<?php echo form_error('province')?>
<div class="form-row">
  <label for="project_site_province" class="required">省:</label> 
  <div class="content">
  <?php echo object_input_tag($project_site, 'getProvince', array (
  'size' => 20
  )) ?>
  </div>
</div>
<?php echo form_error('city')?>  
<div class="form-row">
  <label for="project_site_city" class="required">城市:</label> 
  <div class="content">
  <?php echo object_input_tag($project_site, 'getCity', array (
  'size' => 20
  )) ?>
  </div>
</div>
<?php echo form_error('district')?>
<div class="form-row">
  <label for="project_site_district" class="required">区:</label> 
  <div class="content">
  <?php echo object_input_tag($project_site, 'getDistrict', array (
  'size' => 20
  )) ?>
  </div>
</div>

<div class="form-row">
  <label for="project_site_discription" class="required">简介:</label> 
  <div class="content">
  <?php echo object_textarea_tag($project_site, 'getDiscription', array (  'size' => '70x20'  )) ?>
  </div>
</div>
</fieldset>

<?php echo submit_tag('提交') ?>
&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>

</div>
</form>

</div>