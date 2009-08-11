
<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to(image_tag('admin_db/first.png'), $page_to_link.'?page='.$pager->getFirstPage().'&school_id='.$school_id.'&site_id='.$site_id) ?>
  <?php echo link_to(image_tag('admin_db/previous.png'), $page_to_link.'?page='.$pager->getPreviousPage().'&school_id='.$school_id.'&site_id='.$site_id) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, $page_to_link.'?page='.$page.'&school_id='.$school_id.'&site_id='.$site_id) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
  <?php endforeach ?>
  <?php echo link_to(image_tag('admin_db/next.png'), $page_to_link.'?page='.$pager->getNextPage().'&school_id='.$school_id.'&site_id='.$site_id) ?>
  <?php echo link_to(image_tag('admin_db/last.png'), $page_to_link.'?page='.$pager->getLastPage().'&school_id='.$school_id.'&site_id='.$site_id) ?>
  <?php echo $pager->getNbResults() ?> results found.<br />
  Displaying results <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>.<br/>

  <?php echo form_tag($page_to_link.'?'.'&school_id='.$school_id.'&site_id='.$site_id)?>
  Jump to Page <?php echo input_tag('page', 1, 'size=2' )?>
  <?php echo submit_tag('Go!')?>
  </form>
<?php endif ?><br/>