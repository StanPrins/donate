<?php $remits = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), 'remit/listdonate?page='.$pager->getFirstPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), 'remit/listdonate?page='.$pager->getPreviousPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'remit/listdonate?page='.$page.'&donation_id='.$remits[0]->getDonationId()) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), 'remit/listdonate?page='.$pager->getNextPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), 'remit/listdonate?page='.$pager->getLastPage().'&donation_id='.$remits[0]->getDonationId()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('remit/listdonate')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo input_hidden_tag('donation_id', $remits[0]->getDonationId()) ?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />


