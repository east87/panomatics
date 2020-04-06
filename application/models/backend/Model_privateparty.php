<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Model_privateparty extends CI_Model {    function __construct()    {        parent::__construct();    }        function getModule($module_name){            $data = array();            $sql="select module_id , module_group_id from tbl_module where module_path='".$module_name."' ";         		 $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;                 }         function getListPrivateparty($cond = null){		  $query	    = "SELECT  a.privateparty_id,  a.privateparty_title, a.privateparty_desc,"                                    . " a.privateparty_active_status,"                                    . "DATE_FORMAT( a.privateparty_create_date, '%d-%m-%Y %H:%i:%s' ) as privateparty_create_date, a.privateparty_create_by "                                                                      . "FROM tbl_privateparty as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}         		function getListPrivatepartyAlias(){		 $query		= "SELECT privateparty_id, privateparty_title, privateparty_image, privateparty_desc,						DATE_FORMAT( privateparty_create_date, '%d %M %Y' ) as privateparty_create_date,						c.web_alias, c.web_ori						FROM tbl_privateparty a						INNER JOIN tbl_alias c ON a.privateparty_id = c.key_id 						WHERE a.privateparty_active_status = 1 AND c.alias_category = 'privateparty' AND c.alias_active_status = 1						ORDER BY privateparty_id DESC";		$query		= $this->db->query($query)->result_array();		return $query;	}		function getPrivateparty($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE privateparty_id = ".$id;		}		 $sql	= "SELECT a.privateparty_id,a.privateparty_title, a.privateparty_active_status,a.privateparty_desc,a.privateparty_urla, "                                    . "DATE_FORMAT( a.privateparty_create_date, '%d-%m-%Y %H:%i:%s' ) as privateparty_create_date, a.privateparty_create_by "                                                                      . "FROM tbl_privateparty as a "                                    . " $where "                                    . " ORDER BY privateparty_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;		}	function checkPrivateparty($privateparty_title){		$sql	= "SELECT privateparty_title FROM tbl_privateparty WHERE privateparty_title = '".$privateparty_title."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	function activePrivateparty($id)	{		$sql	= "UPDATE tbl_privateparty SET privateparty_active_status = abs(privateparty_active_status-1),  				   privateparty_update_date = now(), 				   privateparty_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE privateparty_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}	function deletePrivateparty($id = '')	{		$sql	= "DELETE FROM tbl_privateparty WHERE privateparty_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}        function insertPrivateparty($privateparty_title,$privateparty_desc,$privateparty_urla)	{		$sql	= "INSERT INTO tbl_privateparty SET                             privateparty_title='".$privateparty_title."',                            privateparty_desc='".$privateparty_desc."',                            privateparty_urla='".$privateparty_urla."',                            privateparty_create_by = ".$_SESSION['admin_data']['user_id'].", privateparty_create_date = now()";					$query  = $this->db->query($sql);		$last_id  = $this->db->insert_id();		return $last_id;	}	function updatePrivateparty($id,$privateparty_title,$privateparty_desc,$privateparty_urla)	{		 $sql	= "UPDATE tbl_privateparty SET                             privateparty_title='".$privateparty_title."',                            privateparty_desc='".$privateparty_desc."',                            privateparty_urla='".$privateparty_urla."',                            privateparty_update_by = ".$_SESSION['admin_data']['user_id'].",                             privateparty_update_date=now() WHERE privateparty_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}         function updateOrderPrivateparty($id,$order)	{		$sql	= "UPDATE tbl_privateparty SET 				   privateparty_order= ".$order.",				   privateparty_update_by = ".$_SESSION['admin_data']['user_id'].", privateparty_update_date=now() WHERE privateparty_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}         function getPageView(){         $data = array();         $sql="select * from tbl_page_view order by page_type asc";                  $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;              }          function GeneratePrivateparty($cond = null){            $query		 = "SELECT  a.privateparty_id,  a.privateparty_title, a.privateparty_desc,a.privateparty_order, a.privateparty_urla,"                                    . "a.privateparty_active_status "                                                                    . "FROM tbl_privateparty as a "                                    . " ".$cond;                    $query = $this->db->query($query)->result_array();                    $data  = array();                    foreach ($query as $row) {                    $data[] = array(                    'privateparty_id' => $row['privateparty_id'],                    'privateparty_title' => $row['privateparty_title'],                    'privateparty_desc' => $row['privateparty_desc'],                    'privateparty_order' => $row['privateparty_order'],                    'privateparty_urla' => $row['privateparty_urla']                );            }            //$query->free_result();            $this->db->close();            return $data;	}      }