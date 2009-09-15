<?php


abstract class BaseUser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $username;


	
	protected $nickname;


	
	protected $sha1_password;


	
	protected $salt;


	
	protected $remember_key;


	
	protected $name;


	
	protected $department_id;


	
	protected $photo;


	
	protected $duty;


	
	protected $mobile;


	
	protected $tel;


	
	protected $twitter;


	
	protected $droit = 0;


	
	protected $qq;


	
	protected $msn;


	
	protected $created_at;

	
	protected $aDepartment;

	
	protected $collComments;

	
	protected $lastCommentCriteria = null;

	
	protected $collBlogs;

	
	protected $lastBlogCriteria = null;

	
	protected $collMessagesRelatedBySenderId;

	
	protected $lastMessageRelatedBySenderIdCriteria = null;

	
	protected $collMessagesRelatedByRecieverId;

	
	protected $lastMessageRelatedByRecieverIdCriteria = null;

	
	protected $collDepartmentsRelatedByBuilderId;

	
	protected $lastDepartmentRelatedByBuilderIdCriteria = null;

	
	protected $collDepartmentsRelatedByManagerId;

	
	protected $lastDepartmentRelatedByManagerIdCriteria = null;

	
	protected $collTopics;

	
	protected $lastTopicCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getUsername()
	{

		return $this->username;
	}

	
	public function getNickname()
	{

		return $this->nickname;
	}

	
	public function getSha1Password()
	{

		return $this->sha1_password;
	}

	
	public function getSalt()
	{

		return $this->salt;
	}

	
	public function getRememberKey()
	{

		return $this->remember_key;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getDepartmentId()
	{

		return $this->department_id;
	}

	
	public function getPhoto()
	{

		return $this->photo;
	}

	
	public function getDuty()
	{

		return $this->duty;
	}

	
	public function getMobile()
	{

		return $this->mobile;
	}

	
	public function getTel()
	{

		return $this->tel;
	}

	
	public function getTwitter()
	{

		return $this->twitter;
	}

	
	public function getDroit()
	{

		return $this->droit;
	}

	
	public function getQq()
	{

		return $this->qq;
	}

	
	public function getMsn()
	{

		return $this->msn;
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
			$this->modifiedColumns[] = UserPeer::ID;
		}

	} 
	
	public function setUsername($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->username !== $v) {
			$this->username = $v;
			$this->modifiedColumns[] = UserPeer::USERNAME;
		}

	} 
	
	public function setNickname($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nickname !== $v) {
			$this->nickname = $v;
			$this->modifiedColumns[] = UserPeer::NICKNAME;
		}

	} 
	
	public function setSha1Password($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sha1_password !== $v) {
			$this->sha1_password = $v;
			$this->modifiedColumns[] = UserPeer::SHA1_PASSWORD;
		}

	} 
	
	public function setSalt($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->salt !== $v) {
			$this->salt = $v;
			$this->modifiedColumns[] = UserPeer::SALT;
		}

	} 
	
	public function setRememberKey($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remember_key !== $v) {
			$this->remember_key = $v;
			$this->modifiedColumns[] = UserPeer::REMEMBER_KEY;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = UserPeer::NAME;
		}

	} 
	
	public function setDepartmentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->department_id !== $v) {
			$this->department_id = $v;
			$this->modifiedColumns[] = UserPeer::DEPARTMENT_ID;
		}

		if ($this->aDepartment !== null && $this->aDepartment->getId() !== $v) {
			$this->aDepartment = null;
		}

	} 
	
	public function setPhoto($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->photo !== $v) {
			$this->photo = $v;
			$this->modifiedColumns[] = UserPeer::PHOTO;
		}

	} 
	
	public function setDuty($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->duty !== $v) {
			$this->duty = $v;
			$this->modifiedColumns[] = UserPeer::DUTY;
		}

	} 
	
	public function setMobile($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->mobile !== $v) {
			$this->mobile = $v;
			$this->modifiedColumns[] = UserPeer::MOBILE;
		}

	} 
	
	public function setTel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tel !== $v) {
			$this->tel = $v;
			$this->modifiedColumns[] = UserPeer::TEL;
		}

	} 
	
	public function setTwitter($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->twitter !== $v) {
			$this->twitter = $v;
			$this->modifiedColumns[] = UserPeer::TWITTER;
		}

	} 
	
	public function setDroit($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->droit !== $v || $v === 0) {
			$this->droit = $v;
			$this->modifiedColumns[] = UserPeer::DROIT;
		}

	} 
	
	public function setQq($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->qq !== $v) {
			$this->qq = $v;
			$this->modifiedColumns[] = UserPeer::QQ;
		}

	} 
	
	public function setMsn($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->msn !== $v) {
			$this->msn = $v;
			$this->modifiedColumns[] = UserPeer::MSN;
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
			$this->modifiedColumns[] = UserPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->username = $rs->getString($startcol + 1);

			$this->nickname = $rs->getString($startcol + 2);

			$this->sha1_password = $rs->getString($startcol + 3);

			$this->salt = $rs->getString($startcol + 4);

			$this->remember_key = $rs->getString($startcol + 5);

			$this->name = $rs->getString($startcol + 6);

			$this->department_id = $rs->getInt($startcol + 7);

			$this->photo = $rs->getString($startcol + 8);

			$this->duty = $rs->getString($startcol + 9);

			$this->mobile = $rs->getString($startcol + 10);

			$this->tel = $rs->getString($startcol + 11);

			$this->twitter = $rs->getString($startcol + 12);

			$this->droit = $rs->getInt($startcol + 13);

			$this->qq = $rs->getString($startcol + 14);

			$this->msn = $rs->getString($startcol + 15);

			$this->created_at = $rs->getTimestamp($startcol + 16, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UserPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
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


												
			if ($this->aDepartment !== null) {
				if ($this->aDepartment->isModified()) {
					$affectedRows += $this->aDepartment->save($con);
				}
				$this->setDepartment($this->aDepartment);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collComments !== null) {
				foreach($this->collComments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBlogs !== null) {
				foreach($this->collBlogs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMessagesRelatedBySenderId !== null) {
				foreach($this->collMessagesRelatedBySenderId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMessagesRelatedByRecieverId !== null) {
				foreach($this->collMessagesRelatedByRecieverId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDepartmentsRelatedByBuilderId !== null) {
				foreach($this->collDepartmentsRelatedByBuilderId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDepartmentsRelatedByManagerId !== null) {
				foreach($this->collDepartmentsRelatedByManagerId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTopics !== null) {
				foreach($this->collTopics as $referrerFK) {
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


												
			if ($this->aDepartment !== null) {
				if (!$this->aDepartment->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDepartment->getValidationFailures());
				}
			}


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collComments !== null) {
					foreach($this->collComments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBlogs !== null) {
					foreach($this->collBlogs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMessagesRelatedBySenderId !== null) {
					foreach($this->collMessagesRelatedBySenderId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMessagesRelatedByRecieverId !== null) {
					foreach($this->collMessagesRelatedByRecieverId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDepartmentsRelatedByBuilderId !== null) {
					foreach($this->collDepartmentsRelatedByBuilderId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDepartmentsRelatedByManagerId !== null) {
					foreach($this->collDepartmentsRelatedByManagerId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTopics !== null) {
					foreach($this->collTopics as $referrerFK) {
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUsername();
				break;
			case 2:
				return $this->getNickname();
				break;
			case 3:
				return $this->getSha1Password();
				break;
			case 4:
				return $this->getSalt();
				break;
			case 5:
				return $this->getRememberKey();
				break;
			case 6:
				return $this->getName();
				break;
			case 7:
				return $this->getDepartmentId();
				break;
			case 8:
				return $this->getPhoto();
				break;
			case 9:
				return $this->getDuty();
				break;
			case 10:
				return $this->getMobile();
				break;
			case 11:
				return $this->getTel();
				break;
			case 12:
				return $this->getTwitter();
				break;
			case 13:
				return $this->getDroit();
				break;
			case 14:
				return $this->getQq();
				break;
			case 15:
				return $this->getMsn();
				break;
			case 16:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUsername(),
			$keys[2] => $this->getNickname(),
			$keys[3] => $this->getSha1Password(),
			$keys[4] => $this->getSalt(),
			$keys[5] => $this->getRememberKey(),
			$keys[6] => $this->getName(),
			$keys[7] => $this->getDepartmentId(),
			$keys[8] => $this->getPhoto(),
			$keys[9] => $this->getDuty(),
			$keys[10] => $this->getMobile(),
			$keys[11] => $this->getTel(),
			$keys[12] => $this->getTwitter(),
			$keys[13] => $this->getDroit(),
			$keys[14] => $this->getQq(),
			$keys[15] => $this->getMsn(),
			$keys[16] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUsername($value);
				break;
			case 2:
				$this->setNickname($value);
				break;
			case 3:
				$this->setSha1Password($value);
				break;
			case 4:
				$this->setSalt($value);
				break;
			case 5:
				$this->setRememberKey($value);
				break;
			case 6:
				$this->setName($value);
				break;
			case 7:
				$this->setDepartmentId($value);
				break;
			case 8:
				$this->setPhoto($value);
				break;
			case 9:
				$this->setDuty($value);
				break;
			case 10:
				$this->setMobile($value);
				break;
			case 11:
				$this->setTel($value);
				break;
			case 12:
				$this->setTwitter($value);
				break;
			case 13:
				$this->setDroit($value);
				break;
			case 14:
				$this->setQq($value);
				break;
			case 15:
				$this->setMsn($value);
				break;
			case 16:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNickname($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSha1Password($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSalt($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRememberKey($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDepartmentId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPhoto($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDuty($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMobile($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTel($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTwitter($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDroit($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setQq($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setMsn($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCreatedAt($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
		if ($this->isColumnModified(UserPeer::USERNAME)) $criteria->add(UserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(UserPeer::NICKNAME)) $criteria->add(UserPeer::NICKNAME, $this->nickname);
		if ($this->isColumnModified(UserPeer::SHA1_PASSWORD)) $criteria->add(UserPeer::SHA1_PASSWORD, $this->sha1_password);
		if ($this->isColumnModified(UserPeer::SALT)) $criteria->add(UserPeer::SALT, $this->salt);
		if ($this->isColumnModified(UserPeer::REMEMBER_KEY)) $criteria->add(UserPeer::REMEMBER_KEY, $this->remember_key);
		if ($this->isColumnModified(UserPeer::NAME)) $criteria->add(UserPeer::NAME, $this->name);
		if ($this->isColumnModified(UserPeer::DEPARTMENT_ID)) $criteria->add(UserPeer::DEPARTMENT_ID, $this->department_id);
		if ($this->isColumnModified(UserPeer::PHOTO)) $criteria->add(UserPeer::PHOTO, $this->photo);
		if ($this->isColumnModified(UserPeer::DUTY)) $criteria->add(UserPeer::DUTY, $this->duty);
		if ($this->isColumnModified(UserPeer::MOBILE)) $criteria->add(UserPeer::MOBILE, $this->mobile);
		if ($this->isColumnModified(UserPeer::TEL)) $criteria->add(UserPeer::TEL, $this->tel);
		if ($this->isColumnModified(UserPeer::TWITTER)) $criteria->add(UserPeer::TWITTER, $this->twitter);
		if ($this->isColumnModified(UserPeer::DROIT)) $criteria->add(UserPeer::DROIT, $this->droit);
		if ($this->isColumnModified(UserPeer::QQ)) $criteria->add(UserPeer::QQ, $this->qq);
		if ($this->isColumnModified(UserPeer::MSN)) $criteria->add(UserPeer::MSN, $this->msn);
		if ($this->isColumnModified(UserPeer::CREATED_AT)) $criteria->add(UserPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::ID, $this->id);

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

		$copyObj->setUsername($this->username);

		$copyObj->setNickname($this->nickname);

		$copyObj->setSha1Password($this->sha1_password);

		$copyObj->setSalt($this->salt);

		$copyObj->setRememberKey($this->remember_key);

		$copyObj->setName($this->name);

		$copyObj->setDepartmentId($this->department_id);

		$copyObj->setPhoto($this->photo);

		$copyObj->setDuty($this->duty);

		$copyObj->setMobile($this->mobile);

		$copyObj->setTel($this->tel);

		$copyObj->setTwitter($this->twitter);

		$copyObj->setDroit($this->droit);

		$copyObj->setQq($this->qq);

		$copyObj->setMsn($this->msn);

		$copyObj->setCreatedAt($this->created_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getComments() as $relObj) {
				$copyObj->addComment($relObj->copy($deepCopy));
			}

			foreach($this->getBlogs() as $relObj) {
				$copyObj->addBlog($relObj->copy($deepCopy));
			}

			foreach($this->getMessagesRelatedBySenderId() as $relObj) {
				$copyObj->addMessageRelatedBySenderId($relObj->copy($deepCopy));
			}

			foreach($this->getMessagesRelatedByRecieverId() as $relObj) {
				$copyObj->addMessageRelatedByRecieverId($relObj->copy($deepCopy));
			}

			foreach($this->getDepartmentsRelatedByBuilderId() as $relObj) {
				$copyObj->addDepartmentRelatedByBuilderId($relObj->copy($deepCopy));
			}

			foreach($this->getDepartmentsRelatedByManagerId() as $relObj) {
				$copyObj->addDepartmentRelatedByManagerId($relObj->copy($deepCopy));
			}

			foreach($this->getTopics() as $relObj) {
				$copyObj->addTopic($relObj->copy($deepCopy));
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
			self::$peer = new UserPeer();
		}
		return self::$peer;
	}

	
	public function setDepartment($v)
	{


		if ($v === null) {
			$this->setDepartmentId(NULL);
		} else {
			$this->setDepartmentId($v->getId());
		}


		$this->aDepartment = $v;
	}


	
	public function getDepartment($con = null)
	{
		if ($this->aDepartment === null && ($this->department_id !== null)) {
						include_once 'lib/model/om/BaseDepartmentPeer.php';

			$this->aDepartment = DepartmentPeer::retrieveByPK($this->department_id, $con);

			
		}
		return $this->aDepartment;
	}

	
	public function initComments()
	{
		if ($this->collComments === null) {
			$this->collComments = array();
		}
	}

	
	public function getComments($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComments === null) {
			if ($this->isNew()) {
			   $this->collComments = array();
			} else {

				$criteria->add(CommentPeer::USER_ID, $this->getId());

				CommentPeer::addSelectColumns($criteria);
				$this->collComments = CommentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentPeer::USER_ID, $this->getId());

				CommentPeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentCriteria) || !$this->lastCommentCriteria->equals($criteria)) {
					$this->collComments = CommentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentCriteria = $criteria;
		return $this->collComments;
	}

	
	public function countComments($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentPeer::USER_ID, $this->getId());

		return CommentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addComment(Comment $l)
	{
		$this->collComments[] = $l;
		$l->setUser($this);
	}


	
	public function getCommentsJoinBlog($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComments === null) {
			if ($this->isNew()) {
				$this->collComments = array();
			} else {

				$criteria->add(CommentPeer::USER_ID, $this->getId());

				$this->collComments = CommentPeer::doSelectJoinBlog($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentPeer::USER_ID, $this->getId());

			if (!isset($this->lastCommentCriteria) || !$this->lastCommentCriteria->equals($criteria)) {
				$this->collComments = CommentPeer::doSelectJoinBlog($criteria, $con);
			}
		}
		$this->lastCommentCriteria = $criteria;

		return $this->collComments;
	}


	
	public function getCommentsJoinTopic($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseCommentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collComments === null) {
			if ($this->isNew()) {
				$this->collComments = array();
			} else {

				$criteria->add(CommentPeer::USER_ID, $this->getId());

				$this->collComments = CommentPeer::doSelectJoinTopic($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentPeer::USER_ID, $this->getId());

			if (!isset($this->lastCommentCriteria) || !$this->lastCommentCriteria->equals($criteria)) {
				$this->collComments = CommentPeer::doSelectJoinTopic($criteria, $con);
			}
		}
		$this->lastCommentCriteria = $criteria;

		return $this->collComments;
	}

	
	public function initBlogs()
	{
		if ($this->collBlogs === null) {
			$this->collBlogs = array();
		}
	}

	
	public function getBlogs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseBlogPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
			   $this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::USER_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				$this->collBlogs = BlogPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogPeer::USER_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
					$this->collBlogs = BlogPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBlogCriteria = $criteria;
		return $this->collBlogs;
	}

	
	public function countBlogs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseBlogPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BlogPeer::USER_ID, $this->getId());

		return BlogPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlog(Blog $l)
	{
		$this->collBlogs[] = $l;
		$l->setUser($this);
	}

	
	public function initMessagesRelatedBySenderId()
	{
		if ($this->collMessagesRelatedBySenderId === null) {
			$this->collMessagesRelatedBySenderId = array();
		}
	}

	
	public function getMessagesRelatedBySenderId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMessagePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMessagesRelatedBySenderId === null) {
			if ($this->isNew()) {
			   $this->collMessagesRelatedBySenderId = array();
			} else {

				$criteria->add(MessagePeer::SENDER_ID, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				$this->collMessagesRelatedBySenderId = MessagePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MessagePeer::SENDER_ID, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				if (!isset($this->lastMessageRelatedBySenderIdCriteria) || !$this->lastMessageRelatedBySenderIdCriteria->equals($criteria)) {
					$this->collMessagesRelatedBySenderId = MessagePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMessageRelatedBySenderIdCriteria = $criteria;
		return $this->collMessagesRelatedBySenderId;
	}

	
	public function countMessagesRelatedBySenderId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseMessagePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MessagePeer::SENDER_ID, $this->getId());

		return MessagePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMessageRelatedBySenderId(Message $l)
	{
		$this->collMessagesRelatedBySenderId[] = $l;
		$l->setUserRelatedBySenderId($this);
	}

	
	public function initMessagesRelatedByRecieverId()
	{
		if ($this->collMessagesRelatedByRecieverId === null) {
			$this->collMessagesRelatedByRecieverId = array();
		}
	}

	
	public function getMessagesRelatedByRecieverId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseMessagePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMessagesRelatedByRecieverId === null) {
			if ($this->isNew()) {
			   $this->collMessagesRelatedByRecieverId = array();
			} else {

				$criteria->add(MessagePeer::RECIEVER_ID, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				$this->collMessagesRelatedByRecieverId = MessagePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MessagePeer::RECIEVER_ID, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				if (!isset($this->lastMessageRelatedByRecieverIdCriteria) || !$this->lastMessageRelatedByRecieverIdCriteria->equals($criteria)) {
					$this->collMessagesRelatedByRecieverId = MessagePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMessageRelatedByRecieverIdCriteria = $criteria;
		return $this->collMessagesRelatedByRecieverId;
	}

	
	public function countMessagesRelatedByRecieverId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseMessagePeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MessagePeer::RECIEVER_ID, $this->getId());

		return MessagePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMessageRelatedByRecieverId(Message $l)
	{
		$this->collMessagesRelatedByRecieverId[] = $l;
		$l->setUserRelatedByRecieverId($this);
	}

	
	public function initDepartmentsRelatedByBuilderId()
	{
		if ($this->collDepartmentsRelatedByBuilderId === null) {
			$this->collDepartmentsRelatedByBuilderId = array();
		}
	}

	
	public function getDepartmentsRelatedByBuilderId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDepartmentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDepartmentsRelatedByBuilderId === null) {
			if ($this->isNew()) {
			   $this->collDepartmentsRelatedByBuilderId = array();
			} else {

				$criteria->add(DepartmentPeer::BUILDER_ID, $this->getId());

				DepartmentPeer::addSelectColumns($criteria);
				$this->collDepartmentsRelatedByBuilderId = DepartmentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DepartmentPeer::BUILDER_ID, $this->getId());

				DepartmentPeer::addSelectColumns($criteria);
				if (!isset($this->lastDepartmentRelatedByBuilderIdCriteria) || !$this->lastDepartmentRelatedByBuilderIdCriteria->equals($criteria)) {
					$this->collDepartmentsRelatedByBuilderId = DepartmentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDepartmentRelatedByBuilderIdCriteria = $criteria;
		return $this->collDepartmentsRelatedByBuilderId;
	}

	
	public function countDepartmentsRelatedByBuilderId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseDepartmentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DepartmentPeer::BUILDER_ID, $this->getId());

		return DepartmentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDepartmentRelatedByBuilderId(Department $l)
	{
		$this->collDepartmentsRelatedByBuilderId[] = $l;
		$l->setUserRelatedByBuilderId($this);
	}

	
	public function initDepartmentsRelatedByManagerId()
	{
		if ($this->collDepartmentsRelatedByManagerId === null) {
			$this->collDepartmentsRelatedByManagerId = array();
		}
	}

	
	public function getDepartmentsRelatedByManagerId($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseDepartmentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDepartmentsRelatedByManagerId === null) {
			if ($this->isNew()) {
			   $this->collDepartmentsRelatedByManagerId = array();
			} else {

				$criteria->add(DepartmentPeer::MANAGER_ID, $this->getId());

				DepartmentPeer::addSelectColumns($criteria);
				$this->collDepartmentsRelatedByManagerId = DepartmentPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DepartmentPeer::MANAGER_ID, $this->getId());

				DepartmentPeer::addSelectColumns($criteria);
				if (!isset($this->lastDepartmentRelatedByManagerIdCriteria) || !$this->lastDepartmentRelatedByManagerIdCriteria->equals($criteria)) {
					$this->collDepartmentsRelatedByManagerId = DepartmentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDepartmentRelatedByManagerIdCriteria = $criteria;
		return $this->collDepartmentsRelatedByManagerId;
	}

	
	public function countDepartmentsRelatedByManagerId($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseDepartmentPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DepartmentPeer::MANAGER_ID, $this->getId());

		return DepartmentPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDepartmentRelatedByManagerId(Department $l)
	{
		$this->collDepartmentsRelatedByManagerId[] = $l;
		$l->setUserRelatedByManagerId($this);
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

				$criteria->add(TopicPeer::USER_ID, $this->getId());

				TopicPeer::addSelectColumns($criteria);
				$this->collTopics = TopicPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TopicPeer::USER_ID, $this->getId());

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

		$criteria->add(TopicPeer::USER_ID, $this->getId());

		return TopicPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTopic(Topic $l)
	{
		$this->collTopics[] = $l;
		$l->setUser($this);
	}


	
	public function getTopicsJoinDepartment($criteria = null, $con = null)
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

				$criteria->add(TopicPeer::USER_ID, $this->getId());

				$this->collTopics = TopicPeer::doSelectJoinDepartment($criteria, $con);
			}
		} else {
									
			$criteria->add(TopicPeer::USER_ID, $this->getId());

			if (!isset($this->lastTopicCriteria) || !$this->lastTopicCriteria->equals($criteria)) {
				$this->collTopics = TopicPeer::doSelectJoinDepartment($criteria, $con);
			}
		}
		$this->lastTopicCriteria = $criteria;

		return $this->collTopics;
	}

} 