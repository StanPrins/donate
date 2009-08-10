<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:38
?>
<div id="sf_admin_container">
<h1> 审批用户资格</h1>

<?php if(sizeof($pager->getResults()) != 0):?>
<div id="sf_admin_content">
<table cellspacing="0" class="sf_admin_list">

<thead>
<tr>
  <th>姓名</th>
  <th>用户名</th>
  <th>昵称</th>
  <th>权限</th>  
  <th>状态</th>
  <th>BBS ID</th>
  <th>OFS ID</th>
  <th>Email</th>
  <th>QQ</th>
  <th>MSN</th>
  <th>建立时间</th>
  <th>操作</th>
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
      <td><?php if($user->getApprove()) echo "已批准"; else { echo image_tag('admin_db/x.png'); echo "未批准"; }?></td>
      <td><?php echo $user->getBbsId() ?></td>
      <td><?php echo $user->getOfsId() ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getQq() ?></td>
      <td><?php echo $user->getMsn() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
      <td><?php 
                if(($sf_user->getAttribute('usertype', '')=='administrator') || ($sf_user->getAttribute('usertype', '')=='manager'))
                {
                   echo link_to('查看', '@user_show?user_id='.$user->getUserId(),'post=true');
                   echo "&nbsp;&nbsp;&nbsp;";
                   echo link_to('批复', '@user_edit?user_id='.$user->getUserId(),'post=true');
                   echo "&nbsp;&nbsp;&nbsp;";
                   echo link_to('删除', '@user_delete?user_id='.$user->getUserId(), 'post=true&confirm=真的要删除么？');
                } ?>
                   
      </td>
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

<?php else:?>
无相关记录<br/>
<?php endif;?>
</div>
</div>
