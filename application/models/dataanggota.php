<?php

class dataanggota extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function get_data()
    {
        return $this->db->get('anggota');
    }
    public function get_data_by_id($id_anggota)
    {
        return $this->db->get_where('anggota', array('id_anggota' => $id_anggota));
    }
    public function insert_data($data)
    {
        $this->db->insert('anggota', $data);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($id_anggota)
    {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->delete('anggota');
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
