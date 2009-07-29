<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">
<div id="sf_admin_content">
<h1>所有学生信息</h1>
<?php
 use_helper('Javascript');
 echo form_tag('student/listall','name="Find"');?> 
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
		'student/autocomplete?donated=1&school_id='.$default_school_id.'&site_id='.$default_site_id,
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
		<tr>
			<td>&nbsp;<strong><?php if( $student->getIsDonated()) {echo image_tag('admin_db/tick.png'); echo "有人资助";} else {echo image_tag('admin_db/x.png'); echo"没人资助";} ?></strong>
			<br />
			&nbsp;<strong>姓名：&nbsp;</strong><?php echo $student->getName() ?>
			&nbsp;<strong>性别：&nbsp;</strong><?php if( $student->getMale()) echo "男"; else echo "女" ?>
			&nbsp;<strong>学校：&nbsp;</strong><?php echo $student->getSchool()->getSchoolName() ?>
			&nbsp;<strong>昵称：&nbsp;</strong><?php echo $student->getNickname() ?>
			&nbsp;<strong>照片：&nbsp;</strong><?php echo $student->getPhoto() ?> <br />
			&nbsp;<strong>所在地：&nbsp;</strong><?php echo $student->getProvince() ?>省<?php echo $student->getCity() ?>市
			&nbsp;<strong>在学中：&nbsp;</strong><?php if($student->getIsInstudy())	 echo "是";?>
			&nbsp;<strong>有退学史：&nbsp;</strong><?php if($student->getHasDropoutHistory()) echo "是";?>
			&nbsp;<strong>学期花费：&nbsp;</strong><?php echo $student->getTermExpense() ?>
			<br />
			&nbsp;<strong>受资助史：&nbsp;</strong><?php echo $student->getAssistHistory() ?>
			<br />
			&nbsp;<strong>自述：&nbsp;</strong><?php echo $student->getDiscription() ?>
			<br />
			<?php echo link_to ('成绩单', 'reportcard/liststu?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
			<?php echo link_to ('调查记录', 'survey/liststu?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
			<?php echo link_to ('资助记录', 'donation/liststu?student_id='.$student->getStudentId()) ?>
			<br />
			<?php echo link_to ('详细', 'student/show?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
			<?php if (($sf_user->getAttribute('usertype', '')=='administrator') || ($sf_user->getAttribute('usertype', '')=='manager')
			|| ($sf_user->getAttribute('usertype', '')=='surveyor'))
			{
				echo link_to ('修改', 'student/edit?student_id='.$student->getStudentId());
				echo "&nbsp;&nbsp;&nbsp;";
				echo link_to ('删除', 'student/delete?student_id='.$student->getStudentId(),  'post=true&confirm=真的要删除么？\n所有该学生的其他相关信息也将全部删除!');
			}
			?></td>
		</tr>
		<?php endforeach; ?>

	</tbody>
</table>

<?php include_partial('listpager',array('pager' => $pager, 'page_to_link' => 'listall', 'school_id'=>$default_school_id, 'site_id'=>$default_site_id ))?>
<?php else:?>
<table class="sf_student_list">
<tr><td align="center">无相关记录</td></tr>
</table>
<?php endif;?>
</div>
<?php echo observe_form('Find',array(
 		'update'=>'sf_admin_content',
 		'url'=>'student/listall',
 		'with'=>"Form.serialize('Find')",
 		'script'=>true))?>
</div>
