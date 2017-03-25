@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('matakuliah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data matakuliah</strong>

	</div>
	<table class="table">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>{{ $matakuliah->username }}</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>{{ $matakuliah->password }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $matakuliah->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Tanggal Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $matakuliah->updated_at }}</td>
			</tr>
	</table>
</div>
@stop