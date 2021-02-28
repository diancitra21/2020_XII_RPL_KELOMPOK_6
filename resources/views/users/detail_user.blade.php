@extends('layouts.master-user')
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
        <form action="{{URL::to('/detail_user/update',auth::user()->usr_id)}}" method="POST">
         @csrf
         <div class="form-group form-animate-text" style="margin-top:40px !important;"><h4> name</h4>
          <input id="usr_name" type="text" class="form-text mask-time @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ auth::user()->usr_name}}" autocomplete="usr_name" autofocus>
            @error('usr_name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>
             <div class="form-group form-animate-text" style="margin-top:40px !important;">
              <h4>E-Mail</h4>
              <input id="usr_email" type="email" class="form-text mask-time @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ auth::user()->usr_email}}" autocomplete="usr_email" >           @error('usr_email')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
              </div>
              <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <h4> No Phone</h4>
                <input id="usr_phone" value="{{auth::user()->usr_phone }}" type="number" class="form-text mask-time @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off">
                 @error('usr_phone')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                      
                      <th>
                       <button type="submit" class="btn btn-3d btn-primary mr-2">Submit</button>
                        <a href="home" class="btn btn-3d btn-danger mr-2">Kembali</a>

                   </th>
                   @include('sweetalert::alert')
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