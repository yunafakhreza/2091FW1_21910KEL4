@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data jual</strong>
    <a href="{{url('jual/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>jual</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>barang_id</th>
          <th>konsumen_id</th>
          <th>tgl_beli</th>
          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $jual)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $jual->barang_id}}</td>
            <td>{{ $jual->konsumen_id }}</td>
            <td>{{ $jual->tgl_beli }}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('jual/edit/'.$jual->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('jual/'.$jual->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('jual/hapus/'.$jual->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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