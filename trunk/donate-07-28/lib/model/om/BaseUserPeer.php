<?php


abstract class BaseUserPeer {


	const DATABASE_NAME = 'propel';


	const TABLE_NAME = 'user';


	const CLASS_DEFAULT = 'lib.model.User';


	const NUM_COLUMNS = 19;


	const NUM_LAZY_LOAD_COLUMNS = 0;



	const USER_ID = 'user.USER_ID';


	const USERNAME = 'user.USERNAME';


	const NICKNAME = 'user.NICKNAME';


	const SHA1_PASSWORD = 'user.SHA1_PASSWORD';


	const SALT = 'user.SALT';


	const NAME = 'user.NAME';


	const PHOTO = 'user.PHOTO';


	const BBS_ID = 'user.BBS_ID';


	const OFS_ID = 'user.OFS_ID';


	const DUTY = 'user.DUTY';


	const MOBILE = 'user.MOBILE';


	const TEL = 'user.TEL';


	const USERTYPE = 'user.USERTYPE';


	const IDENTITY = 'user.IDENTITY';


	const EMAIL = 'user.EMAIL';


	const QQ = 'user.QQ';


	const MSN = 'user.MSN';


	const ADDRESS = 'user.ADDRESS';


	const CREATED_AT = 'user.CREATED_AT';


	private static $phpNameMap = null;



