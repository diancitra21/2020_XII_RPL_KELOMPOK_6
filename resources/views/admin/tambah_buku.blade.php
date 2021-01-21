@extends('layouts.master-admin')

@section('content')
<div id="content">
              <div class="col-sm-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h3>Form Tambah Buku</h3>
                  </div>
                  <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                     <div class="col-md-12">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-date" required="">
                        <span class="bar"></span>
                        <label>Judul Buku</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" required="">
                        <span class="bar"></span>
                        <label>Penerbit</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-date_time" required="">
                        <span class="bar"></span>
                        <label>Jumlah Halaman</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-cep" required="">
                        <span class="bar"></span>
                        <label>Jumlah Buku</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-cep_with_callback" required="">
                        <span class="bar"></span>
                        <label>kategori Buku</label>
                      </div>

                      <a href = "{{URL::to('/')}}" class="btn btn-3d btn-primary mr-2">Simpan</a>

                    </div>
                  </div>
                </div>
              </div>

@endsection