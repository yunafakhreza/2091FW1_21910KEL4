@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('barang') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail Data barang
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>Merk</td>
      <td>:</td>
      <td>{{ $barang->merk }}</td>
    </tr>
    <tr>
      <td>Tipe</td>
      <td>:</td>
      <td>{{ $barang->Tipe }}</td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td>{{ $barang->harga }}</td>
    </tr>
    <tr>
      <td>Jumlah Angsuran</td>
      <td>:</td>
      <td>{{ $barang->jumlah_angsuran }}</td>
    </tr>
    <tr>
      <td>Stok</td>
      <td>:</td>
      <td>{{ $barang->stok }}</td>
    </tr>
    <tr>
      <td>Waran</td>
      <td>:</td>
      <td>{{ $barang->warna }}</td>
    </tr>
    <tr>
      <td>Tahun Terbit</td>
      <td>:</td>
      <td>{{ $barang->thn_terbit }}</td>
    </tr>
    <tr>
      <td>Jumlah Cicilan</td>
      <td>:</td>
      <td>{{ $barang->jumlah_cicilan }}</td>
    </tr>

    <tr>
      <td class="col-xs-4">Dibuat tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$barang->created_at}}</td>
    </tr>

     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$barang->updated_at}}</td>
    </tr>


  </table>
</div>
@stop