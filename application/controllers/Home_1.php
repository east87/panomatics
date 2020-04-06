<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');
class Home extends CI_Controller
{
    public $arrMenu = array();
    public $data;
    public $privilege = array();
    private $perPage = 4;
    public function __construct()
    {
        parent::__construct();
        if (!$_SESSION) {
            session_start();
        }
		date_default_timezone_set('UTC');
        $this->load->model(array(
            'backend/Model_menu_frontend',
            'web/Model_label',
            'web/Model_content'
        ));
        $this->load->helper(array(
            'funcglobal',
            'menu',
            'accessprivilege',
            'alias'
        ));
        $this->data["module_banner"] = 103;
        $this->data["module_product"] = 100;
        $this->data["module_client"]  = 99;
        include 'geturi.php';
        $parent                  = 0;
        $orderBy                 = " and a.type_id = 6  and a.label_title <> 'visibility' ORDER BY a.label_order ASC";
        $cond                    = $orderBy;
        $this->data["ListLabel"] = $this->Model_label->getListLabel(100, $parent, $cond);
        if (isset($_SESSION['where_in'])) {
            $this->data["wherein"] = $_SESSION['where_in'];
            $this->data["filter"]  = $_SESSION['filter'];
        } else {
            $this->data["wherein"] = '';
            $this->data["filter"]  = '';
        }
        $wherep                     = "WHERE a.row_active_status=1 and a.row_parent=0 and a.row_active_status= 1 and a.module_id = " . $this->data["module_product"];
        $totalProduct               = $this->Model_content->getCount($wherep, $this->data["wherein"]);
        $tProduct                   = $totalProduct / 4;
        $this->data["totalProduct"] = ceil($tProduct);
        
        $wherec                     = "WHERE a.row_active_status=1 and a.row_parent=0 and a.row_active_status= 1 and a.module_id = " . $this->data["module_client"] . " ";
        $totalClient                = $this->Model_content->getCount($wherec, '');
        $tClient                   = $totalClient / 4;
        $this->data["totalClient"] = ceil($tClient);
        include 'checkSession.php';
    }
    public function index()
    {
        $order_limit = '';
        $order_limit .= "  order by a.row_order ASC";
        $order_limit .= " limit  0, 4 ";
        $order_limitbanner = '';
        $order_limitbanner .= "  order by a.row_order ASC";
        $order_limitbanner .= " limit  0, 1 ";
        $whereBanner = " WHERE a.row_active_status=1 and a.row_parent=0 and a.module_id = " . $this->data["module_banner"] . " ";
        
        $ListBanner                 = $this->Model_content->getListContent($whereBanner , $order_limitbanner);
        $this->data["countBanner"] = count($ListBanner );
        $this->data["ListBanner"]  = $ListBanner ;
     
        $whereClient = '';
        $whereClient .= " WHERE a.row_active_status=1 and a.row_parent=0 and a.module_id = " . $this->data["module_client"] . " ";
        $ListClient                = $this->Model_content->getListContent($whereClient, $order_limit);
        $this->data["countClient"] = count($ListClient);
        $this->data["ListClient"]  = $ListClient;
        $whereContent              = '';
        $whereContent .= " WHERE a.row_active_status=1 and a.row_parent=0 and a.module_id = " . $this->data["module_product"] . " ";
        $whereContent .= $this->data["wherein"];
        $ListProduct                = $this->Model_content->getListContent($whereContent, $order_limit);
        $this->data["countProduct"] = count($ListProduct);
        $this->data["ListProduct"]  = $ListProduct;
        /*  echo '<pre>';                print_r($ListProduct);                die; */
        if (isset($_SESSION['where_in'])) {
            $ListAllP                = $this->Model_content->getListOption($whereContent, ' order by a.row_order ASC limit  0, 100');
            $this->data["countAllP"] = count($ListAllP);
            $this->data["ListAllP"]  = $ListAllP;
            $CheckIn                 = array();
            $i                       = 0;
            foreach ($ListAllP as $arr) {
                $i++;
                $x = 0;
                foreach ($arr['content'] as $arrs) {
                    $x++;
                    $CheckIn[] = $arrs;
                }
            }
            $this->data["CheckIn"] = $CheckIn;
        }
        $this->load->view('vhome', $this->data);
    }
    public function loadMore()
    {
        if ($this->input->is_ajax_request() && $this->input->post("next")) {
            $start = ceil($this->input->post("next") * $this->perPage);
            $limit       =  $this->perPage;
            $where        = $this->input->post("where");
            $whereContent = '';
            $whereContent .= " WHERE a.row_active_status=1 and a.row_parent=0 and a.module_id = " . $this->data["module_product"];
            $whereContent .= $where;
            $order_limit = '';
            $order_limit .= " order by a.row_order ASC";
            $order_limit .= " limit " . $start . ", " . $limit . "";
            $ListProduct               = $this->Model_content->getListContent($whereContent, $order_limit);
            $countProduct              = count($ListProduct);
            $this->data["ListProduct"] = $ListProduct;
            $result                    = '';
            if ($countProduct > 0) {
                $i = 0;
                foreach ($ListProduct as $pr) {
                    $i++;
                    $visibility = contentValue($pr, 'visibility');
                    if ($visibility != 'Public' && $this->data["agent_id"] == '') {
                        $onclick = 'onClick="openPopupLogin(' . $pr['row_id'] . ')"';
                        $ref     = '#';
                    } else {
                        if ($pr['row_alias'] != '') {
                            $ref = BASE_URL . '/' . $pr['row_alias'];
                        } else {
                            $ref = BASE_URL . '/project/detail/' . $pr['row_id'];
                        }
                        $onclick = '';
                    }
                    $result .= '<div class="col-25" ' . $onclick . ' >';
                    $result .= '<a href="' . $ref . '" class="gallery-logo bg-load img-async" style="background-image:url(' . contentValue($pr, 'client_icon') . ');" src-url="' . contentValue($pr, 'client_icon') . '"></a>';
                    $result .= '<a href="' . $ref . '" class="gallery-thumb bg-load img-async" style="background-image:url(' . contentValue($pr, 'product_image') . ');" src-url="' . contentValue($pr, 'product_image') . '"></a>';
                    $result .= '<a href="' . $ref . '" class="hotel-info">';
                    $result .= '<p class="hotel-name">' . contentValue($pr, "project_title") . '</p>';
                    $result .= '<p class="hotel-content-info">' . contentValue($pr, "product") .' - ' . contentValue($pr, "location") .'</p>';
                    $result .= '</a>';
                    $result .= '</div>';
                }
            }
            echo ($result);
        }
        else{
            echo  $result='';
        }
    }
 
