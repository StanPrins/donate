<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">

<h1>学生信息</h1>

<?php use_helper('Object') ?>
<?php use_helper('Javascript')?>
<?php use_helper('Validation') ?>

<?php echo form_tag('@student_update','multipart=true') ?>

<?php echo object_input_hidden_tag($student, 'getStudentId') ?>

<div id="sf_admin_content">

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <label for="student_site_id" class="required">捐助点：</label> 
  <div class="content">   
  <?php 
  if($student->getSchoolId())
  echo select_tag('site_id', objects_for_select($site,'getSiteId','getSiteName',$student->getSchool()->getSiteId(),array('include_custom' => '--请选择--')));
  else
  echo select_tag('site_id', objects_for_select($site,'getSiteId','getSiteName',$selected = null,array('include_custom' => '--请选择--')));?>
  </div>
</div> 

<div class="form-row">
  <label for="student_school_id" class="required">学校：</label> 
  <div id="school_select" class="content">   
  <?php echo select_tag('school_id', objects_for_select($school,'getSchoolId','getSchoolName',$student->getSchoolId())) ?>
  </div>
</div>
<?php echo observe_field('site_id',array('update'=>"school_select",
'url'=>"@student_cascade",
'with'=>"'site_id='+$('site_id').value",
'script'=>true))
?>

<div class="form-row">
  <?php echo form_error('name') ?>
  <label for="student_student_name" class="required">姓名：</label> 
  <div class="content">     
  <?php echo object_input_tag($student, 'getName', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <?php echo form_error('ofs_id') ?>
  <label for="student_ofs_id" class="required">OFS ID：</label> 
  <div class="content">     
  <?php echo object_input_tag($student, 'getOfsId', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <?php echo form_error('nickname')?>
  <label for="student_nick_name" class="required">昵称：</label> 
  <div class="content">     
  <?php echo object_input_tag($student, 'getNickname', array (
  'size' => 20,
  )) ?>
  </div>
</div>  

<div class="form-row">
  <?php echo form_error('race')?>
  <label for="student_race" class="required">民族：</label> 
  <div class="content">     
  <?php echo object_input_tag($student, 'getRace', array (
  'size' => 20,
  )) ?>
  </div>
</div> 

<script type="text/javascript">
function display(obj,ctl)
{
	var photo_input = document.getElementById(obj);
	var control_button = document.getElementById(ctl);
	var str = control_button.value;
	if(str == "重新上传")
	{
		photo_input.style.display = "inline";
		control_button.value = "取消";
	}
	else
	{
		photo_input.style.display = "none";
		photo_input.value = null;
		control_button.value = "重新上传";
	}	
}
</script>
<?php echo form_error('photo')?>
<div class="form-row">
  <label for="student_photo" class="required">照片：</label> 
  <div class="content">
  <?php if(!is_null($student->getPhoto())):?>
  <?php echo image_tag('students/'.$student->getPhoto())?>
  <br />
  <?php echo input_file_tag('photo',array('accept'=>'image/*','size'=>'10','style'=>'display:none'))?>
  <?php echo button_to_function('重新上传','display("photo","control_button")',array('id'=>'control_button','size'=>'2'))?>
  <?php else:?>   
  <?php echo input_file_tag('photo',array('accept'=>'image/*','size'=>'10'))?>
  <?php endif;?>
  </div>
</div>  
<?php echo form_error('head_teacher')?>
<div class="form-row">
  <label for="student_head_teacher" class="required">班主任：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getHeadTeacher', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('guardian')?>
<div class="form-row">
  <label for="student_guardian" class="required">监护人：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getGuardian', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('birthday')?>
<div class="form-row">
  <label for="student_birthday" class="required">生日：</label> 
  <div class="content">   
  <?php echo object_input_date_tag($student, 'getBirthday', array (
  'rich' => true,
  )) ?>
  </div>
</div>  
<?php echo form_error('grade')?>
<div class="form-row">
  <label for="student_grade" class="required">年级：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getGrade', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_male" class="required">男？：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($student, 'getMale', array (
  )) ?>
  </div>
