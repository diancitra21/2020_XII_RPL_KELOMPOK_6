@extends('layouts.master-admin')
@section('content')
<div id="content">
              <div class="col-sm-12">
                <div class="col-md-12 panel">
                  <div class="col-md-12 panel-heading">
                    <h3>Form Edit Buku</h3>
                  </div>
                  <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                     <div class="col-md-12">
                      <form action="{{URL::to('/update',$book->bok_id)}}" method="POST">  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-date" name="judul_buku" required="" value="{{$book->bok_title_book}}">
                        <span class="bar"></span>
                        <label>Judul Buku</label>

                      </div>


                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>kelas</h4>
                        <select name="kelas" class="form-control">
                          @foreach($class as $data)
                          <option value="{{ $data->cls_id }}"> {{ $data->cls_tingkatan }} </option>
                          @endforeach
                        </select>
                        
                      </div>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="penerbit" required="" value="{{$book->bok_publisher}}">
                        <span class="bar"></span>
                        <label>Penerbit</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="number" maxlength="4" name="jumlah_halaman" class="form-text mask-date_time"  required="" value="{{$book->bok_page_total}}">
                        <span class="bar"></span>
                        <label>Jumlah Halaman</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="number" maxlength="4" name="jumlah_buku" class="form-text mask-cep"  required="" value="{{$book->bok_total}}">
                        <span class="bar"></span>
                        <label>Jumlah Buku</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="number" maxlength="4" name="stok_buku" class="form-text mask-cep"  required="" value="{{$book->bok_total}}">
                        <span class="bar"></span>
                        <label>Stok Buku</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>kategori Buku</h4>
                        <select name="kategori_buku" class="form-control">
                          @foreach($category as $data)
                          <option value="{{ $data->cat_id }}"> {{ $data->cat_book_category }} </option>
                          @endforeach
                        </select>
                      </div>
                       <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <h4>Koleksi Buku</h4>
                        <select name="koleksi_buku" class="form-control">
                      @foreach($collection as $data)
                          <option value="{{ $data->col_id }}"> {{ $data->col_rack }} </option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-3d btn-primary mr-2">Submit</button>
                        <a href="/books" class="btn btn-3d btn-dark mr-2">Kembali</a>
                        {{csrf_field()}}
                    </form>
                    </div>
                  </div>
                </div>
              </div>

@endsection  