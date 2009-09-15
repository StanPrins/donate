<?php


abstract class BaseCorrespond extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $community;


	
	protected $member;


	
	protected $approve = 0;


	
	protected $created_at;

	
	protected $aCommunity;

	
	protected $aUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getCommunity()
	{

		return $this->community;
	}

	
	public function getMember()
	{

		return $this->member;
	}

	
	public function getApprove()
	{

		return $this->approve;
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CorrespondPeer::ID;
		}

	} 
	
	public function setCommunity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->community !== $v) {
			$this->community = $v;
			$this->modifiedColumns[] = CorrespondPeer::COMMUNITY;
		}

		if ($this->aCommunity !== null && $this->aCommunity->getId() !== $v) {
			$this->aCommunity = null;
		}

	} 
	
	public function setMember($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->member !== $v) {
			$this->member = $v;
			$this->modifiedColumns[] = CorrespondPeer::MEMBER;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setApprove($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->approve !== $v || $v === 0) {
			$this->approve = $v;
			$this->modifiedColumns[] = CorrespondPeer::APPROVE;
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
			$this->modifiedColumns[] = CorrespondPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->community = $rs->getInt($startcol + 1);

			$this->member = $rs->getInt($startcol + 2);

			$this->approve = $rs->getInt($startcol + 3);

			$this->created_at = $rs->getTimestamp($startcol + 4, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Correspond object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CorrespondPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CorrespondPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CorrespondPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CorrespondPeer::DATABASE_NAME);
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


												
			if ($this->aCommunity !== null) {
				if ($this->aCommunity->isModified()) {
					$affectedRows += $this->aCommunity->save($con);
				}
				$this->setCommunity($this->aCommunity);
			}

			if ($this->aUser !== null) {
				if ($this->aUser->isModified()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CorrespondPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CorrespondPeer::doUpdate($this, $con);
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


												
			if ($this->aCommunity !== null) {
				if (!$this->aCommunity->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCommunity->getValidationFailures());
				}
			}

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = CorrespondPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CorrespondPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCommunity();
				break;
			case 2:
				return $this->getMember();
				break;
			case 3:
				return $this->getApprove();
				break;
			case 4:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CorrespondPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCommunity(),
			$keys[2] => $this->getMember(),
			$keys[3] => $this->getApprove(),
			$keys[4] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CorrespondPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCommunity($value);
				break;
			case 2:
				$this->setMember($value);
				break;
			case 3:
				$this->setApprove($value);
				break;
			case 4:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CorrespondPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCommunity($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMember($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setApprove($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CorrespondPeer::DATABASE_NAME);

		if ($this->isColumnModified(CorrespondPeer::ID)) $criteria->add(CorrespondPeer::ID, $this->id);
		if ($this->isColumnModified(CorrespondPeer::COMMUNITY)) $criteria->add(CorrespondPeer::COMMUNITY, $this->community);
		if ($this->isColumnModified(CorrespondPeer::MEMBER)) $criteria->add(CorrespondPeer::MEMBER, $this->member);
		if ($this->isColumnModified(CorrespondPeer::APPROVE)) $criteria->add(CorrespondPeer::APPROVE, $this->approve);
		if ($this->isColumnModified(CorrespondPeer::CREATED_AT)) $criteria->add(CorrespondPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CorrespondPeer::DATABASE_NAME);

		$criteria->add(CorrespondPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCommunity($this->community);

		$copyObj->setMember($this->member);

		$copyObj->setApprove($this->approve);

		$copyObj->setCreatedAt($this->created_at);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
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
			self::$peer = new CorrespondPeer();
		}
		return self::$peer;
	}

	
	public function setCommunity($v)
	{


		if ($v === null) {
			$this->setCommunity(NULL);
		} else {
			$this->setCommunity($v->getId());
		}


		$this->aCommunity = $v;
	}


	
	public function getCommunity($con = null)
	{
		if ($this->aCommunity === null && ($this->community !== null)) {
						include_once 'lib/model/om/BaseCommunityPeer.php';

			$this->aCommunity = CommunityPeer::retrieveByPK($this->community, $con);

			
		}
		return $this->aCommunity;
	}

	
	public function setUser($v)
	{


		if ($v === null) {
			$this->setMember(NULL);
		} else {
			$this->setMember($v->getId());
		}


		$this->aUser = $v;
	}


	
	public function getUser($con = null)
	{
		if ($this->aUser === null && ($this->member !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUser = UserPeer::retrieveByPK($this->member, $con);

			
		}
		return $this->aUser;
	}

} 