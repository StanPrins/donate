<?php
// auto-generated by sfPropelCrud
// date: 2009/09/03 02:13:18
?>
<?php

/**
 * department actions.
 *
 * @package    qqchong
 * @subpackage department
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class departmentActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('department', 'list');
  }

  public function executeList()
  {
  	$this->user = UserPeer::retrieveByPK($this->getUser()->getAttribute('user_id'));
  	$d = new Criteria();
  	$d->addDescendingOrderByColumn(DepartmentPeer::ARRANGE);
    $pager = new sfPropelPager('Department',sfConfig::get('app_pager_max'));
    $pager->setCriteria($d);
    $pager->setPage($this->getRequestParameter('page',1));
    $pager->init();
    $this->pager = $pager;
    $counts = array();
    $i = 0;
    foreach($pager->getResults() as $dpt)
    {
    	$c = new Criteria();
    	$c->add(UserPeer::DEPARTMENT_ID,$dpt->getId());
    	$num = UserPeer::doCount($c);
    	$counts[$i++] = $num?$num:0;
    }
    $this->counts = $counts;
    $this->owner = UserPeer::retrieveByPK($this->getUser()->getAttribute('user_id'));
    $this->dpt_id = $this->getUser()->getAttribute('department_id');
    return sfView::SUCCESS;
  }

  public function executeShow()
  {
    $this->department = DepartmentPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->department);
  }

  public function executeCreate()
  {
    $this->department = new Department();
    $this->user = UserPeer::doSelect(new Criteria());

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->department = DepartmentPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->user = UserPeer::doSelect(new Criteria());
    $this->forward404Unless($this->department);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $department = new Department();
    }
    else
    {
      $department = DepartmentPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($department);
    }

    $department->setId($this->getRequestParameter('id'));
    $department->setBuilderId($this->getUser()->getAttribute('user_id'));
    $department->setManagerId($this->getRequestParameter('manager_id') ? $this->getRequestParameter('manager_id') : null);
    $department->setArrange($this->getRequestParameter('arrange')?$this->getRequestParameter('arrange'):0);
    $department->setTitle($this->getRequestParameter('title'));
    $department->setDescription($this->getRequestParameter('description'));

    $department->save();

    return $this->redirect('department/show?id='.$department->getId());
  }

  public function executeDelete()
  {
    $department = DepartmentPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($department);

    $department->delete();

    return $this->redirect('department/list');
  }
}
