@extends('layouts.master-admin')
@section('content')
<div id="content">
              <div class="col-sm-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h3>Form Pengunjung</h3>
                  </div>
                  <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                     <div class="col-md-12">
                      <form action="{{URL::to('/buku_tamu')}}" method="POST">
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="nama" class="form-text mask-date" required="">
                        <span class="bar"></span>
                        <label>Nama Pengunjung</label>
                      </div>


                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Jabatan</h4>
                        <select name="jabatan" class="form-control">
                          @foreach($pst as $data)
                          <option value="{{ $data->pst_id }}"> {{ $data->pst_position }} </option>
                          @endforeach
                        </select>
                        
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Tujuan Kunjungan</h4>
                        <select name="tujuan" class="form-control">
                          @foreach($pps as $data)
                          <option value="{{ $data->pps_id }}"> {{ $data->pps_purpose }} </option>
                          @endforeach
                        </select>
                        
                      </div>

                      <div style="margin-top:40px !important;">
                        <h4>Tanggal Kunjungan</h4>
                       
                      
            
                      
                        
                          <input id="tgl_pinjam" type="date" class="form-control" name="tanggal" value="{{date('Y-m-d',strtotime(Carbon\Carbon::today()->toDateString())) }}" required  redonly >
                          @if ($errors->has('tgl_pinjam'))
                          <span class="help-block">
                            <strong>{{$errors->first('tgl_pinjam') }}</strong>
                          </span>
                          @endif
                      </div>
                        <button type="submit" class="btn btn-3d btn-primary mr-2">Simpan</button>
                        <button type="back" class="btn btn-3d btn-danger mr-2">Cancel</button>
                        {{csrf_field()}}
                      
                    </div>
                  </div>
                </div>
              </div>

@endsection