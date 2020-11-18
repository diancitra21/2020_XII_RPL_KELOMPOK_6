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
                
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> User 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                          <li><a href="{{URL::to('/list-user')}}">List User</a></li>
                          
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Buku
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/add-book')}}">Tambah Buku</a></li>
                        <li><a href="{{URL::to('/list-buku-admin')}}">List Buku </a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Peminjaman
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/Peminjaman-buku')}}">List Peminjaman</a></li>
                        
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> History  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/History')}}">List History</a></li>
                        
                      

                       
            
                </div>
            </div>
          <!-- end: Left Menu -->

      
          <!-- start: content -->
