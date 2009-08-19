<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:33:07
?>
<div id="sf_admin_container">
<h1>待审批到款信息列表</h1>

<?php if(sizeof($pager->getResults()) != 0):?>
<div id="sf_admin_content">
<table cellspacing="0" class="sf_admin_list">

<thead>
<tr>
  <th>捐助号</th>
  <th>捐助人</th>
  <th>金额</th>
  <th>通过OFS捐助</th>
  <th>OFS收到</th>
  <th>到款日</th>
  <th>收款人</th>
  <th>到款金额</th>
  <th>OFS送出</th>
  <th>送款日</th>
  <th>送款人</th>
  <th>送出金额</th>
  <th>操作</th>
</tr>
</thead>
<tbody>
<?php $count_row = 0?>
<?php foreach ($pager->getResults() as $remit): ?>
  <?php echo "<tr class='sf_admin_row_".$count_row."' >" ?>
      <td><?php echo $remit->getDonationId() ?></td>
      <td><?php echo $remit->getDonation()->getUser()->getName() ?></td>
      <td><?php echo $remit->getAmount() ?></td>
      
      
      <?php if($remit->getIsByOfs()):?>      
      <td><?php echo image_tag('admin_db/tick.png');?></td>      
      <td><?php 
          if($remit->getIsReceived())
	 		 echo image_tag('admin_db/tick.png'); 
	      else
	         echo image_tag('admin_db/x.png');     
           ?>
      </td>
      <td><?php echo $remit->getReceiveDate() ?></td>
      <td><?php if($remit->getReceiveUserId()) echo $remit->getUserRelatedByReceiveUserId()->getName();?></td>
      <td><?php echo $remit->getReceiveAmount() ?></td>      
      <td><?php 
          if($remit->getIsSendout())
	 		 echo image_tag('admin_db/tick.png');
	      else
	         echo image_tag('admin_db/x.png');	 		       
          ?>
      </td>      
      <td><?php echo $remit->getSendoutDate() ?></td>
      <td><?php if($remit->getSendoutUserId()) echo $remit->getUserRelatedBySendoutUserId()->getName();  ?></td>      
      <td><?php echo $remit->getSendoutAmount() ?></td>      
      <?php else:?>
      <td><?php echo image_tag('admin_db/x.png');?></td>  
      <td>---</td><td>---</td><td>---</td><td>---</td>
      <td><?php 
          if($remit->getIsSendout())
	 		 echo image_tag('admin_db/tick.png');
	      else
	         echo image_tag('admin_db/x.png');	 		       
          ?>
      </td>
      <td><?php echo $remit->getSendoutDate() ?></td>
      <td>---</td><td>---</td>               
      <?php endif;?>


      <td><?php echo link_to('详情', '@remit_show?remit_id='.$remit->getRemitId())?>&nbsp;&nbsp;
          <?php 
                echo link_to('修改', '@remit_edit?remit_id='.$remit->getRemitId()); echo "&nbsp;&nbsp;";
                if (($sf_user->getAttribute('usertype', '')=='surveyor') || ($sf_user->getAttribute('usertype', '')=='manager')
                    || ($sf_user->getAttribute('usertype', '')=='administrator'))
                {  
                   echo link_to('删除', 'remit/delete?remit_id='.$remit->getRemitId(), 'post=true&confirm=真的要删除么？'); 
                }
                /*else if (!($remit->getIsByOfs()))
                {
                   echo link_to('修改', '@remit_edit?remit_id='.$remit->getRemitId()); echo "&nbsp;&nbsp;";
                }
                else;*/
          ?>
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

<?php include_partial('pager',array('pager' => $pager , 'listpend' => 1, 'page_to_link' => '@remit_pending' ))?>

<?php else:?>
无到款信息<br/>
<?php endif;?>

<?php use_helper('Javascript') ?>


      
 <?php echo link_to_function ('新建到款信息', visual_effect('BlindDown','secret_div'));?>
&nbsp;&nbsp;&nbsp;<a href="javascript:history.go(-1)">返回</a>           
<div id="secret_div" style="display:none">
<br/>
<?php if ($sf_params->has('donation_id')):?>

<?php echo link_to('通过OFS捐助','remit/create?donation_id='.$sf_params->get('donation_id').'&is_by_ofs=1');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo link_to('个人自己捐助','remit/create?donation_id='.$sf_params->get('donation_id').'&is_by_ofs=0');?>

<?php else:?>

<?php echo link_to('通过OFS捐助','remit/create?is_by_ofs=1');?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo link_to('个人自己捐助','remit/create?is_by_ofs=0');?>

<?php endif;?>
</div>    
</div>    
<?php //if (($sf_user->getAttribute('usertype', '')=='surveyor') || ($sf_user->getAttribute('usertype', '')=='manager') || ($sf_user->getAttribute('usertype', '')=='administrator')):?>       
</div>

