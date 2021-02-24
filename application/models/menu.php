<?php
class menu extends CI_Model
{
    function cek_menu($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
