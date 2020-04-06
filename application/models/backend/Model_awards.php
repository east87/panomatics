<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Model_awards extends CI_Model {    function __construct()    {        parent::__construct();    }        function getModule($module_name){            $data = array();            $sql="select module_id , module_group_id from tbl_module where module_path='".$module_name."' ";         		 $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;                 }         function getListAwards($cond = null){		  $query	    = "SELECT  a.awards_id,  a.awards_title, a.awards_image, a.awards_desc, a.awards_order, "                                    . "  a.awards_active_status,"                                    . "DATE_FORMAT( a.awards_create_date, '%d-%m-%Y %H:%i:%s' ) as awards_create_date, a.awards_create_by "                                                                      . "FROM tbl_awards as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}         		function getListAwardsAlias(){		 $query		= "SELECT awards_id, awards_title, awards_image, awards_desc,						DATE_FORMAT( awards_create_date, '%d %M %Y' ) as awards_create_date,						c.web_alias, c.web_ori						FROM tbl_awards a						INNER JOIN tbl_alias c ON a.awards_id = c.key_id 						WHERE a.awards_active_status = 1 AND c.alias_category = 'awards' AND c.alias_active_status = 1						ORDER BY awards_id DESC";		$query		= $this->db->query($query)->result_array();		return $query;	}		function getAwards($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE awards_id = ".$id;		}		 $sql	= "SELECT a.awards_id,a.awards_title,a.awards_image, a.awards_active_status,a.awards_desc, "                                    . "DATE_FORMAT( a.awards_create_date, '%d-%m-%Y %H:%i:%s' ) as awards_create_date, a.awards_create_by "                                                                      . "FROM tbl_awards as a "                                    . " $where "                                    . " ORDER BY awards_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;		}	function checkAwards($awards_title){		$sql	= "SELECT awards_title FROM tbl_awards WHERE awards_title = '".$awards_title."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	function activeAwards($id)	{		$sql	= "UPDATE tbl_awards SET awards_active_status = abs(awards_active_status-1),  				   awards_update_date = now(), 				   awards_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE awards_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}	function deleteAwards($id = '')	{		$sql	= "DELETE FROM tbl_awards WHERE awards_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}        function insertAwards($awards_title,$awards_imageurl)	{		$sql	= "INSERT INTO tbl_awards SET                             awards_title='".$awards_title."',                            awards_image='".$awards_imageurl."',                            awards_create_by = ".$_SESSION['admin_data']['user_id'].", awards_create_date = now()";					$query  = $this->db->query($sql);		$last_id  = $this->db->insert_id();		return $last_id;	}	function updateAwards($id,$awards_title,$awards_imageurl)	{		 $sql	= "UPDATE tbl_awards SET                             awards_title='".$awards_title."',                             awards_image='".$awards_imageurl."',                            awards_update_by = ".$_SESSION['admin_data']['user_id'].",                             awards_update_date=now() WHERE awards_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}         function updateOrderAwards($id,$order)	{		$sql	= "UPDATE tbl_awards SET 				   awards_order= ".$order.",				   awards_update_by = ".$_SESSION['admin_data']['user_id'].", awards_update_date=now() WHERE awards_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}         function getPageView(){         $data = array();         $sql="select * from tbl_page_view order by page_type asc";                  $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;              }           function GenerateAwards($cond = null){		 $query		= "SELECT a.awards_id,a.awards_title,a.awards_image,a.awards_order, a.awards_active_status,a.awards_desc, "                                    . "DATE_FORMAT( a.awards_create_date, '%d-%m-%Y %H:%i:%s' ) as awards_create_date, a.awards_create_by "                                                                      . "FROM tbl_awards as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();				return $query;	}   }