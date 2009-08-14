<br/>

<?php use_helper('Object') ?>
<?php use_helper('Javascript')?>
<?php use_helper('Validation') ?>

<?php echo form_tag('@investigation_refresh') ?>

<?php echo object_input_hidden_tag($student, 'getStudentId') ?>

<h1>我们的自由天空(OFS)受助学生走访调查表录入</h1>
<?php echo form_error('ofs_id')?>
<?php echo form_error('name')?>
<?php echo form_error('race')?>
<?php echo form_error('birthday')?>
<?php echo form_error('guardian')?>
<?php echo form_error('assist_history')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <td width='11.1%'>编号</td>
    <td width='22.2%'><?php echo object_input_tag($student, 'getOfsId', array ('size' => 20)) ?></td>
    <td width='11.1%'>姓名</td>
    <td width='22.2%'><?php echo object_input_tag($student, 'getName', array ('size' => 20)) ?></td>
    <td width='11.1%'>性别</td>
    <td width='22.2%'>男<?php echo object_checkbox_tag($student, 'getMale') ?></td>    
  </tr>
  <tr>
    <td width='11.1%'>民族</td>
    <td width='22.2%'><?php echo object_input_tag($student, 'getRace', array ('size' => 20)) ?></td>
    <td width='11.1%'>出生日期</td>
    <td width='22.2%'><?php echo object_input_date_tag($student, 'getBirthday', array ('rich' => true)) ?></td>
    <td width='11.1%'>家长</td>
    <td width='22.2%'><?php echo object_input_tag($student, 'getGuardian', array ('size' => 20)) ?></td>    
  </tr>  
  <tr>
    <td >受助情况及说明</td>
    <td colspan="5"><?php echo object_textarea_tag($student, 'getAssistHistory', array ('size' => '80x3')) ?></td>    
  </tr>  
</table>


<h1>有效汇款和邮寄地址</h1>
<?php echo form_error('consignee')?>
<?php echo form_error('consignee_address')?>
<?php echo form_error('consignee_postal')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <td width='10%'>收件人</td>
    <td width='10%'><?php echo object_input_tag($student, 'getConsignee', array ('size' => 10)) ?></td>
    <td width='10%'>联系地址</td>
    <td width='50%'><?php echo object_input_tag($student, 'getConsigneeAddress', array ('size' => 50)) ?></td>
    <td width='10%'>邮编</td>
    <td width='10%'><?php echo object_input_tag($student, 'getConsigneePostal', array ('size' => 10)) ?></td>    
  </tr>
</table>

<h1>在校及学习情况</h1>
<?php echo form_error('grade')?>
<?php echo form_error('techang')?>
<?php echo form_error('teacher_opinion')?>
<?php echo form_error('school_opinion')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <td width='11.1%'>就读学校</td>
    <td width='22.2%'>
    <?php 
	  if($student->getSchoolId())
	  echo select_tag('site_id', objects_for_select($site,'getSiteId','getSiteName',$student->getSchool()->getSiteId(),array('include_custom' => '--请选择--')));
	  else
	  echo select_tag('site_id', objects_for_select($site,'getSiteId','getSiteName',$selected = null,array('include_custom' => '--请选择--')));
	?>
    <div id="school_select"><?php echo select_tag('school_id', objects_for_select($school,'getSchoolId','getSchoolName',$student->getSchoolId())) ?></div>
    <?php echo observe_field('site_id',array('update'=>"school_select",
							'url'=>"@student_cascade",
							'with'=>"'site_id='+$('site_id').value",
							'script'=>true))
	?>
    </td>
    <td width='11.1%'>班级</td>
    <td width='22.2%'><?php echo object_input_tag($student, 'getGrade', array ('size' => 10)) ?></td>
    <td width='11.1%'>是否住校</td>
    <td width='22.2%'>是<?php echo object_checkbox_tag($student, 'getIsBoarder') ?></td>    
  </tr>
  <tr>
    <td>学期费用情况</td>
    <td colspan="5"><?php echo object_textarea_tag($student, 'getTermExpense', array ('size' => '80x2')) ?></td>
  </tr> 
  <tr>
    <td>曾获何种奖励</td>
    <td colspan="5"><?php echo object_textarea_tag($student,'getReward', $options = array('size' => '80x4')) ?></td>
  </tr>  
  <tr>
    <td>特长</td>
    <td colspan="5"><?php echo object_textarea_tag($student,'getTechang', $options = array('size' => '80x2')) ?></td>
  </tr>
  <tr>
    <td>辍学经理及简要说明</td>
    <td colspan="5"><?php echo object_textarea_tag($student,'getDropoutHistory', $options = array('size' => '80x4')) ?></td>
  </tr>  
  <tr>
    <td>学生自述</td>
    <td colspan="5"><?php echo object_textarea_tag($survey, 'getPresentation', $options = array('size' =>  '80x4')) ?></td>
  </tr>  
  <tr>
    <td>班主任评语</td>
    <td colspan="5"><?php echo object_textarea_tag($survey, 'getTeacherOpinion', $options = array('size' =>  '80x4')) ?></td>
  </tr>  
  <tr>
    <td>学校意见</td>
    <td colspan="5"><?php echo object_textarea_tag($survey, 'getSchoolOpinion', $options = array('size' =>  '80x4')) ?></td>
  </tr>  
