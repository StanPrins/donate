<?php


abstract class BaseDonation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $donation_id;


	
	protected $student_id;


	
	protected $user_id;


	
	protected $amount;


	
	protected $start_date;


	
	protected $end_date;


	
	protected $approve;


	
	protected $is_active;


	
	protected $created_at;

	
	protected $aStudent;

	
	protected $aUser;

	
	protected $collRemits;

	
	protected $lastRemitCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getDonationId()
	{

		return $this->donation_id;
	}

	
	public function getStudentId()
	{

		return $this->student_id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getAmount()
	{

		return $this->amount;
	}

	
	public function getStartDate($format = 'Y-m-d')
	{

		if ($this->start_date === null || $this->start_date === '') {
			return null;
		} elseif (!is_int($this->start_date)) {
						$ts = strtotime($this->start_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [start_date] as date/time value: " . var_export($this->start_date, true));
			}
		} else {
			$ts = $this->start_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getEndDate($format = 'Y-m-d')
	{

		if ($this->end_date === null || $this->end_date === '') {
			return null;
		} elseif (!is_int($this->end_date)) {
						$ts = strtotime($this->end_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [end_date] as date/time value: " . var_export($this->end_date, true));
			}
		} else {
			$ts = $this->end_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getApprove()
	{

		return $this->approve;
	}

	
	public function getIsActive()
	{

		return $this->is_active;
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

	
	public function setDonationId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->donation_id !== $v) {
			$this->donation_id = $v;
			$this->modifiedColumns[] = DonationPeer::DONATION_ID;
		}

	} 
	
	public function setStudentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = DonationPeer::STUDENT_ID;
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
			$this->modifiedColumns[] = DonationPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getUserId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setAmount($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->amount !== $v) {
			$this->amount = $v;
			$this->modifiedColumns[] = DonationPeer::AMOUNT;
		}

	} 
	
	public function setStartDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [start_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->start_date !== $ts) {
			$this->start_date = $ts;
			$this->modifiedColumns[] = DonationPeer::START_DATE;
		}

	} 
	
	public function setEndDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [end_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->end_date !== $ts) {
			$this->end_date = $ts;
			$this->modifiedColumns[] = DonationPeer::END_DATE;
		}

	} 
	
	public function setApprove($v)
	{

		if ($this->approve !== $v) {
			$this->approve = $v;
			$this->modifiedColumns[] = DonationPeer::APPROVE;
		}

	} 
	
	public function setIsActive($v)
	{

		if ($this->is_active !== $v) {
			$this->is_active = $v;
			$this->modifiedColumns[] = DonationPeer::IS_ACTIVE;
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
			$this->modifiedColumns[] = DonationPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->donation_id = $rs->getInt($startcol + 0);

			$this->student_id = $rs->getInt($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->amount = $rs->getInt($startcol + 3);

			$this->start_date = $rs->getDate($startcol + 4, null);

			$this->end_date = $rs->getDate($startcol + 5, null);

			$this->approve = $rs->getBoolean($startcol + 6);

			$this->is_active = $rs->getBoolean($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Donation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DonationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DonationPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(DonationPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DonationPeer::DATABASE_NAME);
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
					$pk = DonationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setDonationId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DonationPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collRemits !== null) {
				foreach($this->collRemits as $referrerFK) {
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


			if (($retval = DonationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collRemits !== null) {
					foreach($this->collRemits as $referrerFK) {
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
		$pos = DonationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDonationId();
				break;
			case 1:
				return $this->getStudentId();
				break;
			case 2:
				return $this->getUserId();
				break;
			case 3:
				return $this->getAmount();
				break;
			case 4:
				return $this->getStartDate();
				break;
			case 5:
				return $this->getEndDate();
				break;
			case 6:
				return $this->getApprove();
				break;
			case 7:
				return $this->getIsActive();
				break;
			case 8:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DonationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDonationId(),
			$keys[1] => $this->getStudentId(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getAmount(),
			$keys[4] => $this->getStartDate(),
			$keys[5] => $this->getEndDate(),
			$keys[6] => $this->getApprove(),
			$keys[7] => $this->getIsActive(),
			$keys[8] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DonationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDonationId($value);
				break;
			case 1:
				$this->setStudentId($value);
				break;
			case 2:
				$this->setUserId($value);
				break;
			case 3:
				$this->setAmount($value);
				break;
			case 4:
				$this->setStartDate($value);
				break;
			case 5:
				$this->setEndDate($value);
				break;
			case 6:
				$this->setApprove($value);
				break;
			case 7:
				$this->setIsActive($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DonationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDonationId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStudentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAmount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStartDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEndDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setApprove($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIsActive($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DonationPeer::DATABASE_NAME);

		if ($this->isColumnModified(DonationPeer::DONATION_ID)) $criteria->add(DonationPeer::DONATION_ID, $this->donation_id);
		if ($this->isColumnModified(DonationPeer::STUDENT_ID)) $criteria->add(DonationPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(DonationPeer::USER_ID)) $criteria->add(DonationPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(DonationPeer::AMOUNT)) $criteria->add(DonationPeer::AMOUNT, $this->amount);
		if ($this->isColumnModified(DonationPeer::START_DATE)) $criteria->add(DonationPeer::START_DATE, $this->start_date);
		if ($this->isColumnModified(DonationPeer::END_DATE)) $criteria->add(DonationPeer::END_DATE, $this->end_date);
		if ($this->isColumnModified(DonationPeer::APPROVE)) $criteria->add(DonationPeer::APPROVE, $this->approve);
		if ($this->isColumnModified(DonationPeer::IS_ACTIVE)) $criteria->add(DonationPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(DonationPeer::CREATED_AT)) $criteria->add(DonationPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DonationPeer::DATABASE_NAME);

		$criteria->add(DonationPeer::DONATION_ID, $this->donation_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getDonationId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setDonationId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStudentId($this->student_id);

		$copyObj->setUserId($this->user_id);

		$copyObj->setAmount($this->amount);

		$copyObj->setStartDate($this->start_date);

		$copyObj->setEndDate($this->end_date);

		$copyObj->setApprove($this->approve);

		$copyObj->setIsActive($this->is_active);

		$copyObj->setCreatedAt($this->created_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getRemits() as $relObj) {
				$copyObj->addRemit($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setDonationId(NULL); 
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
			self::$peer = new DonationPeer();
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

	
	public function initRemits()
	{
		if ($this->collRemits === null) {
			$this->collRemits = array();
		}
	}

	
	public function getRemits($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
			   $this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				RemitPeer::addSelectColumns($criteria);
				$this->collRemits = RemitPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				RemitPeer::addSelectColumns($criteria);
				if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
					$this->collRemits = RemitPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRemitCriteria = $criteria;
		return $this->collRemits;
	}

	
	public function countRemits($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

		return RemitPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRemit(Remit $l)
	{
		$this->collRemits[] = $l;
		$l->setDonation($this);
	}


	
	public function getRemitsJoinUserRelatedByReceiveUserId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
				$this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveUserId($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveUserId($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}


	
	public function getRemitsJoinUserRelatedByReceiveSubmitter($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
				$this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveSubmitter($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveSubmitter($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}


	
	public function getRemitsJoinUserRelatedBySendoutUserId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
				$this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutUserId($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutUserId($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}


	
	public function getRemitsJoinUserRelatedBySendoutSubmitter($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
				$this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutSubmitter($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutSubmitter($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}


	
	public function getRemitsJoinReportCard($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseRemitPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRemits === null) {
			if ($this->isNew()) {
				$this->collRemits = array();
			} else {

				$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

				$this->collRemits = RemitPeer::doSelectJoinReportCard($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::DONATION_ID, $this->getDonationId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinReportCard($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}

} 