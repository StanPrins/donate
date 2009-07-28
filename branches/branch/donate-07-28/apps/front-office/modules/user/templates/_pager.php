<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to(image_tag('admin_db/first.png'), 'user/list?page='.$pager->getFirstPage()) ?>
  <?php echo link_to(image_tag('admin_db/previous.png'), 'user/list?page='.$pager->getPreviousPage()) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'user/list?page='.$page) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
  <?php endforeach ?>
  <?php echo link_to(image_tag('admin_db/next.png'), 'user/list?page='.$pager->getNextPage()) ?>
  <?php echo link_to(image_tag('admin_db/last.png'), 'user/list?page='.$pager->getLastPage()) ?>
<?php endif ?><br/>

<?php echo $pager->getNbResults() ?> results found.<br />
Displaying results <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>.<br/>

<?php echo form_tag('user/list')?>
  Jump to Page <?php echo input_tag('page', 1, 'size=2' )?>
  <?php echo submit_tag('Go!')?>
</form>