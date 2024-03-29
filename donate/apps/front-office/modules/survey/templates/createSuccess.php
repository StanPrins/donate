<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:21
?>
<div id="sf_admin_container">

<h1>调查信息</h1>

<?php use_helper('Object') ?>
<?php use_helper('Javascript')?>
<?php use_helper('Validation')?>

<?php echo form_tag('@survey_update') ?>

<?php echo object_input_hidden_tag($survey, 'getSurveyId') ?>
<?php echo object_input_hidden_tag($survey, 'getUserId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">
<?php if ($survey->getStudentId()):?>
<div class="form-row">
  <?php echo object_input_hidden_tag($survey, 'getStudentId') ?>
  <label for="survey_student_id" class="required">被调查学生：</label>
  <div id="student_name" class="content">
  <?php echo $survey->getStudent()->getName()?>
  </div>
</div>
<?php else:?>
<div class="form-row">
  <label for="survey_student_id" class="required">捐助点：</label>
  <div class="content">     
  <?php
  echo select_tag('site_id', objects_for_select($site,'getSiteId','getSiteName', null,array('include_custom' => '--请选择--')));
  ?> 
  </div>
</div>  
<div id="new_area">
<div class="form-row">
  <label for="survey_student_id" class="required">学校：</label>
  <div id="school_select" class="content">     
  <?php
  echo select_tag('school_id', objects_for_select($school,'getSchoolId','getSchoolName', null,array('include_custom' => '--请选择--')));
  ?> 
  </div>
</div>  
<div class="form-row">
  <label for="survey_student_id" class="required">被调查学生：</label>
  <div id="student_name" class="content">     
  <?php
  	echo select_tag('student_id',objects_for_select($student,'getStudentId','getName'));
  ?>
  </div>
</div>  
</div>
<?php echo observe_field('site_id',array('update'=>"new_area",
'url'=>"@survey_cascade",
'with'=>"'type=0&site_id='+$('site_id').value",
'script'=>true))
?>
<?php echo observe_field('school_id',array('update'=>"student_name",
'url'=>"@survey_cascade2",
'with'=>"'school_id='+$('school_id').value",
'script'=>true))
?>
<?php endif;?>
<div class="form-row">
  <label for="survey_user_id" class="required">调查人：</label> 
  <div class="content">     
  <?php echo $survey->getUser()->getName() ?>
  </div>
</div>  
<?php echo form_error('survey_date')?>
<div class="form-row">
  <label for="survey_survey_date" class="required">调查日期：</label> 
  <div class="content">     
  <?php echo object_input_date_tag($survey, 'getSurveyDate', array (
  'rich' => true,
  )) ?>
  </div>
</div>
<div class="form-row">
  <label for="survey_family_condition" class="required">家庭情况：</label> 
  <div class="content">     
  <?php echo object_textarea_tag($survey,'getFamilyCondition', $options = array('size' =>  '70x4')) ?>
  </div>
</div>  
<?php echo form_error('grade')?>
<div class="form-row">
  <label for="survey_grade" class="required">年级：</label> 
  <div class="content">     
  <?php echo object_input_tag($survey, 'getGrade', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('other_assist')?>
<div class="form-row">
  <label for="survey_other_assist" class="required">其他资助人：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getOtherAssist', $options = array('size' =>  '70x4')) ?>     
  </div>
</div>
<?php echo form_error('dropout_info')?>  
<div class="form-row">
  <label for="survey_dropout_info" class="required">辍学记录：</label> 
  <div class="content">     
  <?php echo object_textarea_tag($survey, 'getDropoutInfo', $options = array('size' =>  '70x4')) ?>
  </div>
</div>  
  
<div class="form-row">
  <label for="survey_presentation" class="required">个人陈述：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getPresentation', $options = array('size' =>  '70x4')) ?>     
  </div>
</div>  
<?php echo form_error('revenue')?>
<div class="form-row">
  <label for="survey_revenue" class="required">收入：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getRevenue', $options = array('size' =>  '70x3')) ?>     
  </div>
</div>  
<?php echo form_error('property')?>
<div class="form-row">
  <label for="survey_property" class="required">财产：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getProperty', $options = array('size' =>  '70x3')) ?>     
  </div>
</div>  
<?php echo form_error('donation_usage')?>  
<div class="form-row">
  <label for="survey_donation_usage" class="required">捐助使用情况：</label> 
  <div class="content">       
  <?php echo object_textarea_tag($survey, 'getDonationUsage', $options = array('size' =>  '70x3')) ?>
  </div>
</div>  
<?php echo form_error('donor_concerned')?>
<div class="form-row">
  <label for="survey_dornor_concerned" class="required">捐助人关心的问题：</label> 
  <div class="content">     
  <?php echo object_textarea_tag($survey, 'getDonorConcerned', $options = array('size' =>  '70x3')) ?>
  </div>
</div>  

<div class="form-row">
  <label for="survey_msg_to_donor" class="required">给捐助人的话：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getMsgToDonor', $options = array('size' =>  '70x3')) ?>       
  </div>
</div>  

<div class="form-row">
  <label for="survey_msg_to_student" class="required">给同学的话：</label> 
  <div class="content">     
  <?php echo object_textarea_tag($survey, 'getMsgToStu', $options = array('size' =>  '70x3')) ?>
  </div>
</div>  
<?php echo form_error('school_opinion')?>
<div class="form-row">
  <label for="survey_school_opinion" class="required">学校意见：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getSchoolOpinion', $options = array('size' =>  '70x3')) ?>     
  </div>
</div>  
<?php echo form_error('teacher_opinion')?>
<div class="form-row">
  <label for="survey_teacher_opinion" class="required">老师意见：</label> 
  <div class="content">     
  <?php echo object_textarea_tag($survey, 'getTeacherOpinion', $options = array('size' =>  '70x3')) ?>  
  </div>
</div>  
<?php echo form_error('user_opinion')?>
<div class="form-row">
  <label for="survey_user_opinion" class="required">志愿者意见：</label> 
  <div class="content">
  <?php echo object_textarea_tag($survey, 'getUserOpinion', $options = array('size' =>  '70x3')) ?>     
  </div>
</div>  

<div class="form-row">
  <label for="survey_discription" class="required">描述：</label> 
  <div class="content">
    <?php echo object_textarea_tag($survey, 'getDiscription', $options = array('size' =>  '70x3')) ?>     
  </div>
</div>
  
</fieldset>
<?php echo submit_tag('提交') ?>
&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>

</form>
</div>
</div>