</div>  
<?php echo form_error('tel')?>
<div class="form-row">
  <label for="student_tel" class="required">电话：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getTel', array (
  'size' => 70,
  )) ?>
  </div>
</div>  
<?php echo form_error('address')?>
<div class="form-row">
  <label for="student_address" class="required">住址：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getAddress', array (
  'size' => 70,
  )) ?>
  </div>
</div>  
<?php echo form_error('postal')?>  
<div class="form-row">
  <label for="student_postal" class="required">邮编：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getPostal', array (
  'size' => 20,
  )) ?>
  </div>
</div>
<?php echo form_error('city')?>  
<div class="form-row">
  <label for="student_city" class="required">城市：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getCity', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('province')?>
<div class="form-row">
  <label for="student_province" class="required">省：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getProvince', array (
  'size' => 20,
  )) ?>
  </div>
</div>

<?php echo form_error('consignee')?>
<div class="form-row">
  <label for="student_consignee" class="required">收件人：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getConsignee', array (
  'size' => 20,
  )) ?>
  </div>
</div>

<?php echo form_error('consignee_address')?>
<div class="form-row">
  <label for="student_consignee_address" class="required">收件人地址：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getConsigneeAddress', array (
  'size' => 70,
  )) ?>
  </div>
</div>
  
<?php echo form_error('consignee_postal')?>  
<div class="form-row">
  <label for="student_consignee_postal" class="required">收件人邮编：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getConsigneePostal', array (
  'size' => 20,
  )) ?>
  </div>
</div>

<?php echo form_error('assit_history')?>
<div class="form-row">
  <label for="student_assist_history" class="required">资助史：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student, 'getAssistHistory', array (
  'size' => '70x3',
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_is_in_study" class="required">在学：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($student, 'getIsInstudy', array (
  )) ?>
  </div>
</div> 
<div class="form-row">
  <label for="student_is_boarder" class="required">寄宿生：</label> 
  <div class="content">   
  <?php echo object_checkbox_tag($student, 'getIsBoarder', array (
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_dropout_history" class="required">有无退学史：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student,'getDropoutHistory', $options = array('size' => '70x4')) ?>
  </div>
</div>  

<?php echo form_error('techang')?>
<div class="form-row">
  <label for="student_techang" class="required">特长：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student,'getTechang', $options = array('size' => '70x2')) ?>
  </div>
</div>  

<?php echo form_error('reward')?>
<div class="form-row">
  <label for="student_reward" class="required">所获奖项：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student,'getReward', $options = array('size' => '70x4')) ?>
  </div>
</div>  

<?php echo form_error('term_expense')?>
<div class="form-row">
  <label for="student_term_expense" class="required">学期花费：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getTermExpense', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('discription')?>
<div class="form-row">
  <label for="student_discription" class="required">自人简介：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student,'getDiscription', $options = array('size' => '70x4')) ?>
  </div>
</div>

<div class="form-row">
  <label for="student_discription" class="required">全家照片：</label> 
  <div class="content">   
  <?php if(!is_null($student->getMemberPhoto())):?>
  <?php echo image_tag('students/'.$student->getMemberPhoto())?>
  <br />
  <?php echo input_file_tag('member_photo',array('accept'=>'image/*','size'=>'10','style'=>'display:none'))?>
  <?php echo button_to_function('重新上传','display("member_photo","member_control")',array('id'=>'member_control','size'=>'2'))?>
  <?php else:?>   
  <?php echo input_file_tag('member_photo',array('accept'=>'image/*','size'=>'10'))?>
  <?php endif;?>
  </div>
</div> 

<div class="form-row">
  <label for="student_discription" class="required">房屋照片：</label> 
  <div class="content">   
  <?php if(!is_null($student->getHousePhoto())):?>
  <?php echo image_tag('students/'.$student->getHousePhoto())?>
  <br />
  <?php echo input_file_tag('house_photo',array('accept'=>'image/*','size'=>'10','style'=>'display:none'))?>
  <?php echo button_to_function('重新上传','display("house_photo","house_control")',array('id'=>'house_control','size'=>'2'))?>
  <?php else:?>   
  <?php echo input_file_tag('house_photo',array('accept'=>'image/*','size'=>'10'))?>
  <?php endif;?>
  </div>
