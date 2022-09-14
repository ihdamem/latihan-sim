<?php

class Data_model extends CI_Model
{

    public function get_data()
    {
        return $this->db->get('buku');
    }
    public function get_data_by_id($id_buku)
    {
        return $this->db->get_where('buku', array('id_buku' => $id_buku));
    }
    public function insert_data($data)
    {
        $this->db->insert('buku', $data);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->delete('buku');
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
