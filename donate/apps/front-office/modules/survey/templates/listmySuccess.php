<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:21
?>
<div id="sf_admin_container">
<div id="sf_admin_content">
<h1>调查信息</h1>
<?php
 use_helper('Javascript');
 echo form_tag('survey/listmy','id="Find"');?> 
<table cellspacing="0" class="sf_admin_list">
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
		'survey/autocomplete?my=1&school_id='.$default_school_id.'&site_id='.$default_site_id,
 		array('autocomplete'=>'on'),
 		array('use_style'=>true));
 echo submit_tag('查找');
 ?>
 </td>
 </tr>
 </table>
 </form>
 <?php 
 echo observe_form('Find',array(
 		'update'=>'sf_admin_content',
 		'url'=>'survey/listmy',
 		'with'=>"Form.serialize('Find')",
 		'script'=>true))?>
<?php if(sizeof($pager->getResults()) != 0):?>
<table cellspacing="0" class="sf_admin_list">

<thead>
<tr>
  <th>学生</th>
  <th>家庭情况</th>
  <th>年级</th>
  <th>其他资助者</th>
  <th>退学情况</th>
  <th>描述</th>
  <th>年收入</th>
  <th>财产状况</th>
  <th>捐助用途</th>
  <th>捐助者关心的问题</th>
  <th>给捐助者的话</th>
  <th>给学生的话</th>
  <th>学校意见</th>
  <th>老师意见</th>
  <th>调查人</th>
  <th>调查日期</th>  
  <th>调查人意见</th>
  <th>小结</th>
  <th>操作</th>
</tr>
</thead>
<tbody>
<?php $count_row = 0?>
<?php foreach ($pager->getResults() as $survey): ?>

  <?php echo "<tr class='sf_admin_row_".$count_row."' >" ?>
      <td><?php echo $survey->getStudent()->getName() ?></td>
      <td><?php echo $survey->getFamilyCondition() ?></td>
      <td><?php echo $survey->getGrade() ?></td>
      <td><?php echo $survey->getOtherAssist() ?></td>
      <td><?php echo $survey->getDropoutInfo() ?></td>
      <td><?php echo $survey->getPresentation() ?></td>
      <td><?php echo $survey->getRevenue() ?></td>
      <td><?php echo $survey->getProperty() ?></td>
      <td><?php echo $survey->getDonationUsage() ?></td>
      <td><?php echo $survey->getDonorConcerned() ?></td>
      <td><?php echo $survey->getMsgToDonor() ?></td>
      <td><?php echo $survey->getMsgToStu() ?></td>
      <td><?php echo $survey->getSchoolOpinion() ?></td>
      <td><?php echo $survey->getTeacherOpinion() ?></td>
      <td><?php echo $survey->getUser()->getName() ?></td>
      <td><?php echo $survey->getSurveyDate() ?></td>      
      <td><?php echo $survey->getUserOpinion() ?></td>
      <td><?php echo $survey->getDiscription() ?></td>
      <td><?php echo link_to('查看', 'survey/show?survey_id='.$survey->getSurveyId())?>
          <?php echo link_to('修改', 'survey/edit?survey_id='.$survey->getSurveyId())?>
      </td>
      
  <?php
    if($count_row)
       $count_row = 0;
    else
       $count_row = 1;
  ?>        
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php include_partial('pager',array('pager' => $pager, 'flag_no_all' => 1, 'page_to_link' =>'listmy' ))?>

<?php else:?>
<table class="sf_student_list">
<tr><td align="center">无相关记录</td></tr>
</table>
<?php endif;?>

<?php echo link_to('新增调查','survey/create')?>

</div>
</div>
