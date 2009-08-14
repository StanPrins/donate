<?php

/**
 * investigation actions.
 *
 * @package    donate
 * @subpackage investigation
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class investigationActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeInsert()
  {
    $this->student = new Student();
    $this->survey = new Survey();
    
	$c = new Criteria();
    $c->addAscendingOrderByColumn(SchoolPeer::SCHOOL_NAME);
    $this->school = SchoolPeer::doSelect($c);
    
    $d = new Criteria();
    $d->addAscendingOrderByColumn(UserPeer::NICKNAME);
    $this->user = UserPeer::doSelect($d);
    
    $s =new Criteria();
    $s->addAscendingOrderByColumn(ProjectSitePeer::SITE_NAME);
    $this->site = ProjectSitePeer::doSelect($s);
  }

  public function executeUpdate()
  {
	$c = new Criteria();
    $c->addDescendingOrderByColumn(StudentPeer::STUDENT_ID);
    $last_student = StudentPeer::doSelectOne($c);
    $student_id = $last_student->getStudentId() + 1; 
    
    $student = new Student();

    $student->setStudentId($student_id);
    $student->setSchoolId($this->getRequestParameter('school_id') ? $this->getRequestParameter('school_id') : null);
    $student->setOfsId($this->getRequestParameter('ofs_id'));    
    $student->setName($this->getRequestParameter('name'));
    $student->setRace($this->getRequestParameter('race'));    
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
    $student->setConsignee($this->getRequestParameter('consignee'));
    $student->setConsigneeAddress($this->getRequestParameter('consignee_address'));
    $student->setConsigneePostal($this->getRequestParameter('consignee_postal'));    
    $student->setAssistHistory($this->getRequestParameter('assist_history'));
    $student->setIsBoarder($this->getRequestParameter('is_boarder', 0));
    $student->setDropoutHistory($this->getRequestParameter('dropout_history'));
    $student->setTechang($this->getRequestParameter('techang'));
    $student->setReward($this->getRequestParameter('reward'));
    $student->setTermExpense($this->getRequestParameter('term_expense'));
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

    
	$survey = new Survey();
	
	$survey->setSurveyId($this->getRequestParameter('survey_id'));
	$survey->setStudentId($student_id);
	$survey->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
	if ($this->getRequestParameter('survey_date'))
	{
		list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('survey_date'), $this->getUser()->getCulture());
		$survey->setSurveyDate("$y-$m-$d");
	}
	$survey->setFamilyCondition($this->getRequestParameter('family_condition'));
	$survey->setPresentation($this->getRequestParameter('presentation'));
	$survey->setRevenue($this->getRequestParameter('revenue'));
	$survey->setProperty($this->getRequestParameter('property'));
	$survey->setSchoolOpinion($this->getRequestParameter('school_opinion'));
	$survey->setTeacherOpinion($this->getRequestParameter('teacher_opinion'));
	$survey->setUserOpinion($this->getRequestParameter('user_opinion'));

	$survey->save();
    
  }  
  function handleErrorUpdate()
  {
  	return $this->forward('investigation','Insert');
  }
}
