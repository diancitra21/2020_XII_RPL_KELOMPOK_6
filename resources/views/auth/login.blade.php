<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('asset/img/mahaputra.jpg')}}">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    
    <body id="mimin"> <div style="background-color: lightblue;"> <div
class="container"> <form class="form-signin" method="POST" action="{{
route('login') }}"> {{ csrf_field() }} <div class="panel periodic-login"> <div
class="panel-body text-center"> <img class="card-img-top img-fluid"
src="asset/img/22.png" alt="Card image cap"> <p
class="element-name"><h2>Perpustakaan</h2></p>

                  
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <h4>E-Mail Address :<input type="text" required class="form-text" id="usr_email"  class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="email" autofocus required></h4>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                   <h4> Password : <input id="password" required type="password" class="form-text @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required></h4>
                    
                    
                  </div>
                  <div class="float-left">
                    <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  </div>
                  <div class="float-right">
                    
                  <a href="{{url('register')}}" class="text-right" style="margin-left: 80px;"> Register</a>
                  </div>
                  
                  <input type="submit" class="btn btn-3d bg-info mr-2 col-md-12" value="SignIn"/>
                  </form>          
              </div>
                
          </div>
        
</div>
</div>
      

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>