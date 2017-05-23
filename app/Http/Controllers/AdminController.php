<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function awal()
  {
    return view('admin.awal',['data'=>admin::all()]);
  }
  public function tambah()
  {
    return view('admin.tambah');
  }
  public function simpan(Request $input)
  {
    $admin = new admin;
    $admin->ussername = $input->ussername;
    $admin->password = $input->password;
    $admin->usser_id = $input->usser_id;
    
    $informasi = $admin->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('admin')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $barang = admin::find($id);
    return view('admin.edit')->with(array('admin'=>$admin));
  }
  public function lihat($id)
  {
    $barang = admin::find($id);
    return view('admin.lihat')->with(array('admin'=>$admin));
  }
  public function update($id, request $input)
  {
    $admin = barang::find($id);
    $admin->ussername = $input->ussername;
    $admin->password = $input->password;
    $admin->usser_id = $input->usser_id;
    
    $informasi = $admin->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('admin')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $admin = admin::find($id);
    $informasi = $admin->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('admin')->with(['informasi'=>$informasi]);
  }
}

}
