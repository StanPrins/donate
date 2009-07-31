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
<ul id="navmenu-h">
<?php if($sf_user->getAttribute('usertype', '')=='administrator'): ?>
   <li><p><?php echo '超级用户:'.$sf_user->getAttribute('name', '') ?></p></li>
   <li><?php echo link_to('管理数据库', '#') ?>
     <ul>
       <li><?php echo link_to('donation', 'donation/list') ?></li>
       <li><?php echo link_to('projectsite', 'projectsite/list') ?></li>
       <li><?php echo link_to('remit', 'remit/list') ?></li>
       <li><?php echo link_to('reportcard', 'reportcard/list') ?></li>
       <li><?php echo link_to('school', 'school/list') ?></li>
       <li><?php echo link_to('student', 'student/list') ?></li>
       <li><?php echo link_to('survey', 'survey/list') ?></li>
       <li><?php echo link_to('user', 'user/list') ?></li>
     </ul>
   </li>
   <li><?php echo link_to('注销', 'login/logout') ?></li>
</ul>   
<?php else: ?>   
<?php endif ?>
  
     
</div>

<?php echo $sf_data->getRaw('sf_content') ?>

</body>
</html>
