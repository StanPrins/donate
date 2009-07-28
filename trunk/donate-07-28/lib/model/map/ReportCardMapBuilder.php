<?php



class ReportCardMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ReportCardMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reportcard');
		$tMap->setPhpName('ReportCard');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('REPORT_ID', 'ReportId', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('STUDENT_ID', 'StudentId', 'int', CreoleTypes::INTEGER, 'student', 'STUDENT_ID', true, 11);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'USER_ID', true, 11);

		$tMap->addColumn('TERM', 'Term', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('YUWEN', 'Yuwen', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('SHUXUE', 'Shuxue', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('YINGYU', 'Yingyu', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('WULI', 'Wuli', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('HUAXUE', 'Huaxue', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('LISHI', 'Lishi', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('DILI', 'Dili', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('ZIRAN', 'Ziran', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('SHENGWU', 'Shengwu', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('TIYU', 'Tiyu', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('ZHENGZHI', 'Zhengzhi', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('ZONGHE', 'Zonghe', 'int', CreoleTypes::TINYINT, false, null);

		$tMap->addColumn('RANK', 'Rank', 'string', CreoleTypes::VARCHAR, false, 16);

		$tMap->addColumn('TEACHER_REMARK', 'TeacherRemark', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 