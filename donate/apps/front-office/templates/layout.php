<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>
<body>

<div id="banner" >
  <?php echo image_tag('banner.jpg', 'alt=banner ') ?>
</div>	

<div id="header" >
<ul>
<?php if ($sf_user->isAuthenticated()): ?>	  	
   <?php if ($sf_user->getAttribute('usertype', '')=='volunteer'): ?>   
   <li><?php echo '志愿者:'.$sf_user->getAttribute('name', '') ?></li>
   <li><?php echo link_to('当前资助', 'donation/listmy') ?></li>
   <li><?php echo link_to('过期资助', 'donation/listold') ?></li>
   <li><?php echo link_to('我要资助', 'student/listno') ?></li>
   <li><?php echo link_to('待审批资助', 'donation/listpend') ?></li>
   <li><?php echo link_to('未完成到款', 'remit/listpenduser') ?></li>
   <li><?php echo link_to('个人信息', 'user/edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   <?php elseif($sf_user->getAttribute('usertype', '')=='surveyor'): ?>
   <li><?php echo '调查员:'.$sf_user->getAttribute('name', '') ?></li>
   <li><?php echo link_to('当前资助', 'donation/listmy') ?></li>
   <li><?php echo link_to('过期资助', 'donation/listold') ?></li>
   <li><?php echo link_to('我要资助', 'student/listno') ?></li>
   <li><?php echo link_to('待审批资助', 'donation/listpend') ?></li>
   <li><?php echo link_to('审批到款', 'remit/listpend') ?></li>
   <li><?php echo link_to('我的调查', 'survey/listmy') ?></li>
   <li><?php echo link_to('添加学生', 'student/create') ?></li>
   <li><?php echo link_to('所有学生', 'student/listall') ?></li>
   <li><?php echo link_to('个人信息', 'user/edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   <?php elseif($sf_user->getAttribute('usertype', '')=='manager'): ?>
   <li><?php echo '管理员:'.$sf_user->getAttribute('name', '') ?></li>
   <li><?php echo link_to('当前资助', 'donation/listmy') ?></li>
   <li><?php echo link_to('过期资助', 'donation/listold') ?></li>
   <li><?php echo link_to('我要资助', 'student/listno') ?></li>
   <li><?php echo link_to('审批资助', 'donation/approve') ?></li>
   <li><?php echo link_to('审批用户', 'user/approve') ?></li>
   <li><?php echo link_to('审批到款', 'remit/listpend') ?></li>
   <li><?php echo link_to('我的调查', 'survey/listmy') ?></li>
   <li><?php echo link_to('添加学生', 'student/create') ?></li>
   <li><?php echo link_to('所有学生', 'student/listall') ?></li>
   <li><?php echo link_to('所有用户', 'user/listall') ?></li>
   <li><?php echo link_to('资助点管理', 'projectsite/list') ?></li>
   <li><?php echo link_to('资助学校管理', 'school/list') ?></li>
   <li><?php echo link_to('个人信息', 'user/edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
   <?php elseif($sf_user->getAttribute('usertype', '')=='administrator'): ?>
   <li><?php echo '超级用户:'.$sf_user->getAttribute('name', '') ?></li>
   <li><?php echo link_to('当前资助', 'donation/listmy') ?></li>
   <li><?php echo link_to('过期资助', 'donation/listold') ?></li>
   <li><?php echo link_to('我要资助', 'student/listno') ?></li>
   <li><?php echo link_to('审批资助', 'donation/approve') ?></li>
   <li><?php echo link_to('审批用户', 'user/approve') ?></li>
   <li><?php echo link_to('审批到款', 'remit/listpend') ?></li>
   <li><?php echo link_to('我的调查', 'survey/listmy') ?></li>
   <li><?php echo link_to('添加学生', 'student/create') ?></li>
   <li><?php echo link_to('所有学生', 'student/listall') ?></li>
   <li><?php echo link_to('所有用户', 'user/listall') ?></li>
   <li><?php echo link_to('数据库管理', 'student/listpend') ?></li>   
   <li><?php echo link_to('个人信息', 'user/edit?user_id='.$sf_user->getAttribute('user_id', ''),'post=true') ?></li>
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

</body>
</html>
     <!-- 
     <li><?php echo link_to('我资助的', 'student/mylist') ?></li>
     <li><?php echo link_to('未资助的', 'student/list') ?></li>
     <li><?php echo link_to('待审核资助', '../index.php') ?></li>
     <li><?php echo link_to('曾资助过的同学', '../index.php') ?></li>  
     <li><?php echo link_to('我的账户管理', '../index.php') ?></li>        
      -->
