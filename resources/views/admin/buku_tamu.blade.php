@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Data Pengunjung</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
              <div class="col-sm-6">
               <a href = "{{URL::to('/tambah_pengunjung')}}" class="btn btn-3d btn-danger mr-2">Pengunjung</a>  <a href = "{{URL::to('/cetak_pengunjung')}}" class="btn btn-3d btn-info mr-2"> <span class="icons icon-printer"></span> <font color="white"> Cetak</font></a><br><br><br>
              </div>
                 </div></div></div><form action="/buku_tamu/cari" method="GET" class="text-right" style="float:right">
                <label><b>Search :</b></label>
                   <input type="text"  name="cari" value="{{old('cari')}}">
                   
                 </form>
                 <div class="dt-buttons btn-group">
                   
                 <br>
                  <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>
                   
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Username </th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Jabatan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Tujuan Kunjungan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Tanggal Kunjungan</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Action</th>
                      </tr>
                      </thead>
                      <tbody>    
                         @foreach($visitor as $data)
                      <tr role="row" class="odd">
                        <td>{{$row++}}</td>
                        <td>{{$data ->vst_name}}</td>
                        <td>{{$data ->pst_position}}</td>
                        <td>{{$data ->pps_purpose}}</td>
                        <td>{{$data ->vst_date}}</td>
                        <td><a href = "{{URL::to('edit_pengunjung/'.$data->vst_id)}}" class="btn btn-outline btn-info fa fa-pencil-square-o"></a>
                        
                        <a href="{{URL::to('delete_vst/'.$data->vst_id)}}">
                          <input type="hidden" name="vst_id" value="<?=$data->vst_id?>">
                          <button onclick="return confirm('Yakin anda ingin menghapus?') "class="btn btn-outline btn-danger fa fa-trash-o"></button></a>
                          {{csrf_field()}}
                        
                     
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