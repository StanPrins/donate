<?php
// auto-generated by sfPropelCrud
// date: 2009/09/03 02:13:30
?>
<div id="LayoutA" class="Layout">
<div id="Left">
<div class="parts pageNav">
<div class="partsHeading"><h3><?php echo $topic->getDepartment()->getTitle()?></h3></div>
<ul>
<?php if($user==$topic->getUser()->getId()):?>
<li><?php echo link_to("Post a topic","topic/create?dpt_id=".$topic->getDepartment()->getId())?></li>
<li><?php echo link_to("Edit the topic","topic/edit?id=".$topic->getId())?></li>
<?php endif;?>
<?php if($user==$topic->getUser()->getId() || $user==$topic->getDepartment()->getManagerId()):?>
<li><?php echo link_to("Delete the topic","topic/delete?id=".$topic->getId(),'post=true&confirm=Are you sure?') ?></li>
<?php endif;?>
<li><?php echo link_to("List all blogs","topic/list?dpt_id=".$topic->getDepartment()->getId())?></li>
</ul>
</div>
</div><!-- Left -->
<div id="Center">
<div class="dparts recentList"><div class="parts">
<div class="partsHeading"><h3><?php echo $topic->getTitle() ?></h3></div>
<table>
<tbody>
<tr>
<td><?php echo $topic->getContent() ?></td>
</tr>
</tbody>
</table>
<div class="partsHeading"><h3>Comments</h3></div>
<?php if($pager->getNbResults()):?>
<?php foreach($pager->getResults() as $comment):?>
<table>
<tbody>
<tr>
<td><?php echo $comment->getCreatedAt() ?>:<?php echo $comment->getUser()->getNickname() ?></td>
</tr>
<tr>
<td><?php echo $comment->getContent() ?></td>
</tr>
</tbody>
</table>
<?php endforeach;?>
<div class="pagerRelative"><p class="number">
<div class="pagerRelative">
<?php include_partial('blog/pager',array('pager' => $pager, 'page_to_link' => 'topic/show?id='.$topic->getId().'&' ))?>
</div>
</div>
<?php else:?>
No comment.
<?php endif;?>
<?php echo form_tag('comment/update') ?>
<?php echo input_hidden_tag('topic_id',$topic->getId())?>
<?php $options = array(
	'rich' => 'fck',
	'height' => 150,
	'width'	=> 720,
    'tool'  => 'Basic',
);
echo textarea_tag('content', '', $options ); 
  ?>
<?php echo submit_tag('Publish') ?>
<?php echo "</form>"?>
</div></div>
</div><!-- Center -->
</div><!-- Layout -->
