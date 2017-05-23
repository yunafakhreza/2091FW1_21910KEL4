@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data </strong>
    <a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>admin</a>
    <div class="clearfix"></div>
  </div>

  <table class="table">
      <thead>
        <tr>
          <th>ussername</th>
          <th>password</th>
          

          
          
        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $admin)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $admin->ussername }}</td>
            <td>{{ $admin->password }}</td>
            
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('admin/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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