@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Data Buku</h3></div>

      <div class="panel-body">
        <div class="responsive-table">
         <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
  <div class="col-sm-6">
 </div></div></div></div><form action="/list-book/cari" method="GET" class="text-right" style="float:right">
                <label><b>Search :</b></label>
                   <input type="text"  name="cari" value="{{old('cari')}}">
                   
                 </form>
                 <div class="dt-buttons btn-group">
                  
          <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>
            <div class="row">
              <div class="col-sm-6">
                  <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Judul Buku </th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Kelas</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Penerbit</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Jumlah Halaman</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Jumlah Buku</th>

                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Stok Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Kategori Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Koleksi Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Action</th>
                      </tr>
                      </thead>

                       <tbody>
                        @foreach($book as $data)
                      <tr role="row" class="odd">
                        <td>{{$row++}}</td>
                        <td>{{$data ->bok_title_book}}</td>
                        <td>{{$data ->cls_tingkatan}}</td>
                        <td>{{$data ->bok_publisher}} </td>
                        <td>{{$data ->bok_page_total}} </td>
                        <td>{{$data ->bok_total}} </td>
                        <td>
                            @if ($data->bok_stok == 0)
                                Stok Habis
                            @else
                                {{ $data->bok_stok }}
                            @endif
                        </td>
                        <td>{{$data ->cat_book_category}} </td>
                        <td>{{$data ->col_rack}} </td>
                        <td>
                          <a href = "{{URL::to('/pinjam_buku/'.$data->bok_id)}}" class="btn btn-3d bg-info mr-2"><font color="white">Pinjam</font></a><br><br><br>
                            {{csrf_field()}}

                        @include('sweetalert::alert')




                          </td>
                      </tr>

                      @endforeach


                      <tr role="row" class="odd">

                      </tr>
                      <tr role="row" class="odd">

                      </tr>
                      <tr role="row" class="odd">

                      </tr>
                      <tr role="row" class="odd">

                      </tr>
                    </tbody>
                  </table>
                  {{$book->links()}}
                </div>
              </div>
              <div class="row">
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
