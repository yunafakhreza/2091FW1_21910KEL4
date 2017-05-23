@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('jual') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail Data jual
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>barang_id</td>
      <td>:</td>
      <td>{{ $jual->barang_id }}</td>
    </tr>
    <tr>
      <td>konsumen_id</td>
      <td>:</td>
      <td>{{ $jual->konsumen_id}}</td>
    </tr>
    <tr>
      <td>tgl_beli</td>
      <td>:</td>
      <td>{{ $jual->tgl_beli}}</td>
    </tr>
    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$jual->updated_at}}</td>
    </tr>


  </table>
</div>
@stop