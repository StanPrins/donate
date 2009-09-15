<?php



class MessageMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MessageMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('message');
		$tMap->setPhpName('Message');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('SENDER_ID', 'SenderId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, 11);

		$tMap->addForeignKey('RECIEVER_ID', 'RecieverId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, 11);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ANONYMITY', 'Anonymity', 'int', CreoleTypes::TINYINT, true, 1);

		$tMap->addColumn('SDEL', 'Sdel', 'int', CreoleTypes::TINYINT, true, 1);

		$tMap->addColumn('RDEL', 'Rdel', 'int', CreoleTypes::TINYINT, true, 1);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 