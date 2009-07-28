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
  public function executeListone()
  {
    $c = new Criteria();
    $c->add(StudentPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
    $this->student = StudentPeer::doSelectOne($c);
  }
  
  public function executeListall()
  {
  	$c = new Criteria();
  	//$c->add(SchoolPeer::SITE_ID, 1);
  	//$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID, Criteria::LEFT_JOIN);	
  	$c->addAscendingOrderByColumn(StudentPeer::SCHOOL_ID);
    $pager = new sfPropelPager('Student', sfConfig::get('app_pager_homepage_max'));    

    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->setPeerMethod('doSelectJoinSchool');
    $pager->setPeerCountMethod('doCountJoinSchool');        
    $pager->init();
    $this->pager = $pager;    
    
  }  

  public function executeListno()
  {
  	$c = new Criteria();
  	$c -> add(StudentPeer::IS_DONATED, 0);   	
    $pager = new sfPropelPager('Student', sfConfig::get('app_pager_homepage_max'));    
    $pager->setPeerMethod('doSelectJoinSchool');
    $pager->setCriteria($c);
    $pager->setPage($this->getRequestParameter('page', 1));
    $pager->init();
    $this->pager = $pager;    
  }
  
  public function executeShow()
  {
    $this->student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
    $this->forward404Unless($this->student);
  }

  public function executeCreate()
  {
    $this->student = new Student();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->student = StudentPeer::retrieveByPk($this->getRequestParameter('student_id'));
    $this->forward404Unless($this->student);
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
    $student->setName($this->getRequestParameter('name'));
    $student->setNickname($this->getRequestParameter('nickname'));
    $student->setPhoto($this->getRequestParameter('photo'));
    $student->setHeadTeacher($this->getRequestParameter('head_teacher'));
    $student->setGuardian($this->getRequestParameter('guardian'));
    if ($this->getRequestParameter('birthday'))
    {
      list($d, $m, $y) = sfI18N::getDateForCulture($this->getRequestParameter('birthday'), $this->getUser()->getCulture());
      $student->setBirthday("$y-$m-$d");
    }
    $student->setGrade($this->getRequestParameter('grade'));
    $student->setMale($this->getRequestParameter('male', 0));
    $student->setAddress($this->getRequestParameter('address'));
    $student->setPostal($this->getRequestParameter('postal'));
    $student->setCity($this->getRequestParameter('city'));
    $student->setProvince($this->getRequestParameter('province'));
    $student->setAssistHistory($this->getRequestParameter('assist_history'));
    $student->setIsInstudy($this->getRequestParameter('is_instudy', 0));
    $student->setIsBoarder($this->getRequestParameter('is_boarder', 0));
    $student->setIsDonated($this->getRequestParameter('is_donated', 0));
    $student->setHasDropoutHistory($this->getRequestParameter('has_dropout_history', 0));
    $student->setTermExpense($this->getRequestParameter('term_expense'));
    $student->setDiscription($this->getRequestParameter('discription'));
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

    return $this->redirect('student/show?student_id='.$student->getStudentId());
  }

  public function executeDelete()             //删除所有其他相关信息
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

    return $this->redirect('student/listall');
  }
}
