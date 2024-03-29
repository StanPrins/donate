<?php
// auto-generated by sfPropelCrud
// date: 2009/09/03 02:13:30
?>
<div id="LayoutB" class="Layout">
<div id="Left">
<div class="parts pageNav">
<div class="partsHeading"><h3><?php echo $department->getTitle()?></h3></div>
<ul>
<li><?php echo link_to("Post a topic","topic/create?dpt_id=".$department->getId())?></li>
</ul>
</div>
</div><!-- Left -->
<div id="Center">
<div class="dparts searchResultList">
<div class="parts">
<div class="partsHeading"><h3>All Topics</h3></div>

<div class="block">
<div class="ditem">
<div class="item">
<?php if($pager->getNbResults()):?>
<?php foreach ($pager->getResults() as $topic): ?>
<dl>
    <dt><?php echo $topic->getCreatedAt() ?></dt>
    <dd><?php echo link_to($topic->getTitle(), 'topic/show?id='.$topic->getId()) ?>(<?php echo $topic->countComments()?><?php if($topic->getNewComment()) echo ';'.$topic->getNewComment()->getCreatedAt().'--'.$topic->getNewComment()->getUser()->getNickname()?>)</dd>
</dl>
<?php endforeach; ?>
<div class="pagerRelative"><p class="number">
<div class="pagerRelative">
<?php include_partial('blog/pager',array('pager' => $pager, 'page_to_link' => 'topic/list?dpt_id='.$department->getId().'&' ))?>
</div>
</div>
<?php else:?>
No topic in this department.
<?php endif;?>
</div></div></div>
</div><!-- parts -->
</div><!-- dparts -->
</div><!-- Center -->
</div><!-- Layout -->