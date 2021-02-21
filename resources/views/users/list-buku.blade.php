@extends('layouts.master-user')
@section('content')
<!--<div id="content">
  @foreach($book as $data)
  <div class="col-md-4">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <div class="card">
        <div class="card-body"> 
      <h4 class="text-left"> </h4> 
      <img class="card-img-top img-fluid" src="asset/img/20.jpg" alt="Card image cap">
      <h3>{{$data->title_book}}</h3>
      <h3>kelas {{$data->tingkatan}}</h3> 
          <button type="button" class=" btn btn-outline btn-primary" data-toggle="modal" data-target="#modalPinjam">Pinjam Buku</button>
          <div class="modal fade" id="modalPinjam" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role ="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aris-hidden="true">&times;</span>
                    </button>
                  <h2 class="modal-title"><center>PEMINJAMAN</center></h2>
                    
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label>Nama Buku</label>
                        <input type="text" name="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Nama Peminjam</label>
                        <input type="text" name="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Pinjam</label>
                        <input type="text" name="" class="form-control">
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Pinjam</button>
                        <button type="submit" class="btn btn-danger">Kembali</button>
                      </div>
                    
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
      </div>
    </div>
      </div>
      
      <div class="col-md-6 col-sm-6 col-xs-6 text-right">
    </div>
  
  <div class="panel-body text-center">
    
  </div>
</div>
</div>
@endforeach-->
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Data Buku</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Stok Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Kategori Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Action</th>
                      </tr>
                      </thead>
                      <tbody>    
                        @foreach($book as $data)
                      <tr role="row" class="odd">
                        <td>{{$data->book_id}}</td>
                        <td>{{$data ->title_book}}</td>
                        <td>{{$data ->tingkatan}}</td>
                        <td>{{$data ->book_publisher}} </td>
                        <td>{{$data ->book_page_total}} </td>
                        <td>{{$data ->book_total}} </td>                        
                        <td>{{$data ->book_category}} </td>
                        <td>
                          <button type="button" class=" btn btn-outline btn-primary" data-toggle="modal" data-target="#modalPinjam">Pinjam Buku</button>
                           <div class="modal fade" id="modalPinjam" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role ="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aris-hidden="true">&times;</span>
                    </button>
                  <h2 class="modal-title"><center>PEMINJAMAN</center></h2>
                    
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label><b>Nama Peminjam :</b></label>
                        <input type="text" name="" class="form-control">
                      </div><br><br>
                      <div class="form-group">
                        <label><b>Jumlah Pinjam :</b></label>
                        <input type="text" name="" class="form-control">
                      </div><br><br>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-3d btn-success">Pinjam</button>
                        <button type="submit" class="btn btn-3d btn-danger mr-2">Kembali</button>
                      </div>
          
                            {{csrf_field()}}
                          
                        
                        
                                  <!--<a href="{{URL::to('delete/'.$data->book_id)}}">
                        <button type="submit" name="submit" class="btn btn-3d btn-danger mr">delete</button>-->
                      
                        
                              
                          </td>
                      </tr>

                      @endforeach
                      @include('sweetalert::alert')

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