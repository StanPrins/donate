<?php
?>
<?php use_helper('Javascript')?>
<?php if($type=='hot'):?>
<div id="homeRecentList_51" class="dparts homeRecentList">
<div class="parts">
<div class="partsHeading"><h3>All hot Topics</h3></div>

<div class="block">
<div class="ditem">
<div class="item">
<?php foreach ($pager->getResults() as $item): ?>
<ul class="articleList">
    <li><span class='date'><?php echo date('y-m-d',strtotime($item->getCreatedAt())) ?></span>
    <?php echo link_to($item->getTitle(), 'blog/show?id='.$item->getId(), array('target'=>'_blank')) ?><br /><?php echo $item->getUser()->getNickname().'--'.$item->countComments().' comments'?><?php if($item->getNewComment()) echo ';'.date('Y-m-d',strtotime($item->getNewComment()->getCreatedAt())).'--'.$item->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach; ?>
<div class="pagerRelative"><p class="number">
<div class="pagerRelative">
<?php include_partial('user/pager',array('pager' => $pager, 'page_to_link' => 'user/recent?type=hot&' ))?>
</div>
</div>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->
<?php endif;?>
<?php if($type=='all'):?>
<div id="homeRecentList_52" class="dparts homeRecentList">
<div class="parts">
<div class="partsHeading"><h3>All Blogs</h3></div>

<div class="block">
<div class="ditem">
<div class="item">
<?php foreach ($pager->getResults() as $item): ?>
<ul class="articleList">
    <li><span class='date'><?php echo date('y-m-d',strtotime($item->getCreatedAt())) ?></span>
    <?php echo link_to($item->getTitle(), 'blog/show?id='.$item->getId(),array('target'=>'_blank')) ?><br /><?php echo $item->getUser()->getNickname().'--'.$item->countComments().' comments'?><?php if($item->getNewComment()) echo ';'.date('Y-m-d',strtotime($item->getNewComment()->getCreatedAt())).'--'.$item->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach; ?>
<div class="pagerRelative"><p class="number">
<div class="pagerRelative">
<?php include_partial('user/pager',array('pager' => $pager, 'page_to_link' => 'user/recent?type=all&' ))?>
</div>
</div>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->
<?php endif;?>
<?php if($type=='topic'):?>
<div id="homeRecentList_46" class="dparts homeRecentList">
<div class="parts">
<div class="partsHeading"><h3>All community Topics</h3></div>

<div class="block">
<div class="ditem">
<div class="item">
<?php foreach ($pager->getResults() as $item): ?>
<ul class="articleList">
    <li><span class='date'><?php echo date('y-m-d',strtotime($item->getCreatedAt())) ?></span>
    <?php echo link_to($item->getTitle(), 'topic/show?id='.$item->getId(),array('target'=>'_blank')) ?><br /><?php echo $item->getUser()->getNickname().'--'.$item->countComments().' comments'?><?php if($item->getNewComment()) echo ';'.date('Y-m-d',strtotime($item->getNewComment()->getCreatedAt())).'--'.$item->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach; ?>
<div class="pagerRelative"><p class="number">
<div class="pagerRelative">
<?php include_partial('user/pager',array('pager' => $pager, 'page_to_link' => 'user/recent?type=topic&' ))?>
</div>
</div>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->
<?php endif;?>