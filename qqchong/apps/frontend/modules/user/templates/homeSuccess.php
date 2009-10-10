<?php
	//Home
?>
<?php use_helper('Javascript')?>
<div id="LayoutB" class="Layout">
<div id="Left">
<?php if(sizeof($nmembers)>0 && $owner->getDroit()>=100):?>
<div class="parts pageNav">
<div class="partsHeading"><h3>Not Approved(<?php echo sizeof($nmembers)?>)</h3></div>
<ul>
<?php foreach($nmembers as $nmember):?>
<li><?php echo link_to($nmember->getNickname(),'user/show?id='.$nmember->getId())?></li>
<?php endforeach;?>
</ul>
</div>
<?php endif;?>

<?php if(sizeof($amembers)>0):?>
<div class="parts pageNav">
<div class="partsHeading"><h3>Active Members(<?php echo sizeof($amembers)?>)</h3></div>
<ul>
<?php foreach($amembers as $amember):?>
<li><?php echo link_to($amember['nickname'],'blog/list?userid='.$amember['user_id'])?>(<?php echo $amember['count']?>)</li>
<?php endforeach;?>
</ul>
</div>
<?php endif;?>
<?php if(sizeof($imembers)>0):?>
<div class="parts pageNav">
<div class="partsHeading"><h3>Inactive Memebers(<?php echo sizeof($imembers)?>)</h3></div>
<ul>
<?php foreach($imembers as $imember):?>
<li><?php echo link_to($imember['nickname'],'blog/list?userid='.$imember['user_id'])?>(<?php echo $imember['time']?('No update '.$imember['time'].' days.'):'No blog yet.'?>)</li>
<?php endforeach;?>
</ul>
</div>
<?php endif;?>
</div><!-- Left -->

<div id="Center">
<div id="homeRecentList_51" class="dparts homeRecentList"><div class="parts">
<div class="partsHeading"><h3>Hot Topics</h3></div>
<div class="block">
<?php if($hnumber):?>
<?php foreach($hots as $hot):?>
<ul class="articleList">
<li><span class="date"><?php echo date('y-m-d',strtotime($hot->getCreatedAt()))?></span>
<?php echo link_to($hot->getTitle(),'blog/show?id='.$hot->getId())?><br /><?php echo $hot->getUser()->getNickname().'--'.$hot->countComments().' comments'?><?php if($hot->getNewComment()) echo ';'.date('Y-m-d',strtotime($hot->getNewComment()->getCreatedAt())).'--'.$hot->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach;?>
<?php if($hnumber >= $item_max): ?>
<div class="moreInfo">
<ul class="moreInfo">
<li><?php echo link_to_remote('More',array('update'=>'Center','url'=>'user/recent?type=hot'))?></li>
</ul>
</div>
<? endif; ?>
<?php else:?>
<div class="moreInfo">
<ul class="articleList">
<li>No update in a week.</li>
</ul>
</div>
<?php endif;?>
</div></div></div>

<div id="homeRecentList_52" class="dparts homeRecentList"><div class="parts">
<div class="partsHeading"><h3>Recently Posted Diaries of All</h3></div>
<div class="block">
<?php if($bnumber):?>
<?php foreach($blogs as $blog):?>
<ul class="articleList">
<li><span class="date"><?php echo date('y-m-d',strtotime($blog->getCreatedAt()))?></span>
<?php echo link_to($blog->getTitle(),'blog/show?id='.$blog->getId())?><br /><?php echo $blog->getUser()->getNickname().'--'.$blog->countComments().' comments'?><?php if($blog->getNewComment()) echo ';'.$blog->getNewComment()->getCreatedAt().'--'.$blog->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach;?>
<? if($bnumber >= $item_max): ?>
<div class="moreInfo">
<ul class="moreInfo">
<li><?php echo link_to_remote('More',array('update'=>'Center','url'=>'user/recent?type=all'))?></li>
</ul>
</div>
<? endif; ?>
<?php else:?>
<div class="moreInfo">
<ul class="articleList">
<li>No update in a week.</li>
</ul>
</div>
<?php endif;?>
</div>
</div></div>
<div id="homeRecentList_46" class="dparts homeRecentList"><div class="parts">
<div class="partsHeading"><h3>Recently Posted Community Topics</h3></div>
<div class="block">
<?php if($tnumber):?>
<?php foreach($topics as $topic):?>
<ul class="articleList">
<li><span class="date"><?php echo date('y-m-d',strtotime($topic->getCreatedAt()))?></span>
<?php echo link_to($topic->getTitle(),'topic/show?id='.$topic->getId())?><br /><?php echo $topic->getUser()->getNickname().'--'.$topic->countComments().' comments'?><?php if($topic->getNewComment()) echo ';'.$topic->getNewComment()->getCreatedAt().'--'.$topic->getNewComment()->getUser()->getNickname()?></li>
</ul>
<?php endforeach;?>
<? if($tnumber >= $item_max): ?>
<div class="moreInfo">
<ul class="moreInfo">
<li><?php echo link_to_remote('More',array('update'=>'Center','url'=>'user/recent?type=topic'))?></li>
</ul>
</div>
<? endif; ?>
<?php else:?>
<div class="moreInfo">
<ul class="articleList">
<li>No update in a week.</li>
</ul>
</div>
<?php endif;?>
</div></div></div>
</div><!-- Center -->


</div><!-- Layout -->