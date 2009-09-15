<?php


abstract class BaseDepartment extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $builder_id;


	
	protected $manager_id;


	
	protected $arrange;


	
	protected $title;


	
	protected $description;


	
	protected $created_at;

	
	protected $aUserRelatedByBuilderId;

	
	protected $aUserRelatedByManagerId;

	
	protected $collTopics;

	
	protected $lastTopicCriteria = null;

	
	protected $collUsers;

	
	protected $lastUserCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getBuilderId()
	{

		return $this->builder_id;
	}

	
	public function getManagerId()
	{

		return $this->manager_id;
	}

	
	public function getArrange()
	{

		return $this->arrange;
	}

	
	public function getTitle()
	{

		return $this->title;
	}

	
	public function getDescription()
	{

		return $this->description;
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
			$this->modifiedColumns[] = DepartmentPeer::ID;
		}

	} 
	
	public function setBuilderId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->builder_id !== $v) {
			$this->builder_id = $v;
			$this->modifiedColumns[] = DepartmentPeer::BUILDER_ID;
		}

		if ($this->aUserRelatedByBuilderId !== null && $this->aUserRelatedByBuilderId->getId() !== $v) {
			$this->aUserRelatedByBuilderId = null;
		}

	} 
	
	public function setManagerId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->manager_id !== $v) {
			$this->manager_id = $v;
			$this->modifiedColumns[] = DepartmentPeer::MANAGER_ID;
		}

		if ($this->aUserRelatedByManagerId !== null && $this->aUserRelatedByManagerId->getId() !== $v) {
			$this->aUserRelatedByManagerId = null;
		}

	} 
	
	public function setArrange($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->arrange !== $v) {
			$this->arrange = $v;
			$this->modifiedColumns[] = DepartmentPeer::ARRANGE;
		}

	} 
	
	public function setTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = DepartmentPeer::TITLE;
		}

	} 
	
	public function setDescription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = DepartmentPeer::DESCRIPTION;
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
			$this->modifiedColumns[] = DepartmentPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->builder_id = $rs->getInt($startcol + 1);

			$this->manager_id = $rs->getInt($startcol + 2);

			$this->arrange = $rs->getInt($startcol + 3);

			$this->title = $rs->getString($startcol + 4);

			$this->description = $rs->getString($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Department object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DepartmentPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DepartmentPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(DepartmentPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DepartmentPeer::DATABASE_NAME);
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


												
			if ($this->aUserRelatedByBuilderId !== null) {
				if ($this->aUserRelatedByBuilderId->isModified()) {
					$affectedRows += $this->aUserRelatedByBuilderId->save($con);
				}
				$this->setUserRelatedByBuilderId($this->aUserRelatedByBuilderId);
			}

			if ($this->aUserRelatedByManagerId !== null) {
				if ($this->aUserRelatedByManagerId->isModified()) {
					$affectedRows += $this->aUserRelatedByManagerId->save($con);
				}
				$this->setUserRelatedByManagerId($this->aUserRelatedByManagerId);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = DepartmentPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DepartmentPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTopics !== null) {
				foreach($this->collTopics as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUsers !== null) {
				foreach($this->collUsers as $referrerFK) {
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


												
			if ($this->aUserRelatedByBuilderId !== null) {
				if (!$this->aUserRelatedByBuilderId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedByBuilderId->getValidationFailures());
				}
			}

			if ($this->aUserRelatedByManagerId !== null) {
				if (!$this->aUserRelatedByManagerId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedByManagerId->getValidationFailures());
				}
			}


			if (($retval = DepartmentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTopics !== null) {
					foreach($this->collTopics as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUsers !== null) {
					foreach($this->collUsers as $referrerFK) {
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
		$pos = DepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getBuilderId();
				break;
			case 2:
				return $this->getManagerId();
				break;
			case 3:
				return $this->getArrange();
				break;
			case 4:
				return $this->getTitle();
				break;
			case 5:
				return $this->getDescription();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DepartmentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getBuilderId(),
			$keys[2] => $this->getManagerId(),
			$keys[3] => $this->getArrange(),
			$keys[4] => $this->getTitle(),
			$keys[5] => $this->getDescription(),
			$keys[6] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DepartmentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setBuilderId($value);
				break;
			case 2:
				$this->setManagerId($value);
				break;
			case 3:
				$this->setArrange($value);
				break;
			case 4:
				$this->setTitle($value);
				break;
			case 5:
				$this->setDescription($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DepartmentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBuilderId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setManagerId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setArrange($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DepartmentPeer::DATABASE_NAME);

		if ($this->isColumnModified(DepartmentPeer::ID)) $criteria->add(DepartmentPeer::ID, $this->id);
		if ($this->isColumnModified(DepartmentPeer::BUILDER_ID)) $criteria->add(DepartmentPeer::BUILDER_ID, $this->builder_id);
		if ($this->isColumnModified(DepartmentPeer::MANAGER_ID)) $criteria->add(DepartmentPeer::MANAGER_ID, $this->manager_id);
		if ($this->isColumnModified(DepartmentPeer::ARRANGE)) $criteria->add(DepartmentPeer::ARRANGE, $this->arrange);
		if ($this->isColumnModified(DepartmentPeer::TITLE)) $criteria->add(DepartmentPeer::TITLE, $this->title);
		if ($this->isColumnModified(DepartmentPeer::DESCRIPTION)) $criteria->add(DepartmentPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(DepartmentPeer::CREATED_AT)) $criteria->add(DepartmentPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DepartmentPeer::DATABASE_NAME);

		$criteria->add(DepartmentPeer::ID, $this->id);

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

		$copyObj->setBuilderId($this->builder_id);

		$copyObj->setManagerId($this->manager_id);

		$copyObj->setArrange($this->arrange);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setCreatedAt($this->created_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTopics() as $relObj) {
				$copyObj->addTopic($relObj->copy($deepCopy));
			}

			foreach($this->getUsers() as $relObj) {
				$copyObj->addUser($relObj->copy($deepCopy));
			}

		} 

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
			self::$peer = new DepartmentPeer();
		}
		return self::$peer;
	}

	
	public function setUserRelatedByBuilderId($v)
	{


		if ($v === null) {
			$this->setBuilderId(NULL);
		} else {
			$this->setBuilderId($v->getId());
		}


		$this->aUserRelatedByBuilderId = $v;
	}


	
	public function getUserRelatedByBuilderId($con = null)
	{
		if ($this->aUserRelatedByBuilderId === null && ($this->builder_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUserRelatedByBuilderId = UserPeer::retrieveByPK($this->builder_id, $con);

			
		}
		return $this->aUserRelatedByBuilderId;
	}

	
	public function setUserRelatedByManagerId($v)
	{


		if ($v === null) {
			$this->setManagerId(NULL);
		} else {
			$this->setManagerId($v->getId());
		}


		$this->aUserRelatedByManagerId = $v;
	}


	
	public function getUserRelatedByManagerId($con = null)
	{
		if ($this->aUserRelatedByManagerId === null && ($this->manager_id !== null)) {
						include_once 'lib/model/om/BaseUserPeer.php';

			$this->aUserRelatedByManagerId = UserPeer::retrieveByPK($this->manager_id, $con);

			
		}
		return $this->aUserRelatedByManagerId;
	}

	
	public function initTopics()
	{
		if ($this->collTopics === null) {
			$this->collTopics = array();
		}
	}

	
	public function getTopics($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseTopicPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTopics === null) {
			if ($this->isNew()) {
			   $this->collTopics = array();
			} else {

				$criteria->add(TopicPeer::DEPARTMENT_ID, $this->getId());

				TopicPeer::addSelectColumns($criteria);
				$this->collTopics = TopicPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TopicPeer::DEPARTMENT_ID, $this->getId());

				TopicPeer::addSelectColumns($criteria);
				if (!isset($this->lastTopicCriteria) || !$this->lastTopicCriteria->equals($criteria)) {
					$this->collTopics = TopicPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTopicCriteria = $criteria;
		return $this->collTopics;
	}

	
	public function countTopics($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseTopicPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TopicPeer::DEPARTMENT_ID, $this->getId());

		return TopicPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTopic(Topic $l)
	{
		$this->collTopics[] = $l;
		$l->setDepartment($this);
	}


	
	public function getTopicsJoinUser($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseTopicPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTopics === null) {
			if ($this->isNew()) {
				$this->collTopics = array();
			} else {

				$criteria->add(TopicPeer::DEPARTMENT_ID, $this->getId());

				$this->collTopics = TopicPeer::doSelectJoinUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TopicPeer::DEPARTMENT_ID, $this->getId());

			if (!isset($this->lastTopicCriteria) || !$this->lastTopicCriteria->equals($criteria)) {
				$this->collTopics = TopicPeer::doSelectJoinUser($criteria, $con);
			}
		}
		$this->lastTopicCriteria = $criteria;

		return $this->collTopics;
	}

	
	public function initUsers()
	{
		if ($this->collUsers === null) {
			$this->collUsers = array();
		}
	}

	
	public function getUsers($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseUserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUsers === null) {
			if ($this->isNew()) {
			   $this->collUsers = array();
			} else {

				$criteria->add(UserPeer::DEPARTMENT_ID, $this->getId());

				UserPeer::addSelectColumns($criteria);
				$this->collUsers = UserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserPeer::DEPARTMENT_ID, $this->getId());

				UserPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserCriteria) || !$this->lastUserCriteria->equals($criteria)) {
					$this->collUsers = UserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserCriteria = $criteria;
		return $this->collUsers;
	}

	
	public function countUsers($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseUserPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserPeer::DEPARTMENT_ID, $this->getId());

		return UserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUser(User $l)
	{
		$this->collUsers[] = $l;
		$l->setDepartment($this);
	}

} 