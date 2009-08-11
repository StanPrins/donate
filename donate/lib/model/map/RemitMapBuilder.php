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

		$tMap->addColumn('AMOUNT', 'Amount', 'int', CreoleTypes::INTEGER, false, 16);

		$tMap->addColumn('IS_BY_OFS', 'IsByOfs', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IS_RECEIVED', 'IsReceived', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_DATE', 'ReceiveDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addForeignKey('RECEIVE_USER_ID', 'ReceiveUserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('RECEIVE_AMOUNT', 'ReceiveAmount', 'int', CreoleTypes::INTEGER, false, 16);

		$tMap->addForeignKey('RECEIVE_SUBMITTER', 'ReceiveSubmitter', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('IS_SENDOUT', 'IsSendout', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('SENDOUT_DATE', 'SendoutDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addForeignKey('SENDOUT_USER_ID', 'SendoutUserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('SENDOUT_AMOUNT', 'SendoutAmount', 'int', CreoleTypes::INTEGER, false, 16);

		$tMap->addForeignKey('SENDOUT_SUBMITTER', 'SendoutSubmitter', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', false, 11);

		$tMap->addColumn('SENDOUT_RECEIVER', 'SendoutReceiver', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addForeignKey('REPORT_ID', 'ReportId', 'int', CreoleTypes::INTEGER, 'reportcard', 'REPORT_ID', false, 11);

		$tMap->addColumn('DISCRIPTION', 'Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 