<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Content extends CI_Controller
{
    public $arrMenu = array();
    public $data;
    public $privilege = array();
    public function __construct()
    {
        parent::__construct();
        if (!$_SESSION) {
            session_start();
        }
        if (empty($_SESSION['admin_data'])) {
            session_destroy();
            redirect(BASE_URL_BACKEND . "/signin");
            exit();
        }
        $this->load->model(array(
            'backend/Model_menu_frontend',
            'backend/Model_label',
            'backend/Model_content',
            'backend/Model_alias',
            'backend/Model_language',
            'backend/Model_logcms'
        ));
        $this->load->helper(array(
            'funcglobal',
            'menu',
            'accessprivilege',
            'alias'
        ));
        $module_name = $this->uri->segment(2);
        $this->alias_category = $module_name;
        $getmodule = $this->Model_content->getModule($module_name);
        foreach ($getmodule as $gm) {
            $this->module_id       = $gm->module_id;
            $this->section         = $gm->module_group_id;
            $_SESSION['section']   = $this->section;
            $_SESSION['module_id'] = $this->module_id;
        }
        //get menu from helper menu
        //get menu from helper menu
        $this->arrMenu            = menu();
        $this->data               = array();
        $this->data['ListMenu']   = $this->arrMenu;
        $this->data['CountMenu']  = count($this->arrMenu);
        $this->data['controller'] = $module_name;
        //check privilege module
        $this->privilege          = accessprivilegeuserlevel($_SESSION['admin_data']['user_level_id'], $_SESSION['module_id']);
        $this->breadcrump         = breadCrump($_SESSION['module_id']);
       
    }
    public function index()
    {
        $this->view();
    }
    function view()
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        
        $admin_data                 = $_SESSION['admin_data'];
        $this->data['admin_data']   = $admin_data;
        $this->data['section']      = $_SESSION['section'];
        $this->data['modul_id']     = $_SESSION['module_id'];
        $this->data['breadcrump']   = $this->breadcrump;
        $ListContent                = $this->Model_content->getListContent($_SESSION['module_id']);
        $this->data["countContent"] = count($ListContent);
        $this->data["ListContent"]  = $ListContent;
       
        //die;
        //extract privilege
        $this->data["list"]         = $this->privilege[0];
        $this->data["view"]         = $this->privilege[1];
        $this->data["add"]          = $this->privilege[2];
        $this->data["edit"]         = $this->privilege[3];
        $this->data["publish"]      = $this->privilege[4];
        $this->data["approve"]      = $this->privilege[5];
        $this->data["delete"]       = $this->privilege[6];
        $this->data["order"]        = $this->privilege[7];
        if ($this->data["list"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
//        echo '<!--<pre>';
//        print_r($this->data["ListContent"]);
//        echo '-->';
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/list');
    }
    function add()
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        //extract privilege
        $this->data["add"] = $this->privilege[2];
        if ($this->data["add"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/add', $this->data);
    }
    public function doAdd()
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        //extract privilege
        $this->data["add"] = $this->privilege[2];
        if ($this->data["add"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $tb = $_POST['tbSave'];
        if (!$tb) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        $module_id                = $this->data["ListLabel"][0]['module_id'];
        $row_parent               = 0;
        $max_row                  = $this->Model_content->getMaxRow($module_id);
        $maximum                  =  $max_row+1;
        $row_id                   = $this->Model_content->insertRow($module_id, $row_parent,$maximum);
        foreach ($this->data["ListLabel"] as $label) {
            $row_id   = $row_id;
            $label_id = $label['label_id'];
            $content  = $this->security->xss_clean(secure_input($_POST[$label['label_name']]));
            if ($label['type_id'] == 3) {
                $content_text = str_replace(BASE_URL, "", $content);
            } else {
                $content_text = $content;
            }
            
              if ($label['label_name'] == 'project_title' || $label['label_name'] == 'blog_title') {
                    
                   if($label['label_name'] == 'project_title'){
                       $alias = generateAlias($content);
                    }
                    else {
                          $alias = generateAlias($content);
                    }
                 
                   $cekAlias = $this->Model_alias->checkAliasCategory($alias,$this->alias_category);
                   if ($cekAlias) {
                       $this->Model_content->updateRowAlias($row_id,$alias);
                       $this->Model_alias->updateAlias($row_id,$alias,$this->alias_category);
                   }
                   else {
                       $this->Model_content->updateRowAlias($row_id,$alias);
                       $aliasid = $this->Model_alias->insertAlias($row_id,$this->alias_category,$alias,$this->data['controller']."/detail/".$row_id);
                   }
                }
                else {
                     $alias = '';
                }
           
            $content_id = $this->Model_content->insertContent($row_parent,$row_id, $label_id, $content_text);
            
        }
         if(!empty($row_id)) {
            $aliasid = $this->Model_alias->insertAlias($row_id,$this->alias_category,$alias,$this->data['controller']."/detail/".$row_id);
            } 
      $this->updateNewAlias($row_id);       
    $log_module = "Add " . $this->module;
    $log_value  = $row_id . " | " . $alias;
    $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);     
            
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
    }
    function active($id)
    {
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
         $this->data['modul_id']   = $this->module_id;
        //extract privilege
        $this->data["approve"] = $this->privilege[5];
        if ($this->data["approve"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $rsContent     = $this->Model_content->getContentby($this->data['modul_id'],$id);
        $active_status = abs($rsContent[0]['row_active_status'] - 1);
        $active        = $this->Model_content->activeRow($id);
        //createRouteAlias(); //create route alias
        if ($active_status == 1) {
            $log_module = "Active " . $this->data['controller'];
        } else {
            $log_module = "Inactive " . $this->data['controller'];
        }
        $log_value = $id . " | " . $active_status;
        $insertlog = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        // $this->generateContent();
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
    }
    function delete($id)
    {
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
         $this->data['modul_id']   = $this->module_id;
        //extract privilege
        $this->data["delete"] = $this->privilege[6];
        if ($this->data["delete"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $rsContent                  = $this->Model_content->getContentby($this->data['modul_id'],$id);
        $title      = $rsContent[0]['row_id'];
        $delete     = $this->Model_content->deleteRow($id);
        $delete2    = $this->Model_content->deleteContent($id);
        $log_module = "Delete " . $this->module;
        $log_value  = $id . " | " . $title;
        $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        //$this->generateContent();
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
    }
    function edit($id)
    {
     
         $parent = 0;
         $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        //extract privilege
        $this->data["edit"] = $this->privilege[3];
        if ($this->data["edit"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data                 = $_SESSION['admin_data'];
        $this->data['admin_data']   = $admin_data;
        $this->data['section']      = $_SESSION['section'];
        $this->data['modul_id']     = $_SESSION['module_id'];
        $this->data['breadcrump']   = $this->breadcrump;
        $this->data['row_id']       = $id;
        $rsContent                  = $this->Model_content->getContentby($this->data['modul_id'],$id);
        // mengambil database dari model untuk dikirim ke view        
        $countContent               = count($rsContent);
        $this->data['rsContent']    = $rsContent;
        $this->data['countContent'] = $countContent;
      
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/edit', $this->data);
    }
    public function doEdit($id)
    {
      
        $parent = 0;
        $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        $tb = $_POST['tbEdit'];
        if (!$tb OR $id == '') {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        //extract privilege
        $this->data["edit"] = $this->privilege[3];
        if ($this->data["edit"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        //$rsContent                = $this->Model_content->getContentby($this->data['modul_id'],$id);
        $update                   = $this->Model_content->updateRow($id);
        $row_id                   = $id;
        $content_parent=0;
       
        if ($update) {
            
            foreach ($this->data["ListLabel"] as $label) {
           
               $label_id = $label['label_id'];
               $content  = $this->security->xss_clean(secure_input($_POST[$label['label_name']]));
               if ($label['type_id'] == 3) {
                    $content_text = str_replace(BASE_URL, "", $content);
                } else {
                    $content_text = $content;
                }
               
                if ($label['label_name'] == 'project_title' || $label['label_name'] == 'blog_title') {
                    
                   if($label['label_name'] == 'project_title'){
                       $alias = generateAlias($content);
                    }
                    else {
                          $alias = generateAlias($content);
                    }
                   //$content_text = $alias;
                   $cekAlias = $this->Model_alias->checkAliasCategory($alias,$this->alias_category);
                   if ($cekAlias) {
                       $this->Model_content->updateRowAlias($row_id,$alias);
                       $this->Model_alias->updateAlias($row_id,$alias,$this->alias_category);
                   }
                   else {
                       $this->Model_content->updateRowAlias($row_id,$alias);
                       $aliasid = $this->Model_alias->insertAlias($row_id,$this->alias_category,$alias,$this->data['controller']."/detail/".$row_id);
                   }
                }
                else {
                     $alias = '';
                }
               $check_data = $this->Model_content->checkContent($content_parent,$row_id, $label_id);
                
                if ($check_data) {
                    $update2 = $this->Model_content->updateContent($content_parent,$row_id, $label_id, $content_text);
                   
                }
                else {
                    $update2 = $this->Model_content->insertContent($content_parent,$row_id, $label_id, $content_text);
                    
                }
                
                
            }
          
        }
        $this->updateNewAlias($row_id);
        $log_module = "update " .  $_SESSION['section'];
        $log_value  = $alias;
        $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
    }
    function Child($label_id, $content_id)
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $_SESSION['module_id'];
        $this->data['breadcrump'] = $this->breadcrump;
        $this->data['label_id']   = $label_id;
        $this->data['row_parent'] = $this->Model_content->getRowParent($content_id);
//        $this->data['row_id']     = $this->Model_content->getRow($this->data['row_parent']);
//        if ($this->data['row_id']) {
//            $row_id = $this->data['row_id'];
//        } else {
//            $row_id = 0;
//        }
        $_SESSION['label_id']       = $label_id;
        $_SESSION['content_id']     = $content_id;
        $_SESSION['row_parent']     = $this->data['row_parent'];
        $ListContent                = $this->Model_content->getChildContent($this->data['row_parent'], $label_id, $content_id, $this->data['modul_id']);
        $this->data["countContent"] = count($ListContent);
        $this->data["ListContent"]  = $ListContent; 
        
       
        //extract privilege
        $this->data["list"]    = $this->privilege[0];
        $this->data["view"]    = $this->privilege[1];
        $this->data["add"]     = $this->privilege[2];
        $this->data["edit"]    = $this->privilege[3];
        $this->data["publish"] = $this->privilege[4];
        $this->data["approve"] = $this->privilege[5];
        $this->data["delete"]  = $this->privilege[6];
        $this->data["order"]   = $this->privilege[7];
        if ($this->data["list"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/listChild');
    }
    function addChild()
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        //extract privilege
        $this->data["add"] = $this->privilege[2];
        if ($this->data["add"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/addChild', $this->data);
    }
    function doAddChild()
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        //extract privilege
        $this->data["add"] = $this->privilege[2];
        if ($this->data["add"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        $redirec_uri              = '/child/' . $this->data['label_id'] . '/' . $this->data['content_id'];
        $tb                       = $_POST['tbSave'];
        if (!$tb) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        $module_id                = $this->data["ListLabel"][0]['module_id'];
        $content_parent =$this->data['content_id'];
        $row_parent               = $this->security->xss_clean(secure_input($_POST['row_parent']));
        $maximum =  1;
        $row_id                   = $this->Model_content->insertRow($module_id, $row_parent,$maximum);
        $active_status =1;
        $active        = $this->Model_content->activeRow($row_id);
        foreach ($this->data["ListLabel"] as $label) {
            $row_id   = $row_id;
            $label_id = $label['label_id'];
            $content  = $this->security->xss_clean(secure_input($_POST[$label['label_name']]));
            if ($label['type_id'] == 3) {
                $content_text = str_replace(BASE_URL, "", $content);
            } else {
                $content_text = $content;
            }
            $content_id = $this->Model_content->insertContent($content_parent,$row_id, $label_id, $content_text);
            $log_module = "Add " . $this->module;
            $log_value  = $content_id . " | " . $content_text;
            $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        }
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller'] . $redirec_uri);
    }
    function editChild($label_id, $id)
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        //extract privilege
        $this->data["edit"] = $this->privilege[3];
        if ($this->data["edit"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data                 = $_SESSION['admin_data'];
        $this->data['admin_data']   = $admin_data;
        $this->data['section']      = $_SESSION['section'];
        $this->data['modul_id']     = $_SESSION['module_id'];
        $this->data['breadcrump']   = $this->breadcrump;
        $this->data['row_id']       = $id;
        $rsContent                  = $this->Model_content->getContentby2($id, $label_id, $this->data['modul_id']);
        // mengambil database dari model untuk dikirim ke view        
        $countContent               = count($rsContent);
        $this->data['rsContent']    = $rsContent;
        $this->data['countContent'] = $countContent;
        
        
        $this->load->view('backend/header', $this->data);
        $this->load->view('backend/content/editChild', $this->data);
    }
    public function doEditChild($label_id, $id)
    {
        $parent      = $this->uri->segment(4);
        if ($parent) {
            $parent = $parent;
        } else {
            $parent = 0;
        } $orderBy                  = " ORDER BY label_order ASC";
        $cond                     = $orderBy;
        $this->data["ListLabel"]  = $this->Model_label->getListLabel($_SESSION['module_id'], $parent, $cond);
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        $redirec_uri              = '/child/' . $this->data['label_id'] . '/' . $this->data['content_id'];
        $tb                       = $_POST['tbEdit'];
        if (!$tb OR $id == '') {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        //extract privilege
        $this->data["edit"] = $this->privilege[3];
        if ($this->data["edit"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $admin_data               = $_SESSION['admin_data'];
        $this->data['admin_data'] = $admin_data;
        $this->data['section']    = $_SESSION['section'];
        $this->data['modul_id']   = $this->module_id;
        $this->data['breadcrump'] = $this->breadcrump;
        $rsContent                = $this->Model_content->getContentby2($id, $label_id, $this->data['modul_id']);
        $update                   = $this->Model_content->updateRow($id);
        $row_id                   = $id;
        if ($update) {
            foreach ($this->data["ListLabel"] as $label) {
                $label_id = $label['label_id'];
                $content  = $this->security->xss_clean(secure_input($_POST[$label['label_name']]));
                if ($label['type_id'] == 3) {
                    $content_text = str_replace(BASE_URL, "", $content);
                } else {
                    $content_text = $content;
                }
                $check_data = $this->Model_content->checkContent($this->data['content_id'],$row_id, $label_id);
                
                if ($check_data) {
                    $update2 = $this->Model_content->updateContent($this->data['content_id'],$row_id, $label_id, $content_text);
                }
                else {
                    $update2 = $this->Model_content->insertContent($this->data['content_id'],$row_id, $label_id, $content_text);
                }
             
                $log_module = "update " . $this->module;
                $log_value  = $content_text;
                $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);
            }
        }
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller'] . $redirec_uri);
    }
    function activeChild($id)
    {
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        $this->data['modul_id']   = $this->module_id;
        $redirec_uri              = '/child/' . $this->data['label_id'] . '/' . $this->data['content_id'];
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        //extract privilege
        $this->data["approve"] = $this->privilege[5];
        if ($this->data["approve"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $rsContent     = $this->Model_content->getContentby2($id, $this->data['label_id'], $this->data['modul_id']);
        $active_status = abs($rsContent[0]['row_active_status'] - 1);
        $active        = $this->Model_content->activeRow($id);
        //createRouteAlias(); //create route alias
        if ($active_status == 1) {
            $log_module = "Active " . $this->data['controller'];
        } else {
            $log_module = "Inactive " . $this->data['controller'];
        }
        $log_value = $id . " | " . $active_status;
        $insertlog = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        // $this->generateContent();
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller'] . $redirec_uri);
    }
    function deleteChild($id)
    {
        $this->data['label_id']   = $_SESSION['label_id'];
        $this->data['content_id'] = $_SESSION['content_id'];
        $this->data['row_parent'] = $_SESSION['row_parent'];
        $this->data['modul_id']   = $this->module_id;
        $redirec_uri              = '/child/' . $this->data['label_id'] . '/' . $this->data['content_id'];
        if (empty($id)) {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller'] . $redirec_uri);
            exit();
        }
        //extract privilege
        $this->data["delete"] = $this->privilege[6];
        if ($this->data["delete"] == 0) {
            echo "<script>alert('Can\'t Access Module');window.location.href='" . BASE_URL_BACKEND . "/home';</script>";
            die;
        }
        $rsContent  = $this->Model_content->getContentby2($id, $this->data['label_id'], $this->data['modul_id']);
        $title      = $rsContent[0]['row_id'];
        $delete     = $this->Model_content->deleteRow($id);
        $delete2    = $this->Model_content->deleteContent($id);
        $log_module = "Delete " . $this->module;
        $log_value  = $id . " | " . $title;
        $insertlog  = $this->Model_logcms->insertLogCMS($log_module, $log_value);
        //$this->generateContent();
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller'] . $redirec_uri);
    }
    function doOrder()
    {
        $order = $this->security->xss_clean($_POST['order']);
        if ($order == "") {
            redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
            exit();
        }
        foreach ($order as $id => $ordervalue) {
            $this->Model_content->updateOrdeRow($id, $ordervalue);
            echo $ordervalue;
        }
        redirect(BASE_URL_BACKEND . '/' . $this->data['controller']);
    }
   function updateNewAlias($row_id)
    {
       
     
            $whereContent = '';
            $whereContent .= " WHERE a.row_id= ".$row_id;
          
            $order_limit = '';
            $order_limit .= " order by a.row_order ASC";
            
            $ListProduct               = $this->Model_content->getListContentRow($whereContent, $order_limit, $this->data['modul_id']);
            $countProduct              = count($ListProduct);
            $this->data["ListProduct"] = $ListProduct;
            
         
            if ($countProduct > 0) {
                $i = 0;
                foreach ($ListProduct as $pr) {
                   
                    $i++;
                   if ($pr['row_alias'] != '') {
                       $cat=contentValue($pr, "product");
                        if ($this->data['modul_id'] == 100){
                           $cate=$cat;
                           $cat_alias= generateNameLabel($cate);
                            $title =contentValue($pr, "project_title");
                        }
                        else {
                           $cate= 'blog';
                           $cat_alias= generateNameLabel($cate);
                           $title =contentValue($pr, "blog_title"); 
                        }
                       $getAli = generateAlias($title);
                       $newAlias=$cat_alias.'/'.$getAli;
                     
                      $updateAlias= $this->Model_content->updateNewAlias($pr['row_id'], $pr['row_alias'],$newAlias); 
                       
                       
                    }
            
                }
            }
           
        }
 
}