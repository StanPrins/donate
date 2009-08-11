

<?php if ($flag_no_all):?>

<?php $surveys = $pager->getResults()?>
<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), $page_to_link.'?page='.$pager->getFirstPage().'&student_id='.$surveys[0]->getStudentId()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), $page_to_link.'?page='.$pager->getPreviousPage().'&student_id='.$surveys[0]->getStudentId()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $page_to_link.'?page='.$page.'&student_id='.$surveys[0]->getStudentId()) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), $page_to_link.'?page='.$pager->getNextPage().'&student_id='.$surveys[0]->getStudentId()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), $page_to_link.'?page='.$pager->getLastPage().'&student_id='.$surveys[0]->getStudentId()) ?>
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
<?php echo input_hidden_tag('student_id', $surveys[0]->getStudentId()) ?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />


<?php else:?>

<?php if ($pager->haveToPaginate()): ?>
<?php echo link_to(image_tag('admin_db/first.png'), '@survey_list_all?page='.$pager->getFirstPage()) ?>
<?php echo link_to(image_tag('admin_db/previous.png'), '@survey_list_all?page='.$pager->getPreviousPage()) ?>
<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
<?php echo ($page == $pager->getPage()) ? $page : link_to($page, '@survey_list_all?page='.$page) ?>
<?php if ($page != $pager->getCurrentMaxLink()): ?><?php endif ?>
<?php endforeach ?>
<?php echo link_to(image_tag('admin_db/next.png'), '@survey_list_all?page='.$pager->getNextPage()) ?>
<?php echo link_to(image_tag('admin_db/last.png'), '@survey_list_all?page='.$pager->getLastPage()) ?>
<?php echo $pager->getNbResults() ?>
results found.
<br />
Displaying results
<?php echo $pager->getFirstIndice() ?>
to
<?php echo $pager->getLastIndice() ?>
.
<br />

<?php echo form_tag('@survey_list_all')?>
Jump to Page
<?php echo input_tag('page', 1, 'size=2' )?>
<?php echo submit_tag('Go!')?>
</form>
<?php endif ?>
<br />


<?php endif;?>
