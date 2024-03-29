<?php
// auto-generated by sfPropelCrud
// date: 2009/07/21 06:16:40
?>
<?php

/**
 * student actions.
 *
 * @package    donate
 * @subpackage student
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class studentActions extends sfActions
{
  public function executeListall()
  {
  	$site_id = $this->getRequestParameter('site_id');
  	$school_id = $this->getRequestParameter('school_id');
  	$student_name = $this->getRequestParameter('student_name');
	
  	$site_school = 0;
  	if(!empty($school_id)&& ($school_id!=-1)&&!empty($site_id)&&($site_id!=-1))
  	{
  		$ss = new Criteria();
  		$ss->add(SchoolPeer::SITE_ID,$site_id);
  		$ss->add(SchoolPeer::SCHOOL_ID,$school_id);
  		$site_school = SchoolPeer::docount($ss);
  	}
  	
  	$c = new Criteria();
 	$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);
    
  	if(!empty($school_id)&& ($school_id!=-1)&&($site_school!=0))
  	{
      $c->add(StudentPeer::SCHOOL_ID,$school_id);
      $this->school_id = $school_id;
  	}  	
  	if(!empty($site_id)&&($site_id!=-1))
    {
      $c->add(SchoolPeer::SITE_ID,$site_id); 
      $this->site_id = $site_id;
    }         	
    if(!empty($student_name))
    {
      $c->add(StudentPeer::NAME,'%'.$student_name.'%',Criteria::LIKE);
      $this->student_name = $student_name;
    }
   	
    $pager = new sfPropelPager('Student', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinSchool');
    $pager->setPeerCountMethod('doCountJoinSchool');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    
    $d = new Criteria();
    $d->clearSelectColumns();  // Clear select columns
    $d->addSelectColumn(ProjectSitePeer::SITE_ID); // Add new select columns 
    $d->addSelectColumn(ProjectSitePeer::SITE_NAME);   
    $d->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    $this->projectsites = ProjectSitePeer::doSelectRS($d);

    $e = new Criteria();
    $e->clearSelectColumns();  // Clear select columns
    $e->addSelectColumn(SchoolPeer::SCHOOL_ID);// Add new select columns
    $e->addSelectColumn(SchoolPeer::SCHOOL_NAME);
    if(!empty($site_id)&&($site_id!=-1))
    {
      $e->add(SchoolPeer::SITE_ID,$site_id); 
      $this->site_id = $site_id;
    }  
    $e->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    $this->schools = SchoolPeer::doSelectRS($e);
    $this->school_count = SchoolPeer::doCount($e);    
    
  }  

public function executeListno()
  {
  	$site_id = $this->getRequestParameter('site_id');
  	$school_id = $this->getRequestParameter('school_id');
  	$student_name = $this->getRequestParameter('student_name');
  	
  	$site_school = 0;
  	if(!empty($school_id)&& ($school_id!=-1)&&!empty($site_id)&&($site_id!=-1))
  	{
  		$ss = new Criteria();
  		$ss->add(SchoolPeer::SITE_ID,$site_id);
  		$ss->add(SchoolPeer::SCHOOL_ID,$school_id);
  		$site_school = SchoolPeer::docount($ss);
  	}

  	$c = new Criteria();
  	$c -> add(StudentPeer::IS_DONATED, 0); 
 	$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);
    
  	if(!empty($school_id)&& ($school_id!=-1)&&($site_school!=0))
  	{
      $c->add(StudentPeer::SCHOOL_ID,$school_id);
      $this->school_id = $school_id;
  	}  	
  	if(!empty($site_id)&&($site_id!=-1))
    {
      $c->add(SchoolPeer::SITE_ID,$site_id); 
      $this->site_id = $site_id;
    }         	
    if(!empty($student_name))
    {
      $c->add(StudentPeer::NAME,'%'.$student_name.'%',Criteria::LIKE);
      $this->student_name = $student_name;
    }
   	
    $pager = new sfPropelPager('Student', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinSchool');
    $pager->setPeerCountMethod('doCountJoinSchool');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;
    
    $d = new Criteria();
    $d->clearSelectColumns();  // Clear select columns
    $d->addSelectColumn(ProjectSitePeer::SITE_ID); // Add new select columns 
    $d->addSelectColumn(ProjectSitePeer::SITE_NAME);   
    $d->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    $this->projectsites = ProjectSitePeer::doSelectRS($d);

    $e = new Criteria();
    $e->clearSelectColumns();  // Clear select columns
    $e->addSelectColumn(SchoolPeer::SCHOOL_ID);// Add new select columns
    $e->addSelectColumn(SchoolPeer::SCHOOL_NAME);
    if(!empty($site_id)&&($site_id!=-1))
    {
      $e->add(SchoolPeer::SITE_ID,$site_id); 
      $this->site_id = $site_id;
    }  
    $e->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    $this->schools = SchoolPeer::doSelectRS($e);
    $this->school_count = SchoolPeer::doCount($e);
   
  }
  public function executeAutocomplete()
  {
  	$str = $this->getRequestParameter('student_name');
  	$school_id = $this->getRequestParameter('school_id');
  	$site_id = $this->getRequestParameter('site_id');
  	$donated = $this->getRequestParameter('donated');
  	$c = new Criteria();
  	if($donated == 0)
      $c->add(StudentPeer::IS_DONATED,0);
    $c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);
    if(!empty($school_id)&&($school_id!=-1))
      $c->add(StudentPeer::SCHOOL_ID,$school_id);
    if(!empty($site_id)&&($site_id!=-1))
      $c->add(SchoolPeer::SITE_ID,$site_id);
  	$c->add(StudentPeer::NAME,'%'.$str.'%',Criteria::LIKE);
  	$c->addAscendingOrderByColumn(StudentPeer::NAME);
  	$c->setDistinct();
  	$students = StudentPeer::doSelectJoinSchool($c);
  	$this->students = $students;
  }
  
  public function executeShow()
  {
    $this->student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
    $this->forward404Unless($this->student);
    
  	$c =new Criteria();
	$c->add(DonationPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
	$donations = DonationPeer::doSelect($c);
	
    $usertype = $this->getContext()->getUser()->getAttribute('usertype','');
    $user_id = $this->getContext()->getUser()->getAttribute('user_id','');
    
    if ($usertype == 'volunteer' )
    {
       $flag_no = 1;
       foreach($donations as $donation)
       {
          if ( $user_id == $donation->getUserId() )
          {
                 $flag_no = 0;
          }
       }
       if ($flag_no)
       {
    	  return $this->forward404();
       }
    }
        
  }

  public function executeCreate()
  {
    $this->student = new Student();
	$c = new Criteria();
    $c->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    $this->school = SchoolPeer::doSelect($c);
    
    $d =new Criteria();
    $d->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    $this->site = ProjectSitePeer::doSelect($d);
    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
    $c = new Criteria();
    $c->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    $this->school = SchoolPeer::doSelect($c);
    
    $d =new Criteria();
    $d->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    $this->site = ProjectSitePeer::doSelect($d);
    
    $this->forward404Unless($this->student);
  }
  
  public function executeCascade()
  {
  	$site_id = $this->getRequestParameter('site_id');
  	$c = new Criteria();
  	$c->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
  	if(!empty($site_id))
  		$c->add(SchoolPeer::SITE_ID,$site_id);
  	$this->school = SchoolPeer::doSelect($c);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('student_id'))
    {
      $student = new Student();
    }
    else
    {
      $student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
      $this->forward404Unless($student);
    }

    $student->setStudentId($this->getRequestParameter('student_id'));
    $student->setSchoolId($this->getRequestParameter('school_id') ? $this->getRequestParameter('school_id') : null);
    $student->setOfsId($this->getRequestParameter('ofs_id'));    
    $student->setName($this->getRequestParameter('name'));
    $student->setNickname($this->getRequestParameter('nickname'));
    $student->setRace($this->getRequestParameter('race'));    
    if(is_file($this->getRequest()->getFilePath('photo')))
    {
    	$filename = md5(uniqid(mt_rand()));
    	$file = $this->getRequest()->getFilePath('photo');
    	$extension = $this->getRequest()->getFileExtension('photo');
    	$newfilename = $filename.$extension;
    	$img = new sfImage($file);
    	$response = $this->getResponse();
    	$response->setContentType($img->getMIMEType());
    	$width = sfConfig::get('sf_image_width');
    	$height = sfConfig::get('sf_image_height');
    	$width = ($img->getWidth()>$width)?$width:($img->getWidth());
    	$height = ($img->getHeight()>$height)?$height:($img->getHeight());
    	$img->resize($width,$height);
    	$img->saveAs(sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'students'.DIRECTORY_SEPARATOR.$newfilename);
    	$student->setPhoto($newfilename);    	
    }
    if(is_file($this->getRequest()->getFilePath('member_photo')))
    {
    	$filename = md5(uniqid(mt_rand()));
    	$file = $this->getRequest()->getFilePath('member_photo');
    	$extension = $this->getRequest()->getFileExtension('member_photo');
    	$newfilename = $filename.$extension;
    	$img = new sfImage($file);
    	$response = $this->getResponse();
    	$response->setContentType($img->getMIMEType());
    	$width = sfConfig::get('sf_image_width');
    	$height = sfConfig::get('sf_image_height');
    	$width = ($img->getWidth()>$width)?$width:($img->getWidth());
    	$height = ($img->getHeight()>$height)?$height:($img->getHeight());
    	$img->resize($width,$height);
    	$img->saveAs(sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'students'.DIRECTORY_SEPARATOR.$newfilename);
    	$student->setMemberPhoto($newfilename);    	
    }
    if(is_file($this->getRequest()->getFilePath('house_photo')))
    {
    	$filename = md5(uniqid(mt_rand()));
    	$file = $this->getRequest()->getFilePath('house_photo');
    	$extension = $this->getRequest()->getFileExtension('house_photo');
    	$newfilename = $filename.$extension;
    	$img = new sfImage($file);
    	$response = $this->getResponse();
    	$response->setContentType($img->getMIMEType());
    	$width = sfConfig::get('sf_image_width');
    	$height = sfConfig::get('sf_image_height');
    	$width = ($img->getWidth()>$width)?$width:($img->getWidth());
    	$height = ($img->getHeight()>$height)?$height:($img->getHeight());
    	$img->resize($width,$height);
    	$img->saveAs(sfConfig::get('sf_web_dir').DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'students'.DIRECTORY_SEPARATOR.$newfilename);
    	$student->setHousePhoto($newfilename);    	
    }
    $student->setHeadTeacher($this->getRequestParameter('head_teacher'));
    $student->setGuardian($this->getRequestParameter('guardian'));
    if ($this->getRequestParameter('birthday'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('birthday'), $this->getUser()->getCulture());
      $student->setBirthday("$y-$m-$d");
    }
    $student->setGrade($this->getRequestParameter('grade'));
    $student->setMale($this->getRequestParameter('male', 0));
    $student->setTel($this->getRequestParameter('tel'));
    $student->setAddress($this->getRequestParameter('address'));
    $student->setPostal($this->getRequestParameter('postal'));
    $student->setCity($this->getRequestParameter('city'));
    $student->setProvince($this->getRequestParameter('province'));
    $student->setConsignee($this->getRequestParameter('consignee'));
    $student->setConsigneeAddress($this->getRequestParameter('consignee_address'));
    $student->setConsigneePostal($this->getRequestParameter('consignee_postal'));    
    $student->setAssistHistory($this->getRequestParameter('assist_history'));
    $student->setIsInstudy($this->getRequestParameter('is_instudy', 0));
    $student->setIsBoarder($this->getRequestParameter('is_boarder', 0));
    $student->setIsDonated($this->getRequestParameter('is_donated', 0));
    $student->setDropoutHistory($this->getRequestParameter('dropout_history'));
    $student->setTechang($this->getRequestParameter('techang'));
    $student->setReward($this->getRequestParameter('reward'));
    $student->setTermExpense($this->getRequestParameter('term_expense'));
    $student->setDiscription($this->getRequestParameter('discription'));
    $student->setRemark($this->getRequestParameter('remark'));
    $student->setFm1Relation($this->getRequestParameter('fm1_relation'));
    $student->setFm1Name($this->getRequestParameter('fm1_name'));
    $student->setFm1Age($this->getRequestParameter('fm1_age'));
    $student->setFm1Occupation($this->getRequestParameter('fm1_occupation'));
    $student->setFm1Discription($this->getRequestParameter('fm1_discription'));
    $student->setFm2Relation($this->getRequestParameter('fm2_relation'));
    $student->setFm2Name($this->getRequestParameter('fm2_name'));
    $student->setFm2Age($this->getRequestParameter('fm2_age'));
    $student->setFm2Occupation($this->getRequestParameter('fm2_occupation'));
    $student->setFm2Discription($this->getRequestParameter('fm2_discription'));
    $student->setFm3Relation($this->getRequestParameter('fm3_relation'));
    $student->setFm3Name($this->getRequestParameter('fm3_name'));
    $student->setFm3Age($this->getRequestParameter('fm3_age'));
    $student->setFm3Occupation($this->getRequestParameter('fm3_occupation'));
    $student->setFm3Discription($this->getRequestParameter('fm3_discription'));
    $student->setFm4Relation($this->getRequestParameter('fm4_relation'));
    $student->setFm4Name($this->getRequestParameter('fm4_name'));
    $student->setFm4Age($this->getRequestParameter('fm4_age'));
    $student->setFm4Occupation($this->getRequestParameter('fm4_occupation'));
    $student->setFm4Discription($this->getRequestParameter('fm4_discription'));

    $student->save();

    return $this->redirect('@student_show?student_id='.$student->getStudentId().'&after_edit=1');
  }

  /*public function executeDelete()       
  {
    $student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));

    $this->forward404Unless($student);
    
    $c = new Criteria();
    $c -> add(SurveyPeer::STUDENT_ID, $this->getRequestParameter('student_id'));  
    $surveys = SurveyPeer::doSelect($c);
    if (sizeof($surveys) != 0)
    {
       foreach ($surveys as $survey)
       {
          $survey->delete();
       }
    }
    
    $d = new Criteria();
    $d -> add(ReportCardPeer::STUDENT_ID, $this->getRequestParameter('student_id'));  
    $reportcards = ReportCardPeer::doSelect($d);
    if (sizeof($reportcards) != 0)
    {    
       foreach ($reportcards as $reportcard)
       {
          $reportcard->delete();
       }
    }

    $e = new Criteria();
    $e -> add(DonationPeer::STUDENT_ID, $this->getRequestParameter('student_id'));  
    $donations = DonationPeer::doSelect($e);
    if (sizeof($donations) != 0)
    {    
       foreach ($donations as $donation)
       {
          $f = new Criteria();
          $f -> add(RemitPeer::DONATION_ID, $donation->getDonationId());  
          $remits = RemitPeer::doSelect($f);
          if(sizeof($remits) != 0)
          {
             foreach($remits as $remit)
             {
                $remit->delete();
             }
          }
       	
          $donation->delete();
       }
    }    
    
    $student->delete();

    //return $this->redirect('@student_list_all');
    return $this->redirect($this->getRequest()->getReferer());
  }*/
  function handleErrorUpdate()
  {
  	$student_id = $this->getRequestParameter('student_id');
	if(empty($student_id))
	{
		return $this->forward('student','create');
	}
	else
	{
		$this->getRequest()->setParameter('student_id',$student_id);
    	return $this->forward('student','edit');
	}
  }
  
  public function executePrint()
  {
    $this->student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
    $this->forward404Unless($this->student);
    
    $c = new Criteria();
    $c->add(DonationPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
    $this->donations = DonationPeer::doSelect($c);
    
    $i = 0;
    $this->a = array();
    foreach($this->donations as $donation)
    {
       $e = new Criteria();
       $e->add(RemitPeer::DONATION_ID, $donation->getDonationId());
       $remits = RemitPeer::doSelect($e);
       
       $this->a[$i] = $remits;
       $i ++ ;
    }

    $d = new Criteria();
    $d->add(SurveyPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
    $d->addDescendingOrderByColumn(SurveyPeer::SURVEY_DATE);
    $this->survey = SurveyPeer::doSelectOne($d);
    
  }  
}
