<?php



class CommentMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CommentMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('comment');
		$tMap->setPhpName('Comment');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, 11);

		$tMap->addForeignKey('BLOG_ID', 'BlogId', 'int', CreoleTypes::INTEGER, 'blog', 'ID', false, 11);

		$tMap->addForeignKey('TOPIC_ID', 'TopicId', 'int', CreoleTypes::INTEGER, 'topic', 'ID', false, 11);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, 11);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 