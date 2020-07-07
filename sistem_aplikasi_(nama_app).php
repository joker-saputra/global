<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem_aplikasi extends CI_Model {
	function version(){
		return '0.1';
	}
	function sistem_update(){
		$link = 'https://raw.githubusercontent.com/joker-saputra/global/master/update.php';
		$update = 'application/models/Sistem_aplikasi.php';
		return copy($link, $update);;
	}
}
