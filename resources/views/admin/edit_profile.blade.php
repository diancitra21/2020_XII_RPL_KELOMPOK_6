@extends('layouts.master-admin')
@section('content')
<div id="content" class="profile-v1">
  
             <div class="col-md-12">
                <div class="col-md-12  profile-v1-cover-wrap" style="padding-right:0px;">
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
  
    
   <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>My Profile</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <div class="row">
            
                  <table>
                    <form action="{{URL::to('/detail_admin/update',$user->usr_id)}} " method="POST" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <tr>
                      <th>
                     <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="username" required="" value="{{auth::user()->usr_name}}">
                        <span class="bar"></span>
                        <label>Username</label>
                      </div></th>
                      </tr>
                      <tr><th>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="email" required="" value="{{auth::user()->usr_email}}">
                        <span class="bar"></span>
                        <label>Email</label>
                      </div></th>

                      </tr>
                      <tr><th>
                                              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="phone" required="" value="{{auth::user()->usr_phone}}">
                        <span class="bar"></span>
                        <label>Phone</label>
                      </div></th>

                      </tr><th>
                       <button type="submit" class="btn btn-3d btn-primary mr-2">Submit</button>
                   </th>
                   {{crsf_field}}
                    </form>
                  </table>

              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
                <!-- profile-widget -->
</div>
              <!-- page start-->

              <!-- page end-->
          </section>

</div>
          </div></section>
</section>
@endsection