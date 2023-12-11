<?php
class Tabung
{
	function volume($pi, $r, $t)
	{
		echo "Phi = " . $pi . "<br>";
		echo "jari = " . $r . "<br>";
		echo "tinggi = " . $t . "<br>";
		$volume = $pi * $r * $r * $t;
		echo "volume tabung dengan tinggi " . $t . " adalah " . $volume;

	}
	function luas($pi, $r, $t)
	{
		$luas = 2 * $pi * $r * ($r + $t);
		echo "Luas permukaan tabung dengan tinggi " . $t . " adalah " . $luas;
	}
	function luasS($pi, $r, $t)
	{
		$luassel = 2 * $pi * $r * $t;
		echo "Luas permukaan selimut dengan tinggi " . $t . " adalah " . $luassel;
	}
}
?>
