@extends('admin.layouts.app')

@section('htmlheader_title')
API List - Forum API
@endsection

@section('contentheader_title')
API List - Forum API
@endsection

@section('main-content')
	
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">APIs List</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body no-padding">
		<table class="table table-condensed">
			<tr>
				<th width="40%">APIs</th>
				<th width="20%">Version</th>
				<th width="40%">Description</th>
			</tr>

			<tr>
				<td><a href="#">Forum API</a></td>
				<td>v1.0</td>
				<td>{{ trans('message.lorem')}}</td>
			</tr>
			
			<tr>
				<td><a href="#">Jual Beli API</a></td>
				<td>v1.0</td>
				<td>{{ trans('message.lorem')}}</td>
			</tr>
			
			<tr>
				<td><a href="#">Utility</a></td>
				<td>v1.0</td>
				<td>{{ trans('message.lorem')}}</td>
			</th>
			
			<tr>
				<td><a href="#">EPulsa API</a></td>
				<td>v1.0</td>
				<td>{{ trans('message.lorem')}}</td>
			</tr>

		</table>
	</div>
@endsection