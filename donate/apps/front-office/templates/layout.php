<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>
<body style="width:760px">

<div id="banner" >
  <?php echo image_tag('banner.jpg', 'alt=banner ') ?>
</div>	

<div id="header" >
<ul id="navmenu-h">
<?php if ($sf_user->isAuthenticated()): ?>	  	

   <?php if ($sf_user->getAttribute('usertype', '')=='volunteer'): ?>   
   <li><p><?php echo '志愿者:'.$sf_user->getAttribute('name', '') ?></p></li>
   <li><?php echo link_to('资助', '#') ?>
     <ul>
       <li><?php echo link_to('当前资助', '@donation_my') ?></li>
       <li><?php echo link_to('过期资助', '@donation_overdue') ?></li>
       <li><?php echo link_to('我要资助', '@student_need_donate') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('审批项', '#') ?>
     <ul>
       <li><?php echo link_to('待审批资助', '@donation_pending') ?></li>
       <li><?php echo link_to('未完成到款', '@user_remit_pending') ?></li>     
     </ul>   
   </li>
   <li><?php echo link_to('个人信息', '@user_edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   
   
   <?php elseif($sf_user->getAttribute('usertype', '')=='surveyor'): ?>
   
   <li><p><?php echo '调查员:'.$sf_user->getAttribute('name', '') ?></p></li>
   <li><?php echo link_to('资助', '#') ?>
     <ul>
       <li><?php echo link_to('当前资助', '@donation_my') ?></li>
       <li><?php echo link_to('过期资助', '@donation_overdue') ?></li>
       <li><?php echo link_to('我要资助', '@student_need_donate') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('审批项', '#') ?>
     <ul>
       <li><?php echo link_to('待审批资助', '@donation_pending') ?></li>
       <li><?php echo link_to('审批到款', '@remit_pending') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('走访', '#') ?>
     <ul>
       <li><?php echo link_to('我的调查', '@survey_i_fill') ?></li>
       <li><?php echo link_to('我的成绩单', '@score_i_fill') ?></li>
       <li><?php echo link_to('录入走访表', '@investigation_add') ?></li>
     </ul>
   </li>   
   <li><?php echo link_to('学生', '#') ?>
     <ul>
       <li><?php echo link_to('添加学生', 'student/create') ?></li>
       <li><?php echo link_to('所有学生', '@student_list_all') ?></li>
     </ul>
   </li>  
   <li><?php echo link_to('个人信息', '@user_edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   
   
   <?php elseif($sf_user->getAttribute('usertype', '')=='manager'): ?>
   
   <li><p><?php echo '管理员:'.$sf_user->getAttribute('name', '') ?></p></li>
   <li><?php echo link_to('资助', '#') ?>
     <ul>
       <li><?php echo link_to('当前资助', '@donation_my') ?></li>
       <li><?php echo link_to('过期资助', '@donation_overdue') ?></li>
       <li><?php echo link_to('我要资助', '@student_need_donate') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('审批项', '#') ?>
     <ul>
       <li><?php echo link_to('审批资助', '@donation_approve') ?></li>
       <li><?php echo link_to('审批用户', '@user_approve') ?></li>
       <li><?php echo link_to('审批到款', '@remit_pending') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('走访', '#') ?>
     <ul>
       <li><?php echo link_to('我的调查', '@survey_i_fill') ?></li>
       <li><?php echo link_to('所有调查', '@survey_list_all') ?></li>
       <li><?php echo link_to('我的成绩单', '@score_i_fill') ?></li>
       <li><?php echo link_to('所有成绩单', '@score_list_all') ?></li>
       <li><?php echo link_to('录入走访表', '@investigation_add') ?></li>
     </ul>
   </li>     
   <li><?php echo link_to('学生', '#') ?>
     <ul>
       <li><?php echo link_to('添加学生', 'student/create') ?></li>
       <li><?php echo link_to('所有学生', '@student_list_all') ?></li>
     </ul>
   </li> 
   <li><?php echo link_to('用户管理', '@all_user') ?></li>
   <li><?php echo link_to('资助项目管理', '#') ?>
     <ul>
       <li><?php echo link_to('资助点管理', '@site_list') ?></li>
       <li><?php echo link_to('学校管理', '@school_list') ?></li>     
     </ul>
   </li>
   <li><?php echo link_to('个人信息', '@user_edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   
   
   <?php elseif($sf_user->getAttribute('usertype', '')=='administrator'): ?>
   
   <li><p><?php echo '超级用户:'.$sf_user->getAttribute('name', '') ?></p></li>
   <li><?php echo link_to('资助', '#') ?>
     <ul>
       <li><?php echo link_to('当前资助', '@donation_my') ?></li>
       <li><?php echo link_to('过期资助', '@donation_overdue') ?></li>
       <li><?php echo link_to('我要资助', '@student_need_donate') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('审批项', '#') ?>
     <ul>
       <li><?php echo link_to('审批资助', '@donation_approve') ?></li>
       <li><?php echo link_to('审批用户', '@user_approve') ?></li>
       <li><?php echo link_to('审批到款', '@remit_pending') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('走访', '#') ?>
     <ul>
       <li><?php echo link_to('我的调查', '@survey_i_fill') ?></li>
       <li><?php echo link_to('所有调查', '@survey_list_all') ?></li>
       <li><?php echo link_to('我的成绩单', '@score_i_fill') ?></li>
       <li><?php echo link_to('所有成绩单', '@score_list_all') ?></li>
       <li><?php echo link_to('录入走访表', '@investigation_add') ?></li>
     </ul>
   </li>     
   <li><?php echo link_to('学生', '#') ?>
     <ul>
       <li><?php echo link_to('添加学生', 'student/create') ?></li>
       <li><?php echo link_to('所有学生', '@student_list_all') ?></li>
     </ul>
   </li> 
   <li><?php echo link_to('用户管理', '@all_user') ?></li>
   <li><?php echo link_to('资助项目管理', '#') ?>
     <ul>
       <li><?php echo link_to('资助点管理', '@site_list') ?></li>
       <li><?php echo link_to('学校管理', '@school_list') ?></li>     
     </ul>
   </li>
   <li><?php echo link_to('个人信息', '@user_edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   
   <?php else: ?>  	
   <?php endif ?>      
   <li><?php echo link_to('注销', 'login/logout') ?></li>
   
<?php else: ?>   
<?php endif ?>
 </ul>  
     
</div>


<div id="content_main">
<?php echo $sf_data->getRaw('sf_content') ?>
</div>


<div id="footer">
	
<br><p>&nbsp;</p>
<hr/>
<br/>
Copyright(C)  2006-2009  www.ourfreesky.org  All rights reserved.
<br/>
OFS爱心热线：086-010-62246033 我们的自由天空 版权所有   未经许可 请勿转载 京ICP备07002433号 
<br/>
使用中的任何问题或建议请与 ourfreesky.org@hotmail.com 联系


</div>


</body>
</html>

