@extends('layouts.master-user')

@section('content')
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
                  <div class="col-md-12" style="padding:20px;">
                     <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-purple border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left"><font color="white">Jumlah Pengunjung</h4></font>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <font color="black"><span class="icon-user icons icon text-right"></span></font>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body bg-purple text-center">
                                        <font color="white">
                                        <h1>{{$visitor}}</h1>
                                        </font>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-amber border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0"><font color="white">
                                          <h4 class="text-left">Jumlah Buku</h4></font>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4><font color="black">
                                           <span class="icon-book-open icons icon text-right"></span></font>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body bg-amber text-center">
                                        <font color="white">
                                        <h1>{{$book}}</h1></font>
                                        
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-light-green border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left"><font color="white">Jumlah Peminjam</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4></font><font color="black">
                                           <span class="icon-basket-loaded icons icon text-right"></span></font>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body bg-light-green text-center">
                                        <font color="white">
                                        <h1>{{$borrow}}</h1>
                                        </font>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-info border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left"><font color="white">Jumlah Rak</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4></font><font color="black">
                                           <span class="icon-chart icons icon text-right"></span></font>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body bg-info text-center">
                                        <font color="white">
                                        <h1>{{$collection}}</h1>
                                        </font>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
           </div>
                    
                    






















































































                    
                  </div>                    
                </div>
@endsection