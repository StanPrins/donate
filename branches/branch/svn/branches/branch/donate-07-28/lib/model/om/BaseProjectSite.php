<?php


abstract class BaseProjectSite extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $site_id;


	
	protected $site_name;


	
	protected $province;


	
	protected $city;


	
	protected $district;


	
	protected $discription;

	
	protected $collSchools;

	
	protected $lastSchoolCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getSiteId()
	{

		return $this->site_id;
	}

	
	public function getSiteName()
	{

		return $this->site_name;
	}

	
	public function getProvince()
	{

		return $this->province;
	}

	
	public function getCity()
	{

		return $this->city;
	}

	
	public function getDistrict()
	{

		return $this->district;
	}

	
	public function getDiscription()
	{

		return $this->discription;
	}

	
	public function setSiteId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->site_id !== $v) {
			$this->site_id = $v;
			$this->modifiedColumns[] = ProjectSitePeer::SITE_ID;
		}

	} 
	
	public function setSiteName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->site_name !== $v) {
			$this->site_name = $v;
			$this->modifiedColumns[] = ProjectSitePeer::SITE_NAME;
		}

	} 
	
	public function setProvince($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->province !== $v) {
			$this->province = $v;
			$this->modifiedColumns[] = ProjectSitePeer::PROVINCE;
		}

	} 
	
	public function setCity($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = ProjectSitePeer::CITY;
		}

	} 
	
	public function setDistrict($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->district !== $v) {
			$this->district = $v;
			$this->modifiedColumns[] = ProjectSitePeer::DISTRICT;
		}

	} 
	
	public function setDiscription($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->discription !== $v) {
			$this->discription = $v;
			$this->modifiedColumns[] = ProjectSitePeer::DISCRIPTION;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->site_id = $rs->getInt($startcol + 0);

			$this->site_name = $rs->getString($startcol + 1);

			$this->province = $rs->getString($startcol + 2);

			$this->city = $rs->getString($startcol + 3);

			$this->district = $rs->getString($startcol + 4);

			$this->discription = $rs->getString($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ProjectSite object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ProjectSitePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ProjectSitePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ProjectSitePeer::DATABASE_NAME);
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
					$pk = ProjectSitePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setSiteId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ProjectSitePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collSchools !== null) {
				foreach($this->collSchools as $referrerFK) {
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


			if (($retval = ProjectSitePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collSchools !== null) {
					foreach($this->collSchools as $referrerFK) {
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
		$pos = ProjectSitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getSiteId();
				break;
			case 1:
				return $this->getSiteName();
				break;
			case 2:
				return $this->getProvince();
				break;
			case 3:
				return $this->getCity();
				break;
			case 4:
				return $this->getDistrict();
				break;
			case 5:
				return $this->getDiscription();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProjectSitePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSiteId(),
			$keys[1] => $this->getSiteName(),
			$keys[2] => $this->getProvince(),
			$keys[3] => $this->getCity(),
			$keys[4] => $this->getDistrict(),
			$keys[5] => $this->getDiscription(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ProjectSitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setSiteId($value);
				break;
			case 1:
				$this->setSiteName($value);
				break;
			case 2:
				$this->setProvince($value);
				break;
			case 3:
				$this->setCity($value);
				break;
			case 4:
				$this->setDistrict($value);
				break;
			case 5:
				$this->setDiscription($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ProjectSitePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSiteId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSiteName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setProvince($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDistrict($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDiscription($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ProjectSitePeer::DATABASE_NAME);

		if ($this->isColumnModified(ProjectSitePeer::SITE_ID)) $criteria->add(ProjectSitePeer::SITE_ID, $this->site_id);
		if ($this->isColumnModified(ProjectSitePeer::SITE_NAME)) $criteria->add(ProjectSitePeer::SITE_NAME, $this->site_name);
		if ($this->isColumnModified(ProjectSitePeer::PROVINCE)) $criteria->add(ProjectSitePeer::PROVINCE, $this->province);
		if ($this->isColumnModified(ProjectSitePeer::CITY)) $criteria->add(ProjectSitePeer::CITY, $this->city);
		if ($this->isColumnModified(ProjectSitePeer::DISTRICT)) $criteria->add(ProjectSitePeer::DISTRICT, $this->district);
		if ($this->isColumnModified(ProjectSitePeer::DISCRIPTION)) $criteria->add(ProjectSitePeer::DISCRIPTION, $this->discription);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ProjectSitePeer::DATABASE_NAME);

		$criteria->add(ProjectSitePeer::SITE_ID, $this->site_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getSiteId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setSiteId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setSiteName($this->site_name);

		$copyObj->setProvince($this->province);

		$copyObj->setCity($this->city);

		$copyObj->setDistrict($this->district);

		$copyObj->setDiscription($this->discription);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getSchools() as $relObj) {
				$copyObj->addSchool($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setSiteId(NULL); 
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
			self::$peer = new ProjectSitePeer();
		}
		return self::$peer;
	}

	
	public function initSchools()
	{
		if ($this->collSchools === null) {
			$this->collSchools = array();
		}
	}

	
	public function getSchools($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseSchoolPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSchools === null) {
			if ($this->isNew()) {
			   $this->collSchools = array();
			} else {

				$criteria->add(SchoolPeer::SITE_ID, $this->getSiteId());

				SchoolPeer::addSelectColumns($criteria);
				$this->collSchools = SchoolPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SchoolPeer::SITE_ID, $this->getSiteId());

				SchoolPeer::addSelectColumns($criteria);
				if (!isset($this->lastSchoolCriteria) || !$this->lastSchoolCriteria->equals($criteria)) {
					$this->collSchools = SchoolPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSchoolCriteria = $criteria;
		return $this->collSchools;
	}

	
	public function countSchools($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseSchoolPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SchoolPeer::SITE_ID, $this->getSiteId());

		return SchoolPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSchool(School $l)
	{
		$this->collSchools[] = $l;
		$l->setProjectSite($this);
	}

} 