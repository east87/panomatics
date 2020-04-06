<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_content extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $CI =& get_instance();
        $CI->load->model('Model_label');
    }

        function getModule($module_name){
            
            $data = array();
            $sql="select module_id , module_group_id from tbl_module where module_path='".$module_name."' ";         
		 $hasil = $this->db->query($sql);
                        if($hasil->num_rows() > 0){
				$data = $hasil->result();
			}
                        else{
                            $data = '';
                        }
			$hasil->free_result();
                        $this->db->close();
			return $data;
     
            }

          
            
         function getCount($where, $where_related){
              $sel= "SELECT count(a.row_id) as Total "                                    
                                    . "FROM tbl_row as a "
                                    . $where . $where_related;
             $query = $this->db->query("SELECT count(a.row_id) as Total "                                    
                                    . "FROM tbl_row as a "
                                    . $where . $where_related);
                $row = $query->row();
		return $row->Total;
         }   
         

         
         
         
         function getListContent($where, $order_limit){
            $this->db->cache_delete_all();
		  $sql	    = "SELECT  a.row_id,  a.row_active_status, a.row_order, a.row_alias, "
                                    . " DATE_FORMAT( a.row_create_date, '%d-%m-%Y %H:%i:%s' ) as row_create_date,"
                                    . " a.row_create_by "                                    
                                    . "FROM tbl_row as a "
                                    . $where . $order_limit;
                $query = $this->db->query($sql)->result_array();
                $data  = array();
                 foreach ($query as $row) {                    
                         $data[] = array(
                                'row_id' => $row['row_id'],
                                'row_order' => $row['row_order'],
                                'row_alias' => $row['row_alias'],
                                'row_active_status' => $row['row_active_status'],
                                'row_create_date' => $row['row_create_date'],
                                'content' =>$this->getContent($row['row_id'],0)
                            );                        
                      }
		return $data;
	}
         
        
        function getLabelText($type)
    {
        $where = '';
        if ($type != '') {
            $where = "WHERE a.options_title = '".$type."' ";
        }
            $sql   = "select a.label_id, b.label_name, a.options_id as content_text from tbl_options as a
                    INNER JOIN tbl_label as b on a.label_id =b.label_id "
                    . " $where " . " ORDER BY b.label_order ASC";
        $query		= $this->db->query($sql)->result_array();
        return $query;
    }
        
	function getContent($row_id,$label_id)
    {
        $where = '';
        $parent = $label_id;
        if ($row_id != '') {
            $where = "WHERE a.row_id = ".$row_id." and b.label_parent = $parent ";
        }
        $sql   = "SELECT a.content_id,a.row_id,a.label_id,a.content_text, b.type_id, b.label_name
                                FROM tbl_content as a 
                                INNER JOIN tbl_label as b on a.label_id =b.label_id  
                                INNER JOIN tbl_row as c on a.row_id = c.row_id " 
                            . " $where " . " ORDER BY b.label_order ASC";
        $query = $this->db->query($sql)->result_array();
        $data  = array();
                 foreach ($query as $row) {                    
                         $data[] = array(
                                'row_id' => $row['row_id'],
                                'content_id' => $row['content_id'],
                                'label_id' => $row['label_id'],
                                'type_id' => $row['type_id'],
                                'label_name' => $row['label_name'],
                                'content_text' => $row['content_text'],
                                'content_child' => $this->getChildContent($row_id, $row['label_id'])
                            );
                        
                      }
                      
		return $data;
    }
    
     function getChildContent($row_id,$label_id){
             
		 $sql	    = "SELECT  a.row_id,  a.row_active_status, "
                                    . " DATE_FORMAT( a.row_create_date, '%d-%m-%Y %H:%i:%s' ) as row_create_date,"
                                    . " a.row_create_by "                                    
                                    . "FROM tbl_row as a "
                                    . " WHERE a.row_parent = ".$row_id;
                $query = $this->db->query($sql)->result_array();
               
                      
                  $ars  = array();
                    $data  = array();
                    $i=0; foreach ($query as $row) {  $i++; 
                       $content = array();
                        $data  = array();
                       $content[$i] = $this->getContentChl($row['row_id'],$label_id);
                        if (!empty($content[$i] )) {
                             $ars[] = array(
                                'row_id' => $row['row_id'],
                                'row_active_status' => $row['row_active_status'],
                                'row_create_date' => $row['row_create_date'],
                                'content' => $content[$i]
                            );  
                        }
                        if (empty($ars[$i]) ){
                             $data=$ars;
                        }
                      }       
		return $data;
	} 
 	
function getContentChl($row_id,$label_id)
    {
        $where = '';
        $parent = $label_id;
        if ($row_id != '') {
            $where = "WHERE a.row_id = ".$row_id." and b.label_parent = $parent ";
        }
        $sql   = "SELECT a.content_id,a.row_id,a.label_id,a.content_text, b.type_id, b.label_name
                                FROM tbl_content as a 
                                INNER JOIN tbl_label as b on a.label_id =b.label_id  
                                INNER JOIN tbl_row as c on a.row_id = c.row_id " 
                            . " $where " . " ORDER BY b.label_order ASC";
        $query = $this->db->query($sql)->result_array();
        $data  = array();
                 foreach ($query as $row) {                    
                         $data[] = array(
                                'row_id' => $row['row_id'],
                                'content_id' => $row['content_id'],
                                'label_id' => $row['label_id'],
                                'type_id' => $row['type_id'],
                                'label_name' => $row['label_name'],
                                'content_text' => $row['content_text']
                            );
                        
                      }
                      
		return $data;
    }
    
    function getIdContent($text){
        
            $query = $this->db->query("SELECT  options_id as options FROM tbl_options where  options_title='".$text."'");
            $data = $query->row_array();                       
            return $data['options'];
         } 
         
         
         
    function getListOption($where, $order_limit){
            
		 $sql	    = "SELECT  a.row_id,  a.row_active_status, a.row_order, a.row_alias, "
                                    . " DATE_FORMAT( a.row_create_date, '%d-%m-%Y %H:%i:%s' ) as row_create_date,"
                                    . " a.row_create_by "                                    
                                    . "FROM tbl_row as a "
                                    . $where . $order_limit;
                $query = $this->db->query($sql)->result_array();
                $data  = array();
                 foreach ($query as $row) {                    
                         $data[] = array(
                                'row_id' => $row['row_id'],
                                'row_order' => $row['row_order'],
                                'row_alias' => $row['row_alias'],
                                'row_active_status' => $row['row_active_status'],
                                'row_create_date' => $row['row_create_date'],
                                'content' =>$this->getContentOption($row['row_id'],0)
                            );                        
                      }
		return $data;
	}     
         
         
         
         
     function getContentOption($row_id,$label_id)
    {
        $where = '';
        $parent = $label_id;
        if ($row_id != '') {
            $where = "WHERE a.row_id = ".$row_id." and b.type_id=6 and b.label_parent = $parent ";
        }
        $sql   = "SELECT a.content_id,a.row_id,a.label_id,a.content_text, b.type_id, b.label_name
                                FROM tbl_content as a 
                                INNER JOIN tbl_label as b on a.label_id =b.label_id  
                                INNER JOIN tbl_row as c on a.row_id = c.row_id " 
                            . " $where " . " ORDER BY b.label_order ASC";
        $query = $this->db->query($sql)->result_array();
        $data  = array();
                 foreach ($query as $row) {                    
                         $data[] = array(
                                'row_id' => $row['row_id'],
                                'content_id' => $row['content_id'],
                                'label_id' => $row['label_id'],
                                'type_id' => $row['type_id'],
                                'label_name' => $row['label_name'],
                                'content_text' => $row['content_text']
                            );
                        
                      }
                      
		return $data;
    }    
         
      function updateRowOrder($row_id,$order)

	{
		 $sql	= "UPDATE tbl_row SET 
                          row_order = ".$order."  WHERE row_id = ".$row_id;			
		$query	= $this->db->query($sql);
		return $query;

	}    
         
         
         function updateAlter()

	{
		 $sql	= "ALTER TABLE `tbl_label` ADD `label_page` TINYINT(1) NOT NULL AFTER label_view";			
		$query	= $this->db->query($sql);
		return $query;

	}   
          function updatePage()

	{
		 $sql	="update tbl_label SET `label_page` = 1 WHERE label_id in (27,31,32,35, 66, 67,28,29,30)";			
		$query	= $this->db->query($sql);
		return $query;

	}  
        
      function  updateNewAlias($row_id, $row_alias,$newAlias){
           $sql	= "UPDATE tbl_alias SET 
                          web_alias = '".$newAlias."'  WHERE  web_alias = '".$row_alias."' and  key_id = ".$row_id;			
		$query	= $this->db->query($sql);
                
            $sql2	= "UPDATE tbl_row SET 
                          row_alias = '".$newAlias."'  WHERE  row_alias = '".$row_alias."' and  row_id = ".$row_id;			
            $query2	= $this->db->query($sql2);
            
                
            return $query2;
      }
      function  updateNewRowAlias($row_id, $row_alias,$newAlias){
           $sql	= "UPDATE tbl_row SET 
                          row_alias = '".$newAlias."'  WHERE  row_alias = '".$row_alias."' and  row_id = ".$row_id;			
		$query	= $this->db->query($sql);
		return $query;
      }
}