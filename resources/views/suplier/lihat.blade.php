@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('suplier') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail Data suplier
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>nama</td>
      <td>:</td>
      <td>{{ $suplier->nama }}</td>
    </tr>
    <tr>
      <td>nama</td>
      <td>:</td>
      <td>{{ $suplier->nama }}</td>
    </tr>
    <tr>
      <td>alamat</td>
      <td>:</td>
      <td>{{ $suplier->alamat }}</td>
    </tr>
    <tr>
      <td>no_tlp</td>
      <td>:</td>
      <td>{{ $suplier->no_tlp }}</td>
    </tr>
    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$suplier->updated_at}}</td>
    </tr>


  </table>
</div>
@stop