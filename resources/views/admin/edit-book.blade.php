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
                      <form action="{{URL::to('/update',$book->book_id)}}" method="POST">  
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-date" name="judul_buku" required="" value="{{$book->title_book}}">
                        <span class="bar"></span>
                        <label>Judul Buku</label>

                      </div>


                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time"name="kelas" required="" value="{{$book->class}}">
                        <span class="bar"></span>
                        <label>Kelas</label>
                        <select>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>Tidak Ada Kelas</option>
                        </select>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="penerbit" required="" value="{{$book->book_publisher}}">
                        <span class="bar"></span>
                        <label>Penerbit</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="jumlah_halaman" class="form-text mask-date_time"  required="" value="{{$book->book_page_total}}">
                        <span class="bar"></span>
                        <label>Jumlah Halaman</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="jumlah_buku" class="form-text mask-cep"  required="" value="{{$book->book_total}}">
                        <span class="bar"></span>
                        <label>Jumlah Buku</label>
                      </div>

                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" name="kategori_buku" class="form-text mask-cep_with_callback" required="" value="{{$book->book_category}}">
                        <span class="bar"></span>
                        <label>kategori Buku</label>
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