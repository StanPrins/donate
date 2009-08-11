<?php


abstract class BaseStudent extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $student_id;


	
	protected $school_id;


	
	protected $ofs_id;


	
	protected $name;


	
	protected $nickname;


	
	protected $race;


	
	protected $head_teacher;


	
	protected $guardian;


	
	protected $birthday;


	
	protected $grade;


	
	protected $male;


	
	protected $tel;


	
	protected $address;


	
	protected $postal;


	
	protected $city;


	
	protected $province;


	
	protected $consignee;


	
	protected $consignee_address;


	
	protected $consignee_postal;


	
	protected $assist_history;


	
	protected $is_instudy;


	
	protected $is_boarder;


	
	protected $is_donated;


	
	protected $dropout_history;


	
	protected $techang;


	
	protected $reward;


	
	protected $term_expense;


	
	protected $discription;


	
	protected $created_at;


	
	protected $remark;


	
	protected $photo;


	
	protected $member_photo;


	
	protected $house_photo;


	
	protected $fm1_relation;


	
	protected $fm1_name;


	
	protected $fm1_age;


	
	protected $fm1_occupation;


	
	protected $fm1_discription;


	
	protected $fm2_relation;


	
	protected $fm2_name;


	
	protected $fm2_age;


	
	protected $fm2_occupation;


	
	protected $fm2_discription;


	
	protected $fm3_relation;


	
	protected $fm3_name;


	
	protected $fm3_age;


	
	protected $fm3_occupation;


	
	protected $fm3_discription;


	
	protected $fm4_relation;


	
	protected $fm4_name;


	
	protected $fm4_age;


	
	protected $fm4_occupation;


	
	protected $fm4_discription;

	
	protected $aSchool;

	
	protected $collDonations;

	
	protected $lastDonationCriteria = null;

	
	protected $collReportCards;

	
	protected $lastReportCardCriteria = null;

	
	protected $collSurveys;

	
	protected $lastSurveyCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getStudentId()
	{

		return $this->student_id;
	}

	
	public function getSchoolId()
	{

		return $this->school_id;
	}

	
	public function getOfsId()
	{

		return $this->ofs_id;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getNickname()
	{

		return $this->nickname;
	}

	
	public function getRace()
	{

		return $this->race;
	}

	
	public function getHeadTeacher()
	{

		return $this->head_teacher;
	}

	
	public function getGuardian()
	{

		return $this->guardian;
	}

	
	public function getBirthday($format = 'Y-m-d')
	{

		if ($this->birthday === null || $this->birthday === '') {
			return null;
		} elseif (!is_int($this->birthday)) {
						$ts = strtotime($this->birthday);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [birthday] as date/time value: " . var_export($this->birthday, true));
			}
		} else {
			$ts = $this->birthday;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getGrade()
	{

		return $this->grade;
	}

	
	public function getMale()
	{

		return $this->male;
	}

	
	public function getTel()
	{

		return $this->tel;
	}

	
	public function getAddress()
	{

		return $this->address;
	}

	
	public function getPostal()
	{

		return $this->postal;
	}

	
	public function getCity()
	{

		return $this->city;
	}

	
	public function getProvince()
	{

		return $this->province;
	}

	
	public function getConsignee()
	{

		return $this->consignee;
	}

	
	public function getConsigneeAddress()
	{

		return $this->consignee_address;
	}

	
	public function getConsigneePostal()
	{

		return $this->consignee_postal;
	}

	
	public function getAssistHistory()
	{

		return $this->assist_history;
	}

	
	public function getIsInstudy()
	{

		return $this->is_instudy;
	}

	
	public function getIsBoarder()
	{

		return $this->is_boarder;
	}

	
	public function getIsDonated()
	{

		return $this->is_donated;
	}

	
	public function getDropoutHistory()
	{

		return $this->dropout_history;
	}

	
	public function getTechang()
	{

		return $this->techang;
	}

	
	public function getReward()
	{

		return $this->reward;
	}

	
	public function getTermExpense()
	{

		return $this->term_expense;
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

	
	public function getRemark()
	{

		return $this->remark;
	}

	
	public function getPhoto()
	{

		return $this->photo;
	}

	
	public function getMemberPhoto()
	{

		return $this->member_photo;
	}

	
	public function getHousePhoto()
	{

		return $this->house_photo;
	}

	
	public function getFm1Relation()
	{

		return $this->fm1_relation;
	}

	
	public function getFm1Name()
	{

		return $this->fm1_name;
	}

	
	public function getFm1Age()
	{

		return $this->fm1_age;
	}

	
	public function getFm1Occupation()
	{

		return $this->fm1_occupation;
	}

	
	public function getFm1Discription()
	{

		return $this->fm1_discription;
	}

	
	public function getFm2Relation()
	{

		return $this->fm2_relation;
	}

	
	public function getFm2Name()
	{

		return $this->fm2_name;
	}

	
	public function getFm2Age()
	{

		return $this->fm2_age;
	}

	
	public function getFm2Occupation()
	{

		return $this->fm2_occupation;
	}

	
	public function getFm2Discription()
	{

		return $this->fm2_discription;
	}

	
	public function getFm3Relation()
	{

		return $this->fm3_relation;
	}

	
	public function getFm3Name()
	{

		return $this->fm3_name;
	}

	
	public function getFm3Age()
	{

		return $this->fm3_age;
	}

	
	public function getFm3Occupation()
	{

		return $this->fm3_occupation;
	}

	
	public function getFm3Discription()
	{

		return $this->fm3_discription;
	}

	
	public function getFm4Relation()
	{

		return $this->fm4_relation;
	}

	
	public function getFm4Name()
	{

		return $this->fm4_name;
	}

	
	public function getFm4Age()
	{

		return $this->fm4_age;
	}

	
	public function getFm4Occupation()
	{

		return $this->fm4_occupation;
	}

	
	public function getFm4Discription()
	{

		return $this->fm4_discription;
	}

	
	public function setStudentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = StudentPeer::STUDENT_ID;
		}

	} 
	
	public function setSchoolId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->school_id !== $v) {
			$this->school_id = $v;
			$this->modifiedColumns[] = StudentPeer::SCHOOL_ID;
		}

		if ($this->aSchool !== null && $this->aSchool->getSchoolId() !== $v) {
			$this->aSchool = null;
		}

	} 
	
	public function setOfsId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ofs_id !== $v) {
			$this->ofs_id = $v;
			$this->modifiedColumns[] = StudentPeer::OFS_ID;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = StudentPeer::NAME;
		}

	} 
	
	public function setNickname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nickname !== $v) {
			$this->nickname = $v;
			$this->modifiedColumns[] = StudentPeer::NICKNAME;
		}

	} 
	
	public function setRace($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->race !== $v) {
			$this->race = $v;
			$this->modifiedColumns[] = StudentPeer::RACE;
		}

	} 
	
	public function setHeadTeacher($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->head_teacher !== $v) {
			$this->head_teacher = $v;
			$this->modifiedColumns[] = StudentPeer::HEAD_TEACHER;
		}

	} 
	
	public function setGuardian($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->guardian !== $v) {
			$this->guardian = $v;
			$this->modifiedColumns[] = StudentPeer::GUARDIAN;
		}

	} 
	
	public function setBirthday($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [birthday] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->birthday !== $ts) {
			$this->birthday = $ts;
			$this->modifiedColumns[] = StudentPeer::BIRTHDAY;
		}

	} 
	
	public function setGrade($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->grade !== $v) {
			$this->grade = $v;
			$this->modifiedColumns[] = StudentPeer::GRADE;
		}

	} 
	
	public function setMale($v)
	{

		if ($this->male !== $v) {
			$this->male = $v;
			$this->modifiedColumns[] = StudentPeer::MALE;
		}

	} 
	
	public function setTel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tel !== $v) {
			$this->tel = $v;
			$this->modifiedColumns[] = StudentPeer::TEL;
		}

	} 
	
	public function setAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = StudentPeer::ADDRESS;
		}

	} 
	
	public function setPostal($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->postal !== $v) {
			$this->postal = $v;
			$this->modifiedColumns[] = StudentPeer::POSTAL;
		}

	} 
	
	public function setCity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = StudentPeer::CITY;
		}

	} 
	
	public function setProvince($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->province !== $v) {
			$this->province = $v;
			$this->modifiedColumns[] = StudentPeer::PROVINCE;
		}

	} 
	
	public function setConsignee($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->consignee !== $v) {
			$this->consignee = $v;
			$this->modifiedColumns[] = StudentPeer::CONSIGNEE;
		}

	} 
	
	public function setConsigneeAddress($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->consignee_address !== $v) {
			$this->consignee_address = $v;
			$this->modifiedColumns[] = StudentPeer::CONSIGNEE_ADDRESS;
		}

	} 
	
	public function setConsigneePostal($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->consignee_postal !== $v) {
			$this->consignee_postal = $v;
			$this->modifiedColumns[] = StudentPeer::CONSIGNEE_POSTAL;
		}

	} 
	
	public function setAssistHistory($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->assist_history !== $v) {
			$this->assist_history = $v;
			$this->modifiedColumns[] = StudentPeer::ASSIST_HISTORY;
		}

	} 
	
	public function setIsInstudy($v)
	{

		if ($this->is_instudy !== $v) {
			$this->is_instudy = $v;
			$this->modifiedColumns[] = StudentPeer::IS_INSTUDY;
		}

	} 
	
	public function setIsBoarder($v)
	{

		if ($this->is_boarder !== $v) {
			$this->is_boarder = $v;
			$this->modifiedColumns[] = StudentPeer::IS_BOARDER;
		}

	} 
	
	public function setIsDonated($v)
	{

		if ($this->is_donated !== $v) {
			$this->is_donated = $v;
			$this->modifiedColumns[] = StudentPeer::IS_DONATED;
		}

	} 
	
	public function setDropoutHistory($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dropout_history !== $v) {
			$this->dropout_history = $v;
			$this->modifiedColumns[] = StudentPeer::DROPOUT_HISTORY;
		}

	} 
	
	public function setTechang($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->techang !== $v) {
			$this->techang = $v;
			$this->modifiedColumns[] = StudentPeer::TECHANG;
		}

	} 
	
	public function setReward($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reward !== $v) {
			$this->reward = $v;
			$this->modifiedColumns[] = StudentPeer::REWARD;
		}

	} 
	
	public function setTermExpense($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->term_expense !== $v) {
			$this->term_expense = $v;
			$this->modifiedColumns[] = StudentPeer::TERM_EXPENSE;
		}

	} 
	
	public function setDiscription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->discription !== $v) {
			$this->discription = $v;
			$this->modifiedColumns[] = StudentPeer::DISCRIPTION;
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
			$this->modifiedColumns[] = StudentPeer::CREATED_AT;
		}

	} 
	
	public function setRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remark !== $v) {
			$this->remark = $v;
			$this->modifiedColumns[] = StudentPeer::REMARK;
		}

	} 
	
	public function setPhoto($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo !== $v) {
			$this->photo = $v;
			$this->modifiedColumns[] = StudentPeer::PHOTO;
		}

	} 
	
	public function setMemberPhoto($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->member_photo !== $v) {
			$this->member_photo = $v;
			$this->modifiedColumns[] = StudentPeer::MEMBER_PHOTO;
		}

	} 
	
	public function setHousePhoto($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->house_photo !== $v) {
			$this->house_photo = $v;
			$this->modifiedColumns[] = StudentPeer::HOUSE_PHOTO;
		}

	} 
	
	public function setFm1Relation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm1_relation !== $v) {
			$this->fm1_relation = $v;
			$this->modifiedColumns[] = StudentPeer::FM1_RELATION;
		}

	} 
	
	public function setFm1Name($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm1_name !== $v) {
			$this->fm1_name = $v;
			$this->modifiedColumns[] = StudentPeer::FM1_NAME;
		}

	} 
	
	public function setFm1Age($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fm1_age !== $v) {
			$this->fm1_age = $v;
			$this->modifiedColumns[] = StudentPeer::FM1_AGE;
		}

	} 
	
	public function setFm1Occupation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm1_occupation !== $v) {
			$this->fm1_occupation = $v;
			$this->modifiedColumns[] = StudentPeer::FM1_OCCUPATION;
		}

	} 
	
	public function setFm1Discription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm1_discription !== $v) {
			$this->fm1_discription = $v;
			$this->modifiedColumns[] = StudentPeer::FM1_DISCRIPTION;
		}

	} 
	
	public function setFm2Relation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm2_relation !== $v) {
			$this->fm2_relation = $v;
			$this->modifiedColumns[] = StudentPeer::FM2_RELATION;
		}

	} 
	
	public function setFm2Name($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm2_name !== $v) {
			$this->fm2_name = $v;
			$this->modifiedColumns[] = StudentPeer::FM2_NAME;
		}

	} 
	
	public function setFm2Age($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fm2_age !== $v) {
			$this->fm2_age = $v;
			$this->modifiedColumns[] = StudentPeer::FM2_AGE;
		}

	} 
	
	public function setFm2Occupation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm2_occupation !== $v) {
			$this->fm2_occupation = $v;
			$this->modifiedColumns[] = StudentPeer::FM2_OCCUPATION;
		}

	} 
	
	public function setFm2Discription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm2_discription !== $v) {
			$this->fm2_discription = $v;
			$this->modifiedColumns[] = StudentPeer::FM2_DISCRIPTION;
		}

	} 
	
	public function setFm3Relation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm3_relation !== $v) {
			$this->fm3_relation = $v;
			$this->modifiedColumns[] = StudentPeer::FM3_RELATION;
		}

	} 
	
	public function setFm3Name($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm3_name !== $v) {
			$this->fm3_name = $v;
			$this->modifiedColumns[] = StudentPeer::FM3_NAME;
		}

	} 
	
	public function setFm3Age($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fm3_age !== $v) {
			$this->fm3_age = $v;
			$this->modifiedColumns[] = StudentPeer::FM3_AGE;
		}

	} 
	
	public function setFm3Occupation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm3_occupation !== $v) {
			$this->fm3_occupation = $v;
			$this->modifiedColumns[] = StudentPeer::FM3_OCCUPATION;
		}

	} 
	
	public function setFm3Discription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm3_discription !== $v) {
			$this->fm3_discription = $v;
			$this->modifiedColumns[] = StudentPeer::FM3_DISCRIPTION;
		}

	} 
	
	public function setFm4Relation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm4_relation !== $v) {
			$this->fm4_relation = $v;
			$this->modifiedColumns[] = StudentPeer::FM4_RELATION;
		}

	} 
	
	public function setFm4Name($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm4_name !== $v) {
			$this->fm4_name = $v;
			$this->modifiedColumns[] = StudentPeer::FM4_NAME;
		}

	} 
	
	public function setFm4Age($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fm4_age !== $v) {
			$this->fm4_age = $v;
			$this->modifiedColumns[] = StudentPeer::FM4_AGE;
		}

	} 
	
	public function setFm4Occupation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm4_occupation !== $v) {
			$this->fm4_occupation = $v;
			$this->modifiedColumns[] = StudentPeer::FM4_OCCUPATION;
		}

	} 
	
	public function setFm4Discription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fm4_discription !== $v) {
			$this->fm4_discription = $v;
			$this->modifiedColumns[] = StudentPeer::FM4_DISCRIPTION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->student_id = $rs->getInt($startcol + 0);

			$this->school_id = $rs->getInt($startcol + 1);

			$this->ofs_id = $rs->getString($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->nickname = $rs->getString($startcol + 4);

			$this->race = $rs->getString($startcol + 5);

			$this->head_teacher = $rs->getString($startcol + 6);

			$this->guardian = $rs->getString($startcol + 7);

			$this->birthday = $rs->getDate($startcol + 8, null);

			$this->grade = $rs->getString($startcol + 9);

			$this->male = $rs->getBoolean($startcol + 10);

			$this->tel = $rs->getString($startcol + 11);

			$this->address = $rs->getString($startcol + 12);

			$this->postal = $rs->getInt($startcol + 13);

			$this->city = $rs->getString($startcol + 14);

			$this->province = $rs->getString($startcol + 15);

			$this->consignee = $rs->getString($startcol + 16);

			$this->consignee_address = $rs->getString($startcol + 17);

			$this->consignee_postal = $rs->getInt($startcol + 18);

			$this->assist_history = $rs->getString($startcol + 19);

			$this->is_instudy = $rs->getBoolean($startcol + 20);

			$this->is_boarder = $rs->getBoolean($startcol + 21);

			$this->is_donated = $rs->getBoolean($startcol + 22);

			$this->dropout_history = $rs->getString($startcol + 23);

			$this->techang = $rs->getString($startcol + 24);

			$this->reward = $rs->getString($startcol + 25);

			$this->term_expense = $rs->getString($startcol + 26);

			$this->discription = $rs->getString($startcol + 27);

			$this->created_at = $rs->getTimestamp($startcol + 28, null);

			$this->remark = $rs->getString($startcol + 29);

			$this->photo = $rs->getString($startcol + 30);

			$this->member_photo = $rs->getString($startcol + 31);

			$this->house_photo = $rs->getString($startcol + 32);

			$this->fm1_relation = $rs->getString($startcol + 33);

			$this->fm1_name = $rs->getString($startcol + 34);

			$this->fm1_age = $rs->getInt($startcol + 35);

			$this->fm1_occupation = $rs->getString($startcol + 36);

			$this->fm1_discription = $rs->getString($startcol + 37);

			$this->fm2_relation = $rs->getString($startcol + 38);

			$this->fm2_name = $rs->getString($startcol + 39);

			$this->fm2_age = $rs->getInt($startcol + 40);

			$this->fm2_occupation = $rs->getString($startcol + 41);

			$this->fm2_discription = $rs->getString($startcol + 42);

			$this->fm3_relation = $rs->getString($startcol + 43);

			$this->fm3_name = $rs->getString($startcol + 44);

			$this->fm3_age = $rs->getInt($startcol + 45);

			$this->fm3_occupation = $rs->getString($startcol + 46);

			$this->fm3_discription = $rs->getString($startcol + 47);

			$this->fm4_relation = $rs->getString($startcol + 48);

			$this->fm4_name = $rs->getString($startcol + 49);

			$this->fm4_age = $rs->getInt($startcol + 50);

			$this->fm4_occupation = $rs->getString($startcol + 51);

			$this->fm4_discription = $rs->getString($startcol + 52);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 53; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Student object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StudentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			StudentPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(StudentPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(StudentPeer::DATABASE_NAME);
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


												
			if ($this->aSchool !== null) {
				if ($this->aSchool->isModified()) {
					$affectedRows += $this->aSchool->save($con);
				}
				$this->setSchool($this->aSchool);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = StudentPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setStudentId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += StudentPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collDonations !== null) {
				foreach($this->collDonations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collReportCards !== null) {
				foreach($this->collReportCards as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collSurveys !== null) {
				foreach($this->collSurveys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


												
			if ($this->aSchool !== null) {
				if (!$this->aSchool->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSchool->getValidationFailures());
				}
			}


			if (($retval = StudentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collDonations !== null) {
					foreach($this->collDonations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collReportCards !== null) {
					foreach($this->collReportCards as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collSurveys !== null) {
					foreach($this->collSurveys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StudentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getStudentId();
				break;
			case 1:
				return $this->getSchoolId();
				break;
			case 2:
				return $this->getOfsId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getNickname();
				break;
			case 5:
				return $this->getRace();
				break;
			case 6:
				return $this->getHeadTeacher();
				break;
			case 7:
				return $this->getGuardian();
				break;
			case 8:
				return $this->getBirthday();
				break;
			case 9:
				return $this->getGrade();
				break;
			case 10:
				return $this->getMale();
				break;
			case 11:
				return $this->getTel();
				break;
			case 12:
				return $this->getAddress();
				break;
			case 13:
				return $this->getPostal();
				break;
			case 14:
				return $this->getCity();
				break;
			case 15:
				return $this->getProvince();
				break;
			case 16:
				return $this->getConsignee();
				break;
			case 17:
				return $this->getConsigneeAddress();
				break;
			case 18:
				return $this->getConsigneePostal();
				break;
			case 19:
				return $this->getAssistHistory();
				break;
			case 20:
				return $this->getIsInstudy();
				break;
			case 21:
				return $this->getIsBoarder();
				break;
			case 22:
				return $this->getIsDonated();
				break;
			case 23:
				return $this->getDropoutHistory();
				break;
			case 24:
				return $this->getTechang();
				break;
			case 25:
				return $this->getReward();
				break;
			case 26:
				return $this->getTermExpense();
				break;
			case 27:
				return $this->getDiscription();
				break;
			case 28:
				return $this->getCreatedAt();
				break;
			case 29:
				return $this->getRemark();
				break;
			case 30:
				return $this->getPhoto();
				break;
			case 31:
				return $this->getMemberPhoto();
				break;
			case 32:
				return $this->getHousePhoto();
				break;
			case 33:
				return $this->getFm1Relation();
				break;
			case 34:
				return $this->getFm1Name();
				break;
			case 35:
				return $this->getFm1Age();
				break;
			case 36:
				return $this->getFm1Occupation();
				break;
			case 37:
				return $this->getFm1Discription();
				break;
			case 38:
				return $this->getFm2Relation();
				break;
			case 39:
				return $this->getFm2Name();
				break;
			case 40:
				return $this->getFm2Age();
				break;
			case 41:
				return $this->getFm2Occupation();
				break;
			case 42:
				return $this->getFm2Discription();
				break;
			case 43:
				return $this->getFm3Relation();
				break;
			case 44:
				return $this->getFm3Name();
				break;
			case 45:
				return $this->getFm3Age();
				break;
			case 46:
				return $this->getFm3Occupation();
				break;
			case 47:
				return $this->getFm3Discription();
				break;
			case 48:
				return $this->getFm4Relation();
				break;
			case 49:
				return $this->getFm4Name();
				break;
			case 50:
				return $this->getFm4Age();
				break;
			case 51:
				return $this->getFm4Occupation();
				break;
			case 52:
				return $this->getFm4Discription();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StudentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getStudentId(),
			$keys[1] => $this->getSchoolId(),
			$keys[2] => $this->getOfsId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getNickname(),
			$keys[5] => $this->getRace(),
			$keys[6] => $this->getHeadTeacher(),
			$keys[7] => $this->getGuardian(),
			$keys[8] => $this->getBirthday(),
			$keys[9] => $this->getGrade(),
			$keys[10] => $this->getMale(),
			$keys[11] => $this->getTel(),
			$keys[12] => $this->getAddress(),
			$keys[13] => $this->getPostal(),
			$keys[14] => $this->getCity(),
			$keys[15] => $this->getProvince(),
			$keys[16] => $this->getConsignee(),
			$keys[17] => $this->getConsigneeAddress(),
			$keys[18] => $this->getConsigneePostal(),
			$keys[19] => $this->getAssistHistory(),
			$keys[20] => $this->getIsInstudy(),
			$keys[21] => $this->getIsBoarder(),
			$keys[22] => $this->getIsDonated(),
			$keys[23] => $this->getDropoutHistory(),
			$keys[24] => $this->getTechang(),
			$keys[25] => $this->getReward(),
			$keys[26] => $this->getTermExpense(),
			$keys[27] => $this->getDiscription(),
			$keys[28] => $this->getCreatedAt(),
			$keys[29] => $this->getRemark(),
			$keys[30] => $this->getPhoto(),
			$keys[31] => $this->getMemberPhoto(),
			$keys[32] => $this->getHousePhoto(),
			$keys[33] => $this->getFm1Relation(),
			$keys[34] => $this->getFm1Name(),
			$keys[35] => $this->getFm1Age(),
			$keys[36] => $this->getFm1Occupation(),
			$keys[37] => $this->getFm1Discription(),
			$keys[38] => $this->getFm2Relation(),
			$keys[39] => $this->getFm2Name(),
			$keys[40] => $this->getFm2Age(),
			$keys[41] => $this->getFm2Occupation(),
			$keys[42] => $this->getFm2Discription(),
			$keys[43] => $this->getFm3Relation(),
			$keys[44] => $this->getFm3Name(),
			$keys[45] => $this->getFm3Age(),
			$keys[46] => $this->getFm3Occupation(),
			$keys[47] => $this->getFm3Discription(),
			$keys[48] => $this->getFm4Relation(),
			$keys[49] => $this->getFm4Name(),
			$keys[50] => $this->getFm4Age(),
			$keys[51] => $this->getFm4Occupation(),
			$keys[52] => $this->getFm4Discription(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = StudentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setStudentId($value);
				break;
			case 1:
				$this->setSchoolId($value);
				break;
			case 2:
				$this->setOfsId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setNickname($value);
				break;
			case 5:
				$this->setRace($value);
				break;
			case 6:
				$this->setHeadTeacher($value);
				break;
			case 7:
				$this->setGuardian($value);
				break;
			case 8:
				$this->setBirthday($value);
				break;
			case 9:
				$this->setGrade($value);
				break;
			case 10:
				$this->setMale($value);
				break;
			case 11:
				$this->setTel($value);
				break;
			case 12:
				$this->setAddress($value);
				break;
			case 13:
				$this->setPostal($value);
				break;
			case 14:
				$this->setCity($value);
				break;
			case 15:
				$this->setProvince($value);
				break;
			case 16:
				$this->setConsignee($value);
				break;
			case 17:
				$this->setConsigneeAddress($value);
				break;
			case 18:
				$this->setConsigneePostal($value);
				break;
			case 19:
				$this->setAssistHistory($value);
				break;
			case 20:
				$this->setIsInstudy($value);
				break;
			case 21:
				$this->setIsBoarder($value);
				break;
			case 22:
				$this->setIsDonated($value);
				break;
			case 23:
				$this->setDropoutHistory($value);
				break;
			case 24:
				$this->setTechang($value);
				break;
			case 25:
				$this->setReward($value);
				break;
			case 26:
				$this->setTermExpense($value);
				break;
			case 27:
				$this->setDiscription($value);
				break;
			case 28:
				$this->setCreatedAt($value);
				break;
			case 29:
				$this->setRemark($value);
				break;
			case 30:
				$this->setPhoto($value);
				break;
			case 31:
				$this->setMemberPhoto($value);
				break;
			case 32:
				$this->setHousePhoto($value);
				break;
			case 33:
				$this->setFm1Relation($value);
				break;
			case 34:
				$this->setFm1Name($value);
				break;
			case 35:
				$this->setFm1Age($value);
				break;
			case 36:
				$this->setFm1Occupation($value);
				break;
			case 37:
				$this->setFm1Discription($value);
				break;
			case 38:
				$this->setFm2Relation($value);
				break;
			case 39:
				$this->setFm2Name($value);
				break;
			case 40:
				$this->setFm2Age($value);
				break;
			case 41:
				$this->setFm2Occupation($value);
				break;
			case 42:
				$this->setFm2Discription($value);
				break;
			case 43:
				$this->setFm3Relation($value);
				break;
			case 44:
				$this->setFm3Name($value);
				break;
			case 45:
				$this->setFm3Age($value);
				break;
			case 46:
				$this->setFm3Occupation($value);
				break;
			case 47:
				$this->setFm3Discription($value);
				break;
			case 48:
				$this->setFm4Relation($value);
				break;
			case 49:
				$this->setFm4Name($value);
				break;
			case 50:
				$this->setFm4Age($value);
				break;
			case 51:
				$this->setFm4Occupation($value);
				break;
			case 52:
				$this->setFm4Discription($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = StudentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setStudentId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSchoolId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOfsId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNickname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRace($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHeadTeacher($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setGuardian($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setBirthday($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGrade($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMale($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTel($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAddress($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setPostal($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCity($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setProvince($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setConsignee($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setConsigneeAddress($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setConsigneePostal($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setAssistHistory($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setIsInstudy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setIsBoarder($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setIsDonated($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDropoutHistory($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTechang($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setReward($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setTermExpense($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDiscription($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCreatedAt($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setRemark($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setPhoto($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setMemberPhoto($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setHousePhoto($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setFm1Relation($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setFm1Name($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setFm1Age($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setFm1Occupation($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setFm1Discription($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setFm2Relation($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setFm2Name($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setFm2Age($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setFm2Occupation($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setFm2Discription($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setFm3Relation($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setFm3Name($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setFm3Age($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setFm3Occupation($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setFm3Discription($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setFm4Relation($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setFm4Name($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setFm4Age($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setFm4Occupation($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setFm4Discription($arr[$keys[52]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(StudentPeer::DATABASE_NAME);

		if ($this->isColumnModified(StudentPeer::STUDENT_ID)) $criteria->add(StudentPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(StudentPeer::SCHOOL_ID)) $criteria->add(StudentPeer::SCHOOL_ID, $this->school_id);
		if ($this->isColumnModified(StudentPeer::OFS_ID)) $criteria->add(StudentPeer::OFS_ID, $this->ofs_id);
		if ($this->isColumnModified(StudentPeer::NAME)) $criteria->add(StudentPeer::NAME, $this->name);
		if ($this->isColumnModified(StudentPeer::NICKNAME)) $criteria->add(StudentPeer::NICKNAME, $this->nickname);
		if ($this->isColumnModified(StudentPeer::RACE)) $criteria->add(StudentPeer::RACE, $this->race);
		if ($this->isColumnModified(StudentPeer::HEAD_TEACHER)) $criteria->add(StudentPeer::HEAD_TEACHER, $this->head_teacher);
		if ($this->isColumnModified(StudentPeer::GUARDIAN)) $criteria->add(StudentPeer::GUARDIAN, $this->guardian);
		if ($this->isColumnModified(StudentPeer::BIRTHDAY)) $criteria->add(StudentPeer::BIRTHDAY, $this->birthday);
		if ($this->isColumnModified(StudentPeer::GRADE)) $criteria->add(StudentPeer::GRADE, $this->grade);
		if ($this->isColumnModified(StudentPeer::MALE)) $criteria->add(StudentPeer::MALE, $this->male);
		if ($this->isColumnModified(StudentPeer::TEL)) $criteria->add(StudentPeer::TEL, $this->tel);
		if ($this->isColumnModified(StudentPeer::ADDRESS)) $criteria->add(StudentPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(StudentPeer::POSTAL)) $criteria->add(StudentPeer::POSTAL, $this->postal);
		if ($this->isColumnModified(StudentPeer::CITY)) $criteria->add(StudentPeer::CITY, $this->city);
		if ($this->isColumnModified(StudentPeer::PROVINCE)) $criteria->add(StudentPeer::PROVINCE, $this->province);
		if ($this->isColumnModified(StudentPeer::CONSIGNEE)) $criteria->add(StudentPeer::CONSIGNEE, $this->consignee);
		if ($this->isColumnModified(StudentPeer::CONSIGNEE_ADDRESS)) $criteria->add(StudentPeer::CONSIGNEE_ADDRESS, $this->consignee_address);
		if ($this->isColumnModified(StudentPeer::CONSIGNEE_POSTAL)) $criteria->add(StudentPeer::CONSIGNEE_POSTAL, $this->consignee_postal);
		if ($this->isColumnModified(StudentPeer::ASSIST_HISTORY)) $criteria->add(StudentPeer::ASSIST_HISTORY, $this->assist_history);
		if ($this->isColumnModified(StudentPeer::IS_INSTUDY)) $criteria->add(StudentPeer::IS_INSTUDY, $this->is_instudy);
		if ($this->isColumnModified(StudentPeer::IS_BOARDER)) $criteria->add(StudentPeer::IS_BOARDER, $this->is_boarder);
		if ($this->isColumnModified(StudentPeer::IS_DONATED)) $criteria->add(StudentPeer::IS_DONATED, $this->is_donated);
		if ($this->isColumnModified(StudentPeer::DROPOUT_HISTORY)) $criteria->add(StudentPeer::DROPOUT_HISTORY, $this->dropout_history);
		if ($this->isColumnModified(StudentPeer::TECHANG)) $criteria->add(StudentPeer::TECHANG, $this->techang);
		if ($this->isColumnModified(StudentPeer::REWARD)) $criteria->add(StudentPeer::REWARD, $this->reward);
		if ($this->isColumnModified(StudentPeer::TERM_EXPENSE)) $criteria->add(StudentPeer::TERM_EXPENSE, $this->term_expense);
		if ($this->isColumnModified(StudentPeer::DISCRIPTION)) $criteria->add(StudentPeer::DISCRIPTION, $this->discription);
		if ($this->isColumnModified(StudentPeer::CREATED_AT)) $criteria->add(StudentPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(StudentPeer::REMARK)) $criteria->add(StudentPeer::REMARK, $this->remark);
		if ($this->isColumnModified(StudentPeer::PHOTO)) $criteria->add(StudentPeer::PHOTO, $this->photo);
		if ($this->isColumnModified(StudentPeer::MEMBER_PHOTO)) $criteria->add(StudentPeer::MEMBER_PHOTO, $this->member_photo);
		if ($this->isColumnModified(StudentPeer::HOUSE_PHOTO)) $criteria->add(StudentPeer::HOUSE_PHOTO, $this->house_photo);
		if ($this->isColumnModified(StudentPeer::FM1_RELATION)) $criteria->add(StudentPeer::FM1_RELATION, $this->fm1_relation);
		if ($this->isColumnModified(StudentPeer::FM1_NAME)) $criteria->add(StudentPeer::FM1_NAME, $this->fm1_name);
		if ($this->isColumnModified(StudentPeer::FM1_AGE)) $criteria->add(StudentPeer::FM1_AGE, $this->fm1_age);
		if ($this->isColumnModified(StudentPeer::FM1_OCCUPATION)) $criteria->add(StudentPeer::FM1_OCCUPATION, $this->fm1_occupation);
		if ($this->isColumnModified(StudentPeer::FM1_DISCRIPTION)) $criteria->add(StudentPeer::FM1_DISCRIPTION, $this->fm1_discription);
		if ($this->isColumnModified(StudentPeer::FM2_RELATION)) $criteria->add(StudentPeer::FM2_RELATION, $this->fm2_relation);
		if ($this->isColumnModified(StudentPeer::FM2_NAME)) $criteria->add(StudentPeer::FM2_NAME, $this->fm2_name);
		if ($this->isColumnModified(StudentPeer::FM2_AGE)) $criteria->add(StudentPeer::FM2_AGE, $this->fm2_age);
		if ($this->isColumnModified(StudentPeer::FM2_OCCUPATION)) $criteria->add(StudentPeer::FM2_OCCUPATION, $this->fm2_occupation);
		if ($this->isColumnModified(StudentPeer::FM2_DISCRIPTION)) $criteria->add(StudentPeer::FM2_DISCRIPTION, $this->fm2_discription);
		if ($this->isColumnModified(StudentPeer::FM3_RELATION)) $criteria->add(StudentPeer::FM3_RELATION, $this->fm3_relation);
		if ($this->isColumnModified(StudentPeer::FM3_NAME)) $criteria->add(StudentPeer::FM3_NAME, $this->fm3_name);
		if ($this->isColumnModified(StudentPeer::FM3_AGE)) $criteria->add(StudentPeer::FM3_AGE, $this->fm3_age);
		if ($this->isColumnModified(StudentPeer::FM3_OCCUPATION)) $criteria->add(StudentPeer::FM3_OCCUPATION, $this->fm3_occupation);
		if ($this->isColumnModified(StudentPeer::FM3_DISCRIPTION)) $criteria->add(StudentPeer::FM3_DISCRIPTION, $this->fm3_discription);
		if ($this->isColumnModified(StudentPeer::FM4_RELATION)) $criteria->add(StudentPeer::FM4_RELATION, $this->fm4_relation);
		if ($this->isColumnModified(StudentPeer::FM4_NAME)) $criteria->add(StudentPeer::FM4_NAME, $this->fm4_name);
		if ($this->isColumnModified(StudentPeer::FM4_AGE)) $criteria->add(StudentPeer::FM4_AGE, $this->fm4_age);
		if ($this->isColumnModified(StudentPeer::FM4_OCCUPATION)) $criteria->add(StudentPeer::FM4_OCCUPATION, $this->fm4_occupation);
		if ($this->isColumnModified(StudentPeer::FM4_DISCRIPTION)) $criteria->add(StudentPeer::FM4_DISCRIPTION, $this->fm4_discription);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(StudentPeer::DATABASE_NAME);

		$criteria->add(StudentPeer::STUDENT_ID, $this->student_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getStudentId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setStudentId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setSchoolId($this->school_id);

		$copyObj->setOfsId($this->ofs_id);

		$copyObj->setName($this->name);

		$copyObj->setNickname($this->nickname);

		$copyObj->setRace($this->race);

		$copyObj->setHeadTeacher($this->head_teacher);

		$copyObj->setGuardian($this->guardian);

		$copyObj->setBirthday($this->birthday);

		$copyObj->setGrade($this->grade);

		$copyObj->setMale($this->male);

		$copyObj->setTel($this->tel);

		$copyObj->setAddress($this->address);

		$copyObj->setPostal($this->postal);

		$copyObj->setCity($this->city);

		$copyObj->setProvince($this->province);

		$copyObj->setConsignee($this->consignee);

		$copyObj->setConsigneeAddress($this->consignee_address);

		$copyObj->setConsigneePostal($this->consignee_postal);

		$copyObj->setAssistHistory($this->assist_history);

		$copyObj->setIsInstudy($this->is_instudy);

		$copyObj->setIsBoarder($this->is_boarder);

		$copyObj->setIsDonated($this->is_donated);

		$copyObj->setDropoutHistory($this->dropout_history);

		$copyObj->setTechang($this->techang);

		$copyObj->setReward($this->reward);

		$copyObj->setTermExpense($this->term_expense);

		$copyObj->setDiscription($this->discription);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setRemark($this->remark);

		$copyObj->setPhoto($this->photo);

		$copyObj->setMemberPhoto($this->member_photo);

		$copyObj->setHousePhoto($this->house_photo);

		$copyObj->setFm1Relation($this->fm1_relation);

		$copyObj->setFm1Name($this->fm1_name);

		$copyObj->setFm1Age($this->fm1_age);

		$copyObj->setFm1Occupation($this->fm1_occupation);

		$copyObj->setFm1Discription($this->fm1_discription);

		$copyObj->setFm2Relation($this->fm2_relation);

		$copyObj->setFm2Name($this->fm2_name);

		$copyObj->setFm2Age($this->fm2_age);

		$copyObj->setFm2Occupation($this->fm2_occupation);

		$copyObj->setFm2Discription($this->fm2_discription);

		$copyObj->setFm3Relation($this->fm3_relation);

		$copyObj->setFm3Name($this->fm3_name);

		$copyObj->setFm3Age($this->fm3_age);

		$copyObj->setFm3Occupation($this->fm3_occupation);

		$copyObj->setFm3Discription($this->fm3_discription);

		$copyObj->setFm4Relation($this->fm4_relation);

		$copyObj->setFm4Name($this->fm4_name);

		$copyObj->setFm4Age($this->fm4_age);

		$copyObj->setFm4Occupation($this->fm4_occupation);

		$copyObj->setFm4Discription($this->fm4_discription);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getDonations() as $relObj) {
				$copyObj->addDonation($relObj->copy($deepCopy));
			}

			foreach($this->getReportCards() as $relObj) {
				$copyObj->addReportCard($relObj->copy($deepCopy));
			}

			foreach($this->getSurveys() as $relObj) {
				$copyObj->addSurvey($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setStudentId(NULL); 
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
			self::$peer = new StudentPeer();
		}
		return self::$peer;
	}

	
	public function setSchool($v)
	{


		if ($v === null) {
			$this->setSchoolId(NULL);
		} else {
			$this->setSchoolId($v->getSchoolId());
		}


		$this->aSchool = $v;
	}


	
	public function getSchool($con = null)
	{
		if ($this->aSchool === null && ($this->school_id !== null)) {
						include_once 'lib/model/om/BaseSchoolPeer.php';

			$this->aSchool = SchoolPeer::retrieveByPK($this->school_id, $con);

			
		}
		return $this->aSchool;
	}

	
	public function initDonations()
	{
		if ($this->collDonations === null) {
			$this->collDonations = array();
		}
	}

	
	public function getDonations($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDonationPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDonations === null) {
			if ($this->isNew()) {
			   $this->collDonations = array();
			} else {

				$criteria->add(DonationPeer::STUDENT_ID, $this->getStudentId());

				DonationPeer::addSelectColumns($criteria);
				$this->collDonations = DonationPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DonationPeer::STUDENT_ID, $this->getStudentId());

				DonationPeer::addSelectColumns($criteria);
				if (!isset($this->lastDonationCriteria) || !$this->lastDonationCriteria->equals($criteria)) {
					$this->collDonations = DonationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDonationCriteria = $criteria;
		return $this->collDonations;
	}

	
	public function countDonations($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseDonationPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DonationPeer::STUDENT_ID, $this->getStudentId());

		return DonationPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDonation(Donation $l)
	{
		$this->collDonations[] = $l;
		$l->setStudent($this);
	}


	
	public function getDonationsJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDonationPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDonations === null) {
			if ($this->isNew()) {
				$this->collDonations = array();
			} else {

				$criteria->add(DonationPeer::STUDENT_ID, $this->getStudentId());

				$this->collDonations = DonationPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(DonationPeer::STUDENT_ID, $this->getStudentId());

			if (!isset($this->lastDonationCriteria) || !$this->lastDonationCriteria->equals($criteria)) {
				$this->collDonations = DonationPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastDonationCriteria = $criteria;

		return $this->collDonations;
	}

	
	public function initReportCards()
	{
		if ($this->collReportCards === null) {
			$this->collReportCards = array();
		}
	}

	
	public function getReportCards($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseReportCardPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collReportCards === null) {
			if ($this->isNew()) {
			   $this->collReportCards = array();
			} else {

				$criteria->add(ReportCardPeer::STUDENT_ID, $this->getStudentId());

				ReportCardPeer::addSelectColumns($criteria);
				$this->collReportCards = ReportCardPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ReportCardPeer::STUDENT_ID, $this->getStudentId());

				ReportCardPeer::addSelectColumns($criteria);
				if (!isset($this->lastReportCardCriteria) || !$this->lastReportCardCriteria->equals($criteria)) {
					$this->collReportCards = ReportCardPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastReportCardCriteria = $criteria;
		return $this->collReportCards;
	}

	
	public function countReportCards($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseReportCardPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ReportCardPeer::STUDENT_ID, $this->getStudentId());

		return ReportCardPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addReportCard(ReportCard $l)
	{
		$this->collReportCards[] = $l;
		$l->setStudent($this);
	}


	
	public function getReportCardsJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseReportCardPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collReportCards === null) {
			if ($this->isNew()) {
				$this->collReportCards = array();
			} else {

				$criteria->add(ReportCardPeer::STUDENT_ID, $this->getStudentId());

				$this->collReportCards = ReportCardPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(ReportCardPeer::STUDENT_ID, $this->getStudentId());

			if (!isset($this->lastReportCardCriteria) || !$this->lastReportCardCriteria->equals($criteria)) {
				$this->collReportCards = ReportCardPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastReportCardCriteria = $criteria;

		return $this->collReportCards;
	}

	
	public function initSurveys()
	{
		if ($this->collSurveys === null) {
			$this->collSurveys = array();
		}
	}

	
	public function getSurveys($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSurveyPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSurveys === null) {
			if ($this->isNew()) {
			   $this->collSurveys = array();
			} else {

				$criteria->add(SurveyPeer::STUDENT_ID, $this->getStudentId());

				SurveyPeer::addSelectColumns($criteria);
				$this->collSurveys = SurveyPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SurveyPeer::STUDENT_ID, $this->getStudentId());

				SurveyPeer::addSelectColumns($criteria);
				if (!isset($this->lastSurveyCriteria) || !$this->lastSurveyCriteria->equals($criteria)) {
					$this->collSurveys = SurveyPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSurveyCriteria = $criteria;
		return $this->collSurveys;
	}

	
	public function countSurveys($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSurveyPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SurveyPeer::STUDENT_ID, $this->getStudentId());

		return SurveyPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSurvey(Survey $l)
	{
		$this->collSurveys[] = $l;
		$l->setStudent($this);
	}


	
	public function getSurveysJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSurveyPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSurveys === null) {
			if ($this->isNew()) {
				$this->collSurveys = array();
			} else {

				$criteria->add(SurveyPeer::STUDENT_ID, $this->getStudentId());

				$this->collSurveys = SurveyPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(SurveyPeer::STUDENT_ID, $this->getStudentId());

			if (!isset($this->lastSurveyCriteria) || !$this->lastSurveyCriteria->equals($criteria)) {
				$this->collSurveys = SurveyPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastSurveyCriteria = $criteria;

		return $this->collSurveys;
	}

} 