@extends('layouts.master-admin')
@section('content')
<div id="content">
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
@endforeach
@endsection