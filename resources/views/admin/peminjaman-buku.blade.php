@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Peminjaman</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id="datatables-example_length"><label>Show <select name="datatables-example_length" aria-controls="datatables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>
                <div class="col-sm-6">
                  <div id="datatables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatables-example"></label></div></div></div>
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">Borrow_Id</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">nama Peminjam</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Book</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Stock</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;"></th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;"></th>
                        <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Borrow_status</th>
                      </tr>
                      </thead>
                      <tbody>    
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>Dian</td>
                        <td>indonesia</td>
                        <td>33</td>
                        <td><button type="submit" class="btn btn-3d btn-success mr-2"><a href = "{{URL::to('/History')}}">Pinjam</a></button></td>
                        <td><button type="submit" class="btn btn-3d btn-danger mr-2"><a href = "{{URL::to('/History')}}">Kembali</a></button></td>
                          <td>meminjam</td>
                      </tr>
                      <tr role="row" class="odd">
                         <td>2</td>
                         <td>Evi</td>
                         <td>Matematika</td>
                         <td>33</td>
                        <td><button type="submit" class="btn btn-3d btn-success mr-2"><a href = "{{URL::to('/History')}}">Pinjam</a></button></td>
                        <td><button type="submit" class="btn btn-3d btn-danger mr-2"><a href = "{{URL::to('/History')}}">Kembali</a></button></td>
                         <td>meminjam</td>
                      </tr>
                      <tr role="row" class="odd">
                         <td>3</td>
                         <td>Eka</td>
                         <td>novel</td>
                         <td>33</td>   
                        <td><button type="submit" class="btn btn-3d btn-success mr-2"><a href = "{{URL::to('/History')}}">Pinjam</a></button></td>
                        <td><button type="submit" class="btn btn-3d btn-danger mr-2"><a href = "{{URL::to('/History')}}">Kembali</a></button></td>
                         <td>mengembalikan</td>
                      </tr>
                      <tr role="row" class="odd">
                         <td>4</td>
                         <td>Luthfina</td>
                         <td>pdkk</td>
                         <td>33</td>   
                        <td><button type="submit" class="btn btn-3d btn-success mr-2"><a href = "{{URL::to('/History')}}">Pinjam</a></button></td>
                        <td><button type="submit" class="btn btn-3d btn-danger mr-2"><a href = "{{URL::to('/History')}}">Kembali</a></button></td>
                         <td>mengembalikan</td>
                      </tr>
                      <tr role="row" class="odd">
                         <td>5</td>
                         <td>Serli</td>
                         <td>inggris</td>
                         <td>33</td> 
                        <td><button type="submit" class="btn btn-3d btn-success mr-2"><a href = "{{URL::to('/History')}}">Pinjam</a></button></td>
                        <td><button type="submit" class="btn btn-3d btn-danger mr-2"><a href = "{{URL::to('/History')}}">Kembali</a></button></td>
                         <td>meminjam</td>
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
  
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                      