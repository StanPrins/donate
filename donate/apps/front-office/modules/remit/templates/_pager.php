<?php if ($listpend): ?>

<?php $remits = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), $page_to_link.'?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), $page_to_link.'?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $page_to_link.'?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), $page_to_link.'?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), $page_to_link.'?page='.$pager->getLastPage()) ?>
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
<?php echo input_hidden_tag('donation_id', $remits[0]->getDonationId()) ?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />

<?php else:?>

<?php $remits = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), '@remit_by_donation?page='.$pager->getFirstPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), '@remit_by_donation?page='.$pager->getPreviousPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, '@remit_by_donation?page='.$page.'&donation_id='.$remits[0]->getDonationId()) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), '@remit_by_donation?page='.$pager->getNextPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), '@remit_by_donation?page='.$pager->getLastPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('@remit_by_donation?&donation_id='.$remits[0]->getDonationId())?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>

<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />

<?php endif?>
