<?php



class DonationMapBuilder {


	const CLASS_NAME = 'lib.model.map.DonationMapBuilder';


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

		$tMap = $this->dbMap->addTable('donation');
		$tMap->setPhpName('Donation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('DONATION_ID', 'DonationId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('STUDENT_ID', 'StudentId', 'int', CreoleTypes::INTEGER, 'student', 'STUDENT_ID', true, 11);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', true, 11);

		$tMap->addColumn('AMOUNT', 'Amount', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('START_DATE', 'StartDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('END_DATE', 'EndDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('APPROVE', 'Approve', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IS_ACTIVE', 'IsActive', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	}
}