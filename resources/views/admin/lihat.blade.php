@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('admin') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail admin
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>ussername</td>
      <td>:</td>
      <td>{{ $admin->ussername }}</td>
    </tr>
    <tr>
      <td>password</td>
      <td>:</td>
      <td>{{ $admin->password }}</td>
    </tr>
    
    
     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$admin->updated_at}}</td>
    </tr>


  </table>
</div>
@stop