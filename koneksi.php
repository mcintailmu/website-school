<?php
	$koneksi = mysqli_connect("localhost","root","","pembayaran");
	if(!$koneksi){
		echo "<h1 align='center'>Database tidak terhubung!</h1>";	
		exit();
	}


?>