<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('M_admin');
	}

public function cekLogin()
{
	// code...

	$login = $this->session->userdata('nip');
	if ($login==false) {
		// code...
		$this->session->sess_destroy();
		redirect(base_url('welcome/index'));
	}
}
	public function dashboard()
	{
		// code...
		$data['obat']				=	$this->M_admin->getObat()->result();
		$data['kategori']		=	$this->M_admin->getKategori()->result();
		$data['transaksi']	=	$this->M_admin->getTransaksi()->result();
		$this->cekLogin();
		$this->load->view('admin/dashboard',$data);
	}
	public function login()
	{
		# code...
		$nip=$this->input->post('nip');
		$pass=$this->input->post('password');

		$session= array(
			'nip'=>$nip
		);
		$this->session->set_userdata($session);


		$where=array(
			'nip'=>$nip,
			'password'=>$pass
		);
		$check=$this->M_admin->cek_login('tbl_akses',$where)->num_rows();
		$this->load->view('admin/dashboard');
		if(!($this->session->userdata('nip'))){
			redirect('admin/dashboard');
		}else{
				if($check>0){
					redirect('admin/dashboard');
				}else{
					$this->session->set_flashdata('msg','Username Dan Password Salah');
					redirect(base_url());
					// $this->load->view('admin/dashboard');
				}
		}

		// redirect(base_url('admin/dashboard'));
	}
	// =========================== Halaman Tambah Obat ================

	function form_obat()
	{
			$this->cekLogin();
			$data['kategori'] =	$this->M_admin->getKategori()->result();
			$this->load->view('admin/tambah_obat',$data);
	}

function tambah_obat()
{
	// code...
	$this->cekLogin();
	$namaObat			=	$this->input->post('nama_obat');
	$kodeObat			=	$this->input->post('kode_obat');
	$kategori			=	$this->input->post('kategori_obat');
	$produsen			=	$this->input->post('produsen_obat');
	$distributor	=	$this->input->post('distributor_obat');
	$satuan				=	$this->input->post('satuan_obat');
	$hargaBeli		=	$this->input->post('harga_beli');
	$harga				=	$this->input->post('harga');
	$stok					=	$this->input->post('stok');
	$masuk				=	$this->input->post('tanggal_masuk');
	$expired			=	$this->input->post('tanggal_expired');
	$this->M_admin->inputObat($namaObat,$kodeObat,$kategori,$produsen,$distributor,$satuan,$hargaBeli,$harga,$stok,$masuk,$expired);
	redirect(base_url('admin/tabel_obat'));
}
function tabel_obat()
{
	$this->cekLogin();

		$data['obat']= $this->M_admin->getObat()->result();
		$this->load->view('admin/tabel_obat',$data);
}
function deleteObat($value)
{
	$this->M_admin->deleteObat($value);
	redirect(base_url('admin/tabel_obat'));
}

function editObat($value)
{
	// code...
	// echo $value;
	$this->cekLogin();

	$data['obat']=$this->M_admin->getUpdateObat($value)->result();
	$this->load->view('update/update_obat',$data);
}

function updateObat($id)
{
	// code...
	// echo $value;
	$namaObat			=	$this->input->post('nama_obat');
	$kodeObat			=	$this->input->post('kode_obat');
	$kategori			=	$this->input->post('kategori_obat');
	$produsen			=	$this->input->post('produsen_obat');
	$distributor	=	$this->input->post('distributor_obat');
	$satuan				=	$this->input->post('satuan_obat');
	$hargaBeli		=	$this->input->post('harga_beli');
	$harga				=	$this->input->post('harga');
	$stok					=	$this->input->post('stok');
	$masuk				=	$this->input->post('tanggal_masuk');
	$expired			=	$this->input->post('tanggal_expired');
	$this->M_admin->updateObat($id,$namaObat,$kodeObat,$kategori,$produsen,$distributor,$satuan,$hargaBeli,$harga,$stok,$masuk,$expired);
	// $this->load->view('update/update_obat');
	redirect(base_url('admin/tabel_obat'));
}


// ===================	Kategori Obat ==========================
function tabel_kategori()
{
	$this->cekLogin();

	$data['kategori'] = $this->M_admin->getKategori();

	$this->load->view('admin/tabel_kategori',$data);
}
	function tambah_kategori()
	{
		$this->cekLogin();

			$this->load->view('admin/tambah_kategori');
	}

	function inputKategori()
	{
		// code...

		$kategori = $this->input->post('kategori');
		// echo $kategori;
		$this->M_admin->inputKategori($kategori);
		redirect(base_url('admin/tabel_kategori'));
	}
	function deleteKategori($value)
	{
		// code...

		$this->M_admin->deleteKategori($value);
		// echo $value;
		redirect(base_url('admin/tabel_kategori'));
	}

	function editKategori($id)
	{
		$this->cekLogin();

		$data['kategori'] = $this->M_admin->getUpdateKategori($id)->result();
		$this->load->view('update/update_kategori',$data);
	}
	function updateKategori($value)
	{
		// code...
		$kategori	= $this->input->post('kategori');
		$this->M_admin->updateKategori($value,$kategori);
		redirect(base_url('admin/tabel_kategori'));
	}



// ==================== Tabel Transaksi =================//



	function tabel_transaksi()
	{
		$this->cekLogin();

			$data['transaksi']=$this->M_admin->getTransaksi()->result();
			$this->load->view('admin/tabel_transaksi',$data	);

	}

	function transaksi($value)
	{
		// code...
		// echo $value;
		$this->cekLogin();

		$data['obat']	=	$this->M_admin->transaksi($value)->result();
		$data['stok']	=	$this->M_admin->getObat();
		$this->load->view('admin/transaksi',$data);
	}

	function inputTransaksi($id)
	{
		// code...
		$namaObat	=	$this->input->post('nama_obat');
		$kategori	=	$this->input->post('kategori');
		$lokasi		=	$this->input->post('lokasi');
		$tanggal	=	$this->input->post('tanggal');
		$stok			=	$this->input->post('stok');
		$jumlah		=	$this->input->post('jumlah');
		$harga 		= $this->input->post('harga');
		$kodeObat	=	$this->input->post('kode_obat');
		$this->M_admin->inputTransaksi($id,$namaObat,$kategori,$lokasi,$tanggal,$stok,$jumlah,$harga,$kodeObat);
		redirect(base_url('admin/tabel_transaksi'));
		// echo $id.$namaObat.$kategori.$satuan.$lokasi.$tanggal.$jumlah;
	}

	function deleteTransaksi($value)
	{
		$this->M_admin->deleteTransaksi($value);
		redirect(base_url('admin/tabel_transaksi'));

	}

	function logout()
	{
		# code...
		session_destroy();
		redirect(base_url());

	}

	function invoice()
	{
		// code...
		$data['transaksi']	=	$this->M_admin->getTransaksi()->result();
		$this->load->view('admin/invoice',$data);
	}
	function pdf()
	{
		// code...
		$this->load->library('dompdf_gen');
		$data['transaksi']	=	$this->M_admin->getTransaksi()->result();
		$this->load->view('admin/invoice',$data);
		$paper_size = 'A4';
		$orientation	=	'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Transaksi.pdf",array('Attachment'=>0));
	}


	function cetak($value)
	{
		// code...
		$this->load->library('dompdf_gen');
		$data['transaksi']	=	$this->M_admin->getCetak($value)->result();
		$this->load->view('admin/invoice',$data);
		$paper_size = 'A4';
		$orientation	=	'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Transaksi.pdf",array('Attachment'=>0));
	}
	// ================================ User ==========================
	function tabel_user()
	{
		// code...
		$data['user']	=	$this->M_admin->getUser()->result();
		$this->load->view('admin/tabel_user',$data);
	}



}
