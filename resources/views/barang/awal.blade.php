@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data barang</strong>
    <a href="{{url('barang/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>barang</a>
    <div class="clearfix"></div>
  </div>

  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Merk</th>
          <th>Tipe</th>
          <th>Harga</th>
          <th>Jumlah Angsuran</th>
          <th>Stok</th>
          <th>Warna</th>
          <th>Tahun Terbit</th>
          <th>Jumlah Cicilan</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $barang)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $barang->merk }}</td>
            <td>{{ $barang->Tipe }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->jumlah_angsuran   }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->warna }}</td>
            <td>{{ $barang->thn_terbit }}</td>
            <td>{{ $barang->jumlah_cicilan }}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('barang/edit/'.$barang->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('barang/'.$barang->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('barang/hapus/'.$barang->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                  <i class="fa fa-remove"></i>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  </div>
</div>
@stop