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
                      <form action="{{URL::to('/Peminjaman-buku/'.$book->book_id)}}" method="POST">
                      @csrf
                     
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Judul Buku</h4>
                        
                        <input type="hidden" name="judul_buku" class="form-text mask-date" value="{{ $book->book_id }}">
<input type="text" class="form-text mask-date" name="judul_buku" disabled value="{{ $book->title_book }}">
                        
                      </div>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Nama Peminjam</h4>
                        
                        <select name="namapeminjam" class="form-control">
                       @foreach ($user as $data)
                          <option value="{{$data -> usr_id}}">{{$data->usr_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Jumlah Pinjam</h4>
                        <input type="number" class="form-text mask-date" name="jumlahpinjam" required="" value="">
                        <span class="bar"></span>
                      
            </div>
      <div style="margin-top:40px !important;">
                        <h4>Tanggal Pinjam</h4>
                       
                      
            
                      
                        
                          <input id="tgl_pinjam" type="date" class="form-control" name="tgl_pinjam" value="{{date('Y-m-d',strtotime(Carbon\Carbon::today()->toDateString())) }}" required  redonly >
                          @if ($errors->has('tgl_pinjam'))
                          <span class="help-block">
                            <strong>{{$errors->first('tgl_pinjam') }}</strong>
                          </span>
                          @endif
                      </div>
                    

                     <div  style="margin-top:40px !important;">
                        <h4>Tanggal Kembali</h4>
                        
                    
                    
                    
                                <input id="tgl_kembali" type="date"  class="form-control" name="tgl_kembali" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(5)->toDateString())) }}" required="" @if(Auth::user()->level == 'user') readonly @endif>
                                @if ($errors->has('tgl_kembali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_kembali') }}</strong>
                                    </span>
                                @endif
                            </div>
                     <br><br>
                 <button type ="submit" class="btn btn-3d btn-success">Pinjam</a>


                        </div>
    

                       
                        
                      </div>  {{csrf_field()}}
                      
                    </div>
                  </div>
                </div>
              </div>

@endsection