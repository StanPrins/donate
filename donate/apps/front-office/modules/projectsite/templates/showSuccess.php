<?php
// auto-generated by sfPropelCrud
// date: 2009/07/17 09:11:36
?>

<div id="sf_admin_container">

<h1>项目点详情</h1>

<?php use_helper('Object') ?>

<div id="sf_admin_content">


<table >
  <tbody>
  <tr>
    <td class="name">项目号：</td>
    <td class="content"><?php echo $project_site->getSiteId() ?></td>
  </tr>
  <tr>
    <td class="name">项目名称：</td>
    <td class="content"><?php echo $project_site->getSiteName() ?></td>
  </tr>

  <tr>
    <td class="name">省：</td>
    <td class="content"><?php echo $project_site->getProvince() ?></td>
  </tr>

  <tr>
    <td class="name">城市：</td>
    <td class="content"><?php echo $project_site->getCity() ?></td>
  </tr>  

  <tr>
    <td class="name">区：</td>
    <td class="content"><?php echo $project_site->getDistrict() ?></td>
  </tr>
  
  <tr>
    <td class="name">简介</td>
    <td class="content"><?php echo $project_site->getDiscription() ?></td>
  </tr> 
  </tbody>  
</table>
</div>



<?php if ($sf_params->has('after_edit')): ?>
<a href="javascript:history.go(-2)">返回</a>
<?php else:?>
<a href="javascript:history.go(-1)">返回</a>
<?php endif;?>     

</div>