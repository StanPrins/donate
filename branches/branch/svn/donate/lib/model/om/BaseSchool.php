<?php


abstract class BaseSchool extends BaseObject  implements Persistent {



	protected static $peer;



	protected $school_id;



	protected $site_id;



	protected $school_name;



	protected $type;



	protected $master;



	protected $contact;



	protected $phone;



	protected $address;



	protected $postal;



	protected $discription;


	protected $aProjectSite;


	protected $collStudents;


	protected $lastStudentCriteria = null;


	protected $alreadyInSave = false;


	protected $alreadyInValidation = false;


	public function getSchoolId()
	{

		return $this->school_id;
	}


	public function getSiteId()
	{

		return $this->site_id;
	}


	public function getSchoolName()
	{

		return $this->school_name;
	}


	public function getType()
	{

		return $this->type;
	}


	public function getMaster()
	{

		return $this->master;
	}


	public function getContact()
	{

		return $this->contact;
	}


	public function getPhone()
	{

		return $this->phone;
	}


	public function getAddress()
	{

		return $this->address;
	}


	public function getPostal()
	{

		return $this->postal;
	}


	public function getDiscription()
	{

		return $this->discription;
	}


	public function setSchoolId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->school_id !== $v) {
			$this->school_id = $v;
			$this->modifiedColumns[] = SchoolPeer::SCHOOL_ID;
		}

	}

	public function setSiteId($v)
	{



		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->site_id !== $v) {
			$this->site_id = $v;
			$this->modifiedColumns[] = SchoolPeer::SITE_ID;
		}

		if ($this->aProjectSite !== null && $this->aProjectSite->getSiteId() !== $v) {
			$this->aProjectSite = null;
		}

	}

	public function setSchoolName($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->school_name !== $v) {
			$this->school_name = $v;
			$this->modifiedColumns[] = SchoolPeer::SCHOOL_NAME;
		}

	}

	public function setType($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = SchoolPeer::TYPE;
		}

	}

	public function setMaster($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->master !== $v) {
			$this->master = $v;
			$this->modifiedColumns[] = SchoolPeer::MASTER;
		}

	}

	public function setContact($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->contact !== $v) {
			$this->contact = $v;
			$this->modifiedColumns[] = SchoolPeer::CONTACT;
		}

	}

	public function setPhone($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = SchoolPeer::PHONE;
		}

	}

	public function setAddress($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = SchoolPeer::ADDRESS;
		}

	}

	public function setPostal($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->postal !== $v) {
			$this->postal = $v;
			$this->modifiedColumns[] = SchoolPeer::POSTAL;
		}

	}

	public function setDiscription($v)
	{



		if ($v !== null && !is_string($v)) {
			$v = (string) $v;
		}

		if ($this->discription !== $v) {
			$this->discription = $v;
			$this->modifiedColumns[] = SchoolPeer::DISCRIPTION;
		}

	}

	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->school_id = $rs->getInt($startcol + 0);

			$this->site_id = $rs->getInt($startcol + 1);

			$this->school_name = $rs->getString($startcol + 2);

			$this->type = $rs->getString($startcol + 3);

			$this->master = $rs->getString($startcol + 4);

			$this->contact = $rs->getString($startcol + 5);

			$this->phone = $rs->getString($startcol + 6);

			$this->address = $rs->getString($startcol + 7);

			$this->postal = $rs->getString($startcol + 8);

			$this->discription = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

			return $startcol + 10;
		} catch (Exception $e) {
			throw new PropelException("Error populating School object", $e);
		}
	}


	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SchoolPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}


	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME);
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



			if ($this->aProjectSite !== null) {
				if ($this->aProjectSite->isModified()) {
					$affectedRows += $this->aProjectSite->save($con);
				}
				$this->setProjectSite($this->aProjectSite);
			}


			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SchoolPeer::doInsert($this, $con);
					$affectedRows += 1;
					$this->setSchoolId($pk);
					$this->setNew(false);
				} else {
					$affectedRows += SchoolPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

				if ($this->collStudents !== null) {
					foreach($this->collStudents as $referrerFK) {
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



			if ($this->aProjectSite !== null) {
				if (!$this->aProjectSite->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aProjectSite->getValidationFailures());
				}
			}


			if (($retval = SchoolPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


			if ($this->collStudents !== null) {
				foreach($this->collStudents as $referrerFK) {
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
		$pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}


	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getSchoolId();
				break;
			case 1:
				return $this->getSiteId();
				break;
			case 2:
				return $this->getSchoolName();
				break;
			case 3:
				return $this->getType();
				break;
			case 4:
				return $this->getMaster();
				break;
			case 5:
				return $this->getContact();
				break;
			case 6:
				return $this->getPhone();
				break;
			case 7:
				return $this->getAddress();
				break;
			case 8:
				return $this->getPostal();
				break;
			case 9:
				return $this->getDiscription();
				break;
			default:
				return null;
				break;
		} 	}


		public function toArray($keyType = BasePeer::TYPE_PHPNAME)
		{
			$keys = SchoolPeer::getFieldNames($keyType);
			$result = array(
			$keys[0] => $this->getSchoolId(),
			$keys[1] => $this->getSiteId(),
			$keys[2] => $this->getSchoolName(),
			$keys[3] => $this->getType(),
			$keys[4] => $this->getMaster(),
			$keys[5] => $this->getContact(),
			$keys[6] => $this->getPhone(),
			$keys[7] => $this->getAddress(),
			$keys[8] => $this->getPostal(),
			$keys[9] => $this->getDiscription(),
			);
			return $result;
		}


		public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
		{
			$pos = SchoolPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
			return $this->setByPosition($pos, $value);
		}


		public function setByPosition($pos, $value)
		{
			switch($pos) {
				case 0:
					$this->setSchoolId($value);
					break;
				case 1:
					$this->setSiteId($value);
					break;
				case 2:
					$this->setSchoolName($value);
					break;
				case 3:
					$this->setType($value);
					break;
				case 4:
					$this->setMaster($value);
					break;
				case 5:
					$this->setContact($value);
					break;
				case 6:
					$this->setPhone($value);
					break;
				case 7:
					$this->setAddress($value);
					break;
				case 8:
					$this->setPostal($value);
					break;
				case 9:
					$this->setDiscription($value);
					break;
			} 	}


			public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
			{
				$keys = SchoolPeer::getFieldNames($keyType);

				if (array_key_exists($keys[0], $arr)) $this->setSchoolId($arr[$keys[0]]);
				if (array_key_exists($keys[1], $arr)) $this->setSiteId($arr[$keys[1]]);
				if (array_key_exists($keys[2], $arr)) $this->setSchoolName($arr[$keys[2]]);
				if (array_key_exists($keys[3], $arr)) $this->setType($arr[$keys[3]]);
				if (array_key_exists($keys[4], $arr)) $this->setMaster($arr[$keys[4]]);
				if (array_key_exists($keys[5], $arr)) $this->setContact($arr[$keys[5]]);
				if (array_key_exists($keys[6], $arr)) $this->setPhone($arr[$keys[6]]);
				if (array_key_exists($keys[7], $arr)) $this->setAddress($arr[$keys[7]]);
				if (array_key_exists($keys[8], $arr)) $this->setPostal($arr[$keys[8]]);
				if (array_key_exists($keys[9], $arr)) $this->setDiscription($arr[$keys[9]]);
			}


			public function buildCriteria()
			{
				$criteria = new Criteria(SchoolPeer::DATABASE_NAME);

				if ($this->isColumnModified(SchoolPeer::SCHOOL_ID)) $criteria->add(SchoolPeer::SCHOOL_ID, $this->school_id);
				if ($this->isColumnModified(SchoolPeer::SITE_ID)) $criteria->add(SchoolPeer::SITE_ID, $this->site_id);
				if ($this->isColumnModified(SchoolPeer::SCHOOL_NAME)) $criteria->add(SchoolPeer::SCHOOL_NAME, $this->school_name);
				if ($this->isColumnModified(SchoolPeer::TYPE)) $criteria->add(SchoolPeer::TYPE, $this->type);
				if ($this->isColumnModified(SchoolPeer::MASTER)) $criteria->add(SchoolPeer::MASTER, $this->master);
				if ($this->isColumnModified(SchoolPeer::CONTACT)) $criteria->add(SchoolPeer::CONTACT, $this->contact);
				if ($this->isColumnModified(SchoolPeer::PHONE)) $criteria->add(SchoolPeer::PHONE, $this->phone);
				if ($this->isColumnModified(SchoolPeer::ADDRESS)) $criteria->add(SchoolPeer::ADDRESS, $this->address);
				if ($this->isColumnModified(SchoolPeer::POSTAL)) $criteria->add(SchoolPeer::POSTAL, $this->postal);
				if ($this->isColumnModified(SchoolPeer::DISCRIPTION)) $criteria->add(SchoolPeer::DISCRIPTION, $this->discription);

				return $criteria;
			}


			public function buildPkeyCriteria()
			{
				$criteria = new Criteria(SchoolPeer::DATABASE_NAME);

				$criteria->add(SchoolPeer::SCHOOL_ID, $this->school_id);

				return $criteria;
			}


			public function getPrimaryKey()
			{
				return $this->getSchoolId();
			}


			public function setPrimaryKey($key)
			{
				$this->setSchoolId($key);
			}


			public function copyInto($copyObj, $deepCopy = false)
			{

				$copyObj->setSiteId($this->site_id);

				$copyObj->setSchoolName($this->school_name);

				$copyObj->setType($this->type);

				$copyObj->setMaster($this->master);

				$copyObj->setContact($this->contact);

				$copyObj->setPhone($this->phone);

				$copyObj->setAddress($this->address);

				$copyObj->setPostal($this->postal);

				$copyObj->setDiscription($this->discription);


				if ($deepCopy) {
					$copyObj->setNew(false);

					foreach($this->getStudents() as $relObj) {
						$copyObj->addStudent($relObj->copy($deepCopy));
					}

				}

				$copyObj->setNew(true);

				$copyObj->setSchoolId(NULL);
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
					self::$peer = new SchoolPeer();
				}
				return self::$peer;
			}


			public function setProjectSite($v)
			{


				if ($v === null) {
					$this->setSiteId(NULL);
				} else {
					$this->setSiteId($v->getSiteId());
				}


				$this->aProjectSite = $v;
			}



			public function getProjectSite($con = null)
			{
				if ($this->aProjectSite === null && ($this->site_id !== null)) {
					include_once 'lib/model/om/BaseProjectSitePeer.php';

					$this->aProjectSite = ProjectSitePeer::retrieveByPK($this->site_id, $con);

						
				}
				return $this->aProjectSite;
			}


			public function initStudents()
			{
				if ($this->collStudents === null) {
					$this->collStudents = array();
				}
			}


			public function getStudents($criteria = null, $con = null)
			{
				include_once 'lib/model/om/BaseStudentPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				if ($this->collStudents === null) {
					if ($this->isNew()) {
			   $this->collStudents = array();
					} else {

						$criteria->add(StudentPeer::SCHOOL_ID, $this->getSchoolId());

						StudentPeer::addSelectColumns($criteria);
						$this->collStudents = StudentPeer::doSelect($criteria, $con);
					}
				} else {
					if (!$this->isNew()) {


						$criteria->add(StudentPeer::SCHOOL_ID, $this->getSchoolId());

						StudentPeer::addSelectColumns($criteria);
						if (!isset($this->lastStudentCriteria) || !$this->lastStudentCriteria->equals($criteria)) {
							$this->collStudents = StudentPeer::doSelect($criteria, $con);
						}
					}
				}
				$this->lastStudentCriteria = $criteria;
				return $this->collStudents;
			}


			public function countStudents($criteria = null, $distinct = false, $con = null)
			{
				include_once 'lib/model/om/BaseStudentPeer.php';
				if ($criteria === null) {
					$criteria = new Criteria();
				}
				elseif ($criteria instanceof Criteria)
				{
					$criteria = clone $criteria;
				}

				$criteria->add(StudentPeer::SCHOOL_ID, $this->getSchoolId());

				return StudentPeer::doCount($criteria, $distinct, $con);
			}


			public function addStudent(Student $l)
			{
				$this->collStudents[] = $l;
				$l->setSchool($this);
			}

}