@extends('layouts.master-admin')
@section('content')
<div id="content">
  <div class="col-md-6">
    <h3 class="animated fadeInLeft">List User</h3>
    <br><br>
  </div>
  <div class="responsive-table">
    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>User_Email</th>
          <th>User_Phone</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Dian citra</td>
          <td>dian@gmail.com</td>
          <td>089513438102</td>
         
        </tr>
        <tr>
          <td>2</td>
          <td>Eka</td>
          <td>eka@gmail.com</td>
          <td>089516085820</td>
         
        </tr>
        <tr>
          <td>3</td>
          <td>Evi nopianti</td>
          <td>evi@gmail.com</td>
          <td>08953899119</td>
         
        </tr>
        <tr>
          <td>4</td>
          <td>Luthfina</td>
          <td>fina@gmail.com</td>
          <td>082128806442</td>
         
        </tr>
        <tr>
          <td>5</td>
          <td>Serli</td>
          <td>serli@gmail.com</td>
          <td>089513438102</td>
         
        </tr>
      </tbody>\
    </table>
  </div>
  <div class="col-md-6" style="padding-top:20px;">
  </div>
  <div class="col-md-6">
    <ul class="pagination pull-right">
      <li>
        <a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a>
      </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next"><span aria-hidden="true">»</span></a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</div>

@endsection