@extends('layouts.master-admin')
@section('content')
<div id="content">
<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
      <h3 class="animated fadeInLeft">Form Tambah Buku</h3>
    </div>
  </div>
</div>
<center>
<div class="form-element">
  <div class="col-md-12 padding-0">
    <div class="col-md-8">
      <div class="panel form-element-padding">
        <div class="panel-heading">
          <center><h4>Tambah Buku</h4></center>
        </div>
        <div class="panel-body" style="padding-bottom:30px;">
          <div class="col-md-12">
          <!--<div class="form-group"><label class="col-sm-2 control-label text-right">book id</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>-->
        <div class="form-group"><label class="col-sm-2 control-label text-right">Title Book</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label text-right">Type Book</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label text-right">Publication Year</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label text-right">Publisher</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label text-right">Page Thickness</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div class="form-group"><label class="col-sm-2 control-label text-right">Author</label>
          <div class="col-sm-10"><input type="text" class="form-control"></div>
        </div>
        <div>
          <br><br>
          <button type="submit" class="btn btn-3d btn-success mr-2"><a href="{{URL::to('/list-buku-admin')}}">Save</a></button>
        </div>
      </td>
    </center>
@endsection