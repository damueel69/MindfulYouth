<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabungController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('tabungcalculator');
	}

	public function hitung_tabung()
	{
		// Menghitung volume, luas permukaan, dan luas selimut tabung
		$jari_jari = 5; // Ganti dengan nilai jari-jari yang sesuai
		$tinggi = 10; // Ganti dengan nilai tinggi yang sesuai

		$hasil_perhitungan = $this->tabungcalculator->hitung($jari_jari, $tinggi);

		// Tampilkan hasil perhitungan
		print_r($hasil_perhitungan);
	}
}
