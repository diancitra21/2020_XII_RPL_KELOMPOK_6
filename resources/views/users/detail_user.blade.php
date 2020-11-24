@extends('layouts.master-user')
@section('content')
<div id="content" class="profile-v1">
  
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="asset/img/avatar.jpg">
                      <h2>{{ Auth::user()->usr_name }}</h2>
                      
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="asset/img/mahaputra.jpg" class="img-responsive">
                    </div>
                </div>
               
             </div>
             
           
          </div>
<!--page start-->
<div id="content" >
  

<section id="main-content">
<section class="wrapper">
  <div class="row">
                <!-- profile-widget -->
</div>
              <!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading tab-bg-info">
        <ul class="nav nav-tabs">
          <li class="">
            <a data-toggle="tab" href="#profile">
              <i class="icon-user"></i>Profile</a></li>
              <li class="active">
                <a data-toggle="tab" href="#edit-profile">
                  <i class="icon-envelope"></i>Edit Profile</a></li>
                  <li class="">
                    <a data-toggle="tab" href="#password">
                      <i class="icon-envelope"></i>Ubah password</a></li>
                    </ul>
                  </header>
                  <div class="panel-body">
                    <div class="tab-content">

<!-- profile -->
<div id="profile" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <div class="row">
        <div class="bio-row">
          <p><span>Username </span>: user</p>
        </div>
        <div class="bio-row">
          <p><span>E-Mail </span>: user@gmail.com</p>
        </div>
        <div class="bio-row">
          <p><span>Phone</span>:08213456789</p>
        </div>
        <div class="bio-row">
          <p><span>Password </span>: user123</p>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row">
  </div>
</section>
</div>
<!-- edit-profile -->
<div id="edit-profile" class="tab-pane active">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <h1> Profile Info</h1>
      <form class="" action="/update_profile/1" method="POST">
      <div class="col-md-6">
      </div>
      
      <div class="col-md-9">
        <label for="name" >Usename</label>  <input id="name" type="text" class="form-control " name="name" value="user" required="" autocomplete="name" autofocus="">
        </div>
       
          <div class="col-md-9">
            <label for="name" >Email</label>  <input id="name" type="text" class="form-control " name="name" value="user@gmail.com" required="" autocomplete="name" autofocus="">
        </div>
        
          <div class="col-md-9">
            <label for="name" >Phone</label>  <input id="name" type="text" class="form-control " name="name" value="08213456789" required="" autocomplete="name" autofocus="">
        </div>
        
          <div class="col-md-9">
            <label for="name" >Password</label>  <input id="name" type="text" class="form-control " name="name" value="user123" required="" autocomplete="name" autofocus="">
        </div>
                    <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4"><br><br>
                <button type="submit" class="btn btn-3d btn-success mr-2">Save</a></button>
                                                                         </div>
                                                                     </div>
      </form>
    </div>
  </section>
</div>
<div id="password" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <h1> Profile Info</h1>
      <form class="" action="/ubah-password" method="POST">
        <input type="hidden" name="_token" value="iZnVxCKq0ReGx69izCZEPkBHHyPaaNGqc46fnUaR">
        
         <div class="col-md-9">
        <label for="name" >Password Lama</label>  <input id="name" type="text" class="form-control " name="name" value="" required="" autocomplete="name" autofocus="">
        </div>
       
          <div class="col-md-9">
            <label for="name" >Password Baru</label>  <input id="name" type="text" class="form-control " name="name" value="" required="" autocomplete="name" autofocus="">
        </div>
        
          <div class="col-md-9">
            <label for="name" >Confirm</label>  <input id="name" type="text" class="form-control " name="name" value="" required="" autocomplete="name" autofocus="">
        </div>
        
        <br><br>                    
          
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4"><br><br>
                <button type="submit" class="btn btn-3d btn-success mr-2">Save</a></button>
                                                                         </div>
                                                                     </div>

                                                                 </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>

                 </div>




              <!-- page end-->
          </section>

</div>
          </div></section>
</section>
@endsection