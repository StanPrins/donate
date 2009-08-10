<?php use_helper('Object')?>
<?php echo select_tag('school_id', objects_for_select($school,'getSchoolId','getSchoolName'))?>