<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jual;
use App\konsumen;
use App\barang;


class JualController extends Controller
{
        public function awal()
  {
  	$semuaJual = jual::all();
    return view('jual.awal',compact('semuaJual'));
  }
  public function tambah()
  {
  	$jual = new jual;
  	$barang = new barang;
  	$konsumen = new konsumen;
    return view('jual.tambah',compact('jual','barang','konsumen'));
  }
  public function simpan(Request $input)
  {
    $jual = new jual;
    $jual->barang_id = $input->barang_id;
    $jual->alamat= $input->konsumen_id;
    $jual->tgl_beli = $jual->tgl_beli;
    $informasi = $jual->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('jual')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $jual = jual::find($id);
    return view('jual.edit')->with(array('jual'=>$jual));
  }
  public function lihat($id)
  {
    $jual = jual::find($id);
    return view('jual.lihat')->with(array('jual'=>$jual));
  }
  public function update($id, request $input)
  {
    $jual = suplier::find($id);
    $jual->barang_id = $input->barang_id;
    $jual->konsumen_id= $input->konsumen_id;
    $jual->tgl_beli = $input->tgl_beli;
    $jual->alamat = $input->alamat;
    $informasi = $jual->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('jual')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $jual = jual::find($id);
    $informasi = $jual->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('jual')->with(['informasi'=>$informasi]);
  }
}




