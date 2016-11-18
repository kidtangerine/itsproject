<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_itsproject
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * ITSProject Model
 *
 * @since  0.0.1
 */
class ITSProjectModelITSProject extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;
 
	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'ITSProject This String from Model';
		}
 
		return $this->message;
	}
}