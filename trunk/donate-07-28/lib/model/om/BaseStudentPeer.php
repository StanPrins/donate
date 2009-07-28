<?php


abstract class BaseStudentPeer {


	const DATABASE_NAME = 'propel';


	const TABLE_NAME = 'student';


	const CLASS_DEFAULT = 'lib.model.Student';


	const NUM_COLUMNS = 42;


	const NUM_LAZY_LOAD_COLUMNS = 0;



	const STUDENT_ID = 'student.STUDENT_ID';


	const SCHOOL_ID = 'student.SCHOOL_ID';


	const NAME = 'student.NAME';


	const NICKNAME = 'student.NICKNAME';


	const PHOTO = 'student.PHOTO';


	const HEAD_TEACHER = 'student.HEAD_TEACHER';


	const GUARDIAN = 'student.GUARDIAN';


	const BIRTHDAY = 'student.BIRTHDAY';


	const GRADE = 'student.GRADE';


	const MALE = 'student.MALE';


	const ADDRESS = 'student.ADDRESS';


	const POSTAL = 'student.POSTAL';


	const CITY = 'student.CITY';


	const PROVINCE = 'student.PROVINCE';


	const ASSIST_HISTORY = 'student.ASSIST_HISTORY';


	const IS_INSTUDY = 'student.IS_INSTUDY';


	const IS_BOARDER = 'student.IS_BOARDER';


	const IS_DONATED = 'student.IS_DONATED';


	const HAS_DROPOUT_HISTORY = 'student.HAS_DROPOUT_HISTORY';


	const TERM_EXPENSE = 'student.TERM_EXPENSE';


	const DISCRIPTION = 'student.DISCRIPTION';


	const CREATED_AT = 'student.CREATED_AT';


	const FM1_RELATION = 'student.FM1_RELATION';


	const FM1_NAME = 'student.FM1_NAME';


	const FM1_AGE = 'student.FM1_AGE';


	const FM1_OCCUPATION = 'student.FM1_OCCUPATION';


	const FM1_DISCRIPTION = 'student.FM1_DISCRIPTION';


	const FM2_RELATION = 'student.FM2_RELATION';


	const FM2_NAME = 'student.FM2_NAME';


	const FM2_AGE = 'student.FM2_AGE';


	const FM2_OCCUPATION = 'student.FM2_OCCUPATION';


	const FM2_DISCRIPTION = 'student.FM2_DISCRIPTION';


	const FM3_RELATION = 'student.FM3_RELATION';


	const FM3_NAME = 'student.FM3_NAME';


	const FM3_AGE = 'student.FM3_AGE';


	const FM3_OCCUPATION = 'student.FM3_OCCUPATION';


	const FM3_DISCRIPTION = 'student.FM3_DISCRIPTION';


	const FM4_RELATION = 'student.FM4_RELATION';


	const FM4_NAME = 'student.FM4_NAME';


	const FM4_AGE = 'student.FM4_AGE';


	const FM4_OCCUPATION = 'student.FM4_OCCUPATION';


	const FM4_DISCRIPTION = 'student.FM4_DISCRIPTION';


	private static $phpNameMap = null;



	private static $fieldNames = array (
	BasePeer::TYPE_PHPNAME => array ('StudentId', 'SchoolId', 'Name', 'Nickname', 'Photo', 'HeadTeacher', 'Guardian', 'Birthday', 'Grade', 'Male', 'Address', 'Postal', 'City', 'Province', 'AssistHistory', 'IsInstudy', 'IsBoarder', 'IsDonated', 'HasDropoutHistory', 'TermExpense', 'Discription', 'CreatedAt', 'Fm1Relation', 'Fm1Name', 'Fm1Age', 'Fm1Occupation', 'Fm1Discription', 'Fm2Relation', 'Fm2Name', 'Fm2Age', 'Fm2Occupation', 'Fm2Discription', 'Fm3Relation', 'Fm3Name', 'Fm3Age', 'Fm3Occupation', 'Fm3Discription', 'Fm4Relation', 'Fm4Name', 'Fm4Age', 'Fm4Occupation', 'Fm4Discription', ),
	BasePeer::TYPE_COLNAME => array (StudentPeer::STUDENT_ID, StudentPeer::SCHOOL_ID, StudentPeer::NAME, StudentPeer::NICKNAME, StudentPeer::PHOTO, StudentPeer::HEAD_TEACHER, StudentPeer::GUARDIAN, StudentPeer::BIRTHDAY, StudentPeer::GRADE, StudentPeer::MALE, StudentPeer::ADDRESS, StudentPeer::POSTAL, StudentPeer::CITY, StudentPeer::PROVINCE, StudentPeer::ASSIST_HISTORY, StudentPeer::IS_INSTUDY, StudentPeer::IS_BOARDER, StudentPeer::IS_DONATED, StudentPeer::HAS_DROPOUT_HISTORY, StudentPeer::TERM_EXPENSE, StudentPeer::DISCRIPTION, StudentPeer::CREATED_AT, StudentPeer::FM1_RELATION, StudentPeer::FM1_NAME, StudentPeer::FM1_AGE, StudentPeer::FM1_OCCUPATION, StudentPeer::FM1_DISCRIPTION, StudentPeer::FM2_RELATION, StudentPeer::FM2_NAME, StudentPeer::FM2_AGE, StudentPeer::FM2_OCCUPATION, StudentPeer::FM2_DISCRIPTION, StudentPeer::FM3_RELATION, StudentPeer::FM3_NAME, StudentPeer::FM3_AGE, StudentPeer::FM3_OCCUPATION, StudentPeer::FM3_DISCRIPTION, StudentPeer::FM4_RELATION, StudentPeer::FM4_NAME, StudentPeer::FM4_AGE, StudentPeer::FM4_OCCUPATION, StudentPeer::FM4_DISCRIPTION, ),
	BasePeer::TYPE_FIELDNAME => array ('student_id', 'school_id', 'name', 'nickname', 'photo', 'head_teacher', 'guardian', 'birthday', 'grade', 'male', 'address', 'postal', 'city', 'province', 'assist_history', 'is_instudy', 'is_boarder', 'is_donated', 'has_dropout_history', 'term_expense', 'discription', 'created_at', 'fm1_relation', 'fm1_name', 'fm1_age', 'fm1_occupation', 'fm1_discription', 'fm2_relation', 'fm2_name', 'fm2_age', 'fm2_occupation', 'fm2_discription', 'fm3_relation', 'fm3_name', 'fm3_age', 'fm3_occupation', 'fm3_discription', 'fm4_relation', 'fm4_name', 'fm4_age', 'fm4_occupation', 'fm4_discription', ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);


	private static $fieldKeys = array (
	BasePeer::TYPE_PHPNAME => array ('StudentId' => 0, 'SchoolId' => 1, 'Name' => 2, 'Nickname' => 3, 'Photo' => 4, 'HeadTeacher' => 5, 'Guardian' => 6, 'Birthday' => 7, 'Grade' => 8, 'Male' => 9, 'Address' => 10, 'Postal' => 11, 'City' => 12, 'Province' => 13, 'AssistHistory' => 14, 'IsInstudy' => 15, 'IsBoarder' => 16, 'IsDonated' => 17, 'HasDropoutHistory' => 18, 'TermExpense' => 19, 'Discription' => 20, 'CreatedAt' => 21, 'Fm1Relation' => 22, 'Fm1Name' => 23, 'Fm1Age' => 24, 'Fm1Occupation' => 25, 'Fm1Discription' => 26, 'Fm2Relation' => 27, 'Fm2Name' => 28, 'Fm2Age' => 29, 'Fm2Occupation' => 30, 'Fm2Discription' => 31, 'Fm3Relation' => 32, 'Fm3Name' => 33, 'Fm3Age' => 34, 'Fm3Occupation' => 35, 'Fm3Discription' => 36, 'Fm4Relation' => 37, 'Fm4Name' => 38, 'Fm4Age' => 39, 'Fm4Occupation' => 40, 'Fm4Discription' => 41, ),
	BasePeer::TYPE_COLNAME => array (StudentPeer::STUDENT_ID => 0, StudentPeer::SCHOOL_ID => 1, StudentPeer::NAME => 2, StudentPeer::NICKNAME => 3, StudentPeer::PHOTO => 4, StudentPeer::HEAD_TEACHER => 5, StudentPeer::GUARDIAN => 6, StudentPeer::BIRTHDAY => 7, StudentPeer::GRADE => 8, StudentPeer::MALE => 9, StudentPeer::ADDRESS => 10, StudentPeer::POSTAL => 11, StudentPeer::CITY => 12, StudentPeer::PROVINCE => 13, StudentPeer::ASSIST_HISTORY => 14, StudentPeer::IS_INSTUDY => 15, StudentPeer::IS_BOARDER => 16, StudentPeer::IS_DONATED => 17, StudentPeer::HAS_DROPOUT_HISTORY => 18, StudentPeer::TERM_EXPENSE => 19, StudentPeer::DISCRIPTION => 20, StudentPeer::CREATED_AT => 21, StudentPeer::FM1_RELATION => 22, StudentPeer::FM1_NAME => 23, StudentPeer::FM1_AGE => 24, StudentPeer::FM1_OCCUPATION => 25, StudentPeer::FM1_DISCRIPTION => 26, StudentPeer::FM2_RELATION => 27, StudentPeer::FM2_NAME => 28, StudentPeer::FM2_AGE => 29, StudentPeer::FM2_OCCUPATION => 30, StudentPeer::FM2_DISCRIPTION => 31, StudentPeer::FM3_RELATION => 32, StudentPeer::FM3_NAME => 33, StudentPeer::FM3_AGE => 34, StudentPeer::FM3_OCCUPATION => 35, StudentPeer::FM3_DISCRIPTION => 36, StudentPeer::FM4_RELATION => 37, StudentPeer::FM4_NAME => 38, StudentPeer::FM4_AGE => 39, StudentPeer::FM4_OCCUPATION => 40, StudentPeer::FM4_DISCRIPTION => 41, ),
	BasePeer::TYPE_FIELDNAME => array ('student_id' => 0, 'school_id' => 1, 'name' => 2, 'nickname' => 3, 'photo' => 4, 'head_teacher' => 5, 'guardian' => 6, 'birthday' => 7, 'grade' => 8, 'male' => 9, 'address' => 10, 'postal' => 11, 'city' => 12, 'province' => 13, 'assist_history' => 14, 'is_instudy' => 15, 'is_boarder' => 16, 'is_donated' => 17, 'has_dropout_history' => 18, 'term_expense' => 19, 'discription' => 20, 'created_at' => 21, 'fm1_relation' => 22, 'fm1_name' => 23, 'fm1_age' => 24, 'fm1_occupation' => 25, 'fm1_discription' => 26, 'fm2_relation' => 27, 'fm2_name' => 28, 'fm2_age' => 29, 'fm2_occupation' => 30, 'fm2_discription' => 31, 'fm3_relation' => 32, 'fm3_name' => 33, 'fm3_age' => 34, 'fm3_occupation' => 35, 'fm3_discription' => 36, 'fm4_relation' => 37, 'fm4_name' => 38, 'fm4_age' => 39, 'fm4_occupation' => 40, 'fm4_discription' => 41, ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);


	public static function getMapBuilder()
	{
		include_once 'lib/model/map/StudentMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.StudentMapBuilder');
	}

	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = StudentPeer::getTableMap();
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
		return str_replace(StudentPeer::TABLE_NAME.'.', $alias.'.', $column);
	}


	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(StudentPeer::STUDENT_ID);

		$criteria->addSelectColumn(StudentPeer::SCHOOL_ID);

		$criteria->addSelectColumn(StudentPeer::NAME);

		$criteria->addSelectColumn(StudentPeer::NICKNAME);

		$criteria->addSelectColumn(StudentPeer::PHOTO);

		$criteria->addSelectColumn(StudentPeer::HEAD_TEACHER);

		$criteria->addSelectColumn(StudentPeer::GUARDIAN);

		$criteria->addSelectColumn(StudentPeer::BIRTHDAY);

		$criteria->addSelectColumn(StudentPeer::GRADE);

		$criteria->addSelectColumn(StudentPeer::MALE);

		$criteria->addSelectColumn(StudentPeer::ADDRESS);

		$criteria->addSelectColumn(StudentPeer::POSTAL);

		$criteria->addSelectColumn(StudentPeer::CITY);

		$criteria->addSelectColumn(StudentPeer::PROVINCE);

		$criteria->addSelectColumn(StudentPeer::ASSIST_HISTORY);

		$criteria->addSelectColumn(StudentPeer::IS_INSTUDY);

		$criteria->addSelectColumn(StudentPeer::IS_BOARDER);

		$criteria->addSelectColumn(StudentPeer::IS_DONATED);

		$criteria->addSelectColumn(StudentPeer::HAS_DROPOUT_HISTORY);

		$criteria->addSelectColumn(StudentPeer::TERM_EXPENSE);

		$criteria->addSelectColumn(StudentPeer::DISCRIPTION);

		$criteria->addSelectColumn(StudentPeer::CREATED_AT);

		$criteria->addSelectColumn(StudentPeer::FM1_RELATION);

		$criteria->addSelectColumn(StudentPeer::FM1_NAME);

		$criteria->addSelectColumn(StudentPeer::FM1_AGE);

		$criteria->addSelectColumn(StudentPeer::FM1_OCCUPATION);

		$criteria->addSelectColumn(StudentPeer::FM1_DISCRIPTION);

		$criteria->addSelectColumn(StudentPeer::FM2_RELATION);

		$criteria->addSelectColumn(StudentPeer::FM2_NAME);

		$criteria->addSelectColumn(StudentPeer::FM2_AGE);

		$criteria->addSelectColumn(StudentPeer::FM2_OCCUPATION);

		$criteria->addSelectColumn(StudentPeer::FM2_DISCRIPTION);

		$criteria->addSelectColumn(StudentPeer::FM3_RELATION);

		$criteria->addSelectColumn(StudentPeer::FM3_NAME);

		$criteria->addSelectColumn(StudentPeer::FM3_AGE);

		$criteria->addSelectColumn(StudentPeer::FM3_OCCUPATION);

		$criteria->addSelectColumn(StudentPeer::FM3_DISCRIPTION);

		$criteria->addSelectColumn(StudentPeer::FM4_RELATION);

		$criteria->addSelectColumn(StudentPeer::FM4_NAME);

		$criteria->addSelectColumn(StudentPeer::FM4_AGE);

		$criteria->addSelectColumn(StudentPeer::FM4_OCCUPATION);

		$criteria->addSelectColumn(StudentPeer::FM4_DISCRIPTION);

	}

	const COUNT = 'COUNT(student.STUDENT_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT student.STUDENT_ID)';


	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(StudentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(StudentPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = StudentPeer::doSelectRS($criteria, $con);
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
		$objects = StudentPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}

	public static function doSelect(Criteria $criteria, $con = null)
	{
		return StudentPeer::populateObjects(StudentPeer::doSelectRS($criteria, $con));
	}

	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			StudentPeer::addSelectColumns($criteria);
		}

		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doSelect($criteria, $con);
	}

	public static function populateObjects(ResultSet $rs)
	{
		$results = array();

		$cls = StudentPeer::getOMClass();
		$cls = Propel::import($cls);
		while($rs->next()) {

			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
				
		}
		return $results;
	}


	public static function doCountJoinSchool(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(StudentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(StudentPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID);

		$rs = StudentPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
			return 0;
		}
	}



	public static function doSelectJoinSchool(Criteria $c, $con = null)
	{
		$c = clone $c;

		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		StudentPeer::addSelectColumns($c);
		$startcol = (StudentPeer::NUM_COLUMNS - StudentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SchoolPeer::addSelectColumns($c);

		$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = StudentPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SchoolPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSchool(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addStudent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initStudents();
				$obj2->addStudent($obj1); 			}
				$results[] = $obj1;
		}
		return $results;
	}



	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(StudentPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(StudentPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID);

		$rs = StudentPeer::doSelectRS($criteria, $con);
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

		StudentPeer::addSelectColumns($c);
		$startcol2 = (StudentPeer::NUM_COLUMNS - StudentPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SchoolPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SchoolPeer::NUM_COLUMNS;

		$c->addJoin(StudentPeer::SCHOOL_ID, SchoolPeer::SCHOOL_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = StudentPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


				
			$omClass = SchoolPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSchool(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addStudent($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initStudents();
				$obj2->addStudent($obj1);
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
		return StudentPeer::CLASS_DEFAULT;
	}


	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
				$criteria = $values->buildCriteria(); 		}

				$criteria->remove(StudentPeer::STUDENT_ID);

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
			$comparison = $criteria->getComparison(StudentPeer::STUDENT_ID);
			$selectCriteria->add(StudentPeer::STUDENT_ID, $criteria->remove(StudentPeer::STUDENT_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(StudentPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(StudentPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Student) {

				$criteria = $values->buildPkeyCriteria();
			} else {
				$criteria = new Criteria(self::DATABASE_NAME);
				$criteria->add(StudentPeer::STUDENT_ID, (array) $values, Criteria::IN);
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


	public static function doValidate(Student $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(StudentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(StudentPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(StudentPeer::DATABASE_NAME, StudentPeer::TABLE_NAME, $columns);
		if ($res !== true) {
			$request = sfContext::getInstance()->getRequest();
			foreach ($res as $failed) {
				$col = StudentPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(StudentPeer::DATABASE_NAME);

		$criteria->add(StudentPeer::STUDENT_ID, $pk);


		$v = StudentPeer::doSelect($criteria, $con);

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
			$criteria->add(StudentPeer::STUDENT_ID, $pks, Criteria::IN);
			$objs = StudentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

}
if (Propel::isInit()) {
	try {
		BaseStudentPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
	require_once 'lib/model/map/StudentMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.StudentMapBuilder');
}
