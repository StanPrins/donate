<?php



class StudentMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.StudentMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('student');
		$tMap->setPhpName('Student');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('STUDENT_ID', 'StudentId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('SCHOOL_ID', 'SchoolId', 'int', CreoleTypes::INTEGER, 'school', 'SCHOOL_ID', true, 11);

		$tMap->addColumn('OFS_ID', 'OfsId', 'string', CreoleTypes::VARCHAR, true, 32);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('NICKNAME', 'Nickname', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('RACE', 'Race', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('HEAD_TEACHER', 'HeadTeacher', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('GUARDIAN', 'Guardian', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('BIRTHDAY', 'Birthday', 'int', CreoleTypes::DATE, true, null);

		$tMap->addColumn('GRADE', 'Grade', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('MALE', 'Male', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('TEL', 'Tel', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('POSTAL', 'Postal', 'int', CreoleTypes::INTEGER, true, 7);

		$tMap->addColumn('CITY', 'City', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('PROVINCE', 'Province', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('CONSIGNEE', 'Consignee', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('CONSIGNEE_ADDRESS', 'ConsigneeAddress', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('CONSIGNEE_POSTAL', 'ConsigneePostal', 'int', CreoleTypes::INTEGER, true, 7);

		$tMap->addColumn('ASSIST_HISTORY', 'AssistHistory', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('IS_INSTUDY', 'IsInstudy', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('IS_BOARDER', 'IsBoarder', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('IS_DONATED', 'IsDonated', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('DROPOUT_HISTORY', 'DropoutHistory', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TECHANG', 'Techang', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('REWARD', 'Reward', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TERM_EXPENSE', 'TermExpense', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DISCRIPTION', 'Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('REMARK', 'Remark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PHOTO', 'Photo', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('MEMBER_PHOTO', 'MemberPhoto', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('HOUSE_PHOTO', 'HousePhoto', 'string', CreoleTypes::VARCHAR, false, 256);

		$tMap->addColumn('FM1_RELATION', 'Fm1Relation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM1_NAME', 'Fm1Name', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM1_AGE', 'Fm1Age', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('FM1_OCCUPATION', 'Fm1Occupation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM1_DISCRIPTION', 'Fm1Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FM2_RELATION', 'Fm2Relation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM2_NAME', 'Fm2Name', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM2_AGE', 'Fm2Age', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('FM2_OCCUPATION', 'Fm2Occupation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM2_DISCRIPTION', 'Fm2Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FM3_RELATION', 'Fm3Relation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM3_NAME', 'Fm3Name', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM3_AGE', 'Fm3Age', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('FM3_OCCUPATION', 'Fm3Occupation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM3_DISCRIPTION', 'Fm3Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('FM4_RELATION', 'Fm4Relation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM4_NAME', 'Fm4Name', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM4_AGE', 'Fm4Age', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('FM4_OCCUPATION', 'Fm4Occupation', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('FM4_DISCRIPTION', 'Fm4Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 