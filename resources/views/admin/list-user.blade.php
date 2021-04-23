@extends('layouts.master-admin')
@section('content')
<div id="content">
   <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>List User</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
  <div class="col-sm-6">
  </div>
</div></div></div><form action="/list-user/cari" method="GET" class="text-right" style="float:right">
                <label><b>Search :</b></label>
                   <input type="text"  name="cari" value="{{old('cari')}}">
                   
                 </form>
                 <div class="dt-buttons btn-group"><br>
                  <div id="datatables-example_filter" class="dataTables_filter"></div></div></div>
                   
            
                  <div class="row">
                    <div class="col-sm-12"><table id="datatables-example" class="table table-striped table-bordered dataTable no-footer" width="100%" cellspacing="0" role="grid" aria-describedby="datatables-example_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 80px;">No</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 134px;">Username</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 60px;">Email</th>
                          <th class="sorting" tabindex="0" aria-controls="datatables-example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 51px;">Nomor Telepon</th>
                         
                      </tr>
                      </thead>
                      <tbody>    
                        @foreach ($user as $data)
                      <tr role="row" class="odd">
                        <td>{{$data -> usr_id}}</td>
                        <td>{{$data -> usr_name}}</td>
                        <td>{{$data -> usr_email}}</td>
                        <td>{{$data -> usr_phone}}</td>

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
                  {{$user->links()}}
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection