<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clovehitch: S3 Example
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
		
		public $key_id = 'XXXXXXXX'; //Your Amazon key_id
		public $secret_key = 'XXXXX'; //Your Amazon secret_key
		public $cdn_bucket = 'yourcdnbucket'; //The bucket that will act as your CDN
		public $cdn_url = 'http://cdn.example.com/'; //The URL used to access your CDN
		
		/** 
		* Extending the core Carabiner cache functionality for S3
		* @access	protected
		* @param	String of filename of the new file
		* @param	String of contents of the new file
		* @return   boolean	should return true on successful cache, false on failure
		*/	
		protected function cache($filename, $file_data)
		{
			// load the external s3 library
			// this is the same as $this->CI->load->library('s3'), but using _load will ensure it's only requested once
			$this->_load('s3');
			
			return $this->CI->s3->putObjectFile($filename, $this->cdn_bucket, $filename, S3::ACL_PUBLIC_READ);
		}
		
		/** 
		* Extendable function for making tag strings to account for S3 integration
		* @access	private
		* @param	String flag for type: css|js
		* @param	String of reference of file. 
		* @param	String Media type for the tag.  Only applies to CSS links. defaults to 'screen'
		* @return	String containing an HTML tag reference to given reference
		*/	
		protected function tag($flag, $ref, $media = 'screen')
		{

			switch($flag){
				
				case 'css':
					return '<link type="text/css" rel="stylesheet" href="'.$this->cdn_url.$ref.'" media="'.$media.'" />'."\r\n"; 
				break;
				
				case 'js':
					return '<script type="text/javascript" src="'.$this->cdn_url.$ref.'" charset="'.$this->CI->config->item('charset').'"></script>'."\r\n";
				break;
			}
		}
	}

