<?php



class RemitMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RemitMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('remit');
		$tMap->setPhpName('Remit');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('REMIT_ID', 'RemitId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('DONATION_ID', 'DonationId', 'int', CreoleTypes::INTEGER, 'donation', 'DONATION_ID', true, 11);

		$tMap->addColumn('AMOUNT', 'Amount', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('IS_BY_OFS', 'IsByOfs', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IS_RECEIVED', 'IsReceived', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_DATE', 'ReceiveDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addForeignKey('RECEIVE_USER_ID', 'ReceiveUserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('IS_SENDOUT', 'IsSendout', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('SENDOUT_DATE', 'SendoutDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addForeignKey('SENDOUT_USER_ID', 'SendoutUserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 