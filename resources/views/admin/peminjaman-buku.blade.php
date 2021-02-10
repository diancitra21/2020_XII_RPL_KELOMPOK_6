@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3> Data Peminjaman</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
              <div class="col-sm-6">
                
                <div class="col-sm-6">
                  <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Nama Buku</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Nama Peminjam</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Jumlah Pinjam</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Tanggal Pinjam</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Tanggal Kembali</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Denda</th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Action</th>
                      </tr>
                      </thead>
                      <tbody>    
                        @foreach($borrow as $data)
                      <tr role="row" class="odd">
                        <td>{{$data->borrow_id}}</td>
                        <td>{{$data->title_book}}</td>
                        <td>{{$data->username}}</td>
                        <td>{{$data->borrow_total_books}}</td>
                        <td>{{$data->borrow_date}}</td>
                        <td>{{$data->borrow_back_date}}</td>
                        <td></td>
                        <td><button type="submit" class="btn btn-3d btn-success mr-2">Bayar Denda</button>
                          <button type="submit" class="btn btn-3d btn-danger mr-2">Kembali</button></td>
                          
                      @endforeach
                    </tbody>
                  </table>
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
  
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                      