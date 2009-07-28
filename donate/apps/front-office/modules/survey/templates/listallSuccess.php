<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:21
?>
<div id="sf_admin_container">
<h1>调查信息</h1>
<?php if(sizeof($pager->getResults()) != 0):?>
<div id="sf_admin_content">
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
      <td><?php echo link_to('详情', 'survey/show?survey_id='.$survey->getSurveyId())?>&nbsp;&nbsp;&nbsp;
          <?php echo link_to('修改', 'survey/edit?survey_id='.$survey->getSurveyId())?>&nbsp;&nbsp;&nbsp;
          <?php echo link_to('删除', 'survey/delete?survey_id='.$survey->getSurveyId(), 'post=true&confirm=真的要删除么？') ?>
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

<?php include_partial('pager',array('pager' => $pager, 'flag_no_all' => 0 ))?>

<?php else:?>
无相关记录<br/>

<?php endif;?>

</div>
</div>
