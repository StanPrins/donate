<?php


abstract class BaseReportCard extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $report_id;


	
	protected $student_id;


	
	protected $user_id;


	
	protected $term;


	
	protected $yuwen;


	
	protected $shuxue;


	
	protected $yingyu;


	
	protected $wuli;


	
	protected $huaxue;


	
	protected $lishi;


	
	protected $dili;


	
	protected $ziran;


	
	protected $shengwu;


	
	protected $tiyu;


	
	protected $zhengzhi;


	
	protected $zonghe;


	
	protected $rank;


	
	protected $teacher_remark;


	
	protected $created_at;

	
	protected $aStudent;

	
	protected $aUser;

	
	protected $collRemits;

	
	protected $lastRemitCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getReportId()
	{

		return $this->report_id;
	}

	
	public function getStudentId()
	{

		return $this->student_id;
	}

	
	public function getUserId()
	{

		return $this->user_id;
	}

	
	public function getTerm()
	{

		return $this->term;
	}

	
	public function getYuwen()
	{

		return $this->yuwen;
	}

	
	public function getShuxue()
	{

		return $this->shuxue;
	}

	
	public function getYingyu()
	{

		return $this->yingyu;
	}

	
	public function getWuli()
	{

		return $this->wuli;
	}

	
	public function getHuaxue()
	{

		return $this->huaxue;
	}

	
	public function getLishi()
	{

		return $this->lishi;
	}

	
	public function getDili()
	{

		return $this->dili;
	}

	
	public function getZiran()
	{

		return $this->ziran;
	}

	
	public function getShengwu()
	{

		return $this->shengwu;
	}

	
	public function getTiyu()
	{

		return $this->tiyu;
	}

	
	public function getZhengzhi()
	{

		return $this->zhengzhi;
	}

	
	public function getZonghe()
	{

		return $this->zonghe;
	}

	
	public function getRank()
	{

		return $this->rank;
	}

	
	public function getTeacherRemark()
	{

		return $this->teacher_remark;
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

	
	public function setReportId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->report_id !== $v) {
			$this->report_id = $v;
			$this->modifiedColumns[] = ReportCardPeer::REPORT_ID;
		}

	} 
	
	public function setStudentId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = ReportCardPeer::STUDENT_ID;
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
			$this->modifiedColumns[] = ReportCardPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getUserId() !== $v) {
			$this->aUser = null;
		}

	} 
	
	public function setTerm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->term !== $v) {
			$this->term = $v;
			$this->modifiedColumns[] = ReportCardPeer::TERM;
		}

	} 
	
	public function setYuwen($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->yuwen !== $v) {
			$this->yuwen = $v;
			$this->modifiedColumns[] = ReportCardPeer::YUWEN;
		}

	} 
	
	public function setShuxue($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->shuxue !== $v) {
			$this->shuxue = $v;
			$this->modifiedColumns[] = ReportCardPeer::SHUXUE;
		}

	} 
	
	public function setYingyu($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->yingyu !== $v) {
			$this->yingyu = $v;
			$this->modifiedColumns[] = ReportCardPeer::YINGYU;
		}

	} 
	
	public function setWuli($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->wuli !== $v) {
			$this->wuli = $v;
			$this->modifiedColumns[] = ReportCardPeer::WULI;
		}

	} 
	
	public function setHuaxue($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->huaxue !== $v) {
			$this->huaxue = $v;
			$this->modifiedColumns[] = ReportCardPeer::HUAXUE;
		}

	} 
	
	public function setLishi($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->lishi !== $v) {
			$this->lishi = $v;
			$this->modifiedColumns[] = ReportCardPeer::LISHI;
		}

	} 
	
	public function setDili($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->dili !== $v) {
			$this->dili = $v;
			$this->modifiedColumns[] = ReportCardPeer::DILI;
		}

	} 
	
	public function setZiran($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->ziran !== $v) {
			$this->ziran = $v;
			$this->modifiedColumns[] = ReportCardPeer::ZIRAN;
		}

	} 
	
	public function setShengwu($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->shengwu !== $v) {
			$this->shengwu = $v;
			$this->modifiedColumns[] = ReportCardPeer::SHENGWU;
		}

	} 
	
	public function setTiyu($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tiyu !== $v) {
			$this->tiyu = $v;
			$this->modifiedColumns[] = ReportCardPeer::TIYU;
		}

	} 
	
	public function setZhengzhi($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->zhengzhi !== $v) {
			$this->zhengzhi = $v;
			$this->modifiedColumns[] = ReportCardPeer::ZHENGZHI;
		}

	} 
	
	public function setZonghe($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->zonghe !== $v) {
			$this->zonghe = $v;
			$this->modifiedColumns[] = ReportCardPeer::ZONGHE;
		}

	} 
	
	public function setRank($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->rank !== $v) {
			$this->rank = $v;
			$this->modifiedColumns[] = ReportCardPeer::RANK;
		}

	} 
	
	public function setTeacherRemark($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->teacher_remark !== $v) {
			$this->teacher_remark = $v;
			$this->modifiedColumns[] = ReportCardPeer::TEACHER_REMARK;
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
			$this->modifiedColumns[] = ReportCardPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->report_id = $rs->getInt($startcol + 0);

			$this->student_id = $rs->getInt($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->term = $rs->getString($startcol + 3);

			$this->yuwen = $rs->getInt($startcol + 4);

			$this->shuxue = $rs->getInt($startcol + 5);

			$this->yingyu = $rs->getInt($startcol + 6);

			$this->wuli = $rs->getInt($startcol + 7);

			$this->huaxue = $rs->getInt($startcol + 8);

			$this->lishi = $rs->getInt($startcol + 9);

			$this->dili = $rs->getInt($startcol + 10);

			$this->ziran = $rs->getInt($startcol + 11);

			$this->shengwu = $rs->getInt($startcol + 12);

			$this->tiyu = $rs->getInt($startcol + 13);

			$this->zhengzhi = $rs->getInt($startcol + 14);

			$this->zonghe = $rs->getInt($startcol + 15);

			$this->rank = $rs->getString($startcol + 16);

			$this->teacher_remark = $rs->getString($startcol + 17);

			$this->created_at = $rs->getTimestamp($startcol + 18, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 19; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ReportCard object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ReportCardPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ReportCardPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ReportCardPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ReportCardPeer::DATABASE_NAME);
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
					$pk = ReportCardPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setReportId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ReportCardPeer::doUpdate($this, $con);
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


			if (($retval = ReportCardPeer::doValidate($this, $columns)) !== true) {
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
		$pos = ReportCardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getReportId();
				break;
			case 1:
				return $this->getStudentId();
				break;
			case 2:
				return $this->getUserId();
				break;
			case 3:
				return $this->getTerm();
				break;
			case 4:
				return $this->getYuwen();
				break;
			case 5:
				return $this->getShuxue();
				break;
			case 6:
				return $this->getYingyu();
				break;
			case 7:
				return $this->getWuli();
				break;
			case 8:
				return $this->getHuaxue();
				break;
			case 9:
				return $this->getLishi();
				break;
			case 10:
				return $this->getDili();
				break;
			case 11:
				return $this->getZiran();
				break;
			case 12:
				return $this->getShengwu();
				break;
			case 13:
				return $this->getTiyu();
				break;
			case 14:
				return $this->getZhengzhi();
				break;
			case 15:
				return $this->getZonghe();
				break;
			case 16:
				return $this->getRank();
				break;
			case 17:
				return $this->getTeacherRemark();
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
		$keys = ReportCardPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getReportId(),
			$keys[1] => $this->getStudentId(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getTerm(),
			$keys[4] => $this->getYuwen(),
			$keys[5] => $this->getShuxue(),
			$keys[6] => $this->getYingyu(),
			$keys[7] => $this->getWuli(),
			$keys[8] => $this->getHuaxue(),
			$keys[9] => $this->getLishi(),
			$keys[10] => $this->getDili(),
			$keys[11] => $this->getZiran(),
			$keys[12] => $this->getShengwu(),
			$keys[13] => $this->getTiyu(),
			$keys[14] => $this->getZhengzhi(),
			$keys[15] => $this->getZonghe(),
			$keys[16] => $this->getRank(),
			$keys[17] => $this->getTeacherRemark(),
			$keys[18] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ReportCardPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setReportId($value);
				break;
			case 1:
				$this->setStudentId($value);
				break;
			case 2:
				$this->setUserId($value);
				break;
			case 3:
				$this->setTerm($value);
				break;
			case 4:
				$this->setYuwen($value);
				break;
			case 5:
				$this->setShuxue($value);
				break;
			case 6:
				$this->setYingyu($value);
				break;
			case 7:
				$this->setWuli($value);
				break;
			case 8:
				$this->setHuaxue($value);
				break;
			case 9:
				$this->setLishi($value);
				break;
			case 10:
				$this->setDili($value);
				break;
			case 11:
				$this->setZiran($value);
				break;
			case 12:
				$this->setShengwu($value);
				break;
			case 13:
				$this->setTiyu($value);
				break;
			case 14:
				$this->setZhengzhi($value);
				break;
			case 15:
				$this->setZonghe($value);
				break;
			case 16:
				$this->setRank($value);
				break;
			case 17:
				$this->setTeacherRemark($value);
				break;
			case 18:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ReportCardPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setReportId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStudentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTerm($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setYuwen($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setShuxue($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setYingyu($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setWuli($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHuaxue($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setLishi($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDili($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setZiran($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setShengwu($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setTiyu($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setZhengzhi($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setZonghe($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRank($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTeacherRemark($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCreatedAt($arr[$keys[18]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ReportCardPeer::DATABASE_NAME);

		if ($this->isColumnModified(ReportCardPeer::REPORT_ID)) $criteria->add(ReportCardPeer::REPORT_ID, $this->report_id);
		if ($this->isColumnModified(ReportCardPeer::STUDENT_ID)) $criteria->add(ReportCardPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(ReportCardPeer::USER_ID)) $criteria->add(ReportCardPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(ReportCardPeer::TERM)) $criteria->add(ReportCardPeer::TERM, $this->term);
		if ($this->isColumnModified(ReportCardPeer::YUWEN)) $criteria->add(ReportCardPeer::YUWEN, $this->yuwen);
		if ($this->isColumnModified(ReportCardPeer::SHUXUE)) $criteria->add(ReportCardPeer::SHUXUE, $this->shuxue);
		if ($this->isColumnModified(ReportCardPeer::YINGYU)) $criteria->add(ReportCardPeer::YINGYU, $this->yingyu);
		if ($this->isColumnModified(ReportCardPeer::WULI)) $criteria->add(ReportCardPeer::WULI, $this->wuli);
		if ($this->isColumnModified(ReportCardPeer::HUAXUE)) $criteria->add(ReportCardPeer::HUAXUE, $this->huaxue);
		if ($this->isColumnModified(ReportCardPeer::LISHI)) $criteria->add(ReportCardPeer::LISHI, $this->lishi);
		if ($this->isColumnModified(ReportCardPeer::DILI)) $criteria->add(ReportCardPeer::DILI, $this->dili);
		if ($this->isColumnModified(ReportCardPeer::ZIRAN)) $criteria->add(ReportCardPeer::ZIRAN, $this->ziran);
		if ($this->isColumnModified(ReportCardPeer::SHENGWU)) $criteria->add(ReportCardPeer::SHENGWU, $this->shengwu);
		if ($this->isColumnModified(ReportCardPeer::TIYU)) $criteria->add(ReportCardPeer::TIYU, $this->tiyu);
		if ($this->isColumnModified(ReportCardPeer::ZHENGZHI)) $criteria->add(ReportCardPeer::ZHENGZHI, $this->zhengzhi);
		if ($this->isColumnModified(ReportCardPeer::ZONGHE)) $criteria->add(ReportCardPeer::ZONGHE, $this->zonghe);
		if ($this->isColumnModified(ReportCardPeer::RANK)) $criteria->add(ReportCardPeer::RANK, $this->rank);
		if ($this->isColumnModified(ReportCardPeer::TEACHER_REMARK)) $criteria->add(ReportCardPeer::TEACHER_REMARK, $this->teacher_remark);
		if ($this->isColumnModified(ReportCardPeer::CREATED_AT)) $criteria->add(ReportCardPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ReportCardPeer::DATABASE_NAME);

		$criteria->add(ReportCardPeer::REPORT_ID, $this->report_id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getReportId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setReportId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStudentId($this->student_id);

		$copyObj->setUserId($this->user_id);

		$copyObj->setTerm($this->term);

		$copyObj->setYuwen($this->yuwen);

		$copyObj->setShuxue($this->shuxue);

		$copyObj->setYingyu($this->yingyu);

		$copyObj->setWuli($this->wuli);

		$copyObj->setHuaxue($this->huaxue);

		$copyObj->setLishi($this->lishi);

		$copyObj->setDili($this->dili);

		$copyObj->setZiran($this->ziran);

		$copyObj->setShengwu($this->shengwu);

		$copyObj->setTiyu($this->tiyu);

		$copyObj->setZhengzhi($this->zhengzhi);

		$copyObj->setZonghe($this->zonghe);

		$copyObj->setRank($this->rank);

		$copyObj->setTeacherRemark($this->teacher_remark);

		$copyObj->setCreatedAt($this->created_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getRemits() as $relObj) {
				$copyObj->addRemit($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setReportId(NULL); 
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
			self::$peer = new ReportCardPeer();
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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				RemitPeer::addSelectColumns($criteria);
				$this->collRemits = RemitPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

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

		$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

		return RemitPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRemit(Remit $l)
	{
		$this->collRemits[] = $l;
		$l->setReportCard($this);
	}


	
	public function getRemitsJoinDonation($criteria = null, $con = null)
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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				$this->collRemits = RemitPeer::doSelectJoinDonation($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinDonation($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveUserId($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedByReceiveSubmitter($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutUserId($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

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

				$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutSubmitter($criteria, $con);
			}
		} else {
									
			$criteria->add(RemitPeer::REPORT_ID, $this->getReportId());

			if (!isset($this->lastRemitCriteria) || !$this->lastRemitCriteria->equals($criteria)) {
				$this->collRemits = RemitPeer::doSelectJoinUserRelatedBySendoutSubmitter($criteria, $con);
			}
		}
		$this->lastRemitCriteria = $criteria;

		return $this->collRemits;
	}

} 