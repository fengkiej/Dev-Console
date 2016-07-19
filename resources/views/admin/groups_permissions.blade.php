@extends('admin.layouts.app')

@section('htmlheader_title')
Group Permissions
@endsection

@section('contentheader_title')
Group Permissions
@endsection

@section('main-content')
<!-- groudname -->
<div class="form-group">
	<label>Group Name</label>
	<input type="text" class="form-control" disabled> <!-- TODO: add form -->
	<br />
</div>

<!-- /.box -->
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">API Mapping</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body no-padding">
		<table class="table table-condensed">
			<tr>
				<th style="text-align: center">APIs</th>
				<th colspan="2" style="text-align: center">Progress</th>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center"><strong>API Key</strong></td>
				<td style="text-align: center"><strong>Oauth</strong></td>
			</tr>

			<!-- content started here -->
			<tr>
				<td><label>Forum API</label></td>
			</tr>
			<tr>
				<td style="text-indent: 1em">User</td>
				<td style="text-align: center"><input type="checkbox"></td>
				<td style="text-align: center"><input type="checkbox"></td>
			</tr>
			<tr>
				<td style="text-indent: 1em">Thread</td>
				<td style="text-align: center"><input type="checkbox"></td>
				<td style="text-align: center"><input type="checkbox"></td>
			</tr>

			<tr>
				<td><label>JB API</label></td>
			</tr>
			<tr>
				<td style="text-indent: 1em">Nego</td>
				<td style="text-align: center"><input type="checkbox"></td>
				<td style="text-align: center"><input type="checkbox"></td>
			</tr>
			<tr>
				<td style="text-indent: 1em">Buy Now</td>
				<td style="text-align: center"><input type="checkbox"></td>
				<td style="text-align: center"><input type="checkbox"></td>
			</tr>

		</table>
	</div>
	
		<button type="button" class="btn btn-danger pull-right margin">Reset</button>
		<button type="button" class="btn btn-success pull-right margin">Save Mapping</button>
</div>
@endsection
