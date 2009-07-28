<?php


abstract class BaseSurveyPeer {


	const DATABASE_NAME = 'propel';


	const TABLE_NAME = 'survey';


	const CLASS_DEFAULT = 'lib.model.Survey';


	const NUM_COLUMNS = 20;


	const NUM_LAZY_LOAD_COLUMNS = 0;



	const SURVEY_ID = 'survey.SURVEY_ID';


	const STUDENT_ID = 'survey.STUDENT_ID';


	const USER_ID = 'survey.USER_ID';


	const SURVEY_DATE = 'survey.SURVEY_DATE';


	const FAMILY_CONDITION = 'survey.FAMILY_CONDITION';


	const GRADE = 'survey.GRADE';


	const OTHER_ASSIST = 'survey.OTHER_ASSIST';


	const DROPOUT_INFO = 'survey.DROPOUT_INFO';


	const PRESENTATION = 'survey.PRESENTATION';


	const REVENUE = 'survey.REVENUE';


	const PROPERTY = 'survey.PROPERTY';


	const DONATION_USAGE = 'survey.DONATION_USAGE';


	const DONOR_CONCERNED = 'survey.DONOR_CONCERNED';


	const MSG_TO_DONOR = 'survey.MSG_TO_DONOR';


	const MSG_TO_STU = 'survey.MSG_TO_STU';


	const SCHOOL_OPINION = 'survey.SCHOOL_OPINION';


	const TEACHER_OPINION = 'survey.TEACHER_OPINION';


	const USER_OPINION = 'survey.USER_OPINION';


	const DISCRIPTION = 'survey.DISCRIPTION';


	const CREATED_AT = 'survey.CREATED_AT';


	private static $phpNameMap = null;



	private static $fieldNames = array (
	BasePeer::TYPE_PHPNAME => array ('SurveyId', 'StudentId', 'UserId', 'SurveyDate', 'FamilyCondition', 'Grade', 'OtherAssist', 'DropoutInfo', 'Presentation', 'Revenue', 'Property', 'DonationUsage', 'DonorConcerned', 'MsgToDonor', 'MsgToStu', 'SchoolOpinion', 'TeacherOpinion', 'UserOpinion', 'Discription', 'CreatedAt', ),
	BasePeer::TYPE_COLNAME => array (SurveyPeer::SURVEY_ID, SurveyPeer::STUDENT_ID, SurveyPeer::USER_ID, SurveyPeer::SURVEY_DATE, SurveyPeer::FAMILY_CONDITION, SurveyPeer::GRADE, SurveyPeer::OTHER_ASSIST, SurveyPeer::DROPOUT_INFO, SurveyPeer::PRESENTATION, SurveyPeer::REVENUE, SurveyPeer::PROPERTY, SurveyPeer::DONATION_USAGE, SurveyPeer::DONOR_CONCERNED, SurveyPeer::MSG_TO_DONOR, SurveyPeer::MSG_TO_STU, SurveyPeer::SCHOOL_OPINION, SurveyPeer::TEACHER_OPINION, SurveyPeer::USER_OPINION, SurveyPeer::DISCRIPTION, SurveyPeer::CREATED_AT, ),
	BasePeer::TYPE_FIELDNAME => array ('survey_id', 'student_id', 'user_id', 'survey_date', 'family_condition', 'grade', 'other_assist', 'dropout_info', 'presentation', 'revenue', 'property', 'donation_usage', 'donor_concerned', 'msg_to_donor', 'msg_to_stu', 'school_opinion', 'teacher_opinion', 'user_opinion', 'discription', 'created_at', ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);


	private static $fieldKeys = array (
	BasePeer::TYPE_PHPNAME => array ('SurveyId' => 0, 'StudentId' => 1, 'UserId' => 2, 'SurveyDate' => 3, 'FamilyCondition' => 4, 'Grade' => 5, 'OtherAssist' => 6, 'DropoutInfo' => 7, 'Presentation' => 8, 'Revenue' => 9, 'Property' => 10, 'DonationUsage' => 11, 'DonorConcerned' => 12, 'MsgToDonor' => 13, 'MsgToStu' => 14, 'SchoolOpinion' => 15, 'TeacherOpinion' => 16, 'UserOpinion' => 17, 'Discription' => 18, 'CreatedAt' => 19, ),
	BasePeer::TYPE_COLNAME => array (SurveyPeer::SURVEY_ID => 0, SurveyPeer::STUDENT_ID => 1, SurveyPeer::USER_ID => 2, SurveyPeer::SURVEY_DATE => 3, SurveyPeer::FAMILY_CONDITION => 4, SurveyPeer::GRADE => 5, SurveyPeer::OTHER_ASSIST => 6, SurveyPeer::DROPOUT_INFO => 7, SurveyPeer::PRESENTATION => 8, SurveyPeer::REVENUE => 9, SurveyPeer::PROPERTY => 10, SurveyPeer::DONATION_USAGE => 11, SurveyPeer::DONOR_CONCERNED => 12, SurveyPeer::MSG_TO_DONOR => 13, SurveyPeer::MSG_TO_STU => 14, SurveyPeer::SCHOOL_OPINION => 15, SurveyPeer::TEACHER_OPINION => 16, SurveyPeer::USER_OPINION => 17, SurveyPeer::DISCRIPTION => 18, SurveyPeer::CREATED_AT => 19, ),
	BasePeer::TYPE_FIELDNAME => array ('survey_id' => 0, 'student_id' => 1, 'user_id' => 2, 'survey_date' => 3, 'family_condition' => 4, 'grade' => 5, 'other_assist' => 6, 'dropout_info' => 7, 'presentation' => 8, 'revenue' => 9, 'property' => 10, 'donation_usage' => 11, 'donor_concerned' => 12, 'msg_to_donor' => 13, 'msg_to_stu' => 14, 'school_opinion' => 15, 'teacher_opinion' => 16, 'user_opinion' => 17, 'discription' => 18, 'created_at' => 19, ),
	BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
	);


	public static function getMapBuilder()
	{
		include_once 'lib/model/map/SurveyMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.SurveyMapBuilder');
	}

	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SurveyPeer::getTableMap();
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
		return str_replace(SurveyPeer::TABLE_NAME.'.', $alias.'.', $column);
	}


	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SurveyPeer::SURVEY_ID);

		$criteria->addSelectColumn(SurveyPeer::STUDENT_ID);

		$criteria->addSelectColumn(SurveyPeer::USER_ID);

		$criteria->addSelectColumn(SurveyPeer::SURVEY_DATE);

		$criteria->addSelectColumn(SurveyPeer::FAMILY_CONDITION);

		$criteria->addSelectColumn(SurveyPeer::GRADE);

		$criteria->addSelectColumn(SurveyPeer::OTHER_ASSIST);

		$criteria->addSelectColumn(SurveyPeer::DROPOUT_INFO);

		$criteria->addSelectColumn(SurveyPeer::PRESENTATION);

		$criteria->addSelectColumn(SurveyPeer::REVENUE);

		$criteria->addSelectColumn(SurveyPeer::PROPERTY);

		$criteria->addSelectColumn(SurveyPeer::DONATION_USAGE);

		$criteria->addSelectColumn(SurveyPeer::DONOR_CONCERNED);

		$criteria->addSelectColumn(SurveyPeer::MSG_TO_DONOR);

		$criteria->addSelectColumn(SurveyPeer::MSG_TO_STU);

		$criteria->addSelectColumn(SurveyPeer::SCHOOL_OPINION);

		$criteria->addSelectColumn(SurveyPeer::TEACHER_OPINION);

		$criteria->addSelectColumn(SurveyPeer::USER_OPINION);

		$criteria->addSelectColumn(SurveyPeer::DISCRIPTION);

		$criteria->addSelectColumn(SurveyPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(survey.SURVEY_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT survey.SURVEY_ID)';


	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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
		$objects = SurveyPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}

	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SurveyPeer::populateObjects(SurveyPeer::doSelectRS($criteria, $con));
	}

	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SurveyPeer::addSelectColumns($criteria);
		}

		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doSelect($criteria, $con);
	}

	public static function populateObjects(ResultSet $rs)
	{
		$results = array();

		$cls = SurveyPeer::getOMClass();
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
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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

		SurveyPeer::addSelectColumns($c);
		$startcol = (SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		StudentPeer::addSelectColumns($c);

		$c->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SurveyPeer::getOMClass();

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
					$temp_obj2->addSurvey($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSurveys();
				$obj2->addSurvey($obj1); 			}
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

		SurveyPeer::addSelectColumns($c);
		$startcol = (SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SurveyPeer::getOMClass();

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
					$temp_obj2->addSurvey($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initSurveys();
				$obj2->addSurvey($obj1); 			}
				$results[] = $obj1;
		}
		return $results;
	}



	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

		$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$criteria->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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

		SurveyPeer::addSelectColumns($c);
		$startcol2 = (SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		StudentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + StudentPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserPeer::NUM_COLUMNS;

		$c->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$c->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SurveyPeer::getOMClass();


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
					$temp_obj2->addSurvey($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initSurveys();
				$obj2->addSurvey($obj1);
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
					$temp_obj3->addSurvey($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initSurveys();
				$obj3->addSurvey($obj1);
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
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(SurveyPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SurveyPeer::COUNT);
		}

		foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);

		$rs = SurveyPeer::doSelectRS($criteria, $con);
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

		SurveyPeer::addSelectColumns($c);
		$startcol2 = (SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserPeer::NUM_COLUMNS;

		$c->addJoin(SurveyPeer::USER_ID, UserPeer::USER_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SurveyPeer::getOMClass();

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
					$temp_obj2->addSurvey($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initSurveys();
				$obj2->addSurvey($obj1);
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

		SurveyPeer::addSelectColumns($c);
		$startcol2 = (SurveyPeer::NUM_COLUMNS - SurveyPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		StudentPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + StudentPeer::NUM_COLUMNS;

		$c->addJoin(SurveyPeer::STUDENT_ID, StudentPeer::STUDENT_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = SurveyPeer::getOMClass();

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
					$temp_obj2->addSurvey($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initSurveys();
				$obj2->addSurvey($obj1);
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
		return SurveyPeer::CLASS_DEFAULT;
	}


	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
				$criteria = $values->buildCriteria(); 		}

				$criteria->remove(SurveyPeer::SURVEY_ID);

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
			$comparison = $criteria->getComparison(SurveyPeer::SURVEY_ID);
			$selectCriteria->add(SurveyPeer::SURVEY_ID, $criteria->remove(SurveyPeer::SURVEY_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SurveyPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SurveyPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Survey) {

				$criteria = $values->buildPkeyCriteria();
			} else {
				$criteria = new Criteria(self::DATABASE_NAME);
				$criteria->add(SurveyPeer::SURVEY_ID, (array) $values, Criteria::IN);
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


	public static function doValidate(Survey $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SurveyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SurveyPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SurveyPeer::DATABASE_NAME, SurveyPeer::TABLE_NAME, $columns);
		if ($res !== true) {
			$request = sfContext::getInstance()->getRequest();
			foreach ($res as $failed) {
				$col = SurveyPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SurveyPeer::DATABASE_NAME);

		$criteria->add(SurveyPeer::SURVEY_ID, $pk);


		$v = SurveyPeer::doSelect($criteria, $con);

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
			$criteria->add(SurveyPeer::SURVEY_ID, $pks, Criteria::IN);
			$objs = SurveyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

}
if (Propel::isInit()) {
	try {
		BaseSurveyPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
	require_once 'lib/model/map/SurveyMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.SurveyMapBuilder');
}
