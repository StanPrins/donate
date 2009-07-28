<?php


abstract class BaseSchoolPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'school';

	
	const CLASS_DEFAULT = 'lib.model.School';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const SCHOOL_ID = 'school.SCHOOL_ID';

	
	const SITE_ID = 'school.SITE_ID';

	
	const SCHOOL_NAME = 'school.SCHOOL_NAME';

	
	const TYPE = 'school.TYPE';

	
	const MASTER = 'school.MASTER';

	
	const CONTACT = 'school.CONTACT';

	
	const PHONE = 'school.PHONE';

	
	const ADDRESS = 'school.ADDRESS';

	
	const POSTAL = 'school.POSTAL';

	
	const DISCRIPTION = 'school.DISCRIPTION';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('SchoolId', 'SiteId', 'SchoolName', 'Type', 'Master', 'Contact', 'Phone', 'Address', 'Postal', 'Discription', ),
		BasePeer::TYPE_COLNAME => array (SchoolPeer::SCHOOL_ID, SchoolPeer::SITE_ID, SchoolPeer::SCHOOL_NAME, SchoolPeer::TYPE, SchoolPeer::MASTER, SchoolPeer::CONTACT, SchoolPeer::PHONE, SchoolPeer::ADDRESS, SchoolPeer::POSTAL, SchoolPeer::DISCRIPTION, ),
		BasePeer::TYPE_FIELDNAME => array ('school_id', 'site_id', 'school_name', 'type', 'master', 'contact', 'phone', 'address', 'postal', 'discription', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('SchoolId' => 0, 'SiteId' => 1, 'SchoolName' => 2, 'Type' => 3, 'Master' => 4, 'Contact' => 5, 'Phone' => 6, 'Address' => 7, 'Postal' => 8, 'Discription' => 9, ),
		BasePeer::TYPE_COLNAME => array (SchoolPeer::SCHOOL_ID => 0, SchoolPeer::SITE_ID => 1, SchoolPeer::SCHOOL_NAME => 2, SchoolPeer::TYPE => 3, SchoolPeer::MASTER => 4, SchoolPeer::CONTACT => 5, SchoolPeer::PHONE => 6, SchoolPeer::ADDRESS => 7, SchoolPeer::POSTAL => 8, SchoolPeer::DISCRIPTION => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('school_id' => 0, 'site_id' => 1, 'school_name' => 2, 'type' => 3, 'master' => 4, 'contact' => 5, 'phone' => 6, 'address' => 7, 'postal' => 8, 'discription' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SchoolMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SchoolMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SchoolPeer::getTableMap();
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
		return str_replace(SchoolPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SchoolPeer::SCHOOL_ID);

		$criteria->addSelectColumn(SchoolPeer::SITE_ID);

		$criteria->addSelectColumn(SchoolPeer::SCHOOL_NAME);

		$criteria->addSelectColumn(SchoolPeer::TYPE);

		$criteria->addSelectColumn(SchoolPeer::MASTER);

		$criteria->addSelectColumn(SchoolPeer::CONTACT);

		$criteria->addSelectColumn(SchoolPeer::PHONE);

		$criteria->addSelectColumn(SchoolPeer::ADDRESS);

		$criteria->addSelectColumn(SchoolPeer::POSTAL);

		$criteria->addSelectColumn(SchoolPeer::DISCRIPTION);

	}

	const COUNT = 'COUNT(school.SCHOOL_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT school.SCHOOL_ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SchoolPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SchoolPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SchoolPeer::doSelectRS($criteria, $con);
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
		$objects = SchoolPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SchoolPeer::populateObjects(SchoolPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SchoolPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SchoolPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinProjectSite(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SchoolPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SchoolPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SchoolPeer::SITE_ID, ProjectSitePeer::SITE_ID);

		$rs = SchoolPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinProjectSite(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SchoolPeer::addSelectColumns($c);
		$startcol = (SchoolPeer::NUM_COLUMNS - SchoolPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ProjectSitePeer::addSelectColumns($c);

		$c->addJoin(SchoolPeer::SITE_ID, ProjectSitePeer::SITE_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SchoolPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ProjectSitePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getProjectSite(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addSchool($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSchools();
				$obj2->addSchool($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SchoolPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SchoolPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SchoolPeer::SITE_ID, ProjectSitePeer::SITE_ID);

		$rs = SchoolPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SchoolPeer::addSelectColumns($c);
		$startcol2 = (SchoolPeer::NUM_COLUMNS - SchoolPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ProjectSitePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ProjectSitePeer::NUM_COLUMNS;

		$c->addJoin(SchoolPeer::SITE_ID, ProjectSitePeer::SITE_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SchoolPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ProjectSitePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getProjectSite(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addSchool($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSchools();
				$obj2->addSchool($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return SchoolPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SchoolPeer::SCHOOL_ID); 

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
			$comparison = $criteria->getComparison(SchoolPeer::SCHOOL_ID);
			$selectCriteria->add(SchoolPeer::SCHOOL_ID, $criteria->remove(SchoolPeer::SCHOOL_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SchoolPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SchoolPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof School) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SchoolPeer::SCHOOL_ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(School $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SchoolPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SchoolPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SchoolPeer::DATABASE_NAME, SchoolPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SchoolPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SchoolPeer::DATABASE_NAME);

		$criteria->add(SchoolPeer::SCHOOL_ID, $pk);


		$v = SchoolPeer::doSelect($criteria, $con);

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
			$criteria->add(SchoolPeer::SCHOOL_ID, $pks, Criteria::IN);
			$objs = SchoolPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSchoolPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/SchoolMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SchoolMapBuilder');
}