	private static $fieldNames = array (
	BasePeer::TYPE_PHPNAME => array ('UserId', 'Username', 'Nickname', 'Sha1Password', 'Salt', 'Name', 'Photo', 'BbsId', 'OfsId', 'Duty', 'Mobile', 'Tel', 'Usertype', 'Identity', 'Email', 'Qq', 'Msn', 'Address', 'CreatedAt', ),
	BasePeer::TYPE_COLNAME => array (UserPeer::USER_ID, UserPeer::USERNAME, UserPeer::NICKNAME, UserPeer::SHA1_PASSWORD, UserPeer::SALT, UserPeer::NAME, UserPeer::PHOTO, UserPeer::BBS_ID, UserPeer::OFS_ID, UserPeer::DUTY, UserPeer::MOBILE, UserPeer::TEL, UserPeer::USERTYPE, UserPeer::IDENTITY, UserPeer::EMAIL, UserPeer::QQ, UserPeer::MSN, UserPeer::ADDRESS, UserPeer::CREATED_AT, ),
	BasePeer::TYPE_FIELDNAME => array ('user_id', 'username', 'nickname', 'sha1_password', 'salt', 'name', 'photo', 'bbs_id', 'ofs_id', 'duty', 'mobile', 'tel', 'usertype', 'identity', 'email', 'qq', 'msn', 'address', 'created_at', ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);


	private static $fieldKeys = array (
	BasePeer::TYPE_PHPNAME => array ('UserId' => 0, 'Username' => 1, 'Nickname' => 2, 'Sha1Password' => 3, 'Salt' => 4, 'Name' => 5, 'Photo' => 6, 'BbsId' => 7, 'OfsId' => 8, 'Duty' => 9, 'Mobile' => 10, 'Tel' => 11, 'Usertype' => 12, 'Identity' => 13, 'Email' => 14, 'Qq' => 15, 'Msn' => 16, 'Address' => 17, 'CreatedAt' => 18, ),
	BasePeer::TYPE_COLNAME => array (UserPeer::USER_ID => 0, UserPeer::USERNAME => 1, UserPeer::NICKNAME => 2, UserPeer::SHA1_PASSWORD => 3, UserPeer::SALT => 4, UserPeer::NAME => 5, UserPeer::PHOTO => 6, UserPeer::BBS_ID => 7, UserPeer::OFS_ID => 8, UserPeer::DUTY => 9, UserPeer::MOBILE => 10, UserPeer::TEL => 11, UserPeer::USERTYPE => 12, UserPeer::IDENTITY => 13, UserPeer::EMAIL => 14, UserPeer::QQ => 15, UserPeer::MSN => 16, UserPeer::ADDRESS => 17, UserPeer::CREATED_AT => 18, ),
	BasePeer::TYPE_FIELDNAME => array ('user_id' => 0, 'username' => 1, 'nickname' => 2, 'sha1_password' => 3, 'salt' => 4, 'name' => 5, 'photo' => 6, 'bbs_id' => 7, 'ofs_id' => 8, 'duty' => 9, 'mobile' => 10, 'tel' => 11, 'usertype' => 12, 'identity' => 13, 'email' => 14, 'qq' => 15, 'msn' => 16, 'address' => 17, 'created_at' => 18, ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);


	public static function getMapBuilder()
	{
		include_once 'lib/model/map/UserMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.UserMapBuilder');
	}

	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = UserPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}

	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}



	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}


	public static function alias($alias, $column)
	{
		return str_replace(UserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}


	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(UserPeer::USER_ID);

		$criteria->addSelectColumn(UserPeer::USERNAME);

		$criteria->addSelectColumn(UserPeer::NICKNAME);

		$criteria->addSelectColumn(UserPeer::SHA1_PASSWORD);

		$criteria->addSelectColumn(UserPeer::SALT);

		$criteria->addSelectColumn(UserPeer::NAME);

		$criteria->addSelectColumn(UserPeer::PHOTO);

		$criteria->addSelectColumn(UserPeer::BBS_ID);

		$criteria->addSelectColumn(UserPeer::OFS_ID);

		$criteria->addSelectColumn(UserPeer::DUTY);

		$criteria->addSelectColumn(UserPeer::MOBILE);

		$criteria->addSelectColumn(UserPeer::TEL);

		$criteria->addSelectColumn(UserPeer::USERTYPE);

		$criteria->addSelectColumn(UserPeer::IDENTITY);

		$criteria->addSelectColumn(UserPeer::EMAIL);

		$criteria->addSelectColumn(UserPeer::QQ);

		$criteria->addSelectColumn(UserPeer::MSN);

		$criteria->addSelectColumn(UserPeer::ADDRESS);

		$criteria->addSelectColumn(UserPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(user.USER_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT user.USER_ID)';


	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(UserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(UserPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = UserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}

	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}

	public static function doSelect(Criteria $criteria, $con = null)
	{
		return UserPeer::populateObjects(UserPeer::doSelectRS($criteria, $con));
	}

	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			UserPeer::addSelectColumns($criteria);
		}

		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doSelect($criteria, $con);
	}

	public static function populateObjects(ResultSet $rs)
	{
		$results = array();

		$cls = UserPeer::getOMClass();
		$cls = Propel::import($cls);
		while($rs->next()) {

			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
				
		}
		return $results;
	}

	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}


	public static function getOMClass()
	{
		return UserPeer::CLASS_DEFAULT;
	}


	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
				$criteria = $values->buildCriteria(); 		}

				$criteria->remove(UserPeer::USER_ID);

				$criteria->setDbName(self::DATABASE_NAME);

				try {
					$con->begin();
					$pk = BasePeer::doInsert($criteria, $con);
					$con->commit();
				} catch(PropelException $e) {
					$con->rollback();
					throw $e;
				}

				return $pk;
	}


	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values;
			$comparison = $criteria->getComparison(UserPeer::USER_ID);
			$selectCriteria->add(UserPeer::USER_ID, $criteria->remove(UserPeer::USER_ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}


	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
			$con->begin();
			$affectedRows += BasePeer::doDeleteAll(UserPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}


	public static function doDelete($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof User) {

				$criteria = $values->buildPkeyCriteria();
			} else {
				$criteria = new Criteria(self::DATABASE_NAME);
				$criteria->add(UserPeer::USER_ID, (array) $values, Criteria::IN);
			}

			$criteria->setDbName(self::DATABASE_NAME);

			$affectedRows = 0;
			try {
				$con->begin();
					
				$affectedRows += BasePeer::doDelete($criteria, $con);
				$con->commit();
				return $affectedRows;
			} catch (PropelException $e) {
				$con->rollback();
				throw $e;
			}
	}


	public static function doValidate(User $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UserPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(UserPeer::DATABASE_NAME, UserPeer::TABLE_NAME, $columns);
		if ($res !== true) {
			$request = sfContext::getInstance()->getRequest();
			foreach ($res as $failed) {
				$col = UserPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
				$request->setError($col, $failed->getMessage());
			}
		}

		return $res;
	}


	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		$criteria->add(UserPeer::USER_ID, $pk);


		$v = UserPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}


	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(UserPeer::USER_ID, $pks, Criteria::IN);
			$objs = UserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

}
if (Propel::isInit()) {
	try {
		BaseUserPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
	require_once 'lib/model/map/UserMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.UserMapBuilder');
}
