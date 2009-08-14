<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Curl Class
*
* @package     CodeIgniter
* @subpackage  Libraries
* @category    Libraries
* @author      Victor Klepikovskiy
* @CI alias    Alex Polski
* @version     1.0
*/
class Curl
{

  var $user_agent   = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)';
  var $timeout      = 30;
  var $auto_referer = TRUE;
  var $debug        = TRUE;
  var $handle_id    = FALSE;
  

  /**
   * Constructor - Sets Preferences
   *
   * The constructor can be passed an array of config values
   */ 
  function Curl($config = array())
  {   
    if (count($config) > 0)
    {
      $this->initialize($config);
    } 
    log_message('debug', 'CURL Class Initialized');
  }

  // --------------------------------------------------------------------

  /**
   * Initialize preferences
   *
   * @access  public
   * @param array
   * @return  void
   */ 
  function initialize($config = array())
  {
    foreach ($config as $key => $val)
    {
      if (isset($this->$key))
      {
        $this->$key = $val;
      }
    }
  }
  
  // --------------------------------------------------------------------

  /**
   * Opens CURL session
   * 
   * @access  public
   * @param array
   * @return  void
   */
  function open($config = array())
  {
    if (count($config) > 0)
    {
      $this->initialize($config);
    }
    $this->handle_id = @curl_init();
    $this->_check_error();
  }
  
  // --------------------------------------------------------------------

  /**
   * Validates the CURL handle
   *
   * @access  private
   * @return  bool
   */ 
  function _is_valid_handle()
  {
    if (!is_resource($this->handle_id))
    {
      if ($this->debug == TRUE)
      {
        $this->_error('curl_no_handle');
      }   
      return FALSE;
    }
    return TRUE;
  }
  
  // --------------------------------------------------------------------
  
  /**
   * Return TRUE if the connection is opened
   *
   * @access  public
   * @return  bool
   */

  function is_opened()
  {
    if (!is_resource($this->handle_id))
    {
      return FALSE;
    }
    return TRUE;
  }
  
  // --------------------------------------------------------------------

  /**
   * Set an option for a CURL session
   * 
   * @access  private
   * @param int
   * @param mixed
   * @return  void
   */
  function _set_opt($option, $value)
  {
    @curl_setopt($this->handle_id, $option, $value);
  }
  
  // --------------------------------------------------------------------

  /**
   * Performs HTTP GET operation
   * 
   * @access  public
   * @param string
   * @param array
   * @param bool
   * @return  string
   */
  function http_get($url, $headers = array(), $headers_only = FALSE)
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $this->_set_opt(CURLOPT_URL, $url);
    $this->_set_opt(CURLOPT_RETURNTRANSFER, TRUE);
    $this->_set_opt(CURLOPT_USERAGENT, $this->user_agent);
    $this->_set_opt(CURLOPT_TIMEOUT, $this->timeout);
    $this->_set_opt(CURLOPT_HTTPGET, TRUE);
    if ($headers_only)
    {
      $this->_set_opt(CURLOPT_HEADER, TRUE);
      $this->_set_opt(CURLOPT_NOBODY, TRUE);
    }
    else
    {
      $this->_set_opt(CURLOPT_HEADER, FALSE);
      $this->_set_opt(CURLOPT_NOBODY, FALSE);
    }
    $ret = @curl_exec($this->handle_id);
    $this->_check_error();
    return $ret;
  }
  
  // --------------------------------------------------------------------

  /**
   * Performs HTTP POST operation
   * 
   * @access  public
   * @param string
   * @param string
   * @param array
   * @param bool
   * @return  string
   */
  function http_post($url, $fields, $headers = array(), $headers_only = FALSE)
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $this->_set_opt(CURLOPT_URL, $url);
    $this->_set_opt(CURLOPT_RETURNTRANSFER, TRUE);
    $this->_set_opt(CURLOPT_USERAGENT, $this->user_agent);
    $this->_set_opt(CURLOPT_TIMEOUT, $this->timeout);
    $this->_set_opt(CURLOPT_POST, TRUE);
    $this->_set_opt(CURLOPT_POSTFIELDS, $fields);
    if ($headers_only)
    {
      $this->_set_opt(CURLOPT_HEADER, TRUE);
      $this->_set_opt(CURLOPT_NOBODY, TRUE);
    }
    else
    {
      $this->_set_opt(CURLOPT_HEADER, FALSE);
      $this->_set_opt(CURLOPT_NOBODY, FALSE);
    }
    $ret = @curl_exec($this->handle_id);
    $this->_check_error();
    return $ret;
  }
  
  // --------------------------------------------------------------------

  /**
   * Returns an HTTP code
   * 
   * @access  public
   * @return  int
   */
  function get_http_code()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_HTTP_CODE);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a total time in seconds for the last operation
   * 
   * @access  public
   * @return  int
   */
  function get_total_time()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_TOTAL_TIME);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a number of bytes uploaded
   * 
   * @access  public
   * @return  int
   */
  function get_bytes_uploaded()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SIZE_UPLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns a number of bytes downloaded
   * 
   * @access  public
   * @return  int
   */
  function get_bytes_downloaded()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SIZE_DOWNLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns an average upload speed
   * 
   * @access  public
   * @return  int
   */
  function get_speed_upload()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SPEED_UPLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Returns an average download speed
   * 
   * @access  public
   * @return  int
   */
  function get_speed_download()
  {
    if (!@$this->_is_valid_handle())
    {
      return FALSE;
    }
    $ret = @curl_getinfo($this->handle_id, CURLINFO_SPEED_DOWNLOAD);
    $this->_check_error();
    return $ret;
  }

  // --------------------------------------------------------------------

  /**
   * Close the CURL session
   *
   * @access  public
   * @return  bool
   */ 
  function close()
  {
    if (!$this->_is_valid_handle())
    {
      return FALSE;
    }
    @curl_close($this->handle_id);
  }
  
  // ------------------------------------------------------------------------

  /**
   * Check for an CURL error and display error message
   * @access  private
   * @return  void
   */
  function _check_error()
  {
    if ((@curl_error($this->handle_id) != 0) && ($this->debug == TRUE))
    {
      show_error(@curl_error($this->handle_id));
    }
  }

  // ------------------------------------------------------------------------
  
  /**
   * Display error message
   *
   * @access  private
   * @param string
   * @return  void
   */ 
  function _error($line)
  {
    $CI =& get_instance();
    $CI->lang->load('curl');
    show_error($CI->lang->line($line));
  }

}
// END CURL Class
?>
