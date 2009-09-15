<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
<div id="Body">
<div id="Container">

<div id="Header">
<div id="HeaderContainer">
<h1><a href="/vhome/index.php/">Vhome</a></h1>
<div id="globalNav">
<ul>
<li><?php echo link_to("Home","")?></li>
<li><?php echo link_to("My Blog","blog/list")?></li>
<li><?php echo link_to("Department","department/list")?></li>
<li><?php echo link_to("Messagebox","message/list?type=in")?></li>
<li><?php echo link_to("Profile","user/show")?></li>
<?php if ($sf_user->isAuthenticated()): ?>	
<li><?php echo link_to("Logout","user/logout")?></li>
<?php else:?>
<li><?php echo link_to("Login","user/login")?></li>
<?php endif;?>
</ul>
</div><!-- globalNav -->
</div><!-- HeaderContainer -->
</div><!-- Header -->

<div id="Contents">
<div id="ContentsContainer">

<div id="localNav">
</div><!-- localNav -->

<?php echo $sf_data->getRaw('sf_content') ?>

</div><!-- ContentsContainer -->
</div><!-- Contents -->

<div id="Footer">
<div id="FooterContainer">
<p>Powered by <a href="http://www.ericsson.com/cn/" target="_blank">XBV</a></p>
</div><!-- FooterContainer -->
</div><!-- Footer -->

</div><!-- Container -->
</div><!-- Body -->

</body>
</html>
