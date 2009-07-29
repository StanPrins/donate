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

		$tMap->addPrimaryKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addColumn('USERNAME', 'Username', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('NICKNAME', 'Nickname', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('SHA1_PASSWORD', 'Sha1Password', 'string', CreoleTypes::VARCHAR, false, 40);

		$tMap->addColumn('SALT', 'Salt', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PHOTO', 'Photo', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('BBS_ID', 'BbsId', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('OFS_ID', 'OfsId', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('DUTY', 'Duty', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('MOBILE', 'Mobile', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('TEL', 'Tel', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('USERTYPE', 'Usertype', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('APPROVE', 'Approve', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IDENTITY', 'Identity', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('QQ', 'Qq', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('MSN', 'Msn', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 