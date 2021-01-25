<!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>SMK Mahaputra Cerdas Utama</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{{ Auth::user()->usr_name }}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="{{URL::to('detail_admin')}}"><span class="fa fa-user"></span> My Profile</a></li>
                          <li><a href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span class="fa fa-power-off ">{{ __('Logout') }}</span></a></li>
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                        </form>
                      
            </div>
          </div>
        </nav>
      <!-- end: Header -->
