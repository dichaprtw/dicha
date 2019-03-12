<?php
include 'koneksi.php';
session_start();
//$conn = mysqli_connect("localhost","root","","tugaspost");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con,"SELECT *FROM user Where username='$username' AND password='$password'");

$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)>0){
	//login= 
	//fungsi>0 kalo misal login id bener pass salah dio nambah jdi 1
	$_SESION['username']=$username;
	$_SESION['id']=$data['id'];
	header("location: home2.php");
}
else
{
	echo "salah password tu";
}