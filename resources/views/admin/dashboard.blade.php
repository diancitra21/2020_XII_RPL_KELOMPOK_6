@extends('layouts.master-admin')

@section('content')
<!-- start: content -->
 <div id="content">
  <div class="panel">
   <div class="panel-body">
    <div class="col-md-6 col-sm-12">
     <h3 class="animated fadeInLeft">SMK Mahaputra</h3>
      <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Sukamukti,Indonesia</p>
    </div>
    <div class="col-md-6 col-sm-12">
     <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
      <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Katapang</h3>
       <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
     </div>
     <div class="col-md-6 col-sm-6">
      <div class="wheather">
       <div class="stormy rainy animated pulse infinite">
        <div class="shadow">
        </div>
      </div>
      
      <div class="sub-wheather">
        <div class="thunder">
        </div>
        <div class="rain">
          <div class="droplet droplet1"></div>
          <div class="droplet droplet2"></div>
          <div class="droplet droplet3"></div>
          <div class="droplet droplet4"></div>
          <div class="droplet droplet5"></div>
          <div class="droplet droplet6"></div>
        </div>
      </div>
    </div>
  </div> 
</div>

</div>
</div>
</div>
<div id="content">
  <div class="col-md-4">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <div class="card">
        <div class="card-body"> 
      <h4 class="text-left"> </h4> 
      <img class="card-img-top img-fluid" src="asset/img/20.jpg" alt="Card image cap"><h3> Indonesia  </h3> 
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

  <div class="col-md-4">

<div class="panel box-v1">
  <div class="panel-heading bg-white border-none">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
      <div class="card">
        <div class="card-body"> 
      <h4 class="text-left"> </h4> 
      <img class="card-img-top img-fluid" src="asset/img/20.jpg" alt="Card image cap"><h3> Indonesia  </h3> 
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



</div>










      
@endsection