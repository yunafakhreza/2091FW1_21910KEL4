@extends('master')
@section('container')
<div class="panel panel-warning">
  <div class="panel-heading">
    <strong>
      <a href="{{url('user') }}">
        <i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i>
      </a>
      Detail Data
    </strong>
  </div>

  <table class="table">
    <tr>
      <td>username</td>
      <td>:</td>
      <td>{{ $user->username }}</td>
    </tr>
    <tr>
      <td>password</td>
      <td>:</td>
      <td>{{ $user->password }}</td>
    </tr>
    
    <tr>
      <td class="col-xs-4">Dibuat tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$user->created_at}}</td>
    </tr>

     <tr>
      <td class="col-xs-4">Diperbarui tanggal</td>
      <td class="col-xs-1">:</td>
      <td>{{$user->updated_at}}</td>
    </tr>


  </table>
</div>
@stop