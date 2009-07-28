<?php


abstract class BaseRemit extends BaseObject  implements Persistent {



	protected static $peer;



	protected $remit_id;



	protected $donation_id;



	protected $amount;



	protected $is_by_ofs = true;



	protected $is_received = false;



	protected $receive_date;



	protected $receive_user_id;



	protected $is_sendout = false;



	protected $sendout_date;



	protected $sendout_user_id;



	protected $created_at;


	protected $aDonation;


	protected $aUserRelatedByReceiveUserId;


	protected $aUserRelatedBySendoutUserId;


	protected $alreadyInSave = false;


	protected $alreadyInValidation = false;


	public function getRemitId()
	{

		return $this->remit_id;
	}


	public function getDonationId()
	{

		return $this->donation_id;
	}


	public function getAmount()
	{

		return $this->amount;
	}


	public function getIsByOfs()
	{

		return $this->is_by_ofs;
	}


	public function getIsReceived()
	{

		return $this->is_received;
	}


	public function getReceiveDate($format = 'Y-m-d')
	{

		if ($this->receive_date === null || $this->receive_date === '') {
			return null;
		} elseif (!is_int($this->receive_date)) {
			$ts = strtotime($this->receive_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [receive_date] as date/time value: " . var_export($this->receive_date, true));
			}
		} else {
			$ts = $this->receive_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}


	public function getReceiveUserId()
	{

		return $this->receive_user_id;
	}


	public function getIsSendout()
	{

		return $this->is_sendout;
	}


	public function getSendoutDate($format = 'Y-m-d')
	{

		if ($this->sendout_date === null || $this->sendout_date === '') {
			return null;
		} elseif (!is_int($this->sendout_date)) {
			$ts = strtotime($this->sendout_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [sendout_date] as date/time value: " . var_export($this->sendout_date, true));
			}
		} else {
			$ts = $this->sendout_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}


	public function getSendoutUserId()
	{

		return $this->sendout_user_id;
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


	public function setRemitId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->remit_id !== $v) {
			$this->remit_id = $v;
			$this->modifiedColumns[] = RemitPeer::REMIT_ID;
		}

	}

	public function setDonationId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->donation_id !== $v) {
			$this->donation_id = $v;
			$this->modifiedColumns[] = RemitPeer::DONATION_ID;
		}

