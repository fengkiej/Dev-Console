@extends('admin.layouts.app')

@section('htmlheader_title')
Groups
@endsection

@section('contentheader_title')
Groups
@endsection

@section('main-content')
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Groups</h3>	
	</div>

	<div class="box-body no-padding">
		<table class="table table-striped">
			<tr>
				<th width="10%">GroupID</th>
				<th>Group Title</th>
			</tr>

			<!-- TODO: this should be looped, data from acl table -->
			<tr>
				<td>1</td>
				<td><a href="#">Admin</td>
			</tr>
			<tr>
				<td>2</td>			                 
				<td><a href="#">Kaskus Dev</a></td>
			</tr>
			<tr>
				<td>3</td>			                 
				<td><a href="#">Developer</a></td>
			</tr>
			<!-- loop ends here -->
		</table>
	</div>
</div>
@endsection
