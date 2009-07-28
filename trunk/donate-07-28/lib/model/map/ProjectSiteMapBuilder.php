<?php



class ProjectSiteMapBuilder {


	const CLASS_NAME = 'lib.model.map.ProjectSiteMapBuilder';


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

		$tMap = $this->dbMap->addTable('projectsite');
		$tMap->setPhpName('ProjectSite');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('SITE_ID', 'SiteId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addColumn('SITE_NAME', 'SiteName', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PROVINCE', 'Province', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('CITY', 'City', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('DISTRICT', 'District', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('DISCRIPTION', 'Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

	}
}