@extends('layouts.master-admin')

@section('content')

<div id="content">

<div class="col-sm-12"> <div class="col-md-12 panel">

<div class="col-md-12 panel-heading">

<h3>Form Tambah rak</h3>

</div>

<div class="col-md-12 panel-body"> <div class="col-md-12">

<div class="col-md-12">

<form action="{{URL::to('/koleksi')}}" method="POST"> <div class="form-group form-animate-text" style="margin-top:40px

!important;"> <input type="text" name="nama_rak" class="form-text mask-date" required

=""> <span class="bar"></span>

<label>nama rak</label>

</div>

<button type="submit" class="btn btn-3d btn-primary mr-2">Simpan</button> <button type="back" class="btn btn-3d btn-danger mr-2">Cancel</button> {{csrf_field()}}

</div>

</div>

</div>

</div>


@endsection