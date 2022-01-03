<?php

class IzinModel extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function get_data($nomor_induk=null, $id_jenis_izin=null, $kali_cuti=null, $sisa_cuti=null, $count=false){
        $this->db->select('*, (j.jatah_izin - (SELECT SUM(lama_hari) FROM tb_izin WHERE nomor_induk=i.nomor_induk)) as sisa_cuti');
        // $this->db->select('*, ');
        if(isset($nomor_induk))
            $this->db->where('i.nomor_induk', $nomor_induk);
        if(isset($id_jenis_izin))
            $this->db->where('i.id_jenis_izin', $id_jenis_izin);
        if(isset($kali_cuti))
            $this->db->having($kali_cuti.' <= COUNT(i.nomor_induk)');
        if(isset($sisa_cuti))
            $this->db->having($sisa_cuti.' <= (j.jatah_izin - (SELECT SUM(lama_hari) FROM tb_izin WHERE nomor_induk=i.nomor_induk))');

        if(isset($kali_cuti) or isset($sisa_cuti))
            $this->db->group_by('i.nomor_induk');

        $this->db->where('i.nomor_induk=k.nomor_induk and i.nomor_induk=i.nomor_induk and i.id_jenis_izin=j.id_jenis_izin');
        $data = $this->db->get('izin i, karyawan k, jenis_izin j');

        if(!$count)
            $data = $data->result_array();
        else
            $data = $data->num_rows();

        return $data;
    }

    function add($nomor_induk, $data){
        $data['nomor_induk'] = $nomor_induk;

        $insert = $this->db->insert('izin', $data);
        return ['status' => ($this->db->affected_rows()>0)? 1 : 0];
    }

    function update($nomor_induk, $data){
        $update = $this->db->where('nomor_induk', $nomor_induk)->update('izin', $data);

        return ['status' => ($this->db->affected_rows()>0)? 1 : 0];
    }

    function delete($id_izin){
        $delete = $this->db->delete('izin', ['id_izin' => $id_izin]);

        return ['status' => ($this->db->affected_rows()>0)? 1 : 0];
    }

    function get_jenis_izin($id_jenis_izin=null){
        if(isset($id_jenis_izin))
            $this->db->where('id_jenis_izin', $id_jenis_izin);

        $data = $this->db->get('jenis_izin')->result_array();

        return $data;
    }


}

?>