    public function loadMoreClient()
    {
     
      $count = $this->data["totalClient"];


      if ($this->input->is_ajax_request() && $this->input->post("next2")) {
            $start = ceil($this->input->post("next2") * $this->perPage);

            $limit       =  $this->perPage;
            $order_limit = '';
            $order_limit .= " order by a.row_order ASC";
            $order_limit .= " limit " . $start . ", " . $limit . "";
            $whereClient = '';
            $whereClient .= " WHERE a.row_parent=0 and a.module_id = " . $this->data["module_client"];
            $ListClient               = $this->Model_content->getListContent($whereClient, $order_limit);
            $countClient              = count($ListClient);
            $this->data["ListClient"] = $ListClient;
            $resultc                  = '';
            if ($countClient > 0) {
                $i = 0;
                foreach ($ListClient as $pr) {
                    $i++;
                    $resultc .= '<div class="col-16">';
                    $resultc .= '<div class="logo-client-img bg-load lazy-load" style ="background-image: url(' . contentValue($pr, 'images') . ');">';
                    $resultc .= '</div>';
                    $resultc .= '</div>';
                }
            }
            echo ($resultc);

        } else{
            echo  $resultc='';
        }
    }
    
    
    
    
    
	 public function updateRow($module_id){
            $order_limit = " order by a.row_id DESC";
            $whereRow  = " WHERE a.row_parent=0 and a.module_id =" .$module_id;
            $ListRow               = $this->Model_content->getListContent($whereRow , $order_limit);
           
           // print_r($ListRow);
             $i = 1;
                foreach ($ListRow as $pr) {
                    //echo  $i.'<pre>';
                    $this->Model_content->updateRowOrder($pr['row_id'],$i);
                    $i++;
            }
     } 
}