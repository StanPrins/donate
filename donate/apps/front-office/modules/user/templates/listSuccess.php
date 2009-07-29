<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:38
?>
<div id="sf_admin_container">
<h1>志愿者信息</h1>

<div id="sf_admin_content">
<table cellspacing="0" class="sf_admin_list">

<thead>
<tr>
  <th>姓名</th>
  <th>用户名</th>
  <th>昵称</th>
  <th>权限</th>  
  <th>照片</th>
  <th>BBS ID</th>
  <th>OFS ID</th>
  <th>职责</th>
  <th>手机</th>
  <th>电话</th>
  <th>身份</th>
  <th>Email</th>
  <th>QQ</th>
  <th>MSN</th>
  <th>地址</th>
  <th>建立时间</th>
</tr>
</thead>
<tbody>
<?php $count_row = 0?>
<?php foreach ($pager->getResults() as $user): ?>

  <?php echo "<tr class='sf_admin_row_".$count_row."' >" ?>
      <td><?php echo $user->getName() ?></td>
      <td><?php echo $user->getUsername() ?></td>
      <td><?php echo $user->getNickname() ?></td>
      <td><?php 
         switch ($user->getUsertype()) 
         { 
            case "volunteer":     echo "普通志愿者";  break;
            case "surveyor":      echo "高级志愿者";  break;
            case "manager":       echo "管理员";      break;
            case "administrator": echo "超级用户";    break;
            default:              echo "错误信息";
          }       
       ?></td>      
      <td><?php echo $user->getPhoto() ?></td>
      <td><?php echo $user->getBbsId() ?></td>
      <td><?php echo $user->getOfsId() ?></td>
      <td><?php echo $user->getDuty() ?></td>
      <td><?php echo $user->getMobile() ?></td>
      <td><?php echo $user->getTel() ?></td>
      <td><?php echo $user->getIdentity() ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getQq() ?></td>
      <td><?php echo $user->getMsn() ?></td>
      <td><?php echo $user->getAddress() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
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

<?php include_partial('pager',array('pager' => $pager))?>

<?php echo link_to ('create', 'user/create') ?>
</div>
</div>
<!--     <td><?php echo link_to($user->getUserId(), 'user/show?user_id='.$user->getUserId()) ?></td> -->