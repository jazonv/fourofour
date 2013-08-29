<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Four O Four Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Jason Varga
 * @link		http://jvdesigns.com.au
 */

$plugin_info = array(
	'pi_name'		=> 'Four O Four',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Jason Varga',
	'pi_author_url'	=> 'http://jvdesigns.com.au',
	'pi_description'=> 'Performs a 301 redirect to your 404 page.',
	'pi_usage'		=> Fourofour::usage()
);


class Fourofour {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();

		$this->EE->TMPL->template_type = 'cp_asset';
	}

	public function redirect()
	{
		$page = config_item('site_404');

		$this->EE->output->set_status_header(301);
		$this->EE->output->set_header('Location: /' . $page);
	}

	public function page()
	{
		$this->EE->output->set_status_header(404);
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>
To perform a 301 redirect to your 404 page, replace your {redirect="404"} tag with {exp:fourofour:redirect}.
On your 404 page, you need to enforce 404 headers by adding {exp:fourofour:page}.
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.fourofour.php */
/* Location: /system/expressionengine/third_party/fourofour/pi.fourofour.php */
