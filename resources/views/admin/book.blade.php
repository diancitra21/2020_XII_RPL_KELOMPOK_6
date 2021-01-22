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
                <a href = "{{URL::to('/tambah_buku')}}" class="btn btn-3d btn-danger mr-2">Tambah Buku</a><br><br><br><br><br>
                  <div id="datatables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatables-example"></label></div></div></div>
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">Id</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Judul Buku</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Kelas</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Penerbit</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Jumlah Halaman</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Stok Buku</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Kategori</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Action</th>
                      </tr>
                      </thead>
                      <tbody>    
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>Indonesia</td>
                        <td>10</td>
                        <td>Buku Kita</td>
                        <td>300</td>
                        <td>70</td>                        
                        <td>Buku Pelajaran</td>
                        <td><a href = "{{URL::to('/edit')}}"> <span class="fa fa-edit fa-2x"></span> </a>
                            <a href="{{URL::to('/hapus-admin')}}"><span class="fa fa-trash fa-2x"></span></a>
                        </td>

                      </tr>
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
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="datatables-example_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="datatables-example_previous"><a href="#" aria-controls="datatables-example" data-dt-idx="0" tabindex="0">Previous</a></li>
                    <li class="paginate_button active"><a href="#" aria-controls="datatables-example" data-dt-idx="1" tabindex="0">1</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="datatables-example" data-dt-idx="2" tabindex="0">2</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="datatables-example" data-dt-idx="3" tabindex="0">3</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="datatables-example" data-dt-idx="4" tabindex="0">4</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="datatables-example" data-dt-idx="5" tabindex="0">5</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="datatables-example" data-dt-idx="6" tabindex="0">6</a></li>
                    <li class="paginate_button next" id="datatables-example_next"><a href="#" aria-controls="datatables-example" data-dt-idx="7" tabindex="0">Next</a></li>
                  </ul>
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