<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Angsuran;

class AngsuranController extends Controller
{
     public function awal()
  {
    return view('angsuran.awal',['data'=>angsuran::all()]);
  }
  public function tambah()
  {
    return view('angsuran.tambah');
  }
  public function simpan(Request $input)
  {
    $angsuran = new angsuran;
    $angsuran->sisa_cicilan = $input->sisa_cicilan;
    $angsuran->cicilan_ke= $input->cicilan_ke;
    $angsuran->total_bayaran= $input->total_bayaran;
    $angsuran->jumlah_cicilan= $input->jumlah_cicilan;
    $angsuran->pembayaran= $input->pembayaran;
    $angsuran->tgl_pembayaran = $angsuran->tgl_pembayaran;
    
    $informasi = $angsuran->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('angsuran')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $angsuran = angsuran::find($id);
    return view('angsuran.edit')->with(array('angsuran'=>$angsuran));
  }
  public function lihat($id)
  {
    $angsuran = angsuran::find($id);
    return view('angsuran.lihat')->with(array('angsuran'=>$angsuran));
  }
  public function hapus($id)
  {
    $angsuran = angsuran::find($id);
    $informasi = $angsuran->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('angsuran')->with(['informasi'=>$informasi]);
  }
}


