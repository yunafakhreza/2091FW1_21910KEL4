@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data angsuran</strong>
    <a href="{{url('konsumen/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>konsumen</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>nama</th>
          <th>alamat</th>
          <th>no_ktp</th>
          <th>jenis_kelamin</th>
          <th>pekerjaan</th>
          

          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $konsumen)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $konsumen->nama }}</td>
            <td>{{ $konsumen->alamat }}</td>
            <td>{{ $konsumen->no_ktp }}</td>
             <td>{{ $konsumen->jenis_kelamin }}</td>
              <td>{{ $konsumen->pekerjaan }}</td>
               
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('konsumen/edit/'.$konsumen->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('konsumen/'.$konsumen->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('konsumen/hapus/'.$konsumen->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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