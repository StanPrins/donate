<?php
// auto-generated by sfPropelCrud
// date: 2009/07/19 21:34:06
?>
<SCRIPT type="text/javascript"> 
 function printpr() 
 {
	 var Sys = {};
	var ua = navigator.userAgent.toLowerCase();
	window.ActiveXObject ? Sys.ie = ua.match(/msie ([\d.]+)/)[1] :
	document.getBoxObjectFor ? Sys.firefox = ua.match(/firefox\/([\d.]+)/)[1] :
	window.MessageEvent && !document.getBoxObjectFor ? Sys.chrome = ua.match(/chrome\/([\d.]+)/)[1] :
	window.opera ? Sys.opera = ua.match(/opera.([\d.]+)/)[1] :
	window.openDatabase ? Sys.safari = ua.match(/version\/([\d.]+)/)[1] : 0;
	if(Sys.ie){
	 document.getElementById("clear").click();
	 document.getElementById("control").style.display="none";   
	 var OLECMDID = 7;  
	 var PROMPT = 1;  
	 var WebBrowser = '<OBJECT ID="print" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';  
	 document.getElementById("control").innerHTML += WebBrowser;  
	 document.getElementById("print").ExecWB(OLECMDID, PROMPT);  
	 document.getElementById("print").outerHTML = "";  
	 document.getElementById("control").style.display="block";
	 }
	 else
	 {
		 alert("对不起，预览功能只支持IE浏览器！");
	 }
 }  
 function print() 
 {  
  document.getElementById("clear").click();
  document.getElementById("control").style.display="none";
  window.print();  
  document.getElementById("control").style.display="block";  
 }  
/* function doPage()  
 {  
  layLoading.style.display = "none";//同上  
 }   */ 
 </script>
     
 <script language="VBScript">  
 dim hkey_root,hkey_path,hkey_key  
 hkey_root="HKEY_CURRENT_USER"  
 hkey_path="\Software\Microsoft\Internet Explorer\PageSetup"  
 //设置网页打印的页眉页脚为空  
 function pagesetup_null()  
 on error resume next  
 Set RegWsh = CreateObject("WScript.Shell")  
 hkey_key="\header"  
 RegWsh.RegWrite hkey_root+hkey_path+hkey_key,""  
 hkey_key="\footer"  
 RegWsh.RegWrite hkey_root+hkey_path+hkey_key,""  
 end function  
 //设置网页打印的页眉页脚为默认值  
 function pagesetup_default()  
 on error resume next  
 Set RegWsh = CreateObject("WScript.Shell")  
 hkey_key="\header"  
 RegWsh.RegWrite hkey_root+hkey_path+hkey_key,"&w&b页码，&p/&P"  
 hkey_key="\footer"  
 RegWsh.RegWrite hkey_root+hkey_path+hkey_key,"&u&b&d"  
 end function  
 </script> 
<div id="sf_admin_container">
<h1>学生信息</h1>
<table>
<tbody>
<tr>
<td colspan=2>
<table>
  <tbody>
  <tr>
    <td class="name">学校：</td>
    <td class="content"><?php echo $student->getSchool()->getSchoolName() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getName() ?></td>
  </tr>
  <tr>
    <td class="name">昵称：</td>
    <td class="content"><?php echo $student->getNickname() ?></td>
  </tr>                
  <tr>
    <td class="name">照片：</td>
    <td class="content">
    <?php 
    if(!is_null($student->getPhoto()))
      echo image_tag('students/'.$student->getPhoto());
    else
      echo "暂未上传照片";
    ?>
    </td>
  </tr>    
  <tr>
    <td class="name">班主任：</td>
    <td class="content"><?php echo $student->getHeadTeacher() ?></td>
  </tr>
  <tr>
    <td class="name">监护人：</td>
    <td class="content"><?php echo $student->getGuardian() ?></td>
  </tr>
  <tr>
    <td class="name">生日：</td>
    <td class="content"><?php echo $student->getBirthday() ?></td>
  </tr>
  <tr>
    <td class="name">年级：</td>
    <td class="content"><?php echo $student->getGrade() ?></td>
  </tr>
  <tr>
    <td class="name">性别：</td>
    <td class="content">
    <?php
       if ($student->getMale())       
         echo '男';
      else
         echo '女';       
    ?>
    </td>
  </tr>                            
  <tr>
    <td class="name">地址：</td>
    <td class="content"><?php echo $student->getAddress() ?></td>
  </tr>
  <tr>
    <td class="name">邮编：</td>
    <td class="content"><?php if ($student->getPostal()) echo $student->getPostal(); ?></td>
  </tr>          
  <tr>
    <td class="name">城市：</td>
    <td class="content"><?php echo $student->getCity() ?></td>
  </tr>    
  <tr>
    <td class="name">省：</td>
    <td class="content"><?php echo $student->getProvince() ?></td>
  </tr>
  <tr>
    <td class="name">资助历史：</td>
    <td class="content"><?php echo $student->getAssistHistory() ?></td>
  </tr>
  <tr>
    <td class="name">上学中：</td>
    <td class="content">
    <?php if($student->getIsInStudy()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">寄宿生：</td>
    <td class="content">
    <?php if($student->getIsBoarder()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">有退学史：</td>
    <td class="content">
    <?php if ($student->getHasDropoutHistory()) echo image_tag('admin_db/tick.png'); else echo image_tag('admin_db/x.png');?>
    </td>
  </tr>
  <tr>
    <td class="name">学期花费：</td>
    <td class="content"><?php if ($student->getTermExpense()) echo $student->getTermExpense(); ?></td>
  </tr>
  <tr>
    <td class="name">个人简介：</td>
    <td class="content"><?php echo $student->getDiscription() ?></td>
  </tr>
  <tbody>
</table>
</td>
</tr>
<tr>
<td>
<h2>亲属1</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm1Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm1Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm1Age()) echo $student->getFm1Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm1Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm1Discription() ?></td>
  </tr>
  </tbody>
</table>
</td>
<td>
<h2>亲属2</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm2Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm2Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if($student->getFm2Age()) echo $student->getFm2Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm2Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm2Discription() ?></td>
  </tr>
  </tbody>
</table>
</td>
</tr>
<tr>
<td>
<h2>亲属3</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm3Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm3Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm3Age()) echo $student->getFm3Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm3Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm3Discription() ?></td>
  </tr>
  </tbody>
