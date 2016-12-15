<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_itsproject
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * ITSProjects View
 *
 * @since  0.0.1
 */
class ITSProjectViewITSProjects extends JViewLegacy
{
	/**
	 * Displa
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		
		

		// Get data from the model
		
		//print_r($this);
		//var_dump($this);
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
				$this->state			= $this->get('State');
		
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
 
		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
		
		
		// Set the document
		$this->setDocument();
	}
 
	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		
 
		JToolBarHelper::title($title, 'itsproject');
		JToolBarHelper::deleteList('', 'itsprojects.delete');
		JToolBarHelper::editList('itsproject.edit');
		JToolBarHelper::addNew('itsproject.add');
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	
}
}