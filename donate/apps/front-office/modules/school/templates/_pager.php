<?php if ($has_site):?>

<?php $schools = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), '@school_by_site?page='.$pager->getFirstPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), '@school_by_site?page='.$pager->getPreviousPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, '@school_by_site?page='.$page.'&site_id='.$schools[0]->getSiteId()) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), '@school_by_site?page='.$pager->getNextPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), '@school_by_site?page='.$pager->getLastPage().'&site_id='.$schools[0]->getSiteId()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('@school_by_site?site_id='.$schools[0]->getSiteId())?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>

<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />


<?php else:?>

<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), '@school_list?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), '@school_list?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, '@school_list?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), '@school_list?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), '@school_list?page='.$pager->getLastPage()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('@school_list')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />

<?php endif;?>