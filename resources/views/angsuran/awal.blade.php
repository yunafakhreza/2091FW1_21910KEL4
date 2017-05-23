@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data angsuran</strong>
    <a href="{{url('angsuran/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>angsuran</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>sisa_cicilan</th>
          <th>cicilan_ke</th>
          <th>total_bayaran</th>
          <th>jumlah_cicilan</th>
          <th>pembayaran</th>
          <th>tgl_bayaran</th>

          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $angsuran)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $angsuran->sisa_cicilan }}</td>
            <td>{{ $angsuran->cicilan_ke }}</td>
            <td>{{ $angsuran->total_bayaran }}</td>
             <td>{{ $angsuran->jumlah_cicilan }}</td>
              <td>{{ $angsuran->pembayaran }}</td>
               <td>{{ $angsuran->tgl_bayaran }}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('angsuran/edit/'.$angsuran->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('angsuran/'.$angsuran->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('angsuran/hapus/'.$angsuran->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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