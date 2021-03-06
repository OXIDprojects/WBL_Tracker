<?php
	/**
	 * ./unittests/unit/modules/WBL/Tracker/Adapter/Test1/Test/Adapter/Details.php
	 * @author Bjoern Simon Lange <code@wbl-konzept.de>
	 * @category unittests
	 * @package WBL_Tracker
	 * @subpackage Adapter_Test1
	 * @version SVN: $Id$
	 */

	/**
	 * Test-Adapter for the details.
	 * @author Bjoern Simon Lange <code@wbl-konzept.de>
	 * @category unittests
	 * @package WBL_Tracker
	 * @subpackage Adapter_Test1
	 * @version SVN: $Id$
	 */
	class WBL_Tracker_Test1_Test_Adapter_Details extends WBL_Tracker_Adapter_Abstract {
		/**
		 * Returns the HTML for the tracker.
		 * @author blange <code@wbl-konzept.de>
		 * @return string
		 */
		public function getHTML() {
			return '';
		} // function

		/**
		 * Additional check if this adapter is allowed for the given class.
		 * @author blange <code@wbl-konzept.de>
		 * @param string $sclass
		 * @return bool
		 */
		public function isForClass($sclass) {
			return false;
		} // function
	} // class