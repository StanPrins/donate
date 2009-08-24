<?php
// auto-generated by sfPropelCrud
// date: 2009/07/17 09:11:36
?>
<?php use_helper('Text') ?>
<div id="sf_admin_container">
<h1>项目点管理</h1>

<?php if(sizeof($pager->getResults()) != 0):?>
<div id="sf_admin_content">
<table cellspacing="0" class="sf_admin_list">
<thead>
<tr>
  <th>站点名</th>
  <th>省</th>
  <th>城市</th>
  <th>区</th>
  <th>简介</th>
  <th>操作</th>
  <th>包括学校</th>
</tr>
</thead>
<tbody>
<?php $count_row = 0?>
<?php foreach ($pager->getResults() as $project_site): ?>

  <?php echo "<tr class='sf_admin_row_".$count_row."' >" ?>
    <td><?php echo $project_site->getSiteName() ?></td>
    <td><?php echo $project_site->getProvince() ?></td>
    <td><?php echo $project_site->getCity() ?></td>
    <td><?php echo $project_site->getDistrict() ?></td>
    <td class="discription"><?php echo truncate_text(strip_tags($project_site->getDiscription()), 200) ?></td>
    <td>
    <?php 
      echo link_to('详情', '@site_show?site_id='.$project_site->getSiteId());
      echo "&nbsp;&nbsp;&nbsp;";
      echo link_to('修改', '@site_edit?site_id='.$project_site->getSiteId());
    ?></td>
    <td width="15%"><?php echo link_to('查看该地区学校', '@school_by_site?site_id='.$project_site->getSiteId()) ?></td> 
  <?php
    if($count_row)
       $count_row = 0;
    else
       $count_row = 1;
  ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php include_partial('pager',array('pager' => $pager ))?>

<?php else:?>
无相关记录<br/>
<?php endif;?>

<?php echo link_to ('新建项目点', 'projectsite/create') ?>
</div>

</div>