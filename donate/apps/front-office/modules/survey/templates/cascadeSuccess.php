<?php use_helper('Object')?>
<?php use_helper('Javascript')?>
<div class="form-row">
  <label for="survey_student_id" class="required">学校：</label>
  <div id="school_select" class="content">     
  <?php
  echo select_tag('school_id', objects_for_select($school,'getSchoolId','getSchoolName', null,array('include_custom' => '--请选择--')));
  ?> 
  </div>
</div>  
<?php ?>
<div class="form-row">
  <label for="survey_student_id" class="required">被调查学生：</label>
  <div id="student_name" class="content">     
  <?php 
  	echo select_tag('student_id',objects_for_select($student,'getStudentId','getName'));
  ?>
  </div>
</div>
<?php echo observe_field('school_id',array('update'=>"student_name",
'url'=>"survey/cascade2",
'with'=>"'school_id='+$('school_id').value",
'script'=>true))
?>