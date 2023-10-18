<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}
	 
	public function index()
	{
		$data['content']='beranda';
		$this->load->view('welcome_message', $data);
	}
	public function beranda()
	{
		$data['content']='beranda';
		$this->load->view('welcome_message', $data);
	}

	public function penerbit()
	{
		$data['DataPencarianBuku']	=$this->MSudi->GetData('crud_db');
		$data['content']='penerbit/VPenerbit';
		$this->load->view('welcome_message');
	}

	public function penerbitInsert()
	{
		$add['kd_buku']		= $this->input->post('kd_buku');
		$add['judul_buku']	= $this->input->post('judul_buku');
		$add['pengarang']	= $this->input->post('pengarang');
		$add['penerbit']	= $this->input->post('penerbit');

		$this->MSudi->AddData('crud_db', $add);

		redirect(site_url('Welcome/penerbit'));
	}

	public function penerbitUpdate()
	{

	}

	public function penerbitDelete()
	{

	}





	// Data Bagian buku
	public function buku()
	{
		$data['content']='buku/buku';
		$this->load->view('welcome_message', $data);
	}

	public function inputbuku()
	{
		$add['id_buku']		= $this->input->post('id_buku');
		$add['kategori_buku']	= $this->input->post('kategori_buku');
		$add['pengarang']	= $this->input->post('pengarang');
		$add['penerbit']	= $this->input->post('penerbit');

		$this->MSudi->AddData('tabel_buku', $add);

		redirect(site_url('Welcome/Buku'));
	}

}
