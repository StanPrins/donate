<?php



class DepartmentMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.DepartmentMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('department');
		$tMap->setPhpName('Department');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('BUILDER_ID', 'BuilderId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, 11);

		$tMap->addForeignKey('MANAGER_ID', 'ManagerId', 'int', CreoleTypes::INTEGER, 'user', 'ID', false, 11);

		$tMap->addColumn('ARRANGE', 'Arrange', 'int', CreoleTypes::INTEGER, true, 3);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 