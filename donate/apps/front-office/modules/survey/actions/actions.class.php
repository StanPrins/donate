<?php
// auto-generated by sfPropelCrud
// date: 2009/07/22 00:52:41
?>
<?php

/**
 * survey actions.
 *
 * @package    donate
 * @subpackage survey
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class surveyActions extends sfActions
{
	public function executeListstu()
	{
	   if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {
	     return $this->forward404();	   	
	   }	
		$c = new Criteria();
		$c -> add(SurveyPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
		$pager = new sfPropelPager('Survey', sfConfig::get('app_pager_homepage_max'));
		$pager->setPeerMethod('doSelectJoinAll');
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}

	public function executeListmy()
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
		
		$c = new Criteria();
		$c->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID, Criteria::LEFT_JOIN);
  		$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);
  		
		$c -> add(SurveyPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
		
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
		
		$pager = new sfPropelPager('Survey', sfConfig::get('app_pager_homepage_max'));
		$pager->setPeerMethod('doSelectJoinAll');
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}
	
	public function executeAutocomplete()
	{
		$str = $this->getRequestParameter('student_name');
  		$school_id = $this->getRequestParameter('school_id');
  		$site_id = $this->getRequestParameter('site_id');
  		$my = $this->getRequestParameter('my');
  		$c = new Criteria();
  		$c->addJoin(StudentPeer::STUDENT_ID, SurveyPeer::STUDENT_ID, Criteria::RIGHT_JOIN);
  		$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);
  		if( 1==$my )
  			$c->add(SurveyPeer::USER_ID, $this->getUser()->getAttribute('user_id')); 		  		
  		if(!empty($school_id)&&($school_id!=-1))
      		$c->add(StudentPeer::SCHOOL_ID,$school_id);
	    if(!empty($site_id)&&($site_id!=-1))
	    	$c->add(SchoolPeer::SITE_ID,$site_id);
	    $c->add(StudentPeer::NAME,'%'.$str.'%',Criteria::LIKE);
	    $c->addAscendingOrderByColumn(StudentPeer::NAME);
	    $c->setDistinct();
	    $students = StudentPeer::doSelect($c);
	    $this->students = $students;
	}
	
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
	    
		$c = new Criteria();
		
		$c->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID, Criteria::LEFT_JOIN);
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
  		
		$pager = new sfPropelPager('Survey', sfConfig::get('app_pager_homepage_max'));
		$pager->setPeerMethod('doSelectJoinAll');
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}

	public function executeShow()
	{
		$this->survey = SurveyPeer::retrieveByPk($this->getRequestParameter('survey_id'));
		$this->forward404Unless($this->survey);
		
		$c = new Criteria();
		$c->add(DonationPeer::STUDENT_ID, $this->survey->getStudentId());
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
		$this->survey = new Survey();


		$this->survey->setUserId($this->getUser()->getAttribute('user_id'));
		$d = new Criteria();
		$d -> add(UserPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
		$this->user = UserPeer::doSelectOne($d);

		if($this->getRequestParameter('student_id'))
		{
		   $this->survey->setStudentId($this->getRequestParameter('student_id'));
           $c = new Criteria();
		   $c -> add(StudentPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
		   $this->student = StudentPeer::doSelectOne($c);
		}
		$e = new Criteria();
		$e->addAscendingOrderByColumn(StudentPeer::NAME);		
		$this->student = StudentPeer::doSelect($e);
		$s =new Criteria();
    	$s->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    	$this->site = ProjectSitePeer::doSelect($s);
    	$p = new Criteria();
    	$p->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    	$this->school = SchoolPeer::doSelect($p);
	}

	public function executeEdit()
	{
		$this->survey = SurveyPeer::retrieveByPk($this->getRequestParameter('survey_id'));
		$this->forward404Unless($this->survey);
	}

	public function executeUpdate()
	{
	   if ($this->getRequest()->getMethod() != sfRequest::POST)
	   {
	     return $this->forward404();	   	
	   }	
		if (!$this->getRequestParameter('survey_id'))
		{
			$survey = new Survey();
		}
		else
		{
			$survey = SurveyPeer::retrieveByPk($this->getRequestParameter('survey_id'));
			$this->forward404Unless($survey);
		}

		$survey->setSurveyId($this->getRequestParameter('survey_id'));
		$survey->setStudentId($this->getRequestParameter('student_id') ? $this->getRequestParameter('student_id') : null);
		$survey->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
		if ($this->getRequestParameter('survey_date'))
		{
			list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('survey_date'), $this->getUser()->getCulture());
			$survey->setSurveyDate("$y-$m-$d");
		}
		$survey->setFamilyCondition($this->getRequestParameter('family_condition'));
		$survey->setGrade($this->getRequestParameter('grade'));
		$survey->setOtherAssist($this->getRequestParameter('other_assist'));
		$survey->setDropoutInfo($this->getRequestParameter('dropout_info'));
		$survey->setPresentation($this->getRequestParameter('presentation'));
		$survey->setRevenue($this->getRequestParameter('revenue'));
		$survey->setProperty($this->getRequestParameter('property'));
		$survey->setDonationUsage($this->getRequestParameter('donation_usage'));
		$survey->setDonorConcerned($this->getRequestParameter('donor_concerned'));
		$survey->setMsgToDonor($this->getRequestParameter('msg_to_donor'));
		$survey->setMsgToStu($this->getRequestParameter('msg_to_stu'));
		$survey->setSchoolOpinion($this->getRequestParameter('school_opinion'));
		$survey->setTeacherOpinion($this->getRequestParameter('teacher_opinion'));
		$survey->setUserOpinion($this->getRequestParameter('user_opinion'));
		$survey->setDiscription($this->getRequestParameter('discription'));

		$survey->save();

		return $this->redirect('@survey_show?survey_id='.$survey->getSurveyId().'&after_edit=1');
	}
	
	public function executeCascade()
	{
  		$site_id = $this->getRequestParameter('site_id');
  		$this->type = $this->getRequestParameter('type');
  		$c = new Criteria();
  		$c->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
  		if(!empty($site_id))
  			$c->add(SchoolPeer::SITE_ID,$site_id);
  		$this->school = SchoolPeer::doSelect($c);  		
  		$d = new Criteria();
  		$d->addAscendingOrderByColumn(StudentPeer::NAME);
  		if(!empty($site_id))
  			$d->add(SchoolPeer::SITE_ID,$site_id);
  		$this->student = StudentPeer::doSelectJoinSchool($d);
	}
	public function executeCascade2()
	{
  		$school_id = $this->getRequestParameter('school_id');
  		$this->aaa = $school_id; 
  		$d = new Criteria();
  		$d->addAscendingOrderByColumn(StudentPeer::NAME);
  		if(!empty($school_id))
  			$d->add(StudentPeer::SCHOOL_ID,$school_id);
  		$this->student = StudentPeer::doSelect($d);
	}
  
	public function executeDelete()
	{
		$survey = SurveyPeer::retrieveByPk($this->getRequestParameter('survey_id'));

		$this->forward404Unless($survey);

		$survey->delete();

		//return $this->redirect('survey/list');
		return $this->redirect($this->getRequest()->getReferer());
	}
	public function handleErrorUpdate()
	{
		$survey_id = $this->getRequestParameter('survey_id');
		if(empty($survey_id))
		{
			return $this->forward('survey','create');
		}
		else
		{
			$this->getRequest()->setParameter('survey_id',$survey_id);
	    	return $this->forward('survey','edit');
		}
	}
}
