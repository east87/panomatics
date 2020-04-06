<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Model_list_gallery extends CI_Model {    function __construct()    {        parent::__construct();    }		function getListGallery($gallery_id,$cond = null){		 $query	 = "SELECT a.list_gallery_id, a.list_gallery_title,a.list_gallery_image,"                                    . " a.list_gallery_active_status,"                                    . "a.list_gallery_order,"                                    . "DATE_FORMAT( a.list_gallery_create_date, '%d-%m-%Y %H:%i:%s' ) as list_gallery_create_date, a.list_gallery_create_by "                                    . "FROM tbl_list_gallery as a "                                    . " inner join tbl_gallery as b on a.gallery_id = b.gallery_id "                                    . " where a.gallery_id=".$gallery_id." "                                    . " ".$cond;		$query		= $this->db->query($query)->result_array();		return $query;	}	    function getTitle($list_gallery_id){            $data = array();             $hasil =   $this->db->query("select material_title as title from tbl_list_gallery where list_gallery_id = $list_gallery_id ");				$data = $hasil->row_array();                                               return $data['title'];         }		function getListGalleryBy($id = '')	{		$where = '';		if($id != ''){			$where = "WHERE list_gallery_id = ".$id;		}		$sql	= "SELECT a.list_gallery_id, a.list_gallery_title,a.list_gallery_image,"                                    . "  a.list_gallery_active_status,"                                    . "a.list_gallery_order,"                                    . "DATE_FORMAT( a.list_gallery_create_date, '%d-%m-%Y %H:%i:%s' ) as list_gallery_create_date, a.list_gallery_create_by, "                                    . " b.gallery_id "                                    . "FROM tbl_list_gallery as a "                                    . " inner join tbl_gallery as b on a.gallery_id = b.gallery_id "                                    . " $where "                                    . " ORDER BY list_gallery_id ASC";			$query	= $this->db->query($sql);		$rs		= $query->result_array(); 				return $rs;		}		function activeListGallery($id)	{		 $sql	= "UPDATE tbl_list_gallery SET list_gallery_active_status = abs(list_gallery_active_status-1),  				   list_gallery_update_date = now(), 				   list_gallery_update_by = ".$_SESSION['admin_data']['user_id']."				   WHERE list_gallery_id = ".$id;			$query	= $this->db->query($sql);				return $query;	}		function deleteListGallery($id = '')	{		$sql	= "DELETE FROM tbl_list_gallery WHERE gallery_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}	function deleteListGalleryby($id = '')	{		$sql	= "DELETE FROM tbl_list_gallery WHERE list_gallery_id = ".$id;			$query	= $this->db->query($sql);				$str = $this->db->last_query();				return $str;	}	function checkListGallery($list_gallery_title, $gallery_id){		$sql	= "SELECT list_gallery_title FROM tbl_list_gallery WHERE list_gallery_title = '".$list_gallery_title."' and gallery_id = '".$gallery_id."'";		$query	= $this->db->query($sql);		$rs		= $query->result_array(); 		return $rs;	}	            function insertListGallery($data){                foreach ($data as $value) {                  $this->db->insert('tbl_list_gallery', $value);                   }                $this->db->close();	}       	function editListGallery($list_gallery_title,$list_gallery_image,$list_gallery_order,$list_gallery_status,$list_gallery_id){          $today= date("Y-m-d H:i:s");          $data = array(                        'list_gallery_title'=>$list_gallery_title,                        'list_gallery_image'=>$list_gallery_image,                        'list_gallery_order'=>$list_gallery_order,                        'list_gallery_active_status'=>$list_gallery_status,                        'list_gallery_update_by'=> $_SESSION['admin_data']['user_id'],                         'list_gallery_update_date'=> $today                        );            $this->db->where('list_gallery_id', $list_gallery_id);            $this->db->update('tbl_list_gallery', $data);            $this->db->close();	        }     function updateOrderListGallery($id,$order)	{		$sql	= "UPDATE tbl_list_gallery SET 				   list_gallery_order= ".$order.",				   list_gallery_update_by = ".$_SESSION['admin_data']['user_id'].", list_gallery_update_date=now() WHERE list_gallery_id = ".$id;			$query	= $this->db->query($sql);		return $query;	}      function generateGallery(){		$query	= "SELECT a.list_gallery_id, a.list_gallery_title,a.list_gallery_image,"                                    . "  a.list_gallery_active_status,"                                    . "a.list_gallery_order,"                                    . "DATE_FORMAT( a.list_gallery_create_date, '%d-%m-%Y %H:%i:%s' ) as list_gallery_create_date, a.list_gallery_create_by, "                                    . " b.gallery_id "                                    . "FROM tbl_list_gallery as a "                                    . " inner join tbl_gallery as b on a.gallery_id = b.gallery_id "                                    . " where b.gallery_active_status=1 and a.list_gallery_active_status=1 "                                    . " ORDER BY list_gallery_id ASC";		$query		= $this->db->query($query)->result_array();				return $query;	}        }