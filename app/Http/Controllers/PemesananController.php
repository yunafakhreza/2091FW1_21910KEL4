<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pemesanan;

class PemesananController extends Controller
{
    public function awal()
  {
    return view('pemesanan.awal',['data'=>pemesanan::all()]);
  }
  public function tambah()
  {
    return view('pemesanan.tambah');
  }
  public function simpan(Request $input)
  {
    $pemesanan = new pemesanan;
    $pemesanan->harga_beli = $input->harga_beli;
    $pemesanan->tgl_beli= $input->tgl_beli;
    $pemesanan->barang_id = $input->barang_id;
    $pemesanan->suplier_id = $input->suplier_id;
    
    $informasi = $pemesanan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('pemesanan')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $pemesanan = pemesanan::find($id);
    return view('pemesanan.edit')->with(array('pemesanan'=>$pemesanan));
  }
  public function lihat($id)
  {
    $suplier = pemesanan::find($id);
    return view('pemesanan.lihat')->with(array('pemesanan'=>$pemesanan));
  }
  public function update($id, request $input)
  {
    $pemesanan = pemesanan::find($id);
    $pemesanan->harga_beli = $input->harga_beli;
    $pemesanan->tgl_beli= $input->tgl_beli;
    $pemesanan->barang_id = $input->barang_id;
    $pemesanan->suplier_id = $input->suplier_id;
    $informasi = $pemesanan->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('pemesanan')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $pemesanan = pemesanan::find($id);
    $informasi = $pemesanan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('pemesanan')->with(['informasi'=>$informasi]);
  }
}




