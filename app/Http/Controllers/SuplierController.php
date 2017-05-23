<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Suplier;

class SuplierController extends Controller
{
    public function awal()
  {
    return view('suplier.awal',['data'=>suplier::all()]);
  }
  public function tambah()
  {
    return view('suplier.tambah');
  }
  public function simpan(Request $input)
  {
    $suplier = new suplier;
    $suplier->nama = $input->nama;
    $suplier->alamat= $input->alamat;
    $suplier->no_tlp = $suplier->no_tlp;
    
    $informasi = $suplier->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('suplier')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $suplier = suplier::find($id);
    return view('suplier.edit')->with(array('suplier'=>$suplier));
  }
  public function lihat($id)
  {
    $suplier = suplier::find($id);
    return view('suplier.lihat')->with(array('suplier'=>$suplier));
  }
  public function update($id, request $input)
  {
    $suplier = suplier::find($id);
    $suplier->nama = $input->nama;
    $suplier->alamat= $input->alamat;
    $suplier->no_tlp = $suplier->no_tlp;
    $informasi = $suplier->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('suplier')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $suplier = suplier::find($id);
    $informasi = $suplier->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('barang')->with(['informasi'=>$informasi]);
  }
}


