<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">
<h1>学生信息</h1>

<div id="sf_admin_content">
<table class="sf_student_list">

<tbody>

<tr><td>


      &nbsp;<strong>姓名：&nbsp;</strong><?php echo $student->getName() ?>
      &nbsp;<strong>性别：&nbsp;</strong><?php if( $student->getMale()) echo "男"; else echo "女" ?>
      &nbsp;<strong>学校：&nbsp;</strong><?php echo $student->getSchool()->getSchoolName() ?>      
      &nbsp;<strong>昵称：&nbsp;</strong><?php echo $student->getNickname() ?>
      &nbsp;<strong>照片：&nbsp;</strong><?php echo $student->getPhoto() ?>
      <br/>
      &nbsp;<strong>所在地：&nbsp;</strong><?php echo $student->getProvince() ?>省<?php echo $student->getCity() ?>市      
      &nbsp;<strong>正受资助：&nbsp;</strong><?php if( $student->getIsDonated()) echo "是"; else echo"否"; ?>
      &nbsp;<strong>在学中：&nbsp;</strong><?php if($student->getIsInstudy())	 echo "是";?>
      &nbsp;<strong>有退学史：&nbsp;</strong><?php if($student->getHasDropoutHistory()) echo "是";?>                 
      &nbsp;<strong>学期花费：&nbsp;</strong><?php echo $student->getTermExpense() ?>
      <br/>
      &nbsp;<strong>受资助史：&nbsp;</strong><?php echo $student->getAssistHistory() ?>
      <br/>
      &nbsp;<strong>自述：&nbsp;</strong><?php echo $student->getDiscription() ?>
      <br/>
      <?php echo link_to ('详情', 'student/show?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('成绩单', 'reportcard/liststu?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <?php echo link_to ('调查记录', 'survey/liststu?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
      <br/>
      <?php echo link_to ('资助记录', 'donation/liststu?student_id='.$student->getStudentId()) ?>&nbsp;&nbsp;&nbsp;
           
</td></tr>


</tbody>
</table>

</div>
</div>
