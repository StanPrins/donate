<?php
// auto-generated by sfPropelCrud
// date: 2009/07/21 08:18:17
?>
<?php

/**
 * reportcard actions.
 *
 * @package    donate
 * @subpackage reportcard
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class reportcardActions extends sfActions
{
	public function executeIndex()
	{
		return $this->forward('reportcard', 'list');
	}

	public function executeListstu()
	{
		$c = new Criteria();
		$c -> add(ReportCardPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
		$pager = new sfPropelPager('ReportCard', sfConfig::get('app_pager_homepage_max'));
		$pager->setPeerMethod('doSelectJoinAll');
		$pager->setCriteria($c);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
	}

	public function executeShow()
	{
		$this->report_card = ReportCardPeer::retrieveByPk($this->getRequestParameter('report_id'));
		$this->forward404Unless($this->report_card);
	}

	public function executeCreate()
	{
		$this->report_card = new ReportCard();

		$this->report_card->setStudentId($this->getRequestParameter('student_id'));
		$this->report_card->setUserId($this->getUser()->getAttribute('user_id'));

		$c = new Criteria();
		$c -> add(StudentPeer::STUDENT_ID, $this->getRequestParameter('student_id'));
		$this->student = StudentPeer::doSelectOne($c);

		$d = new Criteria();
		$d -> add(UserPeer::USER_ID, $this->getUser()->getAttribute('user_id'));
		$this->user = UserPeer::doSelectOne($d);
	}

	public function executeEdit()
	{
		$this->report_card = ReportCardPeer::retrieveByPk($this->getRequestParameter('report_id'));
		$this->forward404Unless($this->report_card);
	}

	public function executeUpdate()
	{
		if (!$this->getRequestParameter('report_id'))
		{
			$report_card = new ReportCard();
		}
		else
		{
			$report_card = ReportCardPeer::retrieveByPk($this->getRequestParameter('report_id'));
			$this->forward404Unless($report_card);
		}

		$report_card->setReportId($this->getRequestParameter('report_id'));
		$report_card->setStudentId($this->getRequestParameter('student_id') ? $this->getRequestParameter('student_id') : null);
		$report_card->setUserId($this->getRequestParameter('user_id') ? $this->getRequestParameter('user_id') : null);
		$report_card->setTerm($this->getRequestParameter('term'));
		$report_card->setYuwen($this->getRequestParameter('yuwen'));
		$report_card->setShuxue($this->getRequestParameter('shuxue'));
		$report_card->setYingyu($this->getRequestParameter('yingyu'));
		$report_card->setWuli($this->getRequestParameter('wuli'));
		$report_card->setHuaxue($this->getRequestParameter('huaxue'));
		$report_card->setLishi($this->getRequestParameter('lishi'));
		$report_card->setDili($this->getRequestParameter('dili'));
		$report_card->setZiran($this->getRequestParameter('ziran'));
		$report_card->setShengwu($this->getRequestParameter('shengwu'));
		$report_card->setTiyu($this->getRequestParameter('tiyu'));
		$report_card->setZhengzhi($this->getRequestParameter('zhengzhi'));
		$report_card->setZonghe($this->getRequestParameter('zonghe'));
		$report_card->setRank($this->getRequestParameter('rank'));
		$report_card->setTeacherRemark($this->getRequestParameter('teacher_remark'));

		$report_card->save();

		return $this->redirect('reportcard/show?report_id='.$report_card->getReportId());
	}

	public function executeDelete()
	{
		$report_card = ReportCardPeer::retrieveByPk($this->getRequestParameter('report_id'));

		$this->forward404Unless($report_card);

		$report_card->delete();

		return $this->redirect('reportcard/list');
	}
}
