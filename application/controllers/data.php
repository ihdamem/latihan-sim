<?php

class Data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->table = 'buku';
    }
    public function show()
    {
        $data['buku'] = $this->data_model->get_data();
        $this->load->view('header', $data);
        $this->load->view('buku_show', $data);
        $this->load->view('footer', $data);
    }

    public function add()

    {
        $this->load->view('header');
        $this->load->view('buku_add');
        $this->load->view('footer');
    }
    public function save()
    {
        $kode_buku = $this->input->post('kode_buku');
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun = $this->input->post('tahun');
        $data = array(
            'kode_buku' => $kode_buku,
            'judul' => $judul,
            'keterangan' => $keterangan,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun' => $tahun,
        );

        $this->data_model->insert_data($data);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
            redirect('data/show');
        } else {
            echo "<script>alert('Data gagal disimpan');</script>";
            redirect('data/add');
        }
    }

    public function edit($id_buku)
    {

        $data['buku'] = $this->data_model->get_data_by_id($id_buku)->row();

        $this->load->view('header', $data);
        $this->load->view('buku_edit', $data);
        $this->load->view('footer', $data);
    }
    public function update()
    {
        $id_buku = $this->input->post('id_buku');
        $kode_buku = $this->input->post('kode_buku');
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $tahun = $this->input->post('tahun');

        $data = array(
            'kode_buku' => $kode_buku,
            'judul' => $judul,
            'keterangan' => $keterangan,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun' => $tahun,
        );
        $where = array(
            'id_buku' => $id_buku
        );
        $this->data_model->update_data($where, $data, 'buku');
        redirect('data/show');
    }
    public function delete($id_buku)
    {
        $this->data_model->delete_data($id_buku);
        if ($this->db->affected_rows()) {
            redirect('data/show');
        } else {
            echo "Data gagal dihapus";
        }
    }
}
