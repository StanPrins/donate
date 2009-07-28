<?php


abstract class BaseReportCardPeer {


	const DATABASE_NAME = 'propel';


	const TABLE_NAME = 'reportcard';


	const CLASS_DEFAULT = 'lib.model.ReportCard';


	const NUM_COLUMNS = 19;


	const NUM_LAZY_LOAD_COLUMNS = 0;



	const REPORT_ID = 'reportcard.REPORT_ID';


	const STUDENT_ID = 'reportcard.STUDENT_ID';


	const USER_ID = 'reportcard.USER_ID';


	const TERM = 'reportcard.TERM';


	const YUWEN = 'reportcard.YUWEN';


	const SHUXUE = 'reportcard.SHUXUE';


	const YINGYU = 'reportcard.YINGYU';


	const WULI = 'reportcard.WULI';


	const HUAXUE = 'reportcard.HUAXUE';


	const LISHI = 'reportcard.LISHI';


	const DILI = 'reportcard.DILI';


	const ZIRAN = 'reportcard.ZIRAN';


	const SHENGWU = 'reportcard.SHENGWU';


	const TIYU = 'reportcard.TIYU';


	const ZHENGZHI = 'reportcard.ZHENGZHI';


	const ZONGHE = 'reportcard.ZONGHE';


	const RANK = 'reportcard.RANK';


	const TEACHER_REMARK = 'reportcard.TEACHER_REMARK';


	const CREATED_AT = 'reportcard.CREATED_AT';


	private static $phpNameMap = null;



	private static $fieldNames = array (
	BasePeer::TYPE_PHPNAME => array ('ReportId', 'StudentId', 'UserId', 'Term', 'Yuwen', 'Shuxue', 'Yingyu', 'Wuli', 'Huaxue', 'Lishi', 'Dili', 'Ziran', 'Shengwu', 'Tiyu', 'Zhengzhi', 'Zonghe', 'Rank', 'TeacherRemark', 'CreatedAt', ),
	BasePeer::TYPE_COLNAME => array (ReportCardPeer::REPORT_ID, ReportCardPeer::STUDENT_ID, ReportCardPeer::USER_ID, ReportCardPeer::TERM, ReportCardPeer::YUWEN, ReportCardPeer::SHUXUE, ReportCardPeer::YINGYU, ReportCardPeer::WULI, ReportCardPeer::HUAXUE, ReportCardPeer::LISHI, ReportCardPeer::DILI, ReportCardPeer::ZIRAN, ReportCardPeer::SHENGWU, ReportCardPeer::TIYU, ReportCardPeer::ZHENGZHI, ReportCardPeer::ZONGHE, ReportCardPeer::RANK, ReportCardPeer::TEACHER_REMARK, ReportCardPeer::CREATED_AT, ),
	BasePeer::TYPE_FIELDNAME => array ('report_id', 'student_id', 'user_id', 'term', 'yuwen', 'shuxue', 'yingyu', 'wuli', 'huaxue', 'lishi', 'dili', 'ziran', 'shengwu', 'tiyu', 'zhengzhi', 'zonghe', 'rank', 'teacher_remark', 'created_at', ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);


	private static $fieldKeys = array (
	BasePeer::TYPE_PHPNAME => array ('ReportId' => 0, 'StudentId' => 1, 'UserId' => 2, 'Term' => 3, 'Yuwen' => 4, 'Shuxue' => 5, 'Yingyu' => 6, 'Wuli' => 7, 'Huaxue' => 8, 'Lishi' => 9, 'Dili' => 10, 'Ziran' => 11, 'Shengwu' => 12, 'Tiyu' => 13, 'Zhengzhi' => 14, 'Zonghe' => 15, 'Rank' => 16, 'TeacherRemark' => 17, 'CreatedAt' => 18, ),
	BasePeer::TYPE_COLNAME => array (ReportCardPeer::REPORT_ID => 0, ReportCardPeer::STUDENT_ID => 1, ReportCardPeer::USER_ID => 2, ReportCardPeer::TERM => 3, ReportCardPeer::YUWEN => 4, ReportCardPeer::SHUXUE => 5, ReportCardPeer::YINGYU => 6, ReportCardPeer::WULI => 7, ReportCardPeer::HUAXUE => 8, ReportCardPeer::LISHI => 9, ReportCardPeer::DILI => 10, ReportCardPeer::ZIRAN => 11, ReportCardPeer::SHENGWU => 12, ReportCardPeer::TIYU => 13, ReportCardPeer::ZHENGZHI => 14, ReportCardPeer::ZONGHE => 15, ReportCardPeer::RANK => 16, ReportCardPeer::TEACHER_REMARK => 17, ReportCardPeer::CREATED_AT => 18, ),
	BasePeer::TYPE_FIELDNAME => array ('report_id' => 0, 'student_id' => 1, 'user_id' => 2, 'term' => 3, 'yuwen' => 4, 'shuxue' => 5, 'yingyu' => 6, 'wuli' => 7, 'huaxue' => 8, 'lishi' => 9, 'dili' => 10, 'ziran' => 11, 'shengwu' => 12, 'tiyu' => 13, 'zhengzhi' => 14, 'zonghe' => 15, 'rank' => 16, 'teacher_remark' => 17, 'created_at' => 18, ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);


	public static function getMapBuilder()
	{
		include_once 'lib/model/map/ReportCardMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.ReportCardMapBuilder');
	}

	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ReportCardPeer::getTableMap();
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
		return str_replace(ReportCardPeer::TABLE_NAME.'.', $alias.'.', $column);
	}


	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ReportCardPeer::REPORT_ID);

		$criteria->addSelectColumn(ReportCardPeer::STUDENT_ID);

		$criteria->addSelectColumn(ReportCardPeer::USER_ID);

		$criteria->addSelectColumn(ReportCardPeer::TERM);

		$criteria->addSelectColumn(ReportCardPeer::YUWEN);

		$criteria->addSelectColumn(ReportCardPeer::SHUXUE);

		$criteria->addSelectColumn(ReportCardPeer::YINGYU);

		$criteria->addSelectColumn(ReportCardPeer::WULI);

		$criteria->addSelectColumn(ReportCardPeer::HUAXUE);

		$criteria->addSelectColumn(ReportCardPeer::LISHI);

		$criteria->addSelectColumn(ReportCardPeer::DILI);

		$criteria->addSelectColumn(ReportCardPeer::ZIRAN);

		$criteria->addSelectColumn(ReportCardPeer::SHENGWU);

		$criteria->addSelectColumn(ReportCardPeer::TIYU);

		$criteria->addSelectColumn(ReportCardPeer::ZHENGZHI);

		$criteria->addSelectColumn(ReportCardPeer::ZONGHE);

		$criteria->addSelectColumn(ReportCardPeer::RANK);

		$criteria->addSelectColumn(ReportCardPeer::TEACHER_REMARK);

		$criteria->addSelectColumn(ReportCardPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(reportcard.REPORT_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reportcard.REPORT_ID)';


	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
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
		$objects = ReportCardPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}

	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ReportCardPeer::populateObjects(ReportCardPeer::doSelectRS($criteria, $con));
	}

	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ReportCardPeer::addSelectColumns($criteria);
		}

		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doSelect($criteria, $con);
	}

	public static function populateObjects(ResultSet $rs)
	{
		$results = array();

		$cls = ReportCardPeer::getOMClass();
		$cls = Propel::import($cls);
		while($rs->next()) {

			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
				
		}
		return $results;
	}


	public static function doCountJoinStudent(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}



	public static function doCountJoinUser(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}



	public static function doSelectJoinStudent(Criteria $c, $con = null)
	{
		$c = clone $c;

		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ReportCardPeer::addSelectColumns($c);
		$startcol = (ReportCardPeer::NUM_COLUMNS - ReportCardPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		StudentPeer::addSelectColumns($c);

		$c->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ReportCardPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = StudentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getStudent(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addReportCard($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initReportCards();
				$obj2->addReportCard($obj1); 			}
				$results[] = $obj1;
		}
		return $results;
	}



	public static function doSelectJoinUser(Criteria $c, $con = null)
	{
		$c = clone $c;

		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ReportCardPeer::addSelectColumns($c);
		$startcol = (ReportCardPeer::NUM_COLUMNS - ReportCardPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ReportCardPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addReportCard($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initReportCards();
				$obj2->addReportCard($obj1); 			}
				$results[] = $obj1;
		}
		return $results;
	}



	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$criteria->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
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

		ReportCardPeer::addSelectColumns($c);
		$startcol2 = (ReportCardPeer::NUM_COLUMNS - ReportCardPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		StudentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + StudentPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserPeer::NUM_COLUMNS;

		$c->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$c->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ReportCardPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


				
			$omClass = StudentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getStudent(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addReportCard($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initReportCards();
				$obj2->addReportCard($obj1);
			}


				
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUser(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addReportCard($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initReportCards();
				$obj3->addReportCard($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}



	public static function doCountJoinAllExceptStudent(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}



	public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ReportCardPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ReportCardPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$rs = ReportCardPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}



	public static function doSelectJoinAllExceptStudent(Criteria $c, $con = null)
	{
		$c = clone $c;

		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ReportCardPeer::addSelectColumns($c);
		$startcol2 = (ReportCardPeer::NUM_COLUMNS - ReportCardPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserPeer::NUM_COLUMNS;

		$c->addJoin(ReportCardPeer::USER_ID, UserPeer::USER_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ReportCardPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addReportCard($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initReportCards();
				$obj2->addReportCard($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}



	public static function doSelectJoinAllExceptUser(Criteria $c, $con = null)
	{
		$c = clone $c;

		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ReportCardPeer::addSelectColumns($c);
		$startcol2 = (ReportCardPeer::NUM_COLUMNS - ReportCardPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		StudentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + StudentPeer::NUM_COLUMNS;

		$c->addJoin(ReportCardPeer::STUDENT_ID, StudentPeer::STUDENT_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ReportCardPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = StudentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getStudent(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addReportCard($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initReportCards();
				$obj2->addReportCard($obj1);
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
		return ReportCardPeer::CLASS_DEFAULT;
	}


	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
				$criteria = $values->buildCriteria(); 		}

				$criteria->remove(ReportCardPeer::REPORT_ID);

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
			$comparison = $criteria->getComparison(ReportCardPeer::REPORT_ID);
			$selectCriteria->add(ReportCardPeer::REPORT_ID, $criteria->remove(ReportCardPeer::REPORT_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ReportCardPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ReportCardPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ReportCard) {

				$criteria = $values->buildPkeyCriteria();
			} else {
				$criteria = new Criteria(self::DATABASE_NAME);
				$criteria->add(ReportCardPeer::REPORT_ID, (array) $values, Criteria::IN);
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


	public static function doValidate(ReportCard $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ReportCardPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ReportCardPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ReportCardPeer::DATABASE_NAME, ReportCardPeer::TABLE_NAME, $columns);
		if ($res !== true) {
			$request = sfContext::getInstance()->getRequest();
			foreach ($res as $failed) {
				$col = ReportCardPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ReportCardPeer::DATABASE_NAME);

		$criteria->add(ReportCardPeer::REPORT_ID, $pk);


		$v = ReportCardPeer::doSelect($criteria, $con);

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
			$criteria->add(ReportCardPeer::REPORT_ID, $pks, Criteria::IN);
			$objs = ReportCardPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

}
if (Propel::isInit()) {
	try {
		BaseReportCardPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
	require_once 'lib/model/map/ReportCardMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.ReportCardMapBuilder');
}
