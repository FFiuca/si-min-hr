<?php

class Karyawan extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->model('KaryawanModel', 'km');
        $this->load->model('IzinModel', 'im');

        $this->load->library('MainLib');
    }


    //VIEW
    function index(){
        $this->load->view('admin/er/header');
        $this->load->view('admin/dashboard');
    }

    function data_karyawan(){
        $data = [
            'new' => $this->km->get_data(null, null, null, 3, ['column'=>'registered', 'order'=> 'DESC'])
        ];

        $this->load->view('admin/er/header');
        $this->load->view('admin/karyawan', $data);
    }

    function data_cuti(){
        $data = [
            'karyawan' => $this->km->get_data(),
            'total' => $this->im->get_data(null, null, null, null, true),
            'total_d' => $this->im->get_data(null, null, null, null, false),
            'c_pernah' => $this->im->get_data(null, null, 1, null, true),
            'c_lebih1' => $this->im->get_data(null, null, 2, null, true),
            'pernah' => $this->im->get_data(null, null, 1, null, false),
            'lebih1' => $this->im->get_data(null, null, 2, null, false),
            'sisa' => $this->im->get_data(null, null, null, 1, false)
        ];
        
        $this->load->view('admin/er/header');
        $this->load->view('admin/cuti', $data);
    }

    //FUNCTION
    function get_data_karyawan(){
        $nomor_induk = $this->mainlib->normalize_null($this->input->post('nomor_induk'), null);

        $data = $this->km->get_data($nomor_induk);
        
        $data = ['status'=>1 , 'data'=>$data];
        http_response_code(200);
        echo json_encode($data);
    }

    function add_karyawan(){
        $p = $this->input->post();
        $data = [
            'nama_karyawan' => $p['nama_karyawan'],
            'alamat' => $p['alamat'],
            'tanggal_lahir' => $p['tanggal_lahir']
        ];

        $data = $this->km->add($data);

        $data = ['status'=>$data['status']];
        http_response_code(200);
        echo json_encode($data);
    }

    function update_karyawan(){
        $p = $this->input->post();
        $nomor_induk = $this->input->post('nomor_induk');

        $data = [
            'nama_karyawan' => $p['nama_karyawan'],
            'alamat' => $p['alamat'],
            'tanggal_lahir' => $p['tanggal_lahir']
        ];

        $data = $this->km->update($nomor_induk, $data);

        $data = ['status'=>$data['status']];
        http_response_code(200);
        echo json_encode($data);
    }

    function delete_karyawan(){
        $nomor_induk = $this->input->post('nomor_induk');

        $data = $this->km->delete($nomor_induk);

        $data = ['status'=>$data['status']];
        http_response_code(200);
        echo json_encode($data);
    }

    function add_cuti(){
        $nomor_induk = $this->input->post('nomor_induk');

        $data = [
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'lama_hari' => $this->input->post('lama_hari'),
            'id_jenis_izin' => $this->input->post('id_jenis_izin'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $data = $this->im->add($nomor_induk, $data);
        
        $data = ['status'=>$data['status']];
        http_response_code(200);
        echo json_encode($data);
    }

    function delete_cuti(){
        $id_izin = $this->input->post('id_izin');

        $data = $this->im->delete($id_izin);
        
        $data = ['status'=>$data['status']];
        http_response_code(200);
        echo json_encode($data);
    }

    
}

?>