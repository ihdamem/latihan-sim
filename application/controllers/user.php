<?php

class user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('dataanggota');
        $this->table = 'anggota';
    }
    public function show()
    {
        $data['anggota'] = $this->dataanggota->get_data();
        $this->load->view('header', $data);
        $this->load->view('user_show', $data);
        $this->load->view('footer', $data);
    }

    public function add()

    {
        $this->load->view('header');
        $this->load->view('user_add');
        $this->load->view('footer');
    }
    public function save()
    {
        $kode_anggota = $this->input->post('kode_anggota');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');
        $data = array(
            'kode_anggota' => $kode_anggota,
            'nama' => $nama,
            'email' => $email,
            'telp' => $telp,
            'alamat' => $alamat,
            'password' => $password
        );
        $this->dataanggota->insert_data($data);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
            redirect('user/show');
        } else {
            echo "<script>alert('Data gagal disimpan');</script>";
            redirect('user/add');
        }
    }

    public function edit($id_anggota)
    {
        $data['user'] = $this->dataanggota->get_data_by_id($id_anggota)->row();

        $this->load->view('header', $data);
        $this->load->view('user_edit', $data);
        $this->load->view('footer', $data);
    }
    public function delete($id_anggota)
    {
        $this->dataanggota->delete_data($id_anggota);
        if ($this->db->affected_rows()) {
            redirect('user/show');
        } else {
            echo "Data gagal dihapus";
        }
    }
    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $kode_anggota = $this->input->post('kode_anggota');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');

        $data = array(
            'kode_anggota' => $kode_anggota,
            'email' => $email,
            'telp' => $telp,
            'alamat' => $alamat,
            'password' => $password
        );

        $where = array(
            'id_anggota' => $id_anggota
        );

        $this->datauser->update_data($where, $data, 'anggota');
        redirect('user/show');
    }
}
