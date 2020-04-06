<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_events extends CI_Model {
    function __construct()
    {
        parent::__construct();
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

         function getListEvents($cond = null){
		  $query	    = "SELECT  a.events_id,  a.events_title, a.events_image, a.events_desc,a.events_url, a.events_order, "
                                    . " a.events_active_status,"
                                    . "DATE_FORMAT( a.events_create_date, '%d-%m-%Y %H:%i:%s' ) as events_create_date, a.events_create_by "                                  
                                    . "FROM tbl_events as a "
                                    . " ".$cond;
		$query		= $this->db->query($query)->result_array();
		return $query;

	}
         
	
	function getListEventsAlias(){

		 $query		= "SELECT events_id, events_title, events_image, events_desc,
						DATE_FORMAT( events_create_date, '%d %M %Y' ) as events_create_date,
						c.web_alias, c.web_ori
						FROM tbl_events a
						INNER JOIN tbl_alias c ON a.events_id = c.key_id 
						WHERE a.events_active_status = 1 AND c.alias_category = 'events' AND c.alias_active_status = 1
						ORDER BY events_id DESC";
		$query		= $this->db->query($query)->result_array();
		return $query;
	}
	
	function getEvents($id = '')
	{
		$where = '';
		if($id != ''){
			$where = "WHERE events_id = ".$id;
		}
		 $sql	= "SELECT a.events_id,a.events_title,a.events_image, a.events_active_status,a.events_desc,a.events_url, a.events_order, "
                                    . "DATE_FORMAT( a.events_create_date, '%d-%m-%Y %H:%i:%s' ) as events_create_date, a.events_create_by "                                  
                                    . "FROM tbl_events as a "
                                    . " $where "
                                    . " ORDER BY events_id ASC";	
		$query	= $this->db->query($sql);
		$rs		= $query->result_array(); 
		return $rs;	

	}

	function checkEvents($events_title){

		$sql	= "SELECT events_title FROM tbl_events WHERE events_title = '".$events_title."'";

		$query	= $this->db->query($sql);

		$rs		= $query->result_array(); 



		return $rs;

	}
	function activeEvents($id)

	{
		$sql	= "UPDATE tbl_events SET events_active_status = abs(events_active_status-1),  
				   events_update_date = now(), 
				   events_update_by = ".$_SESSION['admin_data']['user_id']."
				   WHERE events_id = ".$id;	
		$query	= $this->db->query($sql);		
		return $query;
	}


	function deleteEvents($id = '')

	{

		$sql	= "DELETE FROM tbl_events WHERE events_id = ".$id;	

		$query	= $this->db->query($sql);

		

		$str = $this->db->last_query();

		

		return $str;

	}



        function insertEvents($events_title,$events_imageurl,$events_desc,$events_url)

	{
		$sql	= "INSERT INTO tbl_events SET 
                            events_title='".$events_title."',
                            events_image='".$events_imageurl."',
                            events_desc='".$events_desc."',
                            events_url='".$events_url."',
                            events_create_by = ".$_SESSION['admin_data']['user_id'].", events_create_date = now()";			
		$query  = $this->db->query($sql);
		$last_id  = $this->db->insert_id();
		return $last_id;

	}

	function updateEvents($id,$events_title,$events_imageurl,$events_desc,$events_url)

	{
		 $sql	= "UPDATE tbl_events SET 
                            events_title='".$events_title."', 
                            events_image='".$events_imageurl."',
                            events_desc='".$events_desc."',
                            events_url='".$events_url."',
                            events_update_by = ".$_SESSION['admin_data']['user_id'].", 
                            events_update_date=now() WHERE events_id = ".$id;	
		$query	= $this->db->query($sql);
		return $query;

	}
         function updateOrderEvents($id,$order)
	{

		$sql	= "UPDATE tbl_events SET 
				   events_order= ".$order.",
				   events_update_by = ".$_SESSION['admin_data']['user_id'].", events_update_date=now() WHERE events_id = ".$id;	

		$query	= $this->db->query($sql);		
		return $query;

	}

         function getPageView(){

         $data = array();
         $sql="select * from tbl_page_view order by page_type asc";         
         $hasil = $this->db->query($sql);
                        if($hasil->num_rows() > 0){
				$data = $hasil->result();
			}

                        else {
                            $data = '';
                        }
			$hasil->free_result();
                        $this->db->close();
			return $data;
     } 

    

      function generateEvents($cond = null){

            $query		 = "SELECT  a.events_id,  a.events_title, a.events_image, a.events_desc,a.events_url,"
                                    . "a.events_active_status,"
                                    . "DATE_FORMAT( a.events_create_date, '%d-%m-%Y %H:%i:%s' ) as events_create_date, a.events_create_by "                                  
                                    . "FROM tbl_events as a "
                                    . " ".$cond;
                    $query = $this->db->query($query)->result_array();
                    $data  = array();
                    foreach ($query as $row) {
                    $data[] = array(
                    'events_id' => $row['events_id'],
                    'events_title' => $row['events_title'],
                    'events_image' => $row['events_image'],
                    'events_desc' => $row['events_desc'],
                    'events_url' => $row['events_url']
                );
            }
            //$query->free_result();
            $this->db->close();
            return $data;
	} 


}