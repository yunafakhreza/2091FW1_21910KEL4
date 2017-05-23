<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;
class BarangController extends Controller
{
    public function awal()
  {
    return view('barang.awal',['data'=>barang::all()]);
  }
  public function tambah()
  {
    return view('barang.tambah');
  }
  public function simpan(Request $input)
  {
    $barang = new barang;
    $barang->merk = $input->merk;
    $barang->Tipe = $input->Tipe;
    $barang->harga = $input->harga;
    $barang->jumlah_angsuran = $input->jumlah_angsuran;
    $barang->stok = $input->stok;
    $barang->warna = $input->warna;
    $barang->thn_terbit = $input->thn_terbit;
    $barang->jumlah_cicilan = $input->jumlah_cicilan;
    $informasi = $barang->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('barang')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $barang = barang::find($id);
    return view('barang.edit')->with(array('barang'=>$barang));
  }
  public function lihat($id)
  {
    $barang = barang::find($id);
    return view('barang.lihat')->with(array('barang'=>$barang));
  }
  public function update($id, request $input)
  {
    $barang = barang::find($id);
    $barang->merk = $input->merk;
    $barang->Tipe = $input->Tipe;
    $barang->harga = $input->harga;
    $barang->jumlah_angsuran = $input->jumlah_angsuran;
    $barang->stok = $input->stok;
    $barang->warna = $input->warna;
    $barang->thn_terbit = $input->thn_terbit;
    $barang->jumlah_cicilan = $input->jumlah_cicilan;
    $informasi = $barang->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('barang')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $barang = barang::find($id);
    $informasi = $barang->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('barang')->with(['informasi'=>$informasi]);
  }
}
