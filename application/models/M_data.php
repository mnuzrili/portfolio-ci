<?php


class M_data extends CI_Model
{
    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi untuk mengedit data
    function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_where_or($where, $table)
    {
        $this->db->or_where($where);
        return $this->db->get($table);
    }

    // fungsi untuk mengupdate atau mengubah data di database
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // fungsi untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }
}
