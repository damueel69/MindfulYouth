<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabungCalculator
{

	public function hitung($jari_jari, $tinggi)
	{
		$phi = 3.14;
		$volume = $phi * pow($jari_jari, 2) * $tinggi;
		$luas_permukaan = 2 * $phi * $jari_jari * ($jari_jari + $tinggi);
		$luas_selimut = 2 * $phi * $jari_jari * $tinggi;

		echo "Phi " . $phi . "<br>";
		echo "Jari-Jari " . $jari_jari . "<br>";
		echo "Tinggi " . $tinggi . "<br>";
		echo "Volume Tabung adalah " . $volume . "<br>";
		echo "-------------------------<br>";
		echo "Luas Permukaan Tabung adalah " . $luas_permukaan . "<br>";
		echo "----------------------------<br>";
		echo "Luas Selimut adalah " . $luas_selimut . "<br>";
	}
}
