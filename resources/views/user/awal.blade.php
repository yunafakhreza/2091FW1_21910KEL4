@extends('master')
@section('container')
<div class="panel panel-default">
  <div class="panel-heading">
    <strong>Seluruh Data user</strong>
    <a href="{{url('user/tambah')}}" class="btn btn-xs btn-primary pull-right">
    <i class="fa fa-plus"></i>user</a>
    <div class="clearfix"></div>
  </div>

  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>username</th>
          <th>password</th>

        </tr>
      </thead>

      <tbody>
        <?php $x=1?>
        @foreach ($data as $user)
          <tr>
            <td>{{ $x++ }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{url('user/edit/'.$user->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="{{url('user/'.$user->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat">
                  <i class="fa fa-eye"></i>
                </a>
                <a href="{{url('user/hapus/'.$user->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus">
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