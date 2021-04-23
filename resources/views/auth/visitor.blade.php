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
			 <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text"  name="nama" class="form-text mask-cep" required="">
                        <span class="bar"></span>
                        <label>Nama Pengunjung</label>
                      </div>


                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4><div style='text-align:left;'><font color="GREY">Jabatan</h4>
                        <select name="jabatan" class="form-control">
                          @foreach($pst as $data)
                          <option value="{{ $data->pst_id }}"> {{ $data->pst_jabatan }} </option>
                          @endforeach
                        </select>
                      </div>


                      <div style="margin-top:40px !important;">
                        <h4><div style='text-align:left;'><font color="GREY">Tanggal Kunjungan</h4>
                       
                      
            
                      
                        
                          <input id="tgl_pinjam" type="date" class="form-control" name="tanggal" value="{{date('Y-m-d',strtotime(Carbon\Carbon::today()->toDateString())) }}" required  redonly >
                          @if ($errors->has('tgl_pinjam'))
                          <span class="help-block">
                            <strong>{{$errors->first('tgl_pinjam') }}</strong>
                          </span>
                          @endif
                      </div>
      







		<tr>
			<td></td>
			<td></td>
			<td>
				<button class="btn btn-success btn-lg" type="submit">Simpan</button>
				</td>
				@csrf

				 @include('sweetalert::alert')
		</tr>
	</table>
</form>
<hr/>


 
 