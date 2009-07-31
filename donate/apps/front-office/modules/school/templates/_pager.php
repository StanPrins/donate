<?php if ($has_site):?>

<?php $schools = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), 'school/listsite?page='.$pager->getFirstPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), 'school/listsite?page='.$pager->getPreviousPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'school/listsite?page='.$page.'&site_id='.$schools[0]->getSiteId()) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), 'school/listsite?page='.$pager->getNextPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), 'school/listsite?page='.$pager->getLastPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('school/listsite')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo input_hidden_tag('site_id', $schools[0]->getSiteId()) ?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />


<?php else:?>

<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), 'school/list?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), 'school/list?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'school/list?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), 'school/list?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), 'school/list?page='.$pager->getLastPage()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('school/list')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />

<?php endif;?>