@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('konsumen') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail angsuran
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>nama</td>
      <td>:</td>
      <td>{{ $konsumen->nama }}</td>
    </tr>
    <tr>
      <td>alamat</td>
      <td>:</td>
      <td>{{ $konsumen->alamat }}</td>
    </tr>
    <tr>
      <td>no_ktp</td>
      <td>:</td>
      <td>{{ $konsumen->no_ktp }}</td>
    </tr>
    <tr>
      <td>jenis_kelamin</td>
      <td>:</td>
      <td>{{ $konsumen->jenis_kelamin }}</td>
    </tr>
    <tr>
      <td>pekerjaan</td>
      <td>:</td>
      <td>{{ $konsumen->pekerjaan }}</td>
    </tr>

    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$konsumen->updated_at}}</td>
    </tr>


  </table>
</div>
@stop