<?php



class UserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('user');
		$tMap->setPhpName('User');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addColumn('USERNAME', 'Username', 'string', CreoleTypes::VARCHAR, true, 32);

		$tMap->addColumn('NICKNAME', 'Nickname', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('SHA1_PASSWORD', 'Sha1Password', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('SALT', 'Salt', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('REMEMBER_KEY', 'RememberKey', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addForeignKey('DEPARTMENT_ID', 'DepartmentId', 'int', CreoleTypes::INTEGER, 'department', 'ID', false, 11);

		$tMap->addColumn('PHOTO', 'Photo', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('DUTY', 'Duty', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('MOBILE', 'Mobile', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('TEL', 'Tel', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('TWITTER', 'Twitter', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('DROIT', 'Droit', 'int', CreoleTypes::INTEGER, true, 3);

		$tMap->addColumn('QQ', 'Qq', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('MSN', 'Msn', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 