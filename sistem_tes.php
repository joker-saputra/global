<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem_aplikasi extends CI_Model {
	public function FunctionName($value='')
	{
		echo "string";
	}
	function version(){
		return '0.1';
	}
	function sistem_update(){
		 $connected = @fsockopen("www.google.com", 80);
		 if ($connected){
			$link = 'https://raw.githubusercontent.com/joker-saputra/global/master/update.php';
			$update = 'application/models/Sistem_aplikasi.php';
		  	$is_conn = copy($link, $update);
		  	fclose($connected);
		 }
	}
}
