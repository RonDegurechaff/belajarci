<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function GetDataJoin($tabel, $tabel1,$tabel2,$tabel3)
    {
/*
        $this->db->from($tabel1);
        $this->db->join($tabel2, $onjoin);
        $this->db->join($tabel3, $onjoin);
        $query = $this->db->get($tabel);    */
        $this->db->from($tabel);
        $this->db->join($tabel1,'tbl_siswa.id_kelas = tbl_kelas.id_kelas');
        $this->db->join($tabel2,'tbl_siswa.id_spp = tbl_spp.id_spp');
/*      $this->db->join($tabel3,'tbl_siswa.id_petugas = tbl_petugas.id_petugas');
        $this->db->join($tabel4,'tbl_siswa.id_pembayaran = tbl_pembayaran.id_pembayaran');
        $this->db->join($tabel5,'tbl_pembayaran.id_spp = tbl_spp.id_spp');
        $this->db->join($tabel6,'tbl_pembayaran.id_petugas = tbl_petugas.id_petugas');  */
        $query = $this->db->get($tabel);
        return $query->result();
    }

     function GetDataJoinSiswa($tabel,$tabel1,$tabel2,$tabel3,$tabel4)
    {
/*
        $this->db->from($tabel1);
        $this->db->join($tabel2, $onjoin);
        $this->db->join($tabel3, $onjoin);
        $query = $this->db->get($tabel);  */ 
        $this->db->select ('tbl_siswa.nis,tbl_siswa.nama,tbl_siswa.alamat,tbl_kelas.kelas,tbl_spp.nominal,tbl_petugas.nama_petugas,tbl_pembayaran.tanggal'); 
        $this->db->from($tabel);
        $this->db->join($tabel1,'tbl_kelas.id_kelas=tbl_siswa.id_kelas','left');
        $this->db->join($tabel2,'tbl_spp.id_spp = tbl_siswa.id_spp','left');
        $this->db->join($tabel3,'tbl_petugas.id_petugas = tbl_siswa.id_petugas','left');
        $this->db->join($tabel4,'tbl_pembayaran.id_pembayaran = tbl_siswa.id_pembayaran','left');
            $query = $this->db->get();
        return $query->result();
    }
    function GetDataJoinPembayaran($tabel,$tabel1,$tabel2) {
    $this->db->select ('tbl_pembayaran.id_pembayaran,tbl_pembayaran.tanggal,tbl_spp.nominal,tbl_petugas.nama_petugas'); 
        $this->db->from($tabel);
        $this->db->join($tabel1,'tbl_spp.id_spp = tbl_pembayaran.id_spp','left');
        $this->db->join($tabel2,'tbl_petugas.id_petugas = tbl_pembayaran.id_petugas','left');
            $query = $this->db->get();
        return $query->result();
       } 
}