<?php use_helper('Object')?>
  <?php 
     echo select_tag('student_id',objects_for_select($student,'getStudentId','getName'));
  ?>