</table>
<h1>家庭成员情况</h1>
<?php echo form_error('fm1_relation')?>
<?php echo form_error('fm1_name')?>
<?php echo form_error('fm1_age')?>
<?php echo form_error('fm1_occupation')?>
<?php echo form_error('fm2_relation')?>
<?php echo form_error('fm2_name')?>
<?php echo form_error('fm2_age')?>
<?php echo form_error('fm2_occupation')?>
<?php echo form_error('fm3_relation')?>
<?php echo form_error('fm3_name')?>
<?php echo form_error('fm3_age')?>
<?php echo form_error('fm3_occupation')?>
<?php echo form_error('fm4_relation')?>
<?php echo form_error('fm4_name')?>
<?php echo form_error('fm4_age')?>
<?php echo form_error('fm4_occupation')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <th width='20%'>关系</th>
    <th width='20%'>姓名</th>
    <th width='20%'>年龄</th>
    <th width='20%'>职业状况</th>
    <th width='20%'>备注</th>    
  </tr>
  <tr>
    <td width='20%'><?php echo object_input_tag($student, 'getFm1Relation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm1Name', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm1Age', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm1Occupation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_textarea_tag($student,'getFm1Discription', $options = array('size' => '20x2'))?></td>    
  </tr>
  <tr>
    <td width='20%'><?php echo object_input_tag($student, 'getFm2Relation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm2Name', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm2Age', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm2Occupation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_textarea_tag($student,'getFm2Discription', $options = array('size' => '20x2'))?></td>    
  </tr>
  <tr>
    <td width='20%'><?php echo object_input_tag($student, 'getFm3Relation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm3Name', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm3Age', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm3Occupation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_textarea_tag($student,'getFm3Discription', $options = array('size' => '20x2'))?></td>    
  </tr>
  <tr>
    <td width='20%'><?php echo object_input_tag($student, 'getFm4Relation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm4Name', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm4Age', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_input_tag($student, 'getFm4Occupation', array ('size' => 15)) ?></td>
    <td width='20%'><?php echo object_textarea_tag($student,'getFm4Discription', $options = array('size' => '20x2'))?></td>    
  </tr>      
</table>


<h1>家庭状况</h1>
<?php echo form_error('address')?>
<?php echo form_error('tel')?>
<?php echo form_error('postal')?>
<?php echo form_error('revenue')?>
<?php echo form_error('property')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <td width='10%'>家庭地址</td>
    <td width='40%'><?php echo object_input_tag($student, 'getAddress', array ('size' => 35)) ?></td>
    <td width='10%'>电话</td>
    <td width='20%'><?php echo object_input_tag($student, 'getTel', array ('size' => 15)) ?></td>
    <td width='10'>邮编</td>
    <td width='10'><?php echo object_input_tag($student, 'getPostal', array ('size' => 10)) ?></td>    
  </tr>
  <tr>
    <td>年收入及主要来源</td>
    <td colspan="5"><?php echo object_textarea_tag($survey, 'getRevenue', $options = array('size' =>  '80x4')) ?></td>
  </tr>
  <tr>
    <td>财产概况</td>
    <td colspan="5"><?php echo object_textarea_tag($survey, 'getProperty', $options = array('size' =>  '80x4')) ?></td>
  </tr>    
  <tr>
    <td>备注</td>
    <td colspan="5"><?php echo object_textarea_tag($student,'getRemark', $options = array('size' => '80x4')) ?></td>
  </tr>
</table>
   
<h1>走访情况</h1>
<?php echo form_error('survey_date')?>
<?php echo form_error('user_opinion')?>
<table border="0" style="border: #000000 1px inset;">
  <tr>
    <td width='20%'>走访志愿者</td>
    <td width='30%'><?php echo select_tag('user_id',objects_for_select($user, 'getUserId', 'getNickname',$survey->getUserId(),array('include_custom'=>"--请选择--"))) ?></td>
    <td width='20%'>走访时间</td>
    <td width='30%'><?php echo object_input_date_tag($survey, 'getSurveyDate', array ('rich' => true)) ?></td>
  </tr>
  <tr>
    <td >走访意见</td>
    <td colspan="3"><?php echo object_textarea_tag($survey, 'getUserOpinion', array ('size' => '80x6')) ?></td>    
  </tr>  
</table>  

<?php echo submit_tag('提交') ?>


</form>
