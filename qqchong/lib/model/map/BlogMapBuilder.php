<?php



class BlogMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BlogMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('blog');
		$tMap->setPhpName('Blog');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, 11);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('RECOMMEND', 'Recommend', 'int', CreoleTypes::TINYINT, false, 1);

		$tMap->addColumn('RDTIME', 'Rdtime', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 