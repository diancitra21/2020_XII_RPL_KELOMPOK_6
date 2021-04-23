<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visitors;
use App\Positions;
use App\Purposes;

class VisitorController extends Controller
{
    public function index(){
    	$row = 1;
    $visitor  = Visitors::join('positions', 'visitors.vst_position_id', '=', 'positions.pst_id')
    ->join('purposes', 'visitors.vst_purpose_id', '=', 'purposes.pps_id')
    ->select('visitors.*', 'positions.*', 'purposes.*')->get();
    return view('admin.buku_tamu',['visitor' => $visitor, 'row' => $row]);

}
public function cetak_pengunjung(){
	$row = 1;
    $visitor  = Visitors::join('positions', 'visitors.vst_position_id', '=', 'positions.pst_id')
    ->join('purposes', 'visitors.vst_purpose_id', '=', 'purposes.pps_id')
    ->select('visitors.*', 'positions.*', 'purposes.*')->get();
    return view('admin.cetak_pengunjung',['visitor' => $visitor, 'row' => $row]);
}

	public function add_visitor()
    {
        $pst = Positions::all();
        $pps = Purposes::all();
		        return view('admin.tambah_pengunjung',['pst'=> $pst, 'pps' => $pps]);
    }

	public function Save(Request $request){ 
        $visitor= new Visitors;
        $visitor->vst_name       = $request->nama;
        $visitor->vst_position_id       = $request->jabatan;
        $visitor->vst_purpose_id       = $request->tujuan;
        $visitor->vst_date     = $request->tanggal;
        $visitor->save();
        return redirect('/buku_tamu')->with('success', 'Data Berhasil Disimpan!');
    }

    public function pengunjung()
    {
    	return view('admin.buku_tamu');
    }

    public function edit($vst_id)
    {
       $visitor = Visitors::find($vst_id);
       $pst = Positions::all();
        $pps = Purposes::all();
		        return view('admin.edit_pengunjung',['pst'=> $pst, 'pps' => $pps, 'visitor' => $visitor]); 
         
     }


    public function Update(Request $request, $vst_id)
    {
        $visitor = Visitors::find($vst_id);
        $visitor->vst_name        = $request->nama;
        $visitor->vst_position_id  = $request->jabatan;
        $visitor->vst_purpose_id   = $request->tujuan;
        $visitor->update();
        return redirect('/buku_tamu')->with('success', 'Data Berhasil Diubah!');
    }
    public function delete($vst_id)
    {
        $visitor = Visitors::find($vst_id);
        $visitor->delete();
        return redirect('/buku_tamu')->with('success', 'Data Berhasil Di Hapus!');
    }
    public function cari( Request $request){

$row = 1;

$cari = $request->cari;

$visitor  = Visitors::join('positions', 'visitors.vst_position_id', '=', 'positions.pst_id')
    ->join('purposes', 'visitors.vst_purpose_id', '=', 'purposes.pps_id')
->where('vst_name','like',"%". $cari. "%")->paginate();


return view('admin.buku_tamu',['visitor' => $visitor, 'row' => $row]);
}

}
