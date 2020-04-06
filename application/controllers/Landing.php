<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public $arrMenu = array();
	public $data;
	public $privilege = array();
	public function __construct()

	{
		
		
		print_r($_SESSION);
		parent::__construct();
		date_default_timezone_set('UTC');
                $this->load->model(array('backend/Model_menu_frontend','web/Model_label','web/Model_content'));
		$this->load->helper(array('funcglobal','menu','accessprivilege','alias'));
                $this->data["module_product"]=100;
                $module_name=  $this->uri->segment(1);
                
		$this->data['controller'] = $module_name;   
		
	}
        
	public function index()
	{
            
                $order_limit='';
                $order_limit .= " order by a.row_order ASC";
                $order_limit .= " limit  0, 4 ";
                $whereContent = '';
                $whereContent .= " WHERE a.row_parent=0 and a.module_id = ".$this->data["module_product"];
                $ListProduct = $this->Model_content->getListContent($whereContent,$order_limit);
                $this->data["countProduct"] = count($ListProduct);
		$this->data["ListProduct"] = $ListProduct;
                
		$this->load->view('vLanding',$this->data);
	}
	
	

}