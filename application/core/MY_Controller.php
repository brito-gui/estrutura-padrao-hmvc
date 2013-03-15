<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_Controller
 */
class MY_Controller extends CI_Controller
{
  protected $data = Array();
  protected $module_name;
  protected $controller_name;    
  protected $action_name;
  public $template_path="";
  public $CI;

  public function __construct() 
  {      
    parent::__construct();
    $this->CI =& get_instance();    
    $this->module_name     = $this->router->fetch_module();
    $this->controller_name = $this->router->fetch_class();
    $this->action_name     = $this->router->fetch_method();
    $this->data['content'] = '';
    $this->data['css']     = '';
  }

  protected function render($template='blank')  
  {
    $view_path = $this->action_name . EXT;
    $this->data['content'] .= $this->load->view($this->module_name.'/'. $view_path, $this->data, true);  //load the view
    $this->load->view($this->template_path."templates/$template.tpl.php", $this->data);  //load the template
  }
}
/**
 * Frontend_Controller
 */
class Frontend_Controller extends MY_Controller
{
  public $template_path='frontend/';
  
  public function __construct() 
  { parent::__construct();  }  
  
  protected function render($template='main') 
  { parent::render($template);  }
}
/**
 * Backend_Controller
 */
class Backend_Controller extends MY_Controller
{
  public $template_path='backend/';
  
  public function __construct() 
  {    
    parent::__construct();
    $this->CI->load->library("session");
    if(!$this->session->userdata('logged_in'))
    {
      redirect($this->config->item('base_url').'admin');
      return false;
    }
  }
  
  protected function render($template='main') 
  {
    parent::render($template);
  }
}