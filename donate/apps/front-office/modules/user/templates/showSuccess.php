<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:38
?>
<div id="sf_admin_container">

<h1>志愿者信息</h1>

<?php use_helper('Object') ?>

<div id="sf_admin_content">
<table>
  <tbody>
  <tr>
    <td class="name">志愿者：</td>
    <td class="content"><?php echo $user->getUserId() ?></td>
  </tr>
  <tr>
    <td class="name">用户名：</td>
    <td class="content"><?php echo $user->getUsername() ?></td>
  </tr>
  <tr>
    <td class="name">昵称：</td>
    <td class="content"><?php echo $user->getNickname() ?></td>
  </tr>
  <tr>
    <td class="name">密码：</td>
    <td class="content"><?php //echo $user->getPassword() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $user->getName() ?></td>
  </tr>
  <tr>
    <td class="name">身份证号：</td>
    <td class="content"><?php echo $user->getIdCard() ?></td>
  </tr>             
  <tr>
    <td class="name">照片：</td>
    <td class="content">
    <?php 
    if(!is_null($user->getPhoto()))
      echo image_tag('users/'.$user->getPhoto());
    else
      echo "暂未上传照片";
    ?>
    </td>
  </tr>
  <tr>
    <td class="name">BBS 帐号：</td>
    <td class="content"><?php echo $user->getBbsId() ?></td>
  </tr>
  <tr>
    <td class="name">Ofs 帐号：</td>
    <td class="content"><?php echo $user->getOfsId() ?></td>
  </tr>
  <tr>
    <td class="name">职责：</td>
    <td class="content"><?php echo $user->getDuty() ?></td>
  </tr>
  <tr>
    <td class="name">移动电话：</td>
    <td class="content"><?php echo $user->getMobile() ?></td>
  </tr>
  <tr>
    <td class="name">固定电话：</td>
    <td class="content"><?php echo $user->getTel() ?></td>
  </tr>
  <tr>
    <td class="name">权限：</td>
    <td class="content">
    <?php 
    if ($user->getUsertype() == 'administrator')
       echo "超级用户"; 
    else if($user->getUsertype() == 'manager')
       echo "管理员";
    else if($user->getUsertype() == 'surveyor')
       echo "调查员";
    else if($user->getUsertype() == 'volunteer')
       echo "志愿者";
    else
       echo "身份错误";

    ?>
    </td>
  </tr>
  <tr>
    <td class="name">身份：</td>
    <td class="content"><?php echo $user->getIdentity() ?></td>
  </tr>
  <tr>
    <td class="name">Email：</td>
    <td class="content"><?php echo $user->getEmail() ?></td>
  </tr>                  
  <tr>
    <td class="name">QQ：</td>
    <td class="content"><?php echo $user->getQq() ?></td>
  </tr>
  <tr>
    <td class="name">MSN：</td>
    <td class="content"><?php echo $user->getMsn() ?></td>
  </tr>
  <tr>
    <td class="name">地址：</td>
    <td class="content"><?php echo $user->getAddress() ?></td>
  </tr>
  <tr>
    <td class="name">建立时间：</td>
    <td class="content"><?php echo $user->getCreatedAt() ?></td>
  </tr>      
  </tbody>
</table>

<?php echo link_to('修改', '@user_edit?user_id='.$user->getUserId(),'post=true') ?>&nbsp;&nbsp;&nbsp;
<?php if ($sf_params->has('after_edit')): ?>
<a href="javascript:history.go(-2)">返回</a>
<?php else:?>
<a href="javascript:history.go(-1)">返回</a>
<?php endif;?>     
</div>
</div>