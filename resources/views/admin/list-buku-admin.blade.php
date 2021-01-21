@extends('layouts.master-admin')

@section('content')
<div id="content">

  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"><center>DAFTAR BUKU</center></h3>
                  
                    </div>
                  </div>
<div class="col-md-3">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <h4 class="text-left"><a href= "{{URL::to('/Peminjaman-buku')}}"> Indonesia</a> </h4> 
      
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
    </div>
  
  <div class="panel-body text-center">
    <input type="button" class=" btn btn-outline btn-primary" value="Pinjam Buku">
  </div>
</div>
</div>
</div>

<div class="col-md-3">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <h4 class="text-left"><a href= "{{URL::to('/Peminjaman-buku')}}"> Matematika</a> </h4> 
      
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
    </div>
  
  <div class="panel-body text-center">
    <input type="button" class=" btn btn-outline btn-primary" value="Pinjam Buku">
  </div>
</div>
</div>
</div>

<div class="col-md-3">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <h4 class="text-left"><a href= "{{URL::to('/Peminjaman-buku')}}"> Novel</a> </h4> 
      
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
    </div>
  
  <div class="panel-body text-center">
    <input type="button" class=" btn btn-outline btn-primary" value="Pinjam Buku">
  </div>
</div>
</div>
</div>


</div>
</div>
</div>


@endsection