<div class="container-fluid mimin-wrapper">
    <!-- start:Left Menu -->
    <div id="left-menu">
        <div class="sub-left-menu scroll">
            <ul class="nav nav-list">
                <li>
                    <div class="left-bg"></div>
                </li>
                <li class="time">
                    <h1 class="animated fadeInLeft">19:52</h1>
                    <p class="animated fadeInRight">Saturday, November 7th 2020</p>
                </li>


                <li class="active ripple">

                <li class="active ripple">
                    <a href="{{URL::to('dashboard')}}"><span class="fa fa-home"></span>Dashboard
                    </a>


                    <li class="active ripple">
                    <a href="{{URL::to('buku_tamu')}}"><span class="icons icon-notebook"></span>Buku Tamu
                    </a>

                <li class="active ripple">
                    <a class="tree-toggle nav-header"><span class="fa fa-child"></span> User
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/list-user')}}">List User</a></li>

                    </ul>
                </li>
                <li class="ripple">
                    <a class="tree-toggle nav-header">
                        <span class="icons icon-book-open"></span> Buku
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/list-book')}}">Daftar Buku</a></li>

                    </ul>

                    <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/book')}}">Kelola Buku</a></li>

                    </ul>
                     <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/koleksi')}}">Koleksi Buku</a></li>

                    </ul>
                </li>
              

                <li class="ripple">
                    <a class="tree-toggle nav-header">
                        <span class="icons icon-basket"></span>Kelola Peminjaman
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                    </a>
                    <ul class="nav nav-list tree" style="display: none;">
                        <li><a href="{{URL::to('/Peminjaman-buku')}}"> Peminjaman</a></li>


                    </ul>

                     <li class="active ripple">

                    <a href="{{URL::to('/history-peminjaman')}}"><span class="fa fa-bookmark-o"></span> History Peminjaman
                    </a>

                                       </li>


        </div>
    </div>
    <!-- end: Left Menu -->


    <!-- start: content -->
</div>
</section>
</div>
