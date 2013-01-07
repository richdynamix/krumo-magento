<?php
/**
 * RD KRUMO MODULE
 *
 * @category    Module
 * @package     RD_Krumo
 * @copyright   Copyright (c) 2013 RichDynamix . (http://www.richdynamix.com)
 * @author Steven Richardson (steven@richdynamix.com)
 */
class RD_Krumo_Helper_Data extends Mage_Core_Helper_Abstract
{

	/**
   * Default construct.
   * Loads up Krumo Library.
   * @access public
   * @return void
   */  
   public function __construct() {

		// Load class.krumo.php
		include_once(Mage::getBaseDir().'/var/krumo/class.krumo.php');

    }




}
	 