<?php


abstract class BaseMessage extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $sender_id;


	
	protected $reciever_id;


	
	protected $title;


	
	protected $content;


	
	protected $anonymity = 0;


	
	protected $sdel = 0;


	
	protected $rdel = 0;


	
	protected $created_at;

	
	protected $aUserRelatedBySenderId;

	
	protected $aUserRelatedByRecieverId;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getSenderId()
	{

		return $this->sender_id;
	}

	
	public function getRecieverId()
	{

		return $this->reciever_id;
	}

	
	public function getTitle()
	{

		return $this->title;
	}

	
	public function getContent()
	{

		return $this->content;
	}

	
	public function getAnonymity()
	{

		return $this->anonymity;
	}

	
	public function getSdel()
	{

		return $this->sdel;
	}

	
	public function getRdel()
	{

		return $this->rdel;
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
			$this->modifiedColumns[] = MessagePeer::ID;
		}

	} 
	
	public function setSenderId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sender_id !== $v) {
			$this->sender_id = $v;
			$this->modifiedColumns[] = MessagePeer::SENDER_ID;
		}

		if ($this->aUserRelatedBySenderId !== null && $this->aUserRelatedBySenderId->getId() !== $v) {
			$this->aUserRelatedBySenderId = null;
		}

	} 
	
	public function setRecieverId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reciever_id !== $v) {
			$this->reciever_id = $v;
			$this->modifiedColumns[] = MessagePeer::RECIEVER_ID;
		}

		if ($this->aUserRelatedByRecieverId !== null && $this->aUserRelatedByRecieverId->getId() !== $v) {
			$this->aUserRelatedByRecieverId = null;
		}

	} 
	
	public function setTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = MessagePeer::TITLE;
		}

	} 
	
	public function setContent($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = MessagePeer::CONTENT;
		}

	} 
	
	public function setAnonymity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->anonymity !== $v || $v === 0) {
			$this->anonymity = $v;
			$this->modifiedColumns[] = MessagePeer::ANONYMITY;
		}

	} 
	
	public function setSdel($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sdel !== $v || $v === 0) {
			$this->sdel = $v;
			$this->modifiedColumns[] = MessagePeer::SDEL;
		}

	} 
	
	public function setRdel($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rdel !== $v || $v === 0) {
			$this->rdel = $v;
			$this->modifiedColumns[] = MessagePeer::RDEL;
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
			$this->modifiedColumns[] = MessagePeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->sender_id = $rs->getInt($startcol + 1);

			$this->reciever_id = $rs->getInt($startcol + 2);

			$this->title = $rs->getString($startcol + 3);

			$this->content = $rs->getString($startcol + 4);

			$this->anonymity = $rs->getInt($startcol + 5);

			$this->sdel = $rs->getInt($startcol + 6);

			$this->rdel = $rs->getInt($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Message object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MessagePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MessagePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MessagePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MessagePeer::DATABASE_NAME);
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


												
			if ($this->aUserRelatedBySenderId !== null) {
				if ($this->aUserRelatedBySenderId->isModified()) {
					$affectedRows += $this->aUserRelatedBySenderId->save($con);
				}
				$this->setUserRelatedBySenderId($this->aUserRelatedBySenderId);
			}

			if ($this->aUserRelatedByRecieverId !== null) {
				if ($this->aUserRelatedByRecieverId->isModified()) {
					$affectedRows += $this->aUserRelatedByRecieverId->save($con);
				}
				$this->setUserRelatedByRecieverId($this->aUserRelatedByRecieverId);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = MessagePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MessagePeer::doUpdate($this, $con);
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


												
			if ($this->aUserRelatedBySenderId !== null) {
				if (!$this->aUserRelatedBySenderId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedBySenderId->getValidationFailures());
				}
			}

			if ($this->aUserRelatedByRecieverId !== null) {
				if (!$this->aUserRelatedByRecieverId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedByRecieverId->getValidationFailures());
				}
			}


			if (($retval = MessagePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSenderId();
				break;
			case 2:
				return $this->getRecieverId();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getContent();
				break;
			case 5:
				return $this->getAnonymity();
				break;
			case 6:
				return $this->getSdel();
				break;
			case 7:
				return $this->getRdel();
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
		$keys = MessagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSenderId(),
			$keys[2] => $this->getRecieverId(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getContent(),
			$keys[5] => $this->getAnonymity(),
			$keys[6] => $this->getSdel(),
			$keys[7] => $this->getRdel(),
			$keys[8] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MessagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSenderId($value);
				break;
			case 2:
				$this->setRecieverId($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setContent($value);
				break;
			case 5:
				$this->setAnonymity($value);
				break;
			case 6:
				$this->setSdel($value);
				break;
			case 7:
				$this->setRdel($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MessagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSenderId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRecieverId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setContent($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAnonymity($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSdel($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRdel($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MessagePeer::DATABASE_NAME);

		if ($this->isColumnModified(MessagePeer::ID)) $criteria->add(MessagePeer::ID, $this->id);
		if ($this->isColumnModified(MessagePeer::SENDER_ID)) $criteria->add(MessagePeer::SENDER_ID, $this->sender_id);
		if ($this->isColumnModified(MessagePeer::RECIEVER_ID)) $criteria->add(MessagePeer::RECIEVER_ID, $this->reciever_id);
		if ($this->isColumnModified(MessagePeer::TITLE)) $criteria->add(MessagePeer::TITLE, $this->title);
		if ($this->isColumnModified(MessagePeer::CONTENT)) $criteria->add(MessagePeer::CONTENT, $this->content);
		if ($this->isColumnModified(MessagePeer::ANONYMITY)) $criteria->add(MessagePeer::ANONYMITY, $this->anonymity);
		if ($this->isColumnModified(MessagePeer::SDEL)) $criteria->add(MessagePeer::SDEL, $this->sdel);
		if ($this->isColumnModified(MessagePeer::RDEL)) $criteria->add(MessagePeer::RDEL, $this->rdel);
		if ($this->isColumnModified(MessagePeer::CREATED_AT)) $criteria->add(MessagePeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MessagePeer::DATABASE_NAME);

		$criteria->add(MessagePeer::ID, $this->id);

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

		$copyObj->setSenderId($this->sender_id);

		$copyObj->setRecieverId($this->reciever_id);

		$copyObj->setTitle($this->title);

		$copyObj->setContent($this->content);

		$copyObj->setAnonymity($this->anonymity);

		$copyObj->setSdel($this->sdel);

		$copyObj->setRdel($this->rdel);

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
			self::$peer = new MessagePeer();
		}
		return self::$peer;
	}

	
	public function setUserRelatedBySenderId($v)
	{


		if ($v === null) {
			$this->setSenderId(NULL);
		} else {
			$this->setSenderId($v->getId());
		}


		$this->aUserRelatedBySenderId = $v;
	}


	
	public function getUserRelatedBySenderId($con = null)
	{
		if ($this->aUserRelatedBySenderId === null && ($this->sender_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUserRelatedBySenderId = UserPeer::retrieveByPK($this->sender_id, $con);

			
		}
		return $this->aUserRelatedBySenderId;
	}

	
	public function setUserRelatedByRecieverId($v)
	{


		if ($v === null) {
			$this->setRecieverId(NULL);
		} else {
			$this->setRecieverId($v->getId());
		}


		$this->aUserRelatedByRecieverId = $v;
	}


	
	public function getUserRelatedByRecieverId($con = null)
	{
		if ($this->aUserRelatedByRecieverId === null && ($this->reciever_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUserRelatedByRecieverId = UserPeer::retrieveByPK($this->reciever_id, $con);

			
		}
		return $this->aUserRelatedByRecieverId;
	}

} 