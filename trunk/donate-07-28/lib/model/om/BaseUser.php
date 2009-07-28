<?php


abstract class BaseUser extends BaseObject  implements Persistent {



	protected static $peer;



	protected $user_id;



	protected $username;



	protected $nickname;



	protected $sha1_password;



	protected $salt;



	protected $name;



	protected $photo;



	protected $bbs_id;



	protected $ofs_id;



	protected $duty;



	protected $mobile;



	protected $tel;



	protected $usertype;



	protected $identity;



	protected $email;



	protected $qq;



	protected $msn;



	protected $address;



	protected $created_at;


	protected $collDonations;


	protected $lastDonationCriteria = null;


	protected $collRemitsRelatedByReceiveUserId;


	protected $lastRemitRelatedByReceiveUserIdCriteria = null;


	protected $collRemitsRelatedBySendoutUserId;


	protected $lastRemitRelatedBySendoutUserIdCriteria = null;


	protected $collReportCards;


	protected $lastReportCardCriteria = null;


	protected $collSurveys;


	protected $lastSurveyCriteria = null;


	protected $alreadyInSave = false;


	protected $alreadyInValidation = false;


	public function getUserId()
	{

		return $this->user_id;
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


	public function getName()
	{

		return $this->name;
	}


	public function getPhoto()
	{

		return $this->photo;
	}


	public function getBbsId()
	{

		return $this->bbs_id;
	}


	public function getOfsId()
	{

		return $this->ofs_id;
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


	public function getUsertype()
	{

		return $this->usertype;
	}


	public function getIdentity()
	{

		return $this->identity;
	}


	public function getEmail()
	{

		return $this->email;
	}


	public function getQq()
	{

		return $this->qq;
	}


	public function getMsn()
	{

		return $this->msn;
	}


	public function getAddress()
	{

		return $this->address;
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


	public function setUserId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserPeer::USER_ID;
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

	public function setBbsId($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->bbs_id !== $v) {
			$this->bbs_id = $v;
			$this->modifiedColumns[] = UserPeer::BBS_ID;
		}

	}

	public function setOfsId($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->ofs_id !== $v) {
			$this->ofs_id = $v;
			$this->modifiedColumns[] = UserPeer::OFS_ID;
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

	public function setUsertype($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->usertype !== $v) {
			$this->usertype = $v;
			$this->modifiedColumns[] = UserPeer::USERTYPE;
		}

	}

	public function setIdentity($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->identity !== $v) {
			$this->identity = $v;
			$this->modifiedColumns[] = UserPeer::IDENTITY;
		}

	}

	public function setEmail($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
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

	public function setAddress($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = UserPeer::ADDRESS;
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

			$this->user_id = $rs->getInt($startcol + 0);

			$this->username = $rs->getString($startcol + 1);

			$this->nickname = $rs->getString($startcol + 2);

			$this->sha1_password = $rs->getString($startcol + 3);

			$this->salt = $rs->getString($startcol + 4);

			$this->name = $rs->getString($startcol + 5);

			$this->photo = $rs->getString($startcol + 6);

			$this->bbs_id = $rs->getString($startcol + 7);

			$this->ofs_id = $rs->getString($startcol + 8);

			$this->duty = $rs->getString($startcol + 9);

			$this->mobile = $rs->getString($startcol + 10);

			$this->tel = $rs->getString($startcol + 11);

			$this->usertype = $rs->getString($startcol + 12);

			$this->identity = $rs->getString($startcol + 13);

			$this->email = $rs->getString($startcol + 14);

			$this->qq = $rs->getString($startcol + 15);

			$this->msn = $rs->getString($startcol + 16);

			$this->address = $rs->getString($startcol + 17);

			$this->created_at = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

			return $startcol + 19;
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


			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserPeer::doInsert($this, $con);
					$affectedRows += 1;
					$this->setUserId($pk);
					$this->setNew(false);
				} else {
					$affectedRows += UserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

				if ($this->collDonations !== null) {
					foreach($this->collDonations as $referrerFK) {
						if (!$referrerFK->isDeleted()) {
							$affectedRows += $referrerFK->save($con);
						}
					}
				}

				if ($this->collRemitsRelatedByReceiveUserId !== null) {
					foreach($this->collRemitsRelatedByReceiveUserId as $referrerFK) {
						if (!$referrerFK->isDeleted()) {
							$affectedRows += $referrerFK->save($con);
						}
					}
				}

				if ($this->collRemitsRelatedBySendoutUserId !== null) {
					foreach($this->collRemitsRelatedBySendoutUserId as $referrerFK) {
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


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


			if ($this->collDonations !== null) {
				foreach($this->collDonations as $referrerFK) {
					if (!$referrerFK->validate($columns)) {
						$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
					}
				}
			}

			if ($this->collRemitsRelatedByReceiveUserId !== null) {
				foreach($this->collRemitsRelatedByReceiveUserId as $referrerFK) {
					if (!$referrerFK->validate($columns)) {
						$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
					}
				}
			}

			if ($this->collRemitsRelatedBySendoutUserId !== null) {
				foreach($this->collRemitsRelatedBySendoutUserId as $referrerFK) {
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}


	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getUserId();
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
				return $this->getName();
				break;
			case 6:
				return $this->getPhoto();
				break;
			case 7:
				return $this->getBbsId();
				break;
			case 8:
				return $this->getOfsId();
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
				return $this->getUsertype();
				break;
			case 13:
				return $this->getIdentity();
				break;
			case 14:
				return $this->getEmail();
				break;
			case 15:
				return $this->getQq();
				break;
			case 16:
				return $this->getMsn();
				break;
			case 17:
				return $this->getAddress();
				break;
			case 18:
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
			$keys[0] => $this->getUserId(),
			$keys[1] => $this->getUsername(),
			$keys[2] => $this->getNickname(),
			$keys[3] => $this->getSha1Password(),
			$keys[4] => $this->getSalt(),
			$keys[5] => $this->getName(),
			$keys[6] => $this->getPhoto(),
			$keys[7] => $this->getBbsId(),
			$keys[8] => $this->getOfsId(),
			$keys[9] => $this->getDuty(),
			$keys[10] => $this->getMobile(),
			$keys[11] => $this->getTel(),
			$keys[12] => $this->getUsertype(),
			$keys[13] => $this->getIdentity(),
			$keys[14] => $this->getEmail(),
			$keys[15] => $this->getQq(),
			$keys[16] => $this->getMsn(),
			$keys[17] => $this->getAddress(),
			$keys[18] => $this->getCreatedAt(),
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
					$this->setUserId($value);
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
					$this->setName($value);
					break;
				case 6:
					$this->setPhoto($value);
					break;
				case 7:
					$this->setBbsId($value);
					break;
				case 8:
					$this->setOfsId($value);
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
					$this->setUsertype($value);
					break;
				case 13:
					$this->setIdentity($value);
					break;
				case 14:
					$this->setEmail($value);
					break;
				case 15:
					$this->setQq($value);
					break;
				case 16:
					$this->setMsn($value);
					break;
				case 17:
					$this->setAddress($value);
					break;
				case 18:
					$this->setCreatedAt($value);
					break;
			} 	}


			public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
			{
				$keys = UserPeer::getFieldNames($keyType);

				if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
				if (array_key_exists($keys[1], $arr)) $this->setUsername($arr[$keys[1]]);
				if (array_key_exists($keys[2], $arr)) $this->setNickname($arr[$keys[2]]);
				if (array_key_exists($keys[3], $arr)) $this->setSha1Password($arr[$keys[3]]);
				if (array_key_exists($keys[4], $arr)) $this->setSalt($arr[$keys[4]]);
				if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
				if (array_key_exists($keys[6], $arr)) $this->setPhoto($arr[$keys[6]]);
				if (array_key_exists($keys[7], $arr)) $this->setBbsId($arr[$keys[7]]);
				if (array_key_exists($keys[8], $arr)) $this->setOfsId($arr[$keys[8]]);
				if (array_key_exists($keys[9], $arr)) $this->setDuty($arr[$keys[9]]);
				if (array_key_exists($keys[10], $arr)) $this->setMobile($arr[$keys[10]]);
				if (array_key_exists($keys[11], $arr)) $this->setTel($arr[$keys[11]]);
				if (array_key_exists($keys[12], $arr)) $this->setUsertype($arr[$keys[12]]);
				if (array_key_exists($keys[13], $arr)) $this->setIdentity($arr[$keys[13]]);
				if (array_key_exists($keys[14], $arr)) $this->setEmail($arr[$keys[14]]);
				if (array_key_exists($keys[15], $arr)) $this->setQq($arr[$keys[15]]);
				if (array_key_exists($keys[16], $arr)) $this->setMsn($arr[$keys[16]]);
				if (array_key_exists($keys[17], $arr)) $this->setAddress($arr[$keys[17]]);
				if (array_key_exists($keys[18], $arr)) $this->setCreatedAt($arr[$keys[18]]);
			}


			public function buildCriteria()
			{
				$criteria = new Criteria(UserPeer::DATABASE_NAME);

				if ($this->isColumnModified(UserPeer::USER_ID)) $criteria->add(UserPeer::USER_ID, $this->user_id);
				if ($this->isColumnModified(UserPeer::USERNAME)) $criteria->add(UserPeer::USERNAME, $this->username);
				if ($this->isColumnModified(UserPeer::NICKNAME)) $criteria->add(UserPeer::NICKNAME, $this->nickname);
				if ($this->isColumnModified(UserPeer::SHA1_PASSWORD)) $criteria->add(UserPeer::SHA1_PASSWORD, $this->sha1_password);
				if ($this->isColumnModified(UserPeer::SALT)) $criteria->add(UserPeer::SALT, $this->salt);
				if ($this->isColumnModified(UserPeer::NAME)) $criteria->add(UserPeer::NAME, $this->name);
				if ($this->isColumnModified(UserPeer::PHOTO)) $criteria->add(UserPeer::PHOTO, $this->photo);
				if ($this->isColumnModified(UserPeer::BBS_ID)) $criteria->add(UserPeer::BBS_ID, $this->bbs_id);
				if ($this->isColumnModified(UserPeer::OFS_ID)) $criteria->add(UserPeer::OFS_ID, $this->ofs_id);
				if ($this->isColumnModified(UserPeer::DUTY)) $criteria->add(UserPeer::DUTY, $this->duty);
				if ($this->isColumnModified(UserPeer::MOBILE)) $criteria->add(UserPeer::MOBILE, $this->mobile);
				if ($this->isColumnModified(UserPeer::TEL)) $criteria->add(UserPeer::TEL, $this->tel);
				if ($this->isColumnModified(UserPeer::USERTYPE)) $criteria->add(UserPeer::USERTYPE, $this->usertype);
				if ($this->isColumnModified(UserPeer::IDENTITY)) $criteria->add(UserPeer::IDENTITY, $this->identity);
				if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
				if ($this->isColumnModified(UserPeer::QQ)) $criteria->add(UserPeer::QQ, $this->qq);
				if ($this->isColumnModified(UserPeer::MSN)) $criteria->add(UserPeer::MSN, $this->msn);
				if ($this->isColumnModified(UserPeer::ADDRESS)) $criteria->add(UserPeer::ADDRESS, $this->address);
				if ($this->isColumnModified(UserPeer::CREATED_AT)) $criteria->add(UserPeer::CREATED_AT, $this->created_at);

				return $criteria;
			}


			public function buildPkeyCriteria()
			{
				$criteria = new Criteria(UserPeer::DATABASE_NAME);

				$criteria->add(UserPeer::USER_ID, $this->user_id);

				return $criteria;
			}


			public function getPrimaryKey()
			{
				return $this->getUserId();
			}


			public function setPrimaryKey($key)
			{
				$this->setUserId($key);
			}


			public function copyInto($copyObj, $deepCopy = false)
			{

				$copyObj->setUsername($this->username);

				$copyObj->setNickname($this->nickname);

				$copyObj->setSha1Password($this->sha1_password);

				$copyObj->setSalt($this->salt);

				$copyObj->setName($this->name);

				$copyObj->setPhoto($this->photo);

				$copyObj->setBbsId($this->bbs_id);

				$copyObj->setOfsId($this->ofs_id);

				$copyObj->setDuty($this->duty);

				$copyObj->setMobile($this->mobile);

				$copyObj->setTel($this->tel);

				$copyObj->setUsertype($this->usertype);

				$copyObj->setIdentity($this->identity);

				$copyObj->setEmail($this->email);

				$copyObj->setQq($this->qq);

				$copyObj->setMsn($this->msn);

				$copyObj->setAddress($this->address);

				$copyObj->setCreatedAt($this->created_at);


				if ($deepCopy) {
					$copyObj->setNew(false);

					foreach($this->getDonations() as $relObj) {
						$copyObj->addDonation($relObj->copy($deepCopy));
					}

					foreach($this->getRemitsRelatedByReceiveUserId() as $relObj) {
						$copyObj->addRemitRelatedByReceiveUserId($relObj->copy($deepCopy));
					}

					foreach($this->getRemitsRelatedBySendoutUserId() as $relObj) {
						$copyObj->addRemitRelatedBySendoutUserId($relObj->copy($deepCopy));
					}

					foreach($this->getReportCards() as $relObj) {
						$copyObj->addReportCard($relObj->copy($deepCopy));
					}

					foreach($this->getSurveys() as $relObj) {
						$copyObj->addSurvey($relObj->copy($deepCopy));
					}

				}

				$copyObj->setNew(true);

				$copyObj->setUserId(NULL);
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

						$criteria->add(DonationPeer::USER_ID, $this->getUserId());

						DonationPeer::addSelectColumns($criteria);
						$this->collDonations = DonationPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(DonationPeer::USER_ID, $this->getUserId());

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

				$criteria->add(DonationPeer::USER_ID, $this->getUserId());

				return DonationPeer::doCount($criteria, $distinct, $con);
			}


			public function addDonation(Donation $l)
			{
				$this->collDonations[] = $l;
				$l->setUser($this);
			}



			public function getDonationsJoinStudent($criteria = null, $con = null)
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

						$criteria->add(DonationPeer::USER_ID, $this->getUserId());

						$this->collDonations = DonationPeer::doSelectJoinStudent($criteria, $con);
					}
				} else {
						
					$criteria->add(DonationPeer::USER_ID, $this->getUserId());

					if (!isset($this->lastDonationCriteria) || !$this->lastDonationCriteria->equals($criteria)) {
						$this->collDonations = DonationPeer::doSelectJoinStudent($criteria, $con);
					}
				}
				$this->lastDonationCriteria = $criteria;

				return $this->collDonations;
			}


			public function initRemitsRelatedByReceiveUserId()
			{
				if ($this->collRemitsRelatedByReceiveUserId === null) {
					$this->collRemitsRelatedByReceiveUserId = array();
				}
			}


			public function getRemitsRelatedByReceiveUserId($criteria = null, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				if ($this->collRemitsRelatedByReceiveUserId === null) {
					if ($this->isNew()) {
			   $this->collRemitsRelatedByReceiveUserId = array();
					} else {

						$criteria->add(RemitPeer::RECEIVE_USER_ID, $this->getUserId());

						RemitPeer::addSelectColumns($criteria);
						$this->collRemitsRelatedByReceiveUserId = RemitPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(RemitPeer::RECEIVE_USER_ID, $this->getUserId());

						RemitPeer::addSelectColumns($criteria);
						if (!isset($this->lastRemitRelatedByReceiveUserIdCriteria) || !$this->lastRemitRelatedByReceiveUserIdCriteria->equals($criteria)) {
							$this->collRemitsRelatedByReceiveUserId = RemitPeer::doSelect($criteria, $con);
						}
					}
				}
				$this->lastRemitRelatedByReceiveUserIdCriteria = $criteria;
				return $this->collRemitsRelatedByReceiveUserId;
			}


			public function countRemitsRelatedByReceiveUserId($criteria = null, $distinct = false, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				$criteria->add(RemitPeer::RECEIVE_USER_ID, $this->getUserId());

				return RemitPeer::doCount($criteria, $distinct, $con);
			}


			public function addRemitRelatedByReceiveUserId(Remit $l)
			{
				$this->collRemitsRelatedByReceiveUserId[] = $l;
				$l->setUserRelatedByReceiveUserId($this);
			}



			public function getRemitsRelatedByReceiveUserIdJoinDonation($criteria = null, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				if ($this->collRemitsRelatedByReceiveUserId === null) {
					if ($this->isNew()) {
						$this->collRemitsRelatedByReceiveUserId = array();
					} else {

						$criteria->add(RemitPeer::RECEIVE_USER_ID, $this->getUserId());

						$this->collRemitsRelatedByReceiveUserId = RemitPeer::doSelectJoinDonation($criteria, $con);
					}
				} else {
						
					$criteria->add(RemitPeer::RECEIVE_USER_ID, $this->getUserId());

					if (!isset($this->lastRemitRelatedByReceiveUserIdCriteria) || !$this->lastRemitRelatedByReceiveUserIdCriteria->equals($criteria)) {
						$this->collRemitsRelatedByReceiveUserId = RemitPeer::doSelectJoinDonation($criteria, $con);
					}
				}
				$this->lastRemitRelatedByReceiveUserIdCriteria = $criteria;

				return $this->collRemitsRelatedByReceiveUserId;
			}


			public function initRemitsRelatedBySendoutUserId()
			{
				if ($this->collRemitsRelatedBySendoutUserId === null) {
					$this->collRemitsRelatedBySendoutUserId = array();
				}
			}


			public function getRemitsRelatedBySendoutUserId($criteria = null, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				if ($this->collRemitsRelatedBySendoutUserId === null) {
					if ($this->isNew()) {
			   $this->collRemitsRelatedBySendoutUserId = array();
					} else {

						$criteria->add(RemitPeer::SENDOUT_USER_ID, $this->getUserId());

						RemitPeer::addSelectColumns($criteria);
						$this->collRemitsRelatedBySendoutUserId = RemitPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(RemitPeer::SENDOUT_USER_ID, $this->getUserId());

						RemitPeer::addSelectColumns($criteria);
						if (!isset($this->lastRemitRelatedBySendoutUserIdCriteria) || !$this->lastRemitRelatedBySendoutUserIdCriteria->equals($criteria)) {
							$this->collRemitsRelatedBySendoutUserId = RemitPeer::doSelect($criteria, $con);
						}
					}
				}
				$this->lastRemitRelatedBySendoutUserIdCriteria = $criteria;
				return $this->collRemitsRelatedBySendoutUserId;
			}


			public function countRemitsRelatedBySendoutUserId($criteria = null, $distinct = false, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				$criteria->add(RemitPeer::SENDOUT_USER_ID, $this->getUserId());

				return RemitPeer::doCount($criteria, $distinct, $con);
			}


			public function addRemitRelatedBySendoutUserId(Remit $l)
			{
				$this->collRemitsRelatedBySendoutUserId[] = $l;
				$l->setUserRelatedBySendoutUserId($this);
			}



			public function getRemitsRelatedBySendoutUserIdJoinDonation($criteria = null, $con = null)
			{
				include_once 'lib/model/om/BaseRemitPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				if ($this->collRemitsRelatedBySendoutUserId === null) {
					if ($this->isNew()) {
						$this->collRemitsRelatedBySendoutUserId = array();
					} else {

						$criteria->add(RemitPeer::SENDOUT_USER_ID, $this->getUserId());

						$this->collRemitsRelatedBySendoutUserId = RemitPeer::doSelectJoinDonation($criteria, $con);
					}
				} else {
						
					$criteria->add(RemitPeer::SENDOUT_USER_ID, $this->getUserId());

					if (!isset($this->lastRemitRelatedBySendoutUserIdCriteria) || !$this->lastRemitRelatedBySendoutUserIdCriteria->equals($criteria)) {
						$this->collRemitsRelatedBySendoutUserId = RemitPeer::doSelectJoinDonation($criteria, $con);
					}
				}
				$this->lastRemitRelatedBySendoutUserIdCriteria = $criteria;

				return $this->collRemitsRelatedBySendoutUserId;
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

						$criteria->add(ReportCardPeer::USER_ID, $this->getUserId());

						ReportCardPeer::addSelectColumns($criteria);
						$this->collReportCards = ReportCardPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(ReportCardPeer::USER_ID, $this->getUserId());

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

				$criteria->add(ReportCardPeer::USER_ID, $this->getUserId());

				return ReportCardPeer::doCount($criteria, $distinct, $con);
			}


			public function addReportCard(ReportCard $l)
			{
				$this->collReportCards[] = $l;
				$l->setUser($this);
			}



			public function getReportCardsJoinStudent($criteria = null, $con = null)
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

						$criteria->add(ReportCardPeer::USER_ID, $this->getUserId());

						$this->collReportCards = ReportCardPeer::doSelectJoinStudent($criteria, $con);
					}
				} else {
						
					$criteria->add(ReportCardPeer::USER_ID, $this->getUserId());

					if (!isset($this->lastReportCardCriteria) || !$this->lastReportCardCriteria->equals($criteria)) {
						$this->collReportCards = ReportCardPeer::doSelectJoinStudent($criteria, $con);
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

						$criteria->add(SurveyPeer::USER_ID, $this->getUserId());

						SurveyPeer::addSelectColumns($criteria);
						$this->collSurveys = SurveyPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(SurveyPeer::USER_ID, $this->getUserId());

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

				$criteria->add(SurveyPeer::USER_ID, $this->getUserId());

				return SurveyPeer::doCount($criteria, $distinct, $con);
			}


			public function addSurvey(Survey $l)
			{
				$this->collSurveys[] = $l;
				$l->setUser($this);
			}



			public function getSurveysJoinStudent($criteria = null, $con = null)
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

						$criteria->add(SurveyPeer::USER_ID, $this->getUserId());

						$this->collSurveys = SurveyPeer::doSelectJoinStudent($criteria, $con);
					}
				} else {
						
					$criteria->add(SurveyPeer::USER_ID, $this->getUserId());

					if (!isset($this->lastSurveyCriteria) || !$this->lastSurveyCriteria->equals($criteria)) {
						$this->collSurveys = SurveyPeer::doSelectJoinStudent($criteria, $con);
					}
				}
				$this->lastSurveyCriteria = $criteria;

				return $this->collSurveys;
			}

}