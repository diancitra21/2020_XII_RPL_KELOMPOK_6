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
                    <a href="{{URL::to('home')}}"><span class="fa fa-home"></span>Dashboard
                    </a>
                        <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="icons icon-book-open"></span> Buku
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree" style="display: none;">
                          <li><a href="{{URL::to('/list-buku')}}">Daftar Buku</a></li>
                      </ul>
                       
                      <li class="active ripple">

                    <a href="{{URL::to('/peminjaman')}}"><span class="fa fa-bookmark-o"></span> History Peminjaman
                    </a>

                                       </li>


                    </li>



                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: content -->
