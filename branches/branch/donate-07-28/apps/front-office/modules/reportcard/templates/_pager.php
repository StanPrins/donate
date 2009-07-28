<?php $report_cards = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to(image_tag('admin_db/first.png'), 'reportcard/list?page='.$pager->getFirstPage().'&student_id='.$report_cards[0]->getStudentId()) ?>
  <?php echo link_to(image_tag('admin_db/previous.png'), 'reportcard/list?page='.$pager->getPreviousPage().'&student_id='.$report_cards[0]->getStudentId()) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'reportcard/list?page='.$page.'&student_id='.$report_cards[0]->getStudentId()) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
  <?php endforeach ?>
  <?php echo link_to(image_tag('admin_db/next.png'), 'reportcard/list?page='.$pager->getNextPage().'&student_id='.$report_cards[0]->getStudentId()) ?>
  <?php echo link_to(image_tag('admin_db/last.png'), 'reportcard/list?page='.$pager->getLastPage().'&student_id='.$report_cards[0]->getStudentId()) ?>
  <?php echo $pager->getNbResults() ?> results found.<br />
  Displaying results <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>.<br/>

  <?php echo form_tag('reportcard/list')?>
  Jump to Page <?php echo input_tag('page', 1, 'size=2' )?>
  <?php echo input_hidden_tag('student_id', $report_cards[0]->getStudentId()) ?>
  <?php echo submit_tag('Go!')?>
  </form>
<?php endif ?><br/>

