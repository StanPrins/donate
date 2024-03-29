<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">
<h1>正资助的学生信息</h1>

<?php if(sizeof($pager->getResults()) != 0):?>
<div id="sf_admin_content">
<table class="sf_student_list">

<tbody>
<?php foreach ($pager->getResults() as $donation): ?>
<tr><td>

      &nbsp;<strong>姓名：&nbsp;</strong><?php echo $donation->getStudent()->getName() ?>
      &nbsp;<strong>性别：&nbsp;</strong><?php if( $donation->getStudent()->getMale()) echo "男"; else echo "女" ?>
      &nbsp;<strong>学校：&nbsp;</strong><?php echo $donation->getStudent()->getSchool()->getSchoolName() ?>      
      &nbsp;<strong>昵称：&nbsp;</strong><?php echo $donation->getStudent()->getNickname() ?>
      
      <br/>
      &nbsp;<strong>正受资助：&nbsp;</strong><?php if( $donation->getStudent()->getIsDonated()) echo "是"; else echo"否"; ?>
      &nbsp;<strong>在学中：&nbsp;</strong><?php if($donation->getStudent()->getIsInstudy())	 echo "是";?> 
      &nbsp;<strong>住宿生：&nbsp;</strong><?php if($donation->getStudent()->getIsBoarder()) echo "是";?>
      &nbsp;<strong>有退学史：&nbsp;</strong><?php echo $donation->getStudent()->getDropoutHistory()?>                 
      &nbsp;<strong>学期花费：&nbsp;</strong><?php echo $donation->getStudent()->getTermExpense() ?>
      <br/>
      &nbsp;<strong>资助史：&nbsp;</strong><?php echo $donation->getStudent()->getAssistHistory() ?>
      <br/>
      &nbsp;<strong>自述：&nbsp;</strong><?php echo $donation->getStudent()->getDiscription() ?>
      <br/>
      <?php echo link_to ('成绩单', '@score_by_student?student_id='.$donation->getStudent()->getStudentId(),'post=true') ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('调查记录', '@survey_by_student?student_id='.$donation->getStudent()->getStudentId(),'post=true') ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('资助记录', '@donation_student?student_id='.$donation->getStudent()->getStudentId().'&page=1','post=true') ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('详情', '@student_show?student_id='.$donation->getStudent()->getStudentId()) ?>
      <br/>
      <?php if (($sf_user->getAttribute('usertype', '')=='administrator') || ($sf_user->getAttribute('usertype', '')=='manager')
			|| ($sf_user->getAttribute('usertype', '')=='surveyor'))
			{
				echo link_to ('修改', '@student_edit?student_id='.$donation->getStudent()->getStudentId());
				echo "&nbsp;&nbsp;&nbsp;";
				echo link_to ('录入成绩单','@score_create?student_id='.$donation->getStudent()->getStudentId());
				echo "&nbsp;&nbsp;&nbsp;";
				echo link_to ('新建调查', '@survey_create?student_id='.$donation->getStudent()->getStudentId());
			}
	   ?>
</td>
</tr>
<?php endforeach; ?>

</tbody>
</table>

<?php include_partial('pager',array('pager' => $pager, 'page_to_link' => '@donation_my' ))?>

<?php else:?>
无相关记录<br/>
<br/><h3>点击 资助 -> 如何资助  查看资助流程说明</h3>
<?php endif;?>


</div>
</div>
