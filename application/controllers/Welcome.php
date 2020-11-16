<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}

	public function index()
	{
		if($this->session->userdata('Login'))
		{
			$data['content']='VBlank';
			$this->load->view('VBackend',$data);
		}
		else
		{
			 redirect(site_url('Login'));
		}

	}

	public function DataSiswa()
	{
		if($this->uri->segment(4)=='view')
		{
			$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
            		$data['detail']['id_kelas']= $tampil->id_kelas;
            		$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['id_petugas']= $tampil->id_petugas;
            		$data['detail']['id_pembayaran']= $tampil->id_pembayaran; 
			$data['content']='VFormUpdateSiswa';
		}
		else
		{	
		//$data['DataSiswa']=$this->MSudi->GetData('tbl_siswa'); 
/*		$onjoin = "tbl_siswa.id_kelas = tbl_kelas.id_kelas and 
	   	tbl_siswa.id_spp = tbl_spp.id_spp"; 
			
		$data['VSiswa']=$this->MSudi->GetDataJoin('tbl_siswa','tbl_kelas','tbl_spp',$onjoin); */

		$data['DataSiswa']=$this->MSudi->GetDataJoinSiswa('tbl_siswa','tbl_kelas','tbl_spp','tbl_petugas','tbl_pembayaran');

			//$data['DataKelas']=$this->MSudi->GetData('tbl_siswa');

		$data['content']='VSiswa';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSiswa()
	{
		$data['id_kelas']=$this->MSudi->GetData('tbl_kelas');
		$data['id_spp']=$this->MSudi->GetData('tbl_spp');
		$data['id_petugas']=$this->MSudi->GetData('tbl_petugas');
		$data['id_pembayaran']=$this->MSudi->GetData('tbl_pembayaran'); 
		$data['content']='VFormAddSiswa';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSiswa()
	{
		  $add['nis']=$this->input->post('nis');
         	 $add['nama']= $this->input->post('nama');
         	 $add['alamat']= $this->input->post('alamat');
         	 $add['id_kelas']= $this->input->post('id_kelas');
         	 $add['id_spp']= $this->input->post('id_spp'); 
         	 $add['id_petugas']= $this->input->post('id_petugas');
         	 $add['id_pembayaran']= $this->input->post('id_pembayaran');  

        	 $this->MSudi->AddData('tbl_siswa',$add);
        	 redirect(site_url('Welcome/DataSiswa'));
	}


	public function VFormUpdateSiswa()
	{

	$nis=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_siswa','nis',$nis)->row();
			$data['detail']['nis']= $tampil->nis;
            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
            		$data['detail']['id_kelas']= $tampil->id_kelas;
            		$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['id_petugas']= $tampil->id_petugas;
            		$data['detail']['id_pembayaran']= $tampil->id_pembayaran; 
			$data['content']='VFormUpdateSiswa';


		$nis=$this->uri->segment(3);
			
		$data['id_kelas']=$this->MSudi->GetData('tbl_kelas');
		$data['id_spp']=$this->MSudi->GetData('tbl_spp');
		$data['id_petugas']=$this->MSudi->GetData('tbl_petugas');
		$data['id_pembayaran']=$this->MSudi->GetData('tbl_pembayaran');
		
		$data['content']='VFormUpdateSiswa'; 
		$this->load->view('VBackend',$data);
	}
	public function UpdateDataSiswa()
	{
		 $nis=$this->input->post('nis');
		 $update['nama']= $this->input->post('nama');
         	 $update['alamat']= $this->input->post('alamat');
         	 $update['id_kelas']= $this->input->post('id_kelas');
         	 $update['id_spp']= $this->input->post('id_spp');
         	 $update['id_petugas']= $this->input->post('id_petugas');
         	 $update['id_pembayaran']= $this->input->post('id_pembayaran');  
          	 $this->MSudi->UpdateData('tbl_siswa','nis',$nis,$update);
		 redirect(site_url('Welcome/DataSiswa'));
	}


	public function DeleteDataSiswa()
	{
		$nis=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_siswa','nis',$nis);
        	 redirect(site_url('Welcome/DataSiswa'));
	}

	/*Data Kelas*/
	public function DataKelas()
	{

		if($this->uri->segment(4)=='view')
		{
			$id_kelas=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_kelas','id_kelas',$id_kelas)->row();
			$data['detail']['id_kelas']= $tampil->id_kelas;
            		$data['detail']['kelas']= $tampil->kelas;
            		$data['detail']['jurusan']= $tampil->jurusan;
			$data['content']='VFormUpdateKelas';
		}
		else
		{	
			$data['DataKelas']=$this->MSudi->GetData('tbl_kelas');
			$data['content']='VKelas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddKelas()
	{
		$data['content']='VFormAddKelas';
		$this->load->view('VBackend',$data);
	}
	public function AddDataKelas()
	{
		 $add['id_kelas']='';
         	 $add['kelas']= $this->input->post('kelas');
         	 $add['jurusan']= $this->input->post('jurusan');  
        	 $this->MSudi->AddData('tbl_kelas',$add);
        	 redirect(site_url('Welcome/DataKelas'));
	}


	public function UpdateDataKelas()
	{
		$id_kelas=$this->input->post('id_kelas');
		 $update['kelas']= $this->input->post('kelas');
         	 $update['jurusan']= $this->input->post('jurusan');
          	 $this->MSudi->UpdateData('tbl_kelas','id_kelas',$id_kelas,$update);
		 redirect(site_url('Welcome/DataKelas'));
	}


	public function DeleteDataKelas()
	{
		 $id_kelas=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_kelas','id_kelas',$id_kelas);
        	 redirect(site_url('Welcome/DataKelas'));
	}

/*Data SPP*/
	public function DataSpp()
	{

		
		if($this->uri->segment(4)=='view')
		{
			$id_spp=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_spp','id_spp',$id_spp)->row();
			$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['nominal']= $tampil->nominal;
            		$data['detail']['tanggal']= $tampil->tanggal;
			$data['content']='VFormUpdateSpp';
		}
		else
		{	
			$data['DataSpp']=$this->MSudi->GetData('tbl_spp');
			$data['content']='VSpp';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddSpp()
	{
		$data['content']='VFormAddSpp';
		$this->load->view('VBackend',$data);
	}
	public function AddDataSpp()
	{
		 $add['id_spp']='';
         	 $add['nominal']= $this->input->post('nominal');
         	 $add['tanggal']= $this->input->post('tanggal');  
        	 $this->MSudi->AddData('tbl_spp',$add);
        	 redirect(site_url('Welcome/DataSpp'));
	}



	public function UpdateDataSpp()
	{
		 $id_spp=$this->input->post('id_spp');
		 $update['nominal']= $this->input->post('nominal');
         	 $update['tanggal']= $this->input->post('tanggal');
          	 $this->MSudi->UpdateData('tbl_spp','id_spp',$id_spp,$update);
		 redirect(site_url('Welcome/DataSpp'));
	}


	public function DeleteDataSpp()
	{
		 $id_spp=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_spp','id_spp',$id_spp);
        	 redirect(site_url('Welcome/DataSpp'));
	}

/*Data Petugas*/
	public function DataPetugas()
	{

		
		if($this->uri->segment(4)=='view')
		{
			$id_petugas=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_petugas','id_petugas',$id_petugas)->row();
			$data['detail']['id_petugas']= $tampil->id_petugas;
            		$data['detail']['nama_petugas']= $tampil->nama_petugas;
            		$data['detail']['no_telp']= $tampil->no_telp;
			$data['content']='VFormUpdatePetugas';
		}
		else
		{	
			$data['DataPetugas']=$this->MSudi->GetData('tbl_petugas');
			$data['content']='VPetugas';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPetugas()
	{
		$data['content']='VFormAddPetugas';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPetugas()
	{
		 $add['id_petugas']='';
         	 $add['nama_petugas']= $this->input->post('nama_petugas');
         	 $add['no_telp']= $this->input->post('no_telp');  
        	 $this->MSudi->AddData('tbl_petugas',$add);
        	 redirect(site_url('Welcome/DataPetugas'));
	}

	public function UpdateDataPetugas()
	{
		 $id_petugas=$this->input->post('id_petugas');
		 $update['nama_petugas']= $this->input->post('nama_petugas');
         	 $update['no_telp']= $this->input->post('no_telp');
          	 $this->MSudi->UpdateData('tbl_petugas','id_petugas',$id_petugas,$update);
		 redirect(site_url('Welcome/DataPetugas'));
	}


	public function DeleteDataPetugas()
	{
		 $id_petugas=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_petugas','id_petugas',$id_petugas);
        	 redirect(site_url('Welcome/DataPetugas'));
	}


	/*Data Pembayaran*/
	public function DataPembayaran()
	{

		
		if($this->uri->segment(4)=='view')
		{
			$id_pembayaran=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pembayaran','id_pembayaran',$id_pembayaran)->row();
			$data['detail']['id_pembayaran']= $tampil->id_pembayaran;
            		$data['detail']['id_spp']= $tampil->id_spp;
            		$data['detail']['id_petugas']= $tampil->id_petugas;
            		$data['detail']['tanggal']= $tampil->tanggal;
			$data['content']='VFormUpdatePembayaran';
		}
		else
		{	
			//$data['DataPembayaran']=$this->MSudi->GetData('tbl_pembayaran');//
			$data['DataPembayaran']=$this->MSudi->GetDataJoinPembayaran('tbl_pembayaran','tbl_spp','tbl_petugas');
			$data['content']='VPembayaran';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPembayaran()
	{
		$data['id_spp']=$this->MSudi->GetData('tbl_spp');
		$data['id_petugas']=$this->MSudi->GetData('tbl_petugas');
		$data['content']='VFormAddPembayaran';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPembayaran()
	{
		 $add['id_pembayaran']='';
         	 $add['id_spp']= $this->input->post('id_spp');
         	  $add['id_petugas']= $this->input->post('id_petugas');
         	 $add['tanggal']= $this->input->post('tanggal');  
        	 $this->MSudi->AddData('tbl_pembayaran',$add);
        	 redirect(site_url('Welcome/DataPembayaran'));
	}

// 1 //
	public function VFormUpdatePembayaran()
		{

		$nis=$this->uri->segment(3);
				$tampil=$this->MSudi->GetDataWhere('tbl_pembayaran','id_pembayaran',$nis)->row();
				$data['detail']['id_pembayaran']= $tampil->id_pembayaran;
	            		$data['detail']['id_spp']= $tampil->id_spp;
	            		$data['detail']['id_petugas']= $tampil->id_petugas;
	            		$data['detail']['tanggal']= $tampil->tanggal; 
				$data['content']='VFormUpdatePembayaran';


			$nis=$this->uri->segment(3);
				
			$data['id_spp']=$this->MSudi->GetData('tbl_spp');
			$data['id_petugas']=$this->MSudi->GetData('tbl_petugas');
			
			$data['content']='VFormUpdatePembayaran'; 
			$this->load->view('VBackend',$data);
		}

	public function UpdateDataPembayaran()
	{
		 $id_pembayaran=$this->input->post('id_pembayaran');
		 $update['id_spp']= $this->input->post('id_spp');
         	 $update['id_petugas']= $this->input->post('id_petugas');
         	 $update['tanggal']= $this->input->post('tanggal');
          	 $this->MSudi->UpdateData('tbl_pembayaran','id_pembayaran',$id_pembayaran,$update);
		 redirect(site_url('Welcome/DataPembayaran'));
	}


	public function DeleteDataPembayaran()
	{
		$id_pembayaran=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_pembayaran','id_pembayaran',$id_pembayaran);
        	 redirect(site_url('Welcome/DataPembayaran'));
	}


	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}





	
	

