@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('pemesanan') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail angsuran
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>harga_beli</td>
      <td>:</td>
      <td>{{ $pemesanan->harga_beli }}</td>
    </tr>
    <tr>
      <td>tgl_beli</td>
      <td>:</td>
      <td>{{ $pemesanan->tgl_beli }}</td>
    </tr>
    <tr>
      <td>barang_id</td>
      <td>:</td>
      <td>{{ $pemesanan->barang_id }}</td>
    </tr>
    <tr>
      <td>suplier_id</td>
      <td>:</td>
      <td>{{ $pemesanan->suplier_id }}</td>
    </tr>
    
    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$pemesanan->updated_at}}</td>
    </tr>


  </table>
</div>
@stop