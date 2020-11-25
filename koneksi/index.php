<?php
// buat database dahulu dengan nama "login"
$db = mysqli_connect('localhost', 'root', '', 'login');
if(!$db){
	die('Gagal terhubung ke database');
} ?>