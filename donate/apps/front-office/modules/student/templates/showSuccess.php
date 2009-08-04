<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<div id="sf_admin_container">

<h1>学生信息</h1>

<?php use_helper('Object') ?>
<?php /*if (($sf_user->getAttribute('usertype', '')=='administrator') || ($sf_user->getAttribute('usertype', '')=='manager')
           || ($sf_user->getAttribute('usertype', '')=='surveyor'))
      {  
         echo link_to('修改', 'student/edit?student_id='.$student->getStudentId());
      }*/
 ?>

<div id="sf_admin_content">
<table>
  <tbody>

  <tr>
    <td class="name">学校：</td>
    <td class="content"><?php echo $student->getSchool()->getSchoolName() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getName() ?></td>
  </tr>
  <tr>
    <td class="name">昵称：</td>
    <td class="content"><?php echo $student->getNickname() ?></td>
  </tr>                
  <tr>
    <td class="name">照片：</td>
    <td class="content">
    <?php 
    if(!is_null($student->getPhoto()))
      echo image_tag('students/'.$student->getPhoto());
    else
      echo "暂未上传照片";
    ?>
    </td>
  </tr>    
  <tr>
    <td class="name">班主任：</td>
    <td class="content"><?php echo $student->getHeadTeacher() ?></td>
  </tr>
  <tr>
    <td class="name">监护人：</td>
    <td class="content"><?php echo $student->getGuardian() ?></td>
  </tr>
  <tr>
    <td class="name">生日：</td>
    <td class="content"><?php echo $student->getBirthday() ?></td>
  </tr>
  <tr>
    <td class="name">年级：</td>
    <td class="content"><?php echo $student->getGrade() ?></td>
  </tr>
  <tr>
    <td class="name">性别：</td>
    <td class="content">
    <?php
       if ($student->getMale())       
         echo '男';
      else
         echo '女';       
    ?>
    </td>
  </tr>                            
  <tr>
    <td class="name">地址：</td>
    <td class="content"><?php echo $student->getAddress() ?></td>
  </tr>
  <tr>
    <td class="name">邮编：</td>
    <td class="content"><?php if ($student->getPostal()) echo $student->getPostal(); ?></td>
  </tr>          
  <tr>
    <td class="name">城市：</td>
    <td class="content"><?php echo $student->getCity() ?></td>
  </tr>    
  <tr>
    <td class="name">省：</td>
    <td class="content"><?php echo $student->getProvince() ?></td>
  </tr>
  <tr>
    <td class="name">资助历史：</td>
    <td class="content"><?php echo $student->getAssistHistory() ?></td>
  </tr>
  <tr>
    <td class="name">上学中：</td>
    <td class="content">
    <?php if($student->getIsInStudy()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">寄宿生：</td>
    <td class="content">
    <?php if($student->getIsBoarder()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">有退学史：</td>
    <td class="content">
    <?php if ($student->getHasDropoutHistory()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">学期花费：</td>
    <td class="content"><?php if ($student->getTermExpense()) echo $student->getTermExpense(); ?></td>
  </tr>
  <tr>
    <td class="name">个人简介：</td>
    <td class="content"><?php echo $student->getDiscription() ?></td>
  </tr>
  <tbody>
</table>

<br/>
<h2>亲属1</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm1Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm1Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm1Age()) echo $student->getFm1Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm1Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm1Discription() ?></td>
  </tr>
  </tbody>
</table>

<br/>
<h2>亲属2</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm2Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm2Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if($student->getFm2Age()) echo $student->getFm2Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm2Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm2Discription() ?></td>
  </tr>
  </tbody>
</table>

<br/>
<h2>亲属3</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm3Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm3Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm3Age()) echo $student->getFm3Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm3Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm3Discription() ?></td>
  </tr>
  </tbody>
</table>

<br/>
<h2>亲属4</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm4Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm4Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm4Age()) echo $student->getFm4Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm4Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm4Discription() ?></td>
  </tr>
  </tbody>
</table>
</div>
<?php if ($sf_params->has('after_edit')): ?>
<a href="javascript:history.go(-2)">返回</a>
<?php else:?>
<a href="javascript:history.go(-1)">返回</a>
<?php endif;?>
<a href="#" onclick="javascript:window.open('http://localhost/donate_svn/web/print.html','打印预览','height=600,width=400,top=0,left=0,toolbar=no,menubar=no,scrollbars=yes,resizable=no,location=no,status=no');">打印预览</a>
</div>
