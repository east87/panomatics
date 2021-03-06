<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Model_agent extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getModule($module_name)
    {
        $data  = array();
        $sql   = "select module_id , module_group_id from tbl_module where module_name='" . $module_name . "' ";
        $hasil = $this->db->query($sql);
        if ($hasil->num_rows() > 0) {
            $data = $hasil->result();
        } else {
            $data = '';
        }
        $hasil->free_result();
        $this->db->close();
        return $data;
    }
    function getAgentName()
    {
        $data  = array();
        $sql   = "select agent_id,first_name from tbl_agent order by agent_id asc";
        $hasil = $this->db->query($sql);
        if ($hasil->num_rows() > 0) {
            $data = $hasil->result();
        } else {
            $data = '';
        }
        $hasil->free_result();
        $this->db->close();
        return $data;
    }
    function getListAgent($cond = null)
    {
        $query = " Select a.agent_id  ,a.first_name,a.last_name ,a.email ,a.password , a.phone, a.company ,a.position , a.status , a.step," . " DATE_FORMAT( a.signup_date, '%d-%m-%Y %H:%i:%s' ) as signup_date" . " from tbl_agent as a" . $cond;
        $query = $this->db->query($query)->result_array();
        return $query;
    }
    public function getAgent($id)
    {
        $where = '';
        if ($id != '') {
            $where = "WHERE agent_id = " . $id;
        }
        $query = " Select a.agent_id ,a.first_name,a.last_name ,a.email ,a.password , a.phone ,a.company ,a.position , a.status ," . " DATE_FORMAT( a.signup_date, '%d-%m-%Y %H:%i:%s' ) as signup_date " . " from tbl_agent a" . " $where ";
        $query = $this->db->query($query)->result_array();
        return $query;
    }
    function activeAgent($id)
    {
        $sql   = "UPDATE tbl_agent SET status = abs(status-1)

                   WHERE agent_id = " . $id;
        $query = $this->db->query($sql);
        return $query;
    }
    function deleteAgent($id = '')
    {
        $sql   = "DELETE FROM tbl_agent WHERE agent_id = " . $id;
        $query = $this->db->query($sql);
        $str   = $this->db->last_query();
        return $str;
    }
    function checkAgent($first_name)
    {
        $sql   = "SELECT first_name FROM tbl_agent WHERE first_name = '" . $first_name . "'";
        $query = $this->db->query($sql);
        $rs    = $query->result_array();
        return $rs;
    }
    function updateAgent($id, $password)
    {
        $sql   = "UPDATE tbl_agent SET 
                password='" . $password . "'  WHERE agent_id = " . $id;
        $query = $this->db->query($sql);
        return $query;
    }
    function updateOrderAgent($id, $order)
    {
        $sql   = "UPDATE tbl_agent SET 

                   agent_stock= " . $order . ",

                   agent_update_by = " . $_SESSION['admin_data']['user_id'] . ", agent_update_date=now() WHERE agent_id = " . $id;
        $query = $this->db->query($sql);
        return $query;
    }
    function getAgentCategory()
    {
        $data  = array();
        $sql   = "select * from tbl_agent_category order by category_id asc";
        $hasil = $this->db->query($sql);
        if ($hasil->num_rows() > 0) {
            $data = $hasil->result();
        } else {
            $data = '';
        }
        $hasil->free_result();
        $this->db->close();
        return $data;
    }
}