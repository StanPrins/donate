
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), $page_to_link.'page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), $page_to_link.'page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $page_to_link.'page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), $page_to_link.'page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), $page_to_link.'page='.$pager->getLastPage()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
 to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag($page_to_link)?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
<?php echo "</form>"?>
<?php endif ?>
<br />