</table>
</td>
<td>
<h2>亲属4</h2>                                           
<table>
  <tbody>
  <tr>
    <td class="name">关系：</td>
    <td class="content"><?php echo $student->getFm4Relation() ?></td>
  </tr>
  <tr>
    <td class="name">姓名：</td>
    <td class="content"><?php echo $student->getFm4Name() ?></td>
  </tr>
  <tr>
    <td class="name">年龄：</td>
    <td class="content"><?php if ($student->getFm4Age()) echo $student->getFm4Age(); ?></td>
  </tr>
  <tr>
    <td class="name">职业：</td>
    <td class="content"><?php echo $student->getFm4Occupation() ?></td>
  </tr>
  <tr>
    <td class="name">简介：</td>
    <td class="content"><?php echo $student->getFm4Discription() ?></td>
  </tr>
  </tbody>
</table>
</td>
</tr>
</tbody>
</table>

<?php if(sizeof($donations) != 0 ): ?>
<table>
<thead>
<tr>
  <th>Donation</th>
  <th>Student</th>
  <th>User</th>
  <th>Amount</th>
  <th>Start date</th>
  <th>End date</th>
  <th>Approve</th>
  <th>Is active</th>
  <th>Created at</th>
</tr>
</thead>
<tbody>
<?php foreach ($donations as $donation): ?>
<tr>
    <td><?php echo link_to($donation->getDonationId(), 'aaa/show?donation_id='.$donation->getDonationId()) ?></td>
      <td><?php echo $donation->getStudentId() ?></td>
      <td><?php echo $donation->getUserId() ?></td>
      <td><?php echo $donation->getAmount() ?></td>
      <td><?php echo $donation->getStartDate() ?></td>
      <td><?php echo $donation->getEndDate() ?></td>
      <td><?php echo $donation->getApprove() ?></td>
      <td><?php echo $donation->getIsActive() ?></td>
      <td><?php echo $donation->getCreatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else:?>
无资助记录<br/>
<?php endif;?>

<?php if($survey == null): ?>
无调查记录<br/>
<?php else:?>
<table>
<tbody>
<tr>
<th>Survey: </th>
<td><?php echo $survey->getSurveyId() ?></td>
</tr>
<tr>
<th>Student: </th>
<td><?php echo $survey->getStudentId() ?></td>
</tr>
<tr>
<th>User: </th>
<td><?php echo $survey->getUserId() ?></td>
</tr>
<tr>
<th>Survey date: </th>
<td><?php echo $survey->getSurveyDate() ?></td>
</tr>
<tr>
<th>Family condition: </th>
<td><?php echo $survey->getFamilyCondition() ?></td>
</tr>
<tr>
<th>Grade: </th>
<td><?php echo $survey->getGrade() ?></td>
</tr>
<tr>
<th>Other assist: </th>
<td><?php echo $survey->getOtherAssist() ?></td>
</tr>
<tr>
<th>Dropout info: </th>
<td><?php echo $survey->getDropoutInfo() ?></td>
</tr>
<tr>
<th>Presentation: </th>
<td><?php echo $survey->getPresentation() ?></td>
</tr>
<tr>
<th>Revenue: </th>
<td><?php echo $survey->getRevenue() ?></td>
</tr>
<tr>
<th>Property: </th>
<td><?php echo $survey->getProperty() ?></td>
</tr>
<tr>
<th>Donation usage: </th>
<td><?php echo $survey->getDonationUsage() ?></td>
</tr>
<tr>
<th>Donor concerned: </th>
<td><?php echo $survey->getDonorConcerned() ?></td>
</tr>
<tr>
<th>Msg to donor: </th>
<td><?php echo $survey->getMsgToDonor() ?></td>
</tr>
<tr>
<th>Msg to stu: </th>
<td><?php echo $survey->getMsgToStu() ?></td>
</tr>
<tr>
<th>School opinion: </th>
<td><?php echo $survey->getSchoolOpinion() ?></td>
</tr>
<tr>
<th>Teacher opinion: </th>
<td><?php echo $survey->getTeacherOpinion() ?></td>
</tr>
<tr>
<th>User opinion: </th>
<td><?php echo $survey->getUserOpinion() ?></td>
</tr>
<tr>
<th>Discription: </th>
<td><?php echo $survey->getDiscription() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $survey->getCreatedAt() ?></td>
</tr>
</tbody>
</table>
<?php endif;?>
</div>
<DIV id="control">
 <input type="button" class="tab" value="打印" onclick="print();">&nbsp;&nbsp;  
 <input type="button" class="tab" value="打印预览" onclick="printpr();">  
 <input type="hidden" name="qingkongyema" id="clear" class="tab" value="清空页码" onclick="pagesetup_null()">&nbsp;&nbsp;  
 <input type="hidden" class="tab" value="恢复页码" onclick="pagesetup_default()">  
</DIV> 


