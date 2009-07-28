<?php



class VolunteerMapBuilder {


	const CLASS_NAME = 'lib.model.map.VolunteerMapBuilder';


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

		$tMap = $this->dbMap->addTable('volunteer');
		$tMap->setPhpName('Volunteer');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('VOLUNTEER_ID', 'VolunteerId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addColumn('USER_NAME', 'UserName', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('NICK_NAME', 'NickName', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PHOTO', 'Photo', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('BBS_ID', 'BbsId', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('OFS_ID', 'OfsId', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('DUTY', 'Duty', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('MOBILE', 'Mobile', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('TEL', 'Tel', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('USERTYPE', 'Usertype', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('QQ', 'Qq', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('MSN', 'Msn', 'string', CreoleTypes::VARCHAR, false, 32);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('CREATE_AT', 'CreateAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	}
}