		if ($this->aDonation !== null && $this->aDonation->getDonationId() !== $v) {
			$this->aDonation = null;
		}

	}

	public function setAmount($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->amount !== $v) {
			$this->amount = $v;
			$this->modifiedColumns[] = RemitPeer::AMOUNT;
		}

	}

	public function setIsByOfs($v)
	{

		if ($this->is_by_ofs !== $v || $v === true) {
			$this->is_by_ofs = $v;
			$this->modifiedColumns[] = RemitPeer::IS_BY_OFS;
		}

	}

	public function setIsReceived($v)
	{

		if ($this->is_received !== $v || $v === false) {
			$this->is_received = $v;
			$this->modifiedColumns[] = RemitPeer::IS_RECEIVED;
		}

	}

	public function setReceiveDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [receive_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->receive_date !== $ts) {
			$this->receive_date = $ts;
			$this->modifiedColumns[] = RemitPeer::RECEIVE_DATE;
		}

	}

	public function setReceiveUserId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->receive_user_id !== $v) {
			$this->receive_user_id = $v;
			$this->modifiedColumns[] = RemitPeer::RECEIVE_USER_ID;
		}

		if ($this->aUserRelatedByReceiveUserId !== null && $this->aUserRelatedByReceiveUserId->getUserId() !== $v) {
			$this->aUserRelatedByReceiveUserId = null;
		}

	}

	public function setIsSendout($v)
	{

		if ($this->is_sendout !== $v || $v === false) {
			$this->is_sendout = $v;
			$this->modifiedColumns[] = RemitPeer::IS_SENDOUT;
		}

	}

	public function setSendoutDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [sendout_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->sendout_date !== $ts) {
			$this->sendout_date = $ts;
			$this->modifiedColumns[] = RemitPeer::SENDOUT_DATE;
		}

	}

	public function setSendoutUserId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sendout_user_id !== $v) {
			$this->sendout_user_id = $v;
			$this->modifiedColumns[] = RemitPeer::SENDOUT_USER_ID;
		}

		if ($this->aUserRelatedBySendoutUserId !== null && $this->aUserRelatedBySendoutUserId->getUserId() !== $v) {
			$this->aUserRelatedBySendoutUserId = null;
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
			$this->modifiedColumns[] = RemitPeer::CREATED_AT;
		}

	}

	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->remit_id = $rs->getInt($startcol + 0);

			$this->donation_id = $rs->getInt($startcol + 1);

			$this->amount = $rs->getString($startcol + 2);

			$this->is_by_ofs = $rs->getBoolean($startcol + 3);

			$this->is_received = $rs->getBoolean($startcol + 4);

			$this->receive_date = $rs->getDate($startcol + 5, null);

			$this->receive_user_id = $rs->getInt($startcol + 6);

			$this->is_sendout = $rs->getBoolean($startcol + 7);

			$this->sendout_date = $rs->getDate($startcol + 8, null);

			$this->sendout_user_id = $rs->getInt($startcol + 9);

			$this->created_at = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

			return $startcol + 11;
		} catch (Exception $e) {
			throw new PropelException("Error populating Remit object", $e);
		}
	}


	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RemitPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RemitPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}


	public function save($con = null)
	{
		if ($this->isNew() && !$this->isColumnModified(RemitPeer::CREATED_AT))
		{
			$this->setCreatedAt(time());
		}

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RemitPeer::DATABASE_NAME);
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



			if ($this->aDonation !== null) {
				if ($this->aDonation->isModified()) {
					$affectedRows += $this->aDonation->save($con);
				}
				$this->setDonation($this->aDonation);
			}

			if ($this->aUserRelatedByReceiveUserId !== null) {
				if ($this->aUserRelatedByReceiveUserId->isModified()) {
					$affectedRows += $this->aUserRelatedByReceiveUserId->save($con);
				}
				$this->setUserRelatedByReceiveUserId($this->aUserRelatedByReceiveUserId);
			}

			if ($this->aUserRelatedBySendoutUserId !== null) {
				if ($this->aUserRelatedBySendoutUserId->isModified()) {
					$affectedRows += $this->aUserRelatedBySendoutUserId->save($con);
				}
				$this->setUserRelatedBySendoutUserId($this->aUserRelatedBySendoutUserId);
			}


			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = RemitPeer::doInsert($this, $con);
					$affectedRows += 1;
					$this->setRemitId($pk);
					$this->setNew(false);
				} else {
					$affectedRows += RemitPeer::doUpdate($this, $con);
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



			if ($this->aDonation !== null) {
				if (!$this->aDonation->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDonation->getValidationFailures());
				}
			}

			if ($this->aUserRelatedByReceiveUserId !== null) {
				if (!$this->aUserRelatedByReceiveUserId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedByReceiveUserId->getValidationFailures());
				}
			}

			if ($this->aUserRelatedBySendoutUserId !== null) {
				if (!$this->aUserRelatedBySendoutUserId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserRelatedBySendoutUserId->getValidationFailures());
				}
			}


			if (($retval = RemitPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}


	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RemitPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}


	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getRemitId();
				break;
			case 1:
				return $this->getDonationId();
				break;
			case 2:
				return $this->getAmount();
				break;
			case 3:
				return $this->getIsByOfs();
				break;
			case 4:
				return $this->getIsReceived();
				break;
			case 5:
				return $this->getReceiveDate();
				break;
			case 6:
				return $this->getReceiveUserId();
				break;
			case 7:
				return $this->getIsSendout();
				break;
			case 8:
				return $this->getSendoutDate();
				break;
			case 9:
				return $this->getSendoutUserId();
				break;
			case 10:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}


		public function toArray($keyType = BasePeer::TYPE_PHPNAME)
		{
			$keys = RemitPeer::getFieldNames($keyType);
			$result = array(
			$keys[0] => $this->getRemitId(),
			$keys[1] => $this->getDonationId(),
			$keys[2] => $this->getAmount(),
			$keys[3] => $this->getIsByOfs(),
			$keys[4] => $this->getIsReceived(),
			$keys[5] => $this->getReceiveDate(),
			$keys[6] => $this->getReceiveUserId(),
			$keys[7] => $this->getIsSendout(),
			$keys[8] => $this->getSendoutDate(),
			$keys[9] => $this->getSendoutUserId(),
			$keys[10] => $this->getCreatedAt(),
			);
			return $result;
		}


		public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
		{
			$pos = RemitPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
			return $this->setByPosition($pos, $value);
		}


		public function setByPosition($pos, $value)
		{
			switch($pos) {
				case 0:
					$this->setRemitId($value);
					break;
				case 1:
					$this->setDonationId($value);
					break;
				case 2:
					$this->setAmount($value);
					break;
				case 3:
					$this->setIsByOfs($value);
					break;
				case 4:
					$this->setIsReceived($value);
					break;
				case 5:
					$this->setReceiveDate($value);
					break;
				case 6:
					$this->setReceiveUserId($value);
					break;
				case 7:
					$this->setIsSendout($value);
					break;
				case 8:
					$this->setSendoutDate($value);
					break;
				case 9:
					$this->setSendoutUserId($value);
					break;
				case 10:
					$this->setCreatedAt($value);
					break;
			} 	}


			public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
			{
				$keys = RemitPeer::getFieldNames($keyType);

				if (array_key_exists($keys[0], $arr)) $this->setRemitId($arr[$keys[0]]);
				if (array_key_exists($keys[1], $arr)) $this->setDonationId($arr[$keys[1]]);
				if (array_key_exists($keys[2], $arr)) $this->setAmount($arr[$keys[2]]);
				if (array_key_exists($keys[3], $arr)) $this->setIsByOfs($arr[$keys[3]]);
				if (array_key_exists($keys[4], $arr)) $this->setIsReceived($arr[$keys[4]]);
				if (array_key_exists($keys[5], $arr)) $this->setReceiveDate($arr[$keys[5]]);
				if (array_key_exists($keys[6], $arr)) $this->setReceiveUserId($arr[$keys[6]]);
				if (array_key_exists($keys[7], $arr)) $this->setIsSendout($arr[$keys[7]]);
				if (array_key_exists($keys[8], $arr)) $this->setSendoutDate($arr[$keys[8]]);
				if (array_key_exists($keys[9], $arr)) $this->setSendoutUserId($arr[$keys[9]]);
				if (array_key_exists($keys[10], $arr)) $this->setCreatedAt($arr[$keys[10]]);
			}


			public function buildCriteria()
			{
				$criteria = new Criteria(RemitPeer::DATABASE_NAME);

				if ($this->isColumnModified(RemitPeer::REMIT_ID)) $criteria->add(RemitPeer::REMIT_ID, $this->remit_id);
				if ($this->isColumnModified(RemitPeer::DONATION_ID)) $criteria->add(RemitPeer::DONATION_ID, $this->donation_id);
				if ($this->isColumnModified(RemitPeer::AMOUNT)) $criteria->add(RemitPeer::AMOUNT, $this->amount);
				if ($this->isColumnModified(RemitPeer::IS_BY_OFS)) $criteria->add(RemitPeer::IS_BY_OFS, $this->is_by_ofs);
				if ($this->isColumnModified(RemitPeer::IS_RECEIVED)) $criteria->add(RemitPeer::IS_RECEIVED, $this->is_received);
				if ($this->isColumnModified(RemitPeer::RECEIVE_DATE)) $criteria->add(RemitPeer::RECEIVE_DATE, $this->receive_date);
				if ($this->isColumnModified(RemitPeer::RECEIVE_USER_ID)) $criteria->add(RemitPeer::RECEIVE_USER_ID, $this->receive_user_id);
				if ($this->isColumnModified(RemitPeer::IS_SENDOUT)) $criteria->add(RemitPeer::IS_SENDOUT, $this->is_sendout);
				if ($this->isColumnModified(RemitPeer::SENDOUT_DATE)) $criteria->add(RemitPeer::SENDOUT_DATE, $this->sendout_date);
				if ($this->isColumnModified(RemitPeer::SENDOUT_USER_ID)) $criteria->add(RemitPeer::SENDOUT_USER_ID, $this->sendout_user_id);
				if ($this->isColumnModified(RemitPeer::CREATED_AT)) $criteria->add(RemitPeer::CREATED_AT, $this->created_at);

				return $criteria;
			}


			public function buildPkeyCriteria()
			{
				$criteria = new Criteria(RemitPeer::DATABASE_NAME);

				$criteria->add(RemitPeer::REMIT_ID, $this->remit_id);

				return $criteria;
			}


			public function getPrimaryKey()
			{
				return $this->getRemitId();
			}


			public function setPrimaryKey($key)
			{
				$this->setRemitId($key);
			}


			public function copyInto($copyObj, $deepCopy = false)
			{

				$copyObj->setDonationId($this->donation_id);

				$copyObj->setAmount($this->amount);

				$copyObj->setIsByOfs($this->is_by_ofs);

				$copyObj->setIsReceived($this->is_received);

				$copyObj->setReceiveDate($this->receive_date);

				$copyObj->setReceiveUserId($this->receive_user_id);

				$copyObj->setIsSendout($this->is_sendout);

				$copyObj->setSendoutDate($this->sendout_date);

				$copyObj->setSendoutUserId($this->sendout_user_id);

				$copyObj->setCreatedAt($this->created_at);


				$copyObj->setNew(true);

				$copyObj->setRemitId(NULL);
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
					self::$peer = new RemitPeer();
				}
				return self::$peer;
			}


			public function setDonation($v)
			{


				if ($v === null) {
					$this->setDonationId(NULL);
				} else {
					$this->setDonationId($v->getDonationId());
				}


				$this->aDonation = $v;
			}



			public function getDonation($con = null)
			{
				if ($this->aDonation === null && ($this->donation_id !== null)) {
					include_once 'lib/model/om/BaseDonationPeer.php';

					$this->aDonation = DonationPeer::retrieveByPK($this->donation_id, $con);

						
				}
				return $this->aDonation;
			}


			public function setUserRelatedByReceiveUserId($v)
			{


				if ($v === null) {
					$this->setReceiveUserId(NULL);
				} else {
					$this->setReceiveUserId($v->getUserId());
				}


				$this->aUserRelatedByReceiveUserId = $v;
			}



			public function getUserRelatedByReceiveUserId($con = null)
			{
				if ($this->aUserRelatedByReceiveUserId === null && ($this->receive_user_id !== null)) {
					include_once 'lib/model/om/BaseUserPeer.php';

					$this->aUserRelatedByReceiveUserId = UserPeer::retrieveByPK($this->receive_user_id, $con);

						
				}
				return $this->aUserRelatedByReceiveUserId;
			}


			public function setUserRelatedBySendoutUserId($v)
			{


				if ($v === null) {
					$this->setSendoutUserId(NULL);
				} else {
					$this->setSendoutUserId($v->getUserId());
				}


				$this->aUserRelatedBySendoutUserId = $v;
			}



			public function getUserRelatedBySendoutUserId($con = null)
			{
				if ($this->aUserRelatedBySendoutUserId === null && ($this->sendout_user_id !== null)) {
					include_once 'lib/model/om/BaseUserPeer.php';

					$this->aUserRelatedBySendoutUserId = UserPeer::retrieveByPK($this->sendout_user_id, $con);

						
				}
				return $this->aUserRelatedBySendoutUserId;
			}

}