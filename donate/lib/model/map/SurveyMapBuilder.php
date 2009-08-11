<?php



class SurveyMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SurveyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('survey');
		$tMap->setPhpName('Survey');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('SURVEY_ID', 'SurveyId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('STUDENT_ID', 'StudentId', 'int', CreoleTypes::INTEGER, 'student', 'STUDENT_ID', true, 11);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', true, 11);

		$tMap->addColumn('SURVEY_DATE', 'SurveyDate', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('FAMILY_CONDITION', 'FamilyCondition', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('GRADE', 'Grade', 'string', CreoleTypes::VARCHAR, true, 16);

		$tMap->addColumn('OTHER_ASSIST', 'OtherAssist', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('DROPOUT_INFO', 'DropoutInfo', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('PRESENTATION', 'Presentation', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('REVENUE', 'Revenue', 'string', CreoleTypes::VARCHAR, true, 128);

		$tMap->addColumn('PROPERTY', 'Property', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('DONATION_USAGE', 'DonationUsage', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('DONOR_CONCERNED', 'DonorConcerned', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('MSG_TO_DONOR', 'MsgToDonor', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('MSG_TO_STU', 'MsgToStu', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SCHOOL_OPINION', 'SchoolOpinion', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('TEACHER_OPINION', 'TeacherOpinion', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('USER_OPINION', 'UserOpinion', 'string', CreoleTypes::VARCHAR, true, 256);

		$tMap->addColumn('DISCRIPTION', 'Discription', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 