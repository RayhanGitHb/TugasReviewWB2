<?php
class Toko extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	
	function index(){
		$data['transaksi'] = $this->m_data->tampil_data()->result();
		$this->load->view('tampil_data',$data);
	}
	
	function tambah(){
		$this->load->view('input_data');
	}
	
	function tambah_aksi(){
		$this->form_validation->set_rules('nama','Nama','required|max_length[50]');
		$this->form_validation->set_rules('nohp','Nohp','required|min_length[12]|max_length[20]');
		
		if($this->form_validation->run() == TRUE)
		{
			$nama = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$harga = $this->input->post('harga');
			$ukuran = $this->input->post('ukuran');
			
			
			$data = array(
			'nama' => $nama,
			'nohp' => $nohp,
			'harga' => $harga,
			'ukuran' => $ukuran,
			);
			$this->m_data->input_data($data, 'transaksi');
			redirect('toko/index');
			}else{
				$this->load->view('input_data');
			}
	}
			
	
	function hapus($id){
		  $where = array('id' => $id);
		  $this->m_data->hapus_data($where,'transaksi');
		  redirect('toko/index');
	}
	
}