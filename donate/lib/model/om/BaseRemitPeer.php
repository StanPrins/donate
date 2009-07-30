<?php


abstract class BaseRemitPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'remit';

	
	const CLASS_DEFAULT = 'lib.model.Remit';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const REMIT_ID = 'remit.REMIT_ID';

	
	const DONATION_ID = 'remit.DONATION_ID';

	
	const AMOUNT = 'remit.AMOUNT';

	
	const IS_BY_OFS = 'remit.IS_BY_OFS';

	
	const IS_RECEIVED = 'remit.IS_RECEIVED';

	
	const RECEIVE_DATE = 'remit.RECEIVE_DATE';

	
	const RECEIVE_USER_ID = 'remit.RECEIVE_USER_ID';

	
	const RECEIVE_AMOUNT = 'remit.RECEIVE_AMOUNT';

	
	const RECEIVE_SUBMITTER = 'remit.RECEIVE_SUBMITTER';

	
	const IS_SENDOUT = 'remit.IS_SENDOUT';

	
	const SENDOUT_DATE = 'remit.SENDOUT_DATE';

	
	const SENDOUT_USER_ID = 'remit.SENDOUT_USER_ID';

	
	const SENDOUT_AMOUNT = 'remit.SENDOUT_AMOUNT';

	
	const SENDOUT_SUBMITTER = 'remit.SENDOUT_SUBMITTER';

	
	const CREATED_AT = 'remit.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('RemitId', 'DonationId', 'Amount', 'IsByOfs', 'IsReceived', 'ReceiveDate', 'ReceiveUserId', 'ReceiveAmount', 'ReceiveSubmitter', 'IsSendout', 'SendoutDate', 'SendoutUserId', 'SendoutAmount', 'SendoutSubmitter', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (RemitPeer::REMIT_ID, RemitPeer::DONATION_ID, RemitPeer::AMOUNT, RemitPeer::IS_BY_OFS, RemitPeer::IS_RECEIVED, RemitPeer::RECEIVE_DATE, RemitPeer::RECEIVE_USER_ID, RemitPeer::RECEIVE_AMOUNT, RemitPeer::RECEIVE_SUBMITTER, RemitPeer::IS_SENDOUT, RemitPeer::SENDOUT_DATE, RemitPeer::SENDOUT_USER_ID, RemitPeer::SENDOUT_AMOUNT, RemitPeer::SENDOUT_SUBMITTER, RemitPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('remit_id', 'donation_id', 'amount', 'is_by_ofs', 'is_received', 'receive_date', 'receive_user_id', 'receive_amount', 'receive_submitter', 'is_sendout', 'sendout_date', 'sendout_user_id', 'sendout_amount', 'sendout_submitter', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('RemitId' => 0, 'DonationId' => 1, 'Amount' => 2, 'IsByOfs' => 3, 'IsReceived' => 4, 'ReceiveDate' => 5, 'ReceiveUserId' => 6, 'ReceiveAmount' => 7, 'ReceiveSubmitter' => 8, 'IsSendout' => 9, 'SendoutDate' => 10, 'SendoutUserId' => 11, 'SendoutAmount' => 12, 'SendoutSubmitter' => 13, 'CreatedAt' => 14, ),
		BasePeer::TYPE_COLNAME => array (RemitPeer::REMIT_ID => 0, RemitPeer::DONATION_ID => 1, RemitPeer::AMOUNT => 2, RemitPeer::IS_BY_OFS => 3, RemitPeer::IS_RECEIVED => 4, RemitPeer::RECEIVE_DATE => 5, RemitPeer::RECEIVE_USER_ID => 6, RemitPeer::RECEIVE_AMOUNT => 7, RemitPeer::RECEIVE_SUBMITTER => 8, RemitPeer::IS_SENDOUT => 9, RemitPeer::SENDOUT_DATE => 10, RemitPeer::SENDOUT_USER_ID => 11, RemitPeer::SENDOUT_AMOUNT => 12, RemitPeer::SENDOUT_SUBMITTER => 13, RemitPeer::CREATED_AT => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('remit_id' => 0, 'donation_id' => 1, 'amount' => 2, 'is_by_ofs' => 3, 'is_received' => 4, 'receive_date' => 5, 'receive_user_id' => 6, 'receive_amount' => 7, 'receive_submitter' => 8, 'is_sendout' => 9, 'sendout_date' => 10, 'sendout_user_id' => 11, 'sendout_amount' => 12, 'sendout_submitter' => 13, 'created_at' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/RemitMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.RemitMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RemitPeer::getTableMap();
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
		return str_replace(RemitPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RemitPeer::REMIT_ID);

		$criteria->addSelectColumn(RemitPeer::DONATION_ID);

		$criteria->addSelectColumn(RemitPeer::AMOUNT);

		$criteria->addSelectColumn(RemitPeer::IS_BY_OFS);

		$criteria->addSelectColumn(RemitPeer::IS_RECEIVED);

		$criteria->addSelectColumn(RemitPeer::RECEIVE_DATE);

		$criteria->addSelectColumn(RemitPeer::RECEIVE_USER_ID);

		$criteria->addSelectColumn(RemitPeer::RECEIVE_AMOUNT);

		$criteria->addSelectColumn(RemitPeer::RECEIVE_SUBMITTER);

		$criteria->addSelectColumn(RemitPeer::IS_SENDOUT);

		$criteria->addSelectColumn(RemitPeer::SENDOUT_DATE);

		$criteria->addSelectColumn(RemitPeer::SENDOUT_USER_ID);

		$criteria->addSelectColumn(RemitPeer::SENDOUT_AMOUNT);

		$criteria->addSelectColumn(RemitPeer::SENDOUT_SUBMITTER);

		$criteria->addSelectColumn(RemitPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(remit.REMIT_ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT remit.REMIT_ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RemitPeer::doSelectRS($criteria, $con);
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
		$objects = RemitPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RemitPeer::populateObjects(RemitPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RemitPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RemitPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinDonation(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUserRelatedByReceiveUserId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUserRelatedByReceiveSubmitter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUserRelatedBySendoutUserId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUserRelatedBySendoutSubmitter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinDonation(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DonationPeer::addSelectColumns($c);

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DonationPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRemit($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUserRelatedByReceiveUserId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUserRelatedByReceiveUserId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRemitRelatedByReceiveUserId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRemitsRelatedByReceiveUserId();
				$obj2->addRemitRelatedByReceiveUserId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUserRelatedByReceiveSubmitter(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUserRelatedByReceiveSubmitter(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRemitRelatedByReceiveSubmitter($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRemitsRelatedByReceiveSubmitter();
				$obj2->addRemitRelatedByReceiveSubmitter($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUserRelatedBySendoutUserId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUserRelatedBySendoutUserId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRemitRelatedBySendoutUserId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRemitsRelatedBySendoutUserId();
				$obj2->addRemitRelatedBySendoutUserId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUserRelatedBySendoutSubmitter(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserPeer::addSelectColumns($c);

		$c->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUserRelatedBySendoutSubmitter(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addRemitRelatedBySendoutSubmitter($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initRemitsRelatedBySendoutSubmitter();
				$obj2->addRemitRelatedBySendoutSubmitter($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$criteria->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
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

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DonationPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DonationPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + UserPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$c->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = DonationPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemit($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1);
			}


					
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserRelatedByReceiveUserId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRemitRelatedByReceiveUserId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initRemitsRelatedByReceiveUserId();
				$obj3->addRemitRelatedByReceiveUserId($obj1);
			}


					
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getUserRelatedByReceiveSubmitter(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addRemitRelatedByReceiveSubmitter($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initRemitsRelatedByReceiveSubmitter();
				$obj4->addRemitRelatedByReceiveSubmitter($obj1);
			}


					
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getUserRelatedBySendoutUserId(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addRemitRelatedBySendoutUserId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initRemitsRelatedBySendoutUserId();
				$obj5->addRemitRelatedBySendoutUserId($obj1);
			}


					
			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getUserRelatedBySendoutSubmitter(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addRemitRelatedBySendoutSubmitter($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initRemitsRelatedBySendoutSubmitter();
				$obj6->addRemitRelatedBySendoutSubmitter($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptDonation(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);

		$criteria->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUserRelatedByReceiveUserId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUserRelatedByReceiveSubmitter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUserRelatedBySendoutUserId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUserRelatedBySendoutSubmitter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RemitPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RemitPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);

		$rs = RemitPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptDonation(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + UserPeer::NUM_COLUMNS;

		UserPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + UserPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::RECEIVE_USER_ID, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::RECEIVE_SUBMITTER, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::SENDOUT_USER_ID, UserPeer::USER_ID);

		$c->addJoin(RemitPeer::SENDOUT_SUBMITTER, UserPeer::USER_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

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
				$temp_obj2 = $temp_obj1->getUserRelatedByReceiveUserId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemitRelatedByReceiveUserId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRemitsRelatedByReceiveUserId();
				$obj2->addRemitRelatedByReceiveUserId($obj1);
			}

			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserRelatedByReceiveSubmitter(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addRemitRelatedByReceiveSubmitter($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initRemitsRelatedByReceiveSubmitter();
				$obj3->addRemitRelatedByReceiveSubmitter($obj1);
			}

			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getUserRelatedBySendoutUserId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addRemitRelatedBySendoutUserId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initRemitsRelatedBySendoutUserId();
				$obj4->addRemitRelatedBySendoutUserId($obj1);
			}

			$omClass = UserPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getUserRelatedBySendoutSubmitter(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addRemitRelatedBySendoutSubmitter($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initRemitsRelatedBySendoutSubmitter();
				$obj5->addRemitRelatedBySendoutSubmitter($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUserRelatedByReceiveUserId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DonationPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DonationPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DonationPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemit($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUserRelatedByReceiveSubmitter(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DonationPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DonationPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DonationPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemit($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUserRelatedBySendoutUserId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DonationPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DonationPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DonationPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemit($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUserRelatedBySendoutSubmitter(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		RemitPeer::addSelectColumns($c);
		$startcol2 = (RemitPeer::NUM_COLUMNS - RemitPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DonationPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DonationPeer::NUM_COLUMNS;

		$c->addJoin(RemitPeer::DONATION_ID, DonationPeer::DONATION_ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = RemitPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DonationPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDonation(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addRemit($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initRemits();
				$obj2->addRemit($obj1);
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
		return RemitPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RemitPeer::REMIT_ID); 

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
			$comparison = $criteria->getComparison(RemitPeer::REMIT_ID);
			$selectCriteria->add(RemitPeer::REMIT_ID, $criteria->remove(RemitPeer::REMIT_ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RemitPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RemitPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Remit) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RemitPeer::REMIT_ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Remit $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RemitPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RemitPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RemitPeer::DATABASE_NAME, RemitPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RemitPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RemitPeer::DATABASE_NAME);

		$criteria->add(RemitPeer::REMIT_ID, $pk);


		$v = RemitPeer::doSelect($criteria, $con);

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
			$criteria->add(RemitPeer::REMIT_ID, $pks, Criteria::IN);
			$objs = RemitPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRemitPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/RemitMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.RemitMapBuilder');
}
