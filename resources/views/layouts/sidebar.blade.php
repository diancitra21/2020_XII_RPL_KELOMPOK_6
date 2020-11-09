<div class="container-fluid mimin-wrapper">
<!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">19:52</h1>
                      <p class="animated fadeInRight">Saturday, November 7th 2020</p>
                    </li>
                    @if(Auth()->user()->hasRole('admin'))
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> User 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                          <li><a href="dashboard-v1.html">List User</a></li>
                          >
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Buku
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="topnav.html">Tambah Buku</a></li>
                        <li><a href="boxed.html">List Buku</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Peminjaman
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="chartjs.html">List Peminjaman</a></li>
                        
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> History  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="color.html">Peminjaman</a></li>
                        <li><a href="weather.html">Pengembalian</a></li>
                        @endif

                        <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Peminjaman Buku 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                          <li><a href="dashboard-v1.html">List Buku</a></li>
                      </ul>
                    </li>

                    
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> History  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="color.html">Peminjaman</a></li>
                        <li><a href="weather.html">Pengembalian</a></li>
            
                </div>
            </div>
          <!-- end: Left Menu -->

      
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