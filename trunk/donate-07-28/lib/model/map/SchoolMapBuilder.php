<?php



class SchoolMapBuilder {


	const CLASS_NAME = 'lib.model.map.SchoolMapBuilder';


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

		$tMap = $this->dbMap->addTable('school');
		$tMap->setPhpName('School');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('SCHOOL_ID', 'SchoolId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('SITE_ID', 'SiteId', 'int', CreoleTypes::INTEGER, 'projectsite', 'SITE_ID', true, 11);

		$tMap->addColumn('SCHOOL_NAME', 'SchoolName', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('MASTER', 'Master', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('CONTACT', 'Contact', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PHONE', 'Phone', 'string', CreoleTypes::VARCHAR, true, 32);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('POSTAL', 'Postal', 'string', CreoleTypes::VARCHAR, true, 7);

		$tMap->addColumn('DISCRIPTION', 'Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

	}
}