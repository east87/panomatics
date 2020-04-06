<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Model_sectionb extends CI_Model {    function __construct()    {        parent::__construct();    }        function getModule($module_name){            $data = array();            $sql="select module_id , module_group_id from tbl_module where module_path='".$module_name."' ";         		 $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;                 }         function getListSectionb($cond = null){		  $query	    = "SELECT  a.sectionb_id,  a.sectionb_title, a.sectionb_image, a.sectionb_desc,"                                    . " a.sectionb_image, a.sectionb_active_status,"                                    . "DATE_FORMAT( a.sectionb_create_date, '%d-%m-%Y %H:%i:%s' ) as sectionb_create_date, a.sectionb_create_by "                                                                      . "FROM tbl_sectionb as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}         		function getListSectionbAlias(){		 $query		= "SELECT sectionb_id, sectionb_title, sectionb_image, sectionb_desc,						DATE_FORMAT( sectionb_create_date, '%d %M %Y' ) as sectionb_create_date,						c.web_alias, c.web_ori						FROM tbl_sectionb a						INNER JOIN tbl_alias c ON a.sectionb_id = c.key_id 						WHERE a.sectionb_active_status = 1 AND c.alias_category = 'sectionb' AND c.alias_active_status = 1						ORDER BY sectionb_id DESC";		$query		= $this->db->query($query)->result_array();		return $query;	}		function getSectionb($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE sectionb_id = ".$id;		}		 $sql	= "SELECT a.sectionb_id,a.sectionb_title,a.sectionb_image, a.sectionb_active_status,a.sectionb_desc,a.sectionb_urla,a.sectionb_urlb,a.sectionb_urlc, "                                    . "DATE_FORMAT( a.sectionb_create_date, '%d-%m-%Y %H:%i:%s' ) as sectionb_create_date, a.sectionb_create_by "                                                                      . "FROM tbl_sectionb as a "                                    . " $where "                                    . " ORDER BY sectionb_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;		}	function checkSectionb($sectionb_title){		$sql	= "SELECT sectionb_title FROM tbl_sectionb WHERE sectionb_title = '".$sectionb_title."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	function activeSectionb($id)	{		$sql	= "UPDATE tbl_sectionb SET sectionb_active_status = abs(sectionb_active_status-1),  				   sectionb_update_date = now(), 				   sectionb_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE sectionb_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}	function deleteSectionb($id = '')	{		$sql	= "DELETE FROM tbl_sectionb WHERE sectionb_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}        function insertSectionb($sectionb_title,$sectionb_imageurl,$sectionb_desc,$sectionb_urla,$sectionb_urlb,$sectionb_urlc)	{		$sql	= "INSERT INTO tbl_sectionb SET                             sectionb_title='".$sectionb_title."',                            sectionb_image='".$sectionb_imageurl."',                            sectionb_desc='".$sectionb_desc."',                            sectionb_urla='".$sectionb_urla."',                            sectionb_urlb='".$sectionb_urlb."',                            sectionb_urlc='".$sectionb_urlc."',                            sectionb_create_by = ".$_SESSION['admin_data']['user_id'].", sectionb_create_date = now()";					$query  = $this->db->query($sql);		$last_id  = $this->db->insert_id();		return $last_id;	}	function updateSectionb($id,$sectionb_title,$sectionb_imageurl,$sectionb_desc,$sectionb_urla,$sectionb_urlb,$sectionb_urlc)	{		 $sql	= "UPDATE tbl_sectionb SET                             sectionb_title='".$sectionb_title."',                             sectionb_image='".$sectionb_imageurl."',                            sectionb_desc='".$sectionb_desc."',                            sectionb_urla='".$sectionb_urla."',                            sectionb_urlb='".$sectionb_urlb."',                            sectionb_urlc='".$sectionb_urlc."',                            sectionb_update_by = ".$_SESSION['admin_data']['user_id'].",                             sectionb_update_date=now() WHERE sectionb_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}         function updateOrderSectionb($id,$order)	{		$sql	= "UPDATE tbl_sectionb SET 				   sectionb_order= ".$order.",				   sectionb_update_by = ".$_SESSION['admin_data']['user_id'].", sectionb_update_date=now() WHERE sectionb_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}         function getPageView(){         $data = array();         $sql="select * from tbl_page_view order by page_type asc";                  $hasil = $this->db->query($sql);                        if($hasil->num_rows() > 0){				$data = $hasil->result();			}                        else{                            $data = '';                        }			$hasil->free_result();                        $this->db->close();			return $data;              }          function GenerateSectionb($cond = null){            $query		 = "SELECT  a.sectionb_id,  a.sectionb_title, a.sectionb_image, a.sectionb_desc, a.sectionb_urla,a.sectionb_urlb,a.sectionb_urlc,"                                    . "a.sectionb_active_status "                                                                    . "FROM tbl_sectionb as a "                                    . " ".$cond;                    $query = $this->db->query($query)->result_array();                    $data  = array();                    foreach ($query as $row) {                    $data[] = array(                    'sectionb_id' => $row['sectionb_id'],                    'sectionb_title' => $row['sectionb_title'],                    'sectionb_image' => $row['sectionb_image'],                    'sectionb_desc' => $row['sectionb_desc'],                    'sectionb_urla' => $row['sectionb_urla'],                    'sectionb_urlb' => $row['sectionb_urlb'],                    'sectionb_urlc' => $row['sectionb_urlc'],                    'gallery' => $this->getGallery($row['sectionb_id'])                );            }            //$query->free_result();            $this->db->close();            return $data;	} function getGallery($sectionb_id){		 $query	 = "SELECT a.sectionb_gallery_id, a.sectionb_gallery_title,a.sectionb_gallery_image,"                                    . " a.sectionb_gallery_active_status,"                                    . "a.sectionb_gallery_order "                                    . "FROM tbl_sectionb_gallery as a "                                    . " inner join tbl_sectionb as b on a.sectionb_id = b.sectionb_id "                                    . " where a.sectionb_gallery_active_status =1 and a.sectionb_id =".$sectionb_id." order by a.sectionb_gallery_order ASC";                                    		$query		= $this->db->query($query)->result_array();		return $query;	}      function getListBanner($cond = null){		  $query	    = "SELECT  a.banner_sectionb_id,  a.banner_sectionb_title,"                                    . " a.banner_sectionb_image, a.banner_sectionb_order, a.banner_sectionb_active_status,"                                    . "DATE_FORMAT( a.banner_sectionb_create_date, '%d-%m-%Y %H:%i:%s' ) as banner_sectionb_create_date, a.banner_sectionb_create_by "                                                                      . "FROM tbl_banner_sectionb as a "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}  function getBanner($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE banner_sectionb_id = ".$id;		}		 $sql	= "SELECT a.banner_sectionb_id,a.banner_sectionb_title,a.banner_sectionb_image, a.banner_sectionb_active_status, "                                    . "DATE_FORMAT( a.banner_sectionb_create_date, '%d-%m-%Y %H:%i:%s' ) as banner_sectionb_create_date, a.banner_sectionb_create_by "                                                                      . "FROM tbl_banner_sectionb as a "                                    . " $where "                                    . " ORDER BY banner_sectionb_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;		}	function checkBanner($banner_sectionb_title){		$sql	= "SELECT banner_sectionb_title FROM tbl_banner_sectionb WHERE banner_sectionb_title = '".$banner_sectionb_title."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	function activeBanner($id)	{		$sql	= "UPDATE tbl_banner_sectionb SET banner_sectionb_active_status = abs(banner_sectionb_active_status-1),  				   banner_sectionb_update_date = now(), 				   banner_sectionb_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE banner_sectionb_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}	function deleteBanner($id = '')	{		$sql	= "DELETE FROM tbl_banner_sectionb WHERE banner_sectionb_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}        function insertBanner($banner_sectionb_title,$banner_sectionb_image)	{		$sql	= "INSERT INTO tbl_banner_sectionb SET                             banner_sectionb_title='".$banner_sectionb_title."',                                banner_sectionb_image='".$banner_sectionb_image."',                             banner_sectionb_create_by = ".$_SESSION['admin_data']['user_id'].", banner_sectionb_create_date = now()";					$query  = $this->db->query($sql);		$last_id  = $this->db->insert_id();		return $last_id;	}	function updateBanner($id,$banner_sectionb_title,$banner_sectionb_image,$banner_sectionb_status)	{		 $sql	= "UPDATE tbl_banner_sectionb SET                             banner_sectionb_title='".$banner_sectionb_title."',                             banner_sectionb_image='".$banner_sectionb_image."',                             banner_sectionb_active_status='".$banner_sectionb_status."',                            banner_sectionb_update_by = ".$_SESSION['admin_data']['user_id'].",                            banner_sectionb_update_date=now() WHERE banner_sectionb_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}         function updateOrderBanner($id,$order)	{		$sql	= "UPDATE tbl_banner_sectionb SET 				   banner_sectionb_order= ".$order.",				   banner_sectionb_update_by = ".$_SESSION['admin_data']['user_id'].", banner_sectionb_update_date=now() WHERE banner_sectionb_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}   }