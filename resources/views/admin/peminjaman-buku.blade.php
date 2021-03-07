@extends('layouts.master-admin')
@section('content')
    <div id="content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3> Data Peminjaman</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <div id="datatables-example_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="col-sm-6">
                                        <div id="datatables-example_filter" class="dataTables_filter"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatables-example"
                                               class="table table-striped table-bordered dataTable no-footer"
                                               width="100%" cellspacing="0" role="grid"
                                               aria-describedby="datatables-example_info" style="width: 100%;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 80px;">No
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 134px;">Nama Buku
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 60px;">Nama Peminjam
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Start date: activate to sort column ascending"
                                                    style="width: 51px;">Jumlah Pinjam
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 50px;">Tanggal Pinjam
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 50px;">Tanggal Kembali
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 50px;">Status
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 50px;">Denda
                                                </th>
                                                @if($topTable == !1)
                                                    <th class="sorting" tabindex="0" aria-controls="datatables-example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 50px;">Action
                                                    </th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($borrow as $data)
                                                <tr role="row" class="odd">
                                                    <td>{{$row++}}</td>
                                                    <td>{{$data->bok_title_book}}</td>
                                                    <td>{{$data->usr_name}}</td>
                                                    <td>{{$data->bor_total_books}}</td>
                                                    <td>{{$data->bor_date}}</td>
                                                    <td>{{$data->bor_back_date}}</td>
                                                    <td>
                                                        @if($data->bor_status == 0)
                                                            Sedang Dipinjam
                                                        @elseif($data->bor_status == 1)
                                                            Sudah Dikembalikan
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <?php
                                                        if ($data->bor_back_date <= \Carbon\Carbon::now()) {
                                                            $now = new DateTime($data->bor_back_date);
                                                            $date = $now->diff(\Carbon\Carbon::now());
                                                            $price_denda = 1000;
                                                            $denda = $date->d * 1000;
                                                            echo 'Rp.' . number_format($denda);

                                                        } else {
                                                            $denda = '0';
                                                            echo $denda;
                                                        }

                                                        ?>


                                                    </td>
                                                    @if($data->bor_status == 0)
                                                        <td>
                                                            <form method="post" action="{{URL::to('Peminjaman-buku')}}">
                                                                @csrf
                                                                <input type="hidden" name="brw_fine" value="{{$denda}}">
                                                                <input hidden name="bor_id"
                                                                       value="{{$data->bor_id}}">
                                                                <button type="submit"
                                                                        class="btn btn-3d btn-danger mr-2">Kembali
                                                                </button>
                                                            </form>
                                                        </td>
                                                        @elseif($data->bor_status==2)
                                                        <td>
                                                            <!-- Button trigger modal -->
<button type="button" class="btn btn-3d btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
Bayar Denda
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Bayar Denda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" class="form-text mask-time" name="bayar_denda" required="" value="">
                        <span class="bar"></span>
                        <label>Bayar Denda</label>
                      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bayar</button>
        <button type="button" class="btn btn-primary">Cancel</button>
      </div>
    </div>
  </div>
</div>
                                                        </td>
                                                @endif


                                                @include('sweetalert::alert')
                                            @endforeach
                                            </tbody>
                                            </tr>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection






































