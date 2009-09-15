<?php



class CorrespondMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CorrespondMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('correspond');
		$tMap->setPhpName('Correspond');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('COMMUNITY', 'Community', 'int', CreoleTypes::INTEGER, 'community', 'ID', true, null);

		$tMap->addForeignKey('MEMBER', 'Member', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, null);

		$tMap->addColumn('APPROVE', 'Approve', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 