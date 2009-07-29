<?php
// auto-generated by sfPropelCrud
// date: 2009/07/22 06:50:41
?>
<?php

/**
 * projectsite actions.
 *
 * @package    donate
 * @subpackage projectsite
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class projectsiteActions extends sfActions
{
	public function executeIndex()
	{
		return $this->forward('projectsite', 'list');
	}

	public function executeList()
	{
		$this->project_sites = ProjectSitePeer::doSelect(new Criteria());
	}

	public function executeShow()
	{
		$this->project_site = ProjectSitePeer::retrieveByPk($this->getRequestParameter('site_id'));
		$this->forward404Unless($this->project_site);
	}

	public function executeCreate()
	{
		$this->project_site = new ProjectSite();

		$this->setTemplate('edit');
	}

	public function executeEdit()
	{
		$this->project_site = ProjectSitePeer::retrieveByPk($this->getRequestParameter('site_id'));
		$this->forward404Unless($this->project_site);
	}

	public function executeUpdate()
	{
		if (!$this->getRequestParameter('site_id'))
		{
			$project_site = new ProjectSite();
		}
		else
		{
			$project_site = ProjectSitePeer::retrieveByPk($this->getRequestParameter('site_id'));
			$this->forward404Unless($project_site);
		}

		$project_site->setSiteId($this->getRequestParameter('site_id'));
		$project_site->setSiteName($this->getRequestParameter('site_name'));
		$project_site->setProvince($this->getRequestParameter('province'));
		$project_site->setCity($this->getRequestParameter('city'));
		$project_site->setDistrict($this->getRequestParameter('district'));
		$project_site->setDiscription($this->getRequestParameter('discription'));

		$project_site->save();

		return $this->redirect('projectsite/show?site_id='.$project_site->getSiteId());
	}

	public function executeDelete()
	{
		$project_site = ProjectSitePeer::retrieveByPk($this->getRequestParameter('site_id'));

		$this->forward404Unless($project_site);

		$project_site->delete();

		return $this->redirect('projectsite/list');
	}
}