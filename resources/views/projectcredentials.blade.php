@extends('layouts.app')

@section('htmlheader_title')
Project Credentials
@endsection

@section('contentheader_title')
Project Credentials
@endsection

@section('main-content')
<div class="box-body no-padding">
	<table class="table table-striped">
		<tr>
			<th style="width: 10px">#</th>
			<th>Name</th>
			<th style="width: 35%">Creation Date</th>
			<th style="width: 35%; text-align:center">Key</th>
		</tr>

		<!-- TODO: this should be looped -->
		<tr>
			<td>1.</td>
			<td>Kaskus Forum</td>
			<td>   </td>
			<td>   </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Kaskus JB</td>			                 
			<td>  </td>
			<td>   </td>
		</tr>
		<tr>
			<td>3.</td>
			<td>...</td>
			<td>  </td>
			<td>   </td>
		</tr>
		<!-- loop ends here -->

	</table>

	<br />
	<div align="right">
		<button type="button" class="btn btn-success">Create API Key</button>
		<button type="button" class="btn btn-warning">Create oAuth Client</button>
		<button type="button" class="btn btn-danger">Delete</button>
	</div>
	
</div>
@endsection
