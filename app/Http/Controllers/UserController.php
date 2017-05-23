<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function awal()
  {
    return view('user.awal',['data'=>user::all()]);
  }
  public function tambah()
  {
    return view('user.tambah');
  }
  public function simpan(Request $input)
  {
    $user = new user;
    $user->username = $input->username;
    $user->password = $input->password;
    $informasi = $user->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    return redirect('user')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $user = user::find($id);
    return view('user.edit')->with(array('user'=>$user));
  }
  public function lihat($id)
  {
    $user = user::find($id);
    return view('user.lihat')->with(array('user'=>$user));
  }
  public function update($id, request $input)
  {
    $user = user::find($id);
    $user->username = $input->username;
    $user->pasword = $input->pasword;
    $informasi = $user->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('user')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
    $user = user::find($id);
    $informasi = $user->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('user')->with(['informasi'=>$informasi]);
  }
}