</div> 

<?php echo form_error('remark')?>
<div class="form-row">
  <label for="student_remark" class="required">备注：</label> 
  <div class="content">   
  <?php echo object_textarea_tag($student,'getRemark', $options = array('size' => '70x4')) ?>
  </div>
</div>

  
<br/>
<h2>亲属1</h2> 
<?php echo form_error('fm1_relation')?>
<div class="form-row">
  <label for="student_fm1_relation" class="required">关系：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm1Relation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm1_name')?>
<div class="form-row">
  <label for="student_fm1_name" class="required">姓名：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm1Name', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm1_age')?>
<div class="form-row">
  <label for="student_fm1_age" class="required">年龄：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm1Age', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm1_occupation')?>
<div class="form-row">
  <label for="student_fm1_occupation" class="required">职业：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm1Occupation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_fm1_discription" class="required">简介</label> 
  <div class="content">     
  <?php echo object_textarea_tag($student,'getFm1Discription', $options = array('size' => '70x4')) ?>  
  </div>
</div>  
<br/>
<h2>亲属2</h2>
<?php echo form_error('fm2_relation')?> 
<div class="form-row">
  <label for="student_fm2_relation" class="required">关系：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm2Relation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm2_name')?>
<div class="form-row">
  <label for="student_fm2_name" class="required">姓名：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm2Name', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm2_age')?>
<div class="form-row">
  <label for="student_fm2_age" class="required">年龄：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm2Age', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm2_occupation')?>
<div class="form-row">
  <label for="student_fm2_occupation" class="required">职业：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm2Occupation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
  
<div class="form-row">
  <label for="student_fm2_discription" class="required">简介</label> 
  <div class="content">
  <?php echo object_textarea_tag($student,'getFm2Discription', $options = array('size' => '70x4')) ?>       
  </div>
</div>  

<br/>
<h2>亲属3</h2> 
<?php echo form_error('fm3_relation')?> 
<div class="form-row">
  <label for="student_fm3_relation" class="required">关系：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm3Relation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm3_name')?>
<div class="form-row">
  <label for="student_fm3_name" class="required">姓名：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm3Name', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm3_age')?>
<div class="form-row">
  <label for="student_fm3_age" class="required">年龄：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm3Age', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm3_occupation')?>
<div class="form-row">
  <label for="student_fm3_occupation" class="required">职业：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm3Occupation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_fm3_discription" class="required">简介</label> 
  <div class="content">     
  <?php echo object_textarea_tag($student,'getFm3Discription', $options = array('size' => '70x4')) ?>
  </div>
</div>  
<br/>
<h2>亲属4</h2> 
<?php echo form_error('fm4_relation')?> 
<div class="form-row">
  <label for="student_fm4_relation" class="required">关系：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm4Relation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm4_name')?>
<div class="form-row">
  <label for="student_fm4_name" class="required">姓名：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm4Name', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm4_age')?>
<div class="form-row">
  <label for="student_fm4_age" class="required">年龄：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm4Age', array (
  'size' => 7,
  )) ?>
  </div>
</div>  
<?php echo form_error('fm4_occupation')?>
<div class="form-row">
  <label for="student_fm4_occupation" class="required">职业：</label> 
  <div class="content">   
  <?php echo object_input_tag($student, 'getFm4Occupation', array (
  'size' => 20,
  )) ?>
  </div>
</div>  
<div class="form-row">
  <label for="student_fm4_discription" class="required">简介</label> 
  <div class="content">
  <?php echo object_textarea_tag($student,'getFm4Discription', $options = array('size' => '70x4')) ?>       
  </div>
</div>
</fieldset>
<?php echo submit_tag('提交') ?>

&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>
</form>
</div>
</div>