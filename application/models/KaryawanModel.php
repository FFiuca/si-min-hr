<?php

class KaryawanModel extends CI_Model{    

    protected $prefix = 'IP06';
    function __construct()
    {
        parent::__construct();

        //MODEL
        $this->load->model('IzinModel', 'im');
    }

    
    function get_data($nomor_induk=null, $nama_karyawan=null, $tahun_lahir=null, $limit=null, $order=null){
        if(isset($nomor_induk))
            $this->db->where('nomor_induk', $nomor_induk);
        if(isset($nama_karyawan))
            $this->db->where('nama_karyawan', $nama_karyawan);
        if(isset($tahun_lahir))
            $this->db->where('YEAR(tanggal_lahir)', $tahun_lahir);
            
        if(isset($order) and is_array($order))
            $this->db->order_by($order['column'], $order['order']);
        if(isset($limit))
            $this->db->limit($limit);

        $data = $this->db->get('karyawan')->result_array();
        
        return $data;
    }

    function add($data){
        $nomor_induk = $this->prefix.''.$this->add_zero_prefix(3, ($this->get_last_nomor_induk() + 1));
        // while(true){
        //     if($this->check_nomor_induk_isExist($nomor_induk)){
        //         $nomor_induk = $this->Encap->prefix_nomor_induk['karyawan'].''.($this->get_last_nomor_induk() + 1);
        //     }else{
        //         break;
        //     }
        // }

        $data['nomor_induk'] = $nomor_induk;

        $insert = $this->db->insert('karyawan', $data);

        $data = [];
        $jenis_izin = $this->im->get_jenis_izin();
        foreach($jenis_izin as $key=>$r){
            $data[$key]['nomor_induk'] = $nomor_induk;
            $data[$key]['id_jenis_izin'] = $r['id_jenis_izin'];
            $data[$key]['jatah_izin'] = $r['jatah_izin'];
            $data[$key]['tahun'] = 2022;
        }

        $insert = $this->db->insert_batch('jatah_izin', $data);

        return ['status' => ($this->db->affected_rows()>0)? 1 : 0];
    }

    function update($nomor_induk, $data){
        $update = $this->db->where('nomor_induk', $nomor_induk)->update('karyawan', $data);

        return ['status' => ($update)? 1 : 0];
    }

    function delete($nomor_induk){
        $delete = $this->db->delete('karyawan', ['nomor_induk' => $nomor_induk]);

        return ['status' => ($this->db->affected_rows()>0)? 1 : 0];
    }

    function check_nomor_induk_isExist($nomor_induk){
        $data = $this->db->get_where('karyawan', ['nomor_induk' => $nomor_induk]);

        return ['status' => ($data->num_rows()>0)? true : false];
    }

    function get_last_nomor_induk(){
        $data = $this->db->select('nomor_induk')->order_by('registered', 'DESC')->get('karyawan');

        if($data->num_rows()>0){
            $data = $data->row_array()['nomor_induk'];

            // $data = preg_replace( '/[^0-9]/', '', $data );
            $data = substr($data, 4);

            return $data;
        }else{
            return false;
        }
    }

    function add_zero_prefix($length_code, $code){
        if(strlen($code) < $length_code){
            $min = $length_code - strlen($code);
            $code = str_repeat('0', $min).''.$code;
        }

        return $code;
    }

}
?>