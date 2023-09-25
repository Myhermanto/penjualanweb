<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$data = array(
			'title' => 'Penjualan Website',
			'conten' => 'v_dashboard',
		);
		$this->load->view('layout/wrapper', $data);	
	}
	
}
