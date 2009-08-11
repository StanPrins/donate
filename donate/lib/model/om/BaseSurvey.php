<?php


abstract class BaseSurvey extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $survey_id;


	
	protected $student_id;


	
	protected $user_id;


	
	protected $survey_date;


	
	protected $family_condition;


	
	protected $grade;


	
	protected $other_assist;


	
	protected $dropout_info;


	
	protected $presentation;


	
	protected $revenue;


	
	protected $property;


	
	protected $donation_usage;


	
	protected $donor_concerned;


	
	protected $msg_to_donor;


	
	protected $msg_to_stu;


	
	protected $school_opinion;


	
	protected $teacher_opinion;


	
	protected $user_opinion;


	
	protected $discription;


	
	protected $created_at;

	
	protected $aStudent;

	
	protected $aUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getSurveyId()
	{

		return $this->survey_id;
	}

	
	public function getStudentId()
	{

		return $this->student_id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getSurveyDate($format = 'Y-m-d')
	{

		if ($this->survey_date === null || $this->survey_date === '') {
			return null;
		} elseif (!is_int($this->survey_date)) {
						$ts = strtotime($this->survey_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [survey_date] as date/time value: " . var_export($this->survey_date, true));
			}
		} else {
			$ts = $this->survey_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getFamilyCondition()
	{

		return $this->family_condition;
	}

	
	public function getGrade()
	{

		return $this->grade;
	}

	
	public function getOtherAssist()
	{

		return $this->other_assist;
	}

	
	public function getDropoutInfo()
	{

		return $this->dropout_info;
	}

	
	public function getPresentation()
	{

		return $this->presentation;
	}

	
	public function getRevenue()
	{

		return $this->revenue;
	}

	
	public function getProperty()
	{

		return $this->property;
	}

	
	public function getDonationUsage()
	{

		return $this->donation_usage;
	}

	
	public function getDonorConcerned()
	{

		return $this->donor_concerned;
	}

	
	public function getMsgToDonor()
	{

		return $this->msg_to_donor;
	}

	
	public function getMsgToStu()
	{

		return $this->msg_to_stu;
	}

	
	public function getSchoolOpinion()
	{

		return $this->school_opinion;
	}

	
	public function getTeacherOpinion()
	{

		return $this->teacher_opinion;
	}

	
	public function getUserOpinion()
	{

		return $this->user_opinion;
	}

	
	public function getDiscription()
	{

		return $this->discription;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setSurveyId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->survey_id !== $v) {
			$this->survey_id = $v;
			$this->modifiedColumns[] = SurveyPeer::SURVEY_ID;
		}

	} 
	
	public function setStudentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = SurveyPeer::STUDENT_ID;
		}

		if ($this->aStudent !== null && $this->aStudent->getStudentId() !== $v) {
			$this->aStudent = null;
		}

	} 
	
	public function setUserId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = SurveyPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getUserId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setSurveyDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [survey_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->survey_date !== $ts) {
			$this->survey_date = $ts;
			$this->modifiedColumns[] = SurveyPeer::SURVEY_DATE;
		}

	} 
	
	public function setFamilyCondition($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->family_condition !== $v) {
			$this->family_condition = $v;
			$this->modifiedColumns[] = SurveyPeer::FAMILY_CONDITION;
		}

	} 
	
	public function setGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->grade !== $v) {
			$this->grade = $v;
			$this->modifiedColumns[] = SurveyPeer::GRADE;
		}

	} 
	
	public function setOtherAssist($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other_assist !== $v) {
			$this->other_assist = $v;
			$this->modifiedColumns[] = SurveyPeer::OTHER_ASSIST;
		}

	} 
	
	public function setDropoutInfo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dropout_info !== $v) {
			$this->dropout_info = $v;
			$this->modifiedColumns[] = SurveyPeer::DROPOUT_INFO;
		}

	} 
	
	public function setPresentation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->presentation !== $v) {
			$this->presentation = $v;
			$this->modifiedColumns[] = SurveyPeer::PRESENTATION;
		}

	} 
	
	public function setRevenue($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->revenue !== $v) {
			$this->revenue = $v;
			$this->modifiedColumns[] = SurveyPeer::REVENUE;
		}

	} 
	
	public function setProperty($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->property !== $v) {
			$this->property = $v;
			$this->modifiedColumns[] = SurveyPeer::PROPERTY;
		}

	} 
	
	public function setDonationUsage($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->donation_usage !== $v) {
			$this->donation_usage = $v;
			$this->modifiedColumns[] = SurveyPeer::DONATION_USAGE;
		}

	} 
	
	public function setDonorConcerned($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->donor_concerned !== $v) {
			$this->donor_concerned = $v;
			$this->modifiedColumns[] = SurveyPeer::DONOR_CONCERNED;
		}

	} 
	
	public function setMsgToDonor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msg_to_donor !== $v) {
			$this->msg_to_donor = $v;
			$this->modifiedColumns[] = SurveyPeer::MSG_TO_DONOR;
		}

	} 
	
	public function setMsgToStu($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msg_to_stu !== $v) {
			$this->msg_to_stu = $v;
			$this->modifiedColumns[] = SurveyPeer::MSG_TO_STU;
		}

	} 
	
	public function setSchoolOpinion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->school_opinion !== $v) {
			$this->school_opinion = $v;
			$this->modifiedColumns[] = SurveyPeer::SCHOOL_OPINION;
		}

	} 
	
	public function setTeacherOpinion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->teacher_opinion !== $v) {
			$this->teacher_opinion = $v;
			$this->modifiedColumns[] = SurveyPeer::TEACHER_OPINION;
		}

	} 
	
	public function setUserOpinion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_opinion !== $v) {
			$this->user_opinion = $v;
			$this->modifiedColumns[] = SurveyPeer::USER_OPINION;
		}

	} 
	
	public function setDiscription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->discription !== $v) {
			$this->discription = $v;
			$this->modifiedColumns[] = SurveyPeer::DISCRIPTION;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = SurveyPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->survey_id = $rs->getInt($startcol + 0);

			$this->student_id = $rs->getInt($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->survey_date = $rs->getDate($startcol + 3, null);

			$this->family_condition = $rs->getString($startcol + 4);

			$this->grade = $rs->getString($startcol + 5);

			$this->other_assist = $rs->getString($startcol + 6);

			$this->dropout_info = $rs->getString($startcol + 7);

			$this->presentation = $rs->getString($startcol + 8);

			$this->revenue = $rs->getString($startcol + 9);

			$this->property = $rs->getString($startcol + 10);

			$this->donation_usage = $rs->getString($startcol + 11);

			$this->donor_concerned = $rs->getString($startcol + 12);

			$this->msg_to_donor = $rs->getString($startcol + 13);

			$this->msg_to_stu = $rs->getString($startcol + 14);

			$this->school_opinion = $rs->getString($startcol + 15);

			$this->teacher_opinion = $rs->getString($startcol + 16);

			$this->user_opinion = $rs->getString($startcol + 17);

			$this->discription = $rs->getString($startcol + 18);

			$this->created_at = $rs->getTimestamp($startcol + 19, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 20; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Survey object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SurveyPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SurveyPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aStudent !== null) {
				if ($this->aStudent->isModified()) {
					$affectedRows += $this->aStudent->save($con);
				}
				$this->setStudent($this->aStudent);
			}

			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SurveyPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setSurveyId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SurveyPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aStudent !== null) {
				if (!$this->aStudent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStudent->getValidationFailures());
				}
			}

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = SurveyPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getSurveyId();
				break;
			case 1:
				return $this->getStudentId();
				break;
			case 2:
				return $this->getUserId();
				break;
			case 3:
				return $this->getSurveyDate();
				break;
			case 4:
				return $this->getFamilyCondition();
				break;
			case 5:
				return $this->getGrade();
				break;
			case 6:
				return $this->getOtherAssist();
				break;
			case 7:
				return $this->getDropoutInfo();
				break;
			case 8:
				return $this->getPresentation();
				break;
			case 9:
				return $this->getRevenue();
				break;
			case 10:
				return $this->getProperty();
				break;
			case 11:
				return $this->getDonationUsage();
				break;
			case 12:
				return $this->getDonorConcerned();
				break;
			case 13:
				return $this->getMsgToDonor();
				break;
			case 14:
				return $this->getMsgToStu();
				break;
			case 15:
				return $this->getSchoolOpinion();
				break;
			case 16:
				return $this->getTeacherOpinion();
				break;
			case 17:
				return $this->getUserOpinion();
				break;
			case 18:
				return $this->getDiscription();
				break;
			case 19:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SurveyPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSurveyId(),
			$keys[1] => $this->getStudentId(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getSurveyDate(),
			$keys[4] => $this->getFamilyCondition(),
			$keys[5] => $this->getGrade(),
			$keys[6] => $this->getOtherAssist(),
			$keys[7] => $this->getDropoutInfo(),
			$keys[8] => $this->getPresentation(),
			$keys[9] => $this->getRevenue(),
			$keys[10] => $this->getProperty(),
			$keys[11] => $this->getDonationUsage(),
			$keys[12] => $this->getDonorConcerned(),
			$keys[13] => $this->getMsgToDonor(),
			$keys[14] => $this->getMsgToStu(),
			$keys[15] => $this->getSchoolOpinion(),
			$keys[16] => $this->getTeacherOpinion(),
			$keys[17] => $this->getUserOpinion(),
			$keys[18] => $this->getDiscription(),
			$keys[19] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SurveyPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setSurveyId($value);
				break;
			case 1:
				$this->setStudentId($value);
				break;
			case 2:
				$this->setUserId($value);
				break;
			case 3:
				$this->setSurveyDate($value);
				break;
			case 4:
				$this->setFamilyCondition($value);
				break;
			case 5:
				$this->setGrade($value);
				break;
			case 6:
				$this->setOtherAssist($value);
				break;
			case 7:
				$this->setDropoutInfo($value);
				break;
			case 8:
				$this->setPresentation($value);
				break;
			case 9:
				$this->setRevenue($value);
				break;
			case 10:
				$this->setProperty($value);
				break;
			case 11:
				$this->setDonationUsage($value);
				break;
			case 12:
				$this->setDonorConcerned($value);
				break;
			case 13:
				$this->setMsgToDonor($value);
				break;
			case 14:
				$this->setMsgToStu($value);
				break;
			case 15:
				$this->setSchoolOpinion($value);
				break;
			case 16:
				$this->setTeacherOpinion($value);
				break;
			case 17:
				$this->setUserOpinion($value);
				break;
			case 18:
				$this->setDiscription($value);
				break;
			case 19:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SurveyPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSurveyId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStudentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSurveyDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFamilyCondition($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGrade($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOtherAssist($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDropoutInfo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPresentation($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setRevenue($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setProperty($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDonationUsage($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDonorConcerned($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setMsgToDonor($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setMsgToStu($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setSchoolOpinion($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTeacherOpinion($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUserOpinion($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDiscription($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCreatedAt($arr[$keys[19]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);

		if ($this->isColumnModified(SurveyPeer::SURVEY_ID)) $criteria->add(SurveyPeer::SURVEY_ID, $this->survey_id);
		if ($this->isColumnModified(SurveyPeer::STUDENT_ID)) $criteria->add(SurveyPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(SurveyPeer::USER_ID)) $criteria->add(SurveyPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(SurveyPeer::SURVEY_DATE)) $criteria->add(SurveyPeer::SURVEY_DATE, $this->survey_date);
		if ($this->isColumnModified(SurveyPeer::FAMILY_CONDITION)) $criteria->add(SurveyPeer::FAMILY_CONDITION, $this->family_condition);
		if ($this->isColumnModified(SurveyPeer::GRADE)) $criteria->add(SurveyPeer::GRADE, $this->grade);
		if ($this->isColumnModified(SurveyPeer::OTHER_ASSIST)) $criteria->add(SurveyPeer::OTHER_ASSIST, $this->other_assist);
		if ($this->isColumnModified(SurveyPeer::DROPOUT_INFO)) $criteria->add(SurveyPeer::DROPOUT_INFO, $this->dropout_info);
		if ($this->isColumnModified(SurveyPeer::PRESENTATION)) $criteria->add(SurveyPeer::PRESENTATION, $this->presentation);
		if ($this->isColumnModified(SurveyPeer::REVENUE)) $criteria->add(SurveyPeer::REVENUE, $this->revenue);
		if ($this->isColumnModified(SurveyPeer::PROPERTY)) $criteria->add(SurveyPeer::PROPERTY, $this->property);
		if ($this->isColumnModified(SurveyPeer::DONATION_USAGE)) $criteria->add(SurveyPeer::DONATION_USAGE, $this->donation_usage);
		if ($this->isColumnModified(SurveyPeer::DONOR_CONCERNED)) $criteria->add(SurveyPeer::DONOR_CONCERNED, $this->donor_concerned);
		if ($this->isColumnModified(SurveyPeer::MSG_TO_DONOR)) $criteria->add(SurveyPeer::MSG_TO_DONOR, $this->msg_to_donor);
		if ($this->isColumnModified(SurveyPeer::MSG_TO_STU)) $criteria->add(SurveyPeer::MSG_TO_STU, $this->msg_to_stu);
		if ($this->isColumnModified(SurveyPeer::SCHOOL_OPINION)) $criteria->add(SurveyPeer::SCHOOL_OPINION, $this->school_opinion);
		if ($this->isColumnModified(SurveyPeer::TEACHER_OPINION)) $criteria->add(SurveyPeer::TEACHER_OPINION, $this->teacher_opinion);
		if ($this->isColumnModified(SurveyPeer::USER_OPINION)) $criteria->add(SurveyPeer::USER_OPINION, $this->user_opinion);
		if ($this->isColumnModified(SurveyPeer::DISCRIPTION)) $criteria->add(SurveyPeer::DISCRIPTION, $this->discription);
		if ($this->isColumnModified(SurveyPeer::CREATED_AT)) $criteria->add(SurveyPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);

		$criteria->add(SurveyPeer::SURVEY_ID, $this->survey_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getSurveyId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setSurveyId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStudentId($this->student_id);

		$copyObj->setUserId($this->user_id);

		$copyObj->setSurveyDate($this->survey_date);

		$copyObj->setFamilyCondition($this->family_condition);

		$copyObj->setGrade($this->grade);

		$copyObj->setOtherAssist($this->other_assist);

		$copyObj->setDropoutInfo($this->dropout_info);

		$copyObj->setPresentation($this->presentation);

		$copyObj->setRevenue($this->revenue);

		$copyObj->setProperty($this->property);

		$copyObj->setDonationUsage($this->donation_usage);

		$copyObj->setDonorConcerned($this->donor_concerned);

		$copyObj->setMsgToDonor($this->msg_to_donor);

		$copyObj->setMsgToStu($this->msg_to_stu);

		$copyObj->setSchoolOpinion($this->school_opinion);

		$copyObj->setTeacherOpinion($this->teacher_opinion);

		$copyObj->setUserOpinion($this->user_opinion);

		$copyObj->setDiscription($this->discription);

		$copyObj->setCreatedAt($this->created_at);


		$copyObj->setNew(true);

		$copyObj->setSurveyId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SurveyPeer();
		}
		return self::$peer;
	}

	
	public function setStudent($v)
	{


		if ($v === null) {
			$this->setStudentId(NULL);
		} else {
			$this->setStudentId($v->getStudentId());
		}


		$this->aStudent = $v;
	}


	
	public function getStudent($con = null)
	{
		if ($this->aStudent === null && ($this->student_id !== null)) {
						include_once 'lib/model/om/BaseStudentPeer.php';

			$this->aStudent = StudentPeer::retrieveByPK($this->student_id, $con);

			
		}
		return $this->aStudent;
	}

	
	public function setUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getUserId());
		}


		$this->aUser = $v;
	}


	
	public function getUser($con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUser = UserPeer::retrieveByPK($this->user_id, $con);

			
		}
		return $this->aUser;
	}

} 