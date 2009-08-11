<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">
<div id="sf_admin_content">
<h1>需要资助学生信息</h1>
<?php
 use_helper('Javascript');
 echo form_tag('@student_need_donate','id="Find"');?> 
<table border=0>
<tr><td><strong>地区：</strong></td>
<td>
<select name="site_id">
  <option value="-1">--请选择--</option>
  <?php foreach($projectsites as $projectsite):?>
  <option value=<?php echo $projectsite[0]?> <?php if(!empty($site_id) && $site_id==$projectsite[0]) echo "selected"; ?>>
  <?php echo $projectsite[1]?>
  </option>
  <?php endforeach;?>
</select>
</td>
<td><strong>学校：</strong></td>
<td>
<select name="school_id" <?php if($school_count < 1) echo "disabled"; ?>>
<option value="-1">--请选择--</option>
<?php foreach($schools as $school):?>
<option value=<?php echo $school[0]?> <?php if(!empty($school_id) && ($school_id==$school[0])) echo "selected"; ?>>
<?php echo $school[1]?>
</option>
<?php endforeach;?>
</select>
</td>
<td><strong>姓名：</strong></td>
<td>
<?php 
$default_name = empty($student_name)?'':$student_name;
$default_school_id = empty($school_id)?-1:$school_id;
$default_site_id = empty($site_id)?-1:$site_id;
 echo input_auto_complete_tag('student_name',$default_name,
		'@student_autocomplete?school_id='.$default_school_id.'&site_id='.$default_site_id,
 		array('autocomplete'=>'on'),
 		array('use_style'=>true));
 echo submit_tag('查找');
 ?>
 </td>
 </tr>
 </table>
 </form>
 <?php if(sizeof($pager->getResults())>0):?>
<table class="sf_student_list">

<tbody>
<?php foreach ($pager->getResults() as $student): ?>
<tr><td>

    <?php if ($sf_user->getAttribute('usertype', '')=='volunteer'):?>
    <?php else:?>
      &nbsp;<strong>姓名：&nbsp;</strong><?php echo $student->getName() ?>
    <?php endif;?>
      &nbsp;<strong>昵称：&nbsp;</strong><?php echo $student->getNickname() ?>
      &nbsp;<strong>性别：&nbsp;</strong><?php if( $student->getMale()) echo "男"; else echo "女" ?>
      &nbsp;<strong>学校：&nbsp;</strong><?php echo $student->getSchool()->getSchoolName() ?>      
      
      <br/>
      &nbsp;<strong>所在地：&nbsp;</strong><?php echo $student->getProvince() ?>省<?php echo $student->getCity() ?>市      
      &nbsp;<strong>正受资助：&nbsp;</strong><?php if( $student->getIsDonated()) echo "是"; else echo"否"; ?>
      &nbsp;<strong>在学中：&nbsp;</strong><?php if($student->getIsInstudy())	 echo "是";?>
      &nbsp;<strong>有退学史：&nbsp;</strong><?php echo $student->getDropoutHistory() ?>                 
      &nbsp;<strong>学期花费：&nbsp;</strong><?php echo $student->getTermExpense() ?>
      <br/>
      &nbsp;<strong>受资助史：&nbsp;</strong><?php echo $student->getAssistHistory() ?>
      <br/>
      &nbsp;<strong>自述：&nbsp;</strong><?php echo $student->getDiscription() ?>
      <br/>
      <?php echo link_to ('成绩单', '@score_by_student?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('调查记录', '@survey_by_student?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('资助他', '@donation_create?student_id='.$student->getStudentId()) ?>
      <br />
      <?php echo link_to ('详细', '@student_show?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <?php if (($sf_user->getAttribute('usertype', '')=='administrator') || ($sf_user->getAttribute('usertype', '')=='manager')
      || ($sf_user->getAttribute('usertype', '')=='surveyor'))
      {
      	echo link_to ('修改', '@student_edit?student_id='.$student->getStudentId());
      	echo "&nbsp;&nbsp;&nbsp;";      	
      }
      ?>      
           
</td></tr>
<?php endforeach; ?>

</tbody>
</table>

<?php include_partial('listpager',array('pager' => $pager, 'page_to_link' => '@student_need_donate', 'school_id'=>$default_school_id, 'site_id'=>$default_site_id ))?>
<?php else:?>
<table class="sf_student_list">
<tr><td align="center">无相关记录</td></tr>
</table>
<?php endif;?>
</div>
<?php echo observe_form('Find',array(
 		'update'=>'sf_admin_content',
 		'url'=>'@student_need_donate',
 		'with'=>"Form.serialize('Find')",
 		'script'=>true))?>
</div>
