<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clovehitch
 * Extension class for Carabiner Asset Management Library
 *
 * This library is used to extend/change the methods of the Carabiner library.
 * At this time, the following methods are available to extend: 
 * 
 * 	cache($filename, $file_data) should return TRUE or FALSE on sucessful cache
 * 	tag($flag, $simple_file_path, $meda_type_for_css) should return a STRING of a tag reference
 * 	preprocess($flag, $array_of_path_and_filename) should return the new STRING of processed assets
 * 
 * @package		CodeIgniter Libraries
 * @subpackage	Carabiner
 * @category	Asset Management
 * @author		Tony Dewan <tonydewan.com/contact>	
 * @version		0.1
 * @license		http://www.opensource.org/licenses/bsd-license.php BSD licensed.
 */

	class Clovehitch extends Carabiner{
		
		// All public/protected Carabiner properties/methods are obviously accessible
		// including the CI instance reference: $this->CI
		
		/** 
		* Extending the core Carabiner cache functionality
		* @access	protected
		* @param	String of filename of the new file
		* @param	String of contents of the new file
		* @return   boolean	should return true on successful cache, false on failure
		*/	
		protected function cache($filename, $file_data)
		{

		}
		
		/** 
		* Extendable function for making tag strings.  
		* This extendable function is ONLY called when a cache link is requested
		* @access	private
		* @param	String flag for type: css|js
		* @param	String of reference of file. 
		* @param	String Media type for the tag.  Only applies to CSS links. defaults to 'screen'
		* @return	String containing an HTML tag reference to given reference
		*/	
		protected function tag($flag, $ref, $media = 'screen')
		{
			
		}
		
		/** 
		* Internal function for preprocessing (minifying/packing) asset content
		* @access	protected
		* @param	String flag the asset type: css|js
		* @param	Array of 2 strings: the 1st is the full path reference (or URL) to the file whose contents should be prepocessed, while the 2nd is the filename/relative path
		* @return   String minified contents of file
		*/
		protected function preprocess($flag, $ref)
		{
		
		}
	}

