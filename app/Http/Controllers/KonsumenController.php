<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Konsumen;

class KonsumenController extends Controller
{
    public function awal()
  {
    return view('konsumen.awal',['data'=>konsumen::all()]);
  }
  public function tambah()
  {
    return view('konsumen.tambah');
  }
  public function simpan(Request $input)
  {
    $konsumen = new konsumen;
    $konsumen->nama = $input->nama;
    $konsumen->alamat= $input->alamat;
    $konsumen->no_ktp = $input->no_ktp;
    $konsumen->jenis_kelamin = $input->jenis_kelamin;
    $konsumen->pekerjaan = $input->pekerjaan;
    
    $informasi = $konsumen->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('konsumen')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $konsumen = konsumen::find($id);
    return view('konsumen.edit')->with(array('konsumen'=>$konsumen));
  }
  public function lihat($id)
  {
    $konsumen = konsumen::find($id);
    return view('konsumen.lihat')->with(array('konsumen'=>$konsumen));
  }
  public function update($id, request $input)
  {
    $konsumen = konsumen::find($id);
   $konsumen->nama = $input->nama;
    $konsumen->alamat = $input->alamat;
    $konsumen->no_ktp = $input->no_ktp;
   $konsumen->jenis_kelamin = $input->jenis_kelamin;
   $konsumen->pekerjaan= $input->pekerjaan;
    $informasi = $konsumen->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('konsumen')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $konsumen = konsumen::find($id);
    $informasi = $konsumen->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('konsumen')->with(['informasi'=>$informasi]);
  }
}


