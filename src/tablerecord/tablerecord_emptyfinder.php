<?php
/**
 * Empty finder
 *
 * @package Atk14
 * @subpackage InternalLibraries
 * @filesource
 */

/**
 * Empty finder
 *
 * @package Atk14
 * @subpackage InternalLibraries
 */
class TableRecord_EmptyFinder extends TableRecord_Finder{
 	var $_Records = array();
	function TableRecord_EmptyFinder(){
	}

	/**
	 * @return integer always returns 0
	 */
	function getRecordsCount(){ return 0; }

		/**
		 * @return array always returns empty array
		 */
	function getRecords(){ return array(); }
}
