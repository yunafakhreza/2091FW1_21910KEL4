@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>cara pemesanan</strong>
    <a href="{{url('pemesanan/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>pemesanan</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>harga_beli</th>
          <th>tgl_beli</th>
          <th>barang_id</th>
          <th>suplier_id</th>
          
          

          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $pemesanan)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $pemesanan->harga_beli }}</td>
            <td>{{ $pemesanan->tgl_beli }}</td>
            <td>{{ $pemesanan->barang_id }}</td>
             <td>{{ $pemesanan->suplier_id }}</td>
              
               
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('pemesanan/edit/'.$pemesanan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('pemesanan/'.$pemesanan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('pemesanan/hapus/'.$pemesanan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
                  <i class="fa fa-remove"></i>
                </a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
</div>
@stop