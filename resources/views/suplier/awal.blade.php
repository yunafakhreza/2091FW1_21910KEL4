@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data suplier</strong>
    <a href="{{url('suplier/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>suplier</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>nama</th>
          <th>alamat</th>
          <th>no_tlp</th>
          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $barang)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $suplier->nama }}</td>
            <td>{{ $suplier->alamat }}</td>
            <td>{{ $suplier->no_tlp }}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('suplier/edit/'.$suplier->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('suplier/'.$suplier->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('suplier/hapus/'.$suplier->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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