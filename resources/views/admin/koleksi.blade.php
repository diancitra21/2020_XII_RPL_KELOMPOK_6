@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Data Koleksi</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
  <div class="col-sm-6">
 </div></div></div></div><form action="/koleksi/cari" method="GET" class="text-right" style="float:right">
                <label><b>Search :</b></label>
                   <input type="text"  name="cari" value="{{old('cari')}}">
                   
                 </form>
                 
            
            <!-- Button trigger modal -->

            <div class="row">
              <div class="col-sm-6">
        <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline

dt-bootstrap no-footer">


<a href = "{{URL::to('/Tambah_koleksi')}}" class="btn btn-3d btn-danger mr-2">

Tambah Rak</a><br><br><br> <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>

<diy class="row">

<div class="row">

<div class="col-sm-6"> <div id="datatables-example_filter" class="dataTables filter"></div></div></div>

<div class="row">

<div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing= "0" role="grid" describedby="datatables-example info" style="width:

100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Rak Koleksi Buku </th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Action</th>
                          
                      </tr>
                      </thead>

                       <tbody>
                    @foreach($collection as $data)
                      <tr role="row" class="odd">
                        <td>{{$row++}}</td>
                        <td>{{$data -> col_rack}}</td>
                        
                          <td><a href = "{{URL::to('detail_koleksi/'.$data->col_id)}}" class="btn btn-3d btn-primary mr-2">Detail</a>
                        
                          </td>
                            {{csrf_field()}}

                        @include('sweetalert::alert')
@endforeach
                                 


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
                  {{$collection->links()}}
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