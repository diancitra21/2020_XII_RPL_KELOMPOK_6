@extends('layouts.master-admin')
@section('content')
<div id="content">
              <div class="col-sm-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h3>Form Peminjaman</h3>
                  </div>
                  <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                     <div class="col-md-12">
                      <form action="{{URL::to('/Peminjaman-buku')}}" method="POST">
                      
                     
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Buku</h4>
                        <input type="text" class="form-text mask-date" name="judul_buku" readonly="" required="" value="{{$book->book_id}}">
                        
                      </div><br>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Nama Peminjam</h4>
                        
                        <select name="namapeminjam" class="form-control">
                       @foreach ($user as $data)
                          <option value="{{$data -> usr_name}}">{{$data->usr_name}}</option>
                          @endforeach
                        </select>
                      </div><br>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Jumlah Pinjam</h4>
                        <input type="number" class="form-text mask-date" name="jumlahpinjam" required="" value="">
                        <span class="bar"></span>
                      </div>
                      <label >Date:</label>
                      <input type="text" id="date">
      
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Tanggal</h4>
                        <input type="number" class="form-text mask-date" name="tgl_pinjam" required="" value="now">
                        <span class="bar"></span>
                      </div>


                      
                        <button type ="submit" class="btn btn-3d btn-success">Pinjam</a>
                        
                      </div>  {{csrf_field()}}
                      
                    </div>
                  </div>
                </div>
              </div>

@endsection