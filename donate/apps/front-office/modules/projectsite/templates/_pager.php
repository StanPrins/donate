<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), 'projectsite/list?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), 'projectsite/list?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'projectsite/list?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), 'projectsite/list?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), 'projectsite/list?page='.$pager->getLastPage()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('projectsite/list')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />

