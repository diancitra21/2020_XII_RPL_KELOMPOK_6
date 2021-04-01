@extends('layouts.master-visitor')
@section('content')
<!DOCTYPE html>
<html>
<head>

	
	  <head>
	  	
  <div class="panel">
   <div class="panel-body ">
    

    <div class="col-md-12 col-sm-12">
     <h3 class="animated fadeInLeft"></h3>
      <p class="animated fadeInDown"><span ></span></p>
    </div>
    <div class="col-md-6 col-sm-12">
     <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
      <h3 style="color:#DDDDDE;"></span></h3>
       <h1 style="margin-top: -10px;color: #ddd;"><sup></sup></h1>
     </div>
     <div class="col-md-6 col-sm-6">
        <div class="shadow">
      
      </div>
      
      
    </div>
  </div> 
</div>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HALAMAN TAMU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <CENTER>
  <div class="container">
  	<div class="page-header">
  	
<div class="container">
	<div class="page-header">
<h3>FORM VISITOR</h3>
	</div>
<form action="" method="post">
	<table >

		<tr>
			<td>Nama Pengunjung</td>
			<td>:</td>
			<td>
				<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Pengunjung" size="30">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td></td>
			<td>
				<input  class="form-control" type="text" name="Alamat" placeholder="Alamat Pengunjung" size="30">
			</td>
		</tr>
		<tr>
			
			
		</tr>
		<tr>
			<td>Tujuan</td>
			<td></td>
			<td>
				<select  class="form-control" name="Tujuan"> 
					<option value="" selected>-Tujuan Kunjungan-</option>
					<option>Kunjungan Biasa Membaca</option>
					<option>Refleshing</option>
					<option>Tugas Kuliah</option>
					<option>Pencarian Literatur</option>
					<option>Pengembalian Buku</option>
					<option>Pendaftaran Anggota</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success btn-lg" type="submit" name="tambah">Simpan</button>
				</td>
		</tr>
	</table>
</form>
<hr/>


 
 