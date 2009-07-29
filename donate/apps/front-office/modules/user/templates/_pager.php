<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), 'user/listall?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), 'user/listall?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'user/listall?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), 'user/listall?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), 'user/listall?page='.$pager->getLastPage()) ?>

<br />

<?php echo $pager->getNbResults() ?>
results found.
&nbsp;
Displaying results&nbsp;
<?php echo $pager->getFirstIndice() ?>
&nbsp;to
<?php echo $pager->getLastIndice() ?>
&nbsp;.
<br />

<?php echo form_tag('user/listall')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>