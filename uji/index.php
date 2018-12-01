<?php
	
	$tambah = $kode+1;
	if ($tambah<1000) {
		$idk="P000".$tambah;
		echo $idk;
	} else{
		$idk="P00".$tambah;
	}
 ?>
