@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('angsuran') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail angsuran
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>sisa_cicilan</td>
      <td>:</td>
      <td>{{ $angsuran->sisa_cicilan }}</td>
    </tr>
    <tr>
      <td>cicilan_ke</td>
      <td>:</td>
      <td>{{ $angsuran->cicilan_ke }}</td>
    </tr>
    <tr>
      <td>total_bayaran</td>
      <td>:</td>
      <td>{{ $angsuran->total_bayaran }}</td>
    </tr>
    <tr>
      <td>jumlah_cicilan</td>
      <td>:</td>
      <td>{{ $angsuran->jumlah_cicilan }}</td>
    </tr>
    <tr>
      <td>pembayaran</td>
      <td>:</td>
      <td>{{ $angsuran->pembayaran }}</td>
    </tr>

    <tr>
      <td>tgl_bayaran</td>
      <td>:</td>
      <td>{{ $angsuran->tgl_bayaran }}</td>
    </tr>
    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$angsuran->updated_at}}</td>
    </tr>


  </table>
</div>
@stop