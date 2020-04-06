<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Model_schedule extends CI_Model {    function __construct()    {        parent::__construct();    }        function getModule($module_name){            $data = array();            $sql="select module_id , module_group_id from tbl_module where module_path='".$module_name."' ";         		 $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;                 }         function getListSchedule($cond = null){		  $query	    = "SELECT  a.schedule_id,  a.schedule_title, a.schedule_image, a.schedule_desc, a.schedule_order, "                                    . "  a.schedule_active_status,"                                    . "DATE_FORMAT( a.schedule_create_date, '%d-%m-%Y %H:%i:%s' ) as schedule_create_date, a.schedule_create_by "                                                                      . "FROM tbl_schedule as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}         		function getListScheduleAlias(){		 $query		= "SELECT schedule_id, schedule_title, schedule_image, schedule_desc,						DATE_FORMAT( schedule_create_date, '%d %M %Y' ) as schedule_create_date,						c.web_alias, c.web_ori						FROM tbl_schedule a						INNER JOIN tbl_alias c ON a.schedule_id = c.key_id 						WHERE a.schedule_active_status = 1 AND c.alias_category = 'schedule' AND c.alias_active_status = 1						ORDER BY schedule_id DESC";		$query		= $this->db->query($query)->result_array();		return $query;	}		function getSchedule($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE schedule_id = ".$id;		}		 $sql	= "SELECT a.schedule_id,a.schedule_title,a.schedule_image, a.schedule_active_status,a.schedule_desc, "                                    . "DATE_FORMAT( a.schedule_create_date, '%d-%m-%Y %H:%i:%s' ) as schedule_create_date, a.schedule_create_by "                                                                      . "FROM tbl_schedule as a "                                    . " $where "                                    . " ORDER BY schedule_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;		}	function checkSchedule($schedule_title){		$sql	= "SELECT schedule_title FROM tbl_schedule WHERE schedule_title = '".$schedule_title."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	function activeSchedule($id)	{		$sql	= "UPDATE tbl_schedule SET schedule_active_status = abs(schedule_active_status-1),  				   schedule_update_date = now(), 				   schedule_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE schedule_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}	function deleteSchedule($id = '')	{		$sql	= "DELETE FROM tbl_schedule WHERE schedule_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}        function insertSchedule($schedule_title,$schedule_imageurl)	{		$sql	= "INSERT INTO tbl_schedule SET                             schedule_title='".$schedule_title."',                            schedule_image='".$schedule_imageurl."',                            schedule_create_by = ".$_SESSION['admin_data']['user_id'].", schedule_create_date = now()";					$query  = $this->db->query($sql);		$last_id  = $this->db->insert_id();		return $last_id;	}	function updateSchedule($id,$schedule_title,$schedule_imageurl)	{		 $sql	= "UPDATE tbl_schedule SET                             schedule_title='".$schedule_title."',                             schedule_image='".$schedule_imageurl."',                            schedule_update_by = ".$_SESSION['admin_data']['user_id'].",                             schedule_update_date=now() WHERE schedule_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}         function updateOrderSchedule($id,$order)	{		$sql	= "UPDATE tbl_schedule SET 				   schedule_order= ".$order.",				   schedule_update_by = ".$_SESSION['admin_data']['user_id'].", schedule_update_date=now() WHERE schedule_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}         function getPageView(){         $data = array();         $sql="select * from tbl_page_view order by page_type asc";                  $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;              }           function GenerateSchedule($cond = null){		 $query		= "SELECT a.schedule_id,a.schedule_title,a.schedule_image,a.schedule_order, a.schedule_active_status,a.schedule_desc, "                                    . "DATE_FORMAT( a.schedule_create_date, '%d-%m-%Y %H:%i:%s' ) as schedule_create_date, a.schedule_create_by "                                                                      . "FROM tbl_schedule as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();				return $query;	}   }