<?php


abstract class BaseStudentPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'student';

	
	const CLASS_DEFAULT = 'lib.model.Student';

	
	const NUM_COLUMNS = 53;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const STUDENT_ID = 'student.STUDENT_ID';

	
	const SCHOOL_ID = 'student.SCHOOL_ID';

	
	const OFS_ID = 'student.OFS_ID';

	
	const NAME = 'student.NAME';

	
	const NICKNAME = 'student.NICKNAME';

	
	const RACE = 'student.RACE';

	
	const HEAD_TEACHER = 'student.HEAD_TEACHER';

	
	const GUARDIAN = 'student.GUARDIAN';

	
	const BIRTHDAY = 'student.BIRTHDAY';

	
	const GRADE = 'student.GRADE';

	
	const MALE = 'student.MALE';

	
	const TEL = 'student.TEL';

	
	const ADDRESS = 'student.ADDRESS';

	
	const POSTAL = 'student.POSTAL';

	
	const CITY = 'student.CITY';

	
	const PROVINCE = 'student.PROVINCE';

	
	const CONSIGNEE = 'student.CONSIGNEE';

	
	const CONSIGNEE_ADDRESS = 'student.CONSIGNEE_ADDRESS';

	
	const CONSIGNEE_POSTAL = 'student.CONSIGNEE_POSTAL';

	
	const ASSIST_HISTORY = 'student.ASSIST_HISTORY';

	
	const IS_INSTUDY = 'student.IS_INSTUDY';

	
	const IS_BOARDER = 'student.IS_BOARDER';

	
	const IS_DONATED = 'student.IS_DONATED';

	
	const DROPOUT_HISTORY = 'student.DROPOUT_HISTORY';

	
	const TECHANG = 'student.TECHANG';

	
	const REWARD = 'student.REWARD';

	
	const TERM_EXPENSE = 'student.TERM_EXPENSE';

	
	const DISCRIPTION = 'student.DISCRIPTION';

	
	const CREATED_AT = 'student.CREATED_AT';

	
	const REMARK = 'student.REMARK';

	
	const PHOTO = 'student.PHOTO';

	
	const MEMBER_PHOTO = 'student.MEMBER_PHOTO';

	
	const HOUSE_PHOTO = 'student.HOUSE_PHOTO';

	
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
		BasePeer::TYPE_PHPNAME => array ('StudentId', 'SchoolId', 'OfsId', 'Name', 'Nickname', 'Race', 'HeadTeacher', 'Guardian', 'Birthday', 'Grade', 'Male', 'Tel', 'Address', 'Postal', 'City', 'Province', 'Consignee', 'ConsigneeAddress', 'ConsigneePostal', 'AssistHistory', 'IsInstudy', 'IsBoarder', 'IsDonated', 'DropoutHistory', 'Techang', 'Reward', 'TermExpense', 'Discription', 'CreatedAt', 'Remark', 'Photo', 'MemberPhoto', 'HousePhoto', 'Fm1Relation', 'Fm1Name', 'Fm1Age', 'Fm1Occupation', 'Fm1Discription', 'Fm2Relation', 'Fm2Name', 'Fm2Age', 'Fm2Occupation', 'Fm2Discription', 'Fm3Relation', 'Fm3Name', 'Fm3Age', 'Fm3Occupation', 'Fm3Discription', 'Fm4Relation', 'Fm4Name', 'Fm4Age', 'Fm4Occupation', 'Fm4Discription', ),
		BasePeer::TYPE_COLNAME => array (StudentPeer::STUDENT_ID, StudentPeer::SCHOOL_ID, StudentPeer::OFS_ID, StudentPeer::NAME, StudentPeer::NICKNAME, StudentPeer::RACE, StudentPeer::HEAD_TEACHER, StudentPeer::GUARDIAN, StudentPeer::BIRTHDAY, StudentPeer::GRADE, StudentPeer::MALE, StudentPeer::TEL, StudentPeer::ADDRESS, StudentPeer::POSTAL, StudentPeer::CITY, StudentPeer::PROVINCE, StudentPeer::CONSIGNEE, StudentPeer::CONSIGNEE_ADDRESS, StudentPeer::CONSIGNEE_POSTAL, StudentPeer::ASSIST_HISTORY, StudentPeer::IS_INSTUDY, StudentPeer::IS_BOARDER, StudentPeer::IS_DONATED, StudentPeer::DROPOUT_HISTORY, StudentPeer::TECHANG, StudentPeer::REWARD, StudentPeer::TERM_EXPENSE, StudentPeer::DISCRIPTION, StudentPeer::CREATED_AT, StudentPeer::REMARK, StudentPeer::PHOTO, StudentPeer::MEMBER_PHOTO, StudentPeer::HOUSE_PHOTO, StudentPeer::FM1_RELATION, StudentPeer::FM1_NAME, StudentPeer::FM1_AGE, StudentPeer::FM1_OCCUPATION, StudentPeer::FM1_DISCRIPTION, StudentPeer::FM2_RELATION, StudentPeer::FM2_NAME, StudentPeer::FM2_AGE, StudentPeer::FM2_OCCUPATION, StudentPeer::FM2_DISCRIPTION, StudentPeer::FM3_RELATION, StudentPeer::FM3_NAME, StudentPeer::FM3_AGE, StudentPeer::FM3_OCCUPATION, StudentPeer::FM3_DISCRIPTION, StudentPeer::FM4_RELATION, StudentPeer::FM4_NAME, StudentPeer::FM4_AGE, StudentPeer::FM4_OCCUPATION, StudentPeer::FM4_DISCRIPTION, ),
		BasePeer::TYPE_FIELDNAME => array ('student_id', 'school_id', 'ofs_id', 'name', 'nickname', 'race', 'head_teacher', 'guardian', 'birthday', 'grade', 'male', 'tel', 'address', 'postal', 'city', 'province', 'consignee', 'consignee_address', 'consignee_postal', 'assist_history', 'is_instudy', 'is_boarder', 'is_donated', 'dropout_history', 'techang', 'reward', 'term_expense', 'discription', 'created_at', 'remark', 'photo', 'member_photo', 'house_photo', 'fm1_relation', 'fm1_name', 'fm1_age', 'fm1_occupation', 'fm1_discription', 'fm2_relation', 'fm2_name', 'fm2_age', 'fm2_occupation', 'fm2_discription', 'fm3_relation', 'fm3_name', 'fm3_age', 'fm3_occupation', 'fm3_discription', 'fm4_relation', 'fm4_name', 'fm4_age', 'fm4_occupation', 'fm4_discription', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('StudentId' => 0, 'SchoolId' => 1, 'OfsId' => 2, 'Name' => 3, 'Nickname' => 4, 'Race' => 5, 'HeadTeacher' => 6, 'Guardian' => 7, 'Birthday' => 8, 'Grade' => 9, 'Male' => 10, 'Tel' => 11, 'Address' => 12, 'Postal' => 13, 'City' => 14, 'Province' => 15, 'Consignee' => 16, 'ConsigneeAddress' => 17, 'ConsigneePostal' => 18, 'AssistHistory' => 19, 'IsInstudy' => 20, 'IsBoarder' => 21, 'IsDonated' => 22, 'DropoutHistory' => 23, 'Techang' => 24, 'Reward' => 25, 'TermExpense' => 26, 'Discription' => 27, 'CreatedAt' => 28, 'Remark' => 29, 'Photo' => 30, 'MemberPhoto' => 31, 'HousePhoto' => 32, 'Fm1Relation' => 33, 'Fm1Name' => 34, 'Fm1Age' => 35, 'Fm1Occupation' => 36, 'Fm1Discription' => 37, 'Fm2Relation' => 38, 'Fm2Name' => 39, 'Fm2Age' => 40, 'Fm2Occupation' => 41, 'Fm2Discription' => 42, 'Fm3Relation' => 43, 'Fm3Name' => 44, 'Fm3Age' => 45, 'Fm3Occupation' => 46, 'Fm3Discription' => 47, 'Fm4Relation' => 48, 'Fm4Name' => 49, 'Fm4Age' => 50, 'Fm4Occupation' => 51, 'Fm4Discription' => 52, ),
		BasePeer::TYPE_COLNAME => array (StudentPeer::STUDENT_ID => 0, StudentPeer::SCHOOL_ID => 1, StudentPeer::OFS_ID => 2, StudentPeer::NAME => 3, StudentPeer::NICKNAME => 4, StudentPeer::RACE => 5, StudentPeer::HEAD_TEACHER => 6, StudentPeer::GUARDIAN => 7, StudentPeer::BIRTHDAY => 8, StudentPeer::GRADE => 9, StudentPeer::MALE => 10, StudentPeer::TEL => 11, StudentPeer::ADDRESS => 12, StudentPeer::POSTAL => 13, StudentPeer::CITY => 14, StudentPeer::PROVINCE => 15, StudentPeer::CONSIGNEE => 16, StudentPeer::CONSIGNEE_ADDRESS => 17, StudentPeer::CONSIGNEE_POSTAL => 18, StudentPeer::ASSIST_HISTORY => 19, StudentPeer::IS_INSTUDY => 20, StudentPeer::IS_BOARDER => 21, StudentPeer::IS_DONATED => 22, StudentPeer::DROPOUT_HISTORY => 23, StudentPeer::TECHANG => 24, StudentPeer::REWARD => 25, StudentPeer::TERM_EXPENSE => 26, StudentPeer::DISCRIPTION => 27, StudentPeer::CREATED_AT => 28, StudentPeer::REMARK => 29, StudentPeer::PHOTO => 30, StudentPeer::MEMBER_PHOTO => 31, StudentPeer::HOUSE_PHOTO => 32, StudentPeer::FM1_RELATION => 33, StudentPeer::FM1_NAME => 34, StudentPeer::FM1_AGE => 35, StudentPeer::FM1_OCCUPATION => 36, StudentPeer::FM1_DISCRIPTION => 37, StudentPeer::FM2_RELATION => 38, StudentPeer::FM2_NAME => 39, StudentPeer::FM2_AGE => 40, StudentPeer::FM2_OCCUPATION => 41, StudentPeer::FM2_DISCRIPTION => 42, StudentPeer::FM3_RELATION => 43, StudentPeer::FM3_NAME => 44, StudentPeer::FM3_AGE => 45, StudentPeer::FM3_OCCUPATION => 46, StudentPeer::FM3_DISCRIPTION => 47, StudentPeer::FM4_RELATION => 48, StudentPeer::FM4_NAME => 49, StudentPeer::FM4_AGE => 50, StudentPeer::FM4_OCCUPATION => 51, StudentPeer::FM4_DISCRIPTION => 52, ),
		BasePeer::TYPE_FIELDNAME => array ('student_id' => 0, 'school_id' => 1, 'ofs_id' => 2, 'name' => 3, 'nickname' => 4, 'race' => 5, 'head_teacher' => 6, 'guardian' => 7, 'birthday' => 8, 'grade' => 9, 'male' => 10, 'tel' => 11, 'address' => 12, 'postal' => 13, 'city' => 14, 'province' => 15, 'consignee' => 16, 'consignee_address' => 17, 'consignee_postal' => 18, 'assist_history' => 19, 'is_instudy' => 20, 'is_boarder' => 21, 'is_donated' => 22, 'dropout_history' => 23, 'techang' => 24, 'reward' => 25, 'term_expense' => 26, 'discription' => 27, 'created_at' => 28, 'remark' => 29, 'photo' => 30, 'member_photo' => 31, 'house_photo' => 32, 'fm1_relation' => 33, 'fm1_name' => 34, 'fm1_age' => 35, 'fm1_occupation' => 36, 'fm1_discription' => 37, 'fm2_relation' => 38, 'fm2_name' => 39, 'fm2_age' => 40, 'fm2_occupation' => 41, 'fm2_discription' => 42, 'fm3_relation' => 43, 'fm3_name' => 44, 'fm3_age' => 45, 'fm3_occupation' => 46, 'fm3_discription' => 47, 'fm4_relation' => 48, 'fm4_name' => 49, 'fm4_age' => 50, 'fm4_occupation' => 51, 'fm4_discription' => 52, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
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

		$criteria->addSelectColumn(StudentPeer::OFS_ID);

		$criteria->addSelectColumn(StudentPeer::NAME);

		$criteria->addSelectColumn(StudentPeer::NICKNAME);

		$criteria->addSelectColumn(StudentPeer::RACE);

		$criteria->addSelectColumn(StudentPeer::HEAD_TEACHER);

		$criteria->addSelectColumn(StudentPeer::GUARDIAN);

		$criteria->addSelectColumn(StudentPeer::BIRTHDAY);

		$criteria->addSelectColumn(StudentPeer::GRADE);

		$criteria->addSelectColumn(StudentPeer::MALE);

		$criteria->addSelectColumn(StudentPeer::TEL);

		$criteria->addSelectColumn(StudentPeer::ADDRESS);

		$criteria->addSelectColumn(StudentPeer::POSTAL);

		$criteria->addSelectColumn(StudentPeer::CITY);

		$criteria->addSelectColumn(StudentPeer::PROVINCE);

		$criteria->addSelectColumn(StudentPeer::CONSIGNEE);

		$criteria->addSelectColumn(StudentPeer::CONSIGNEE_ADDRESS);

		$criteria->addSelectColumn(StudentPeer::CONSIGNEE_POSTAL);

		$criteria->addSelectColumn(StudentPeer::ASSIST_HISTORY);

		$criteria->addSelectColumn(StudentPeer::IS_INSTUDY);

		$criteria->addSelectColumn(StudentPeer::IS_BOARDER);

		$criteria->addSelectColumn(StudentPeer::IS_DONATED);

		$criteria->addSelectColumn(StudentPeer::DROPOUT_HISTORY);

		$criteria->addSelectColumn(StudentPeer::TECHANG);

		$criteria->addSelectColumn(StudentPeer::REWARD);

		$criteria->addSelectColumn(StudentPeer::TERM_EXPENSE);

		$criteria->addSelectColumn(StudentPeer::DISCRIPTION);

		$criteria->addSelectColumn(StudentPeer::CREATED_AT);

		$criteria->addSelectColumn(StudentPeer::REMARK);

		$criteria->addSelectColumn(StudentPeer::PHOTO);

		$criteria->addSelectColumn(StudentPeer::MEMBER_PHOTO);

		$criteria->addSelectColumn(StudentPeer::HOUSE_PHOTO);

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
