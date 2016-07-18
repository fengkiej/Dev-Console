@extends('admin.layouts.app')

@section('htmlheader_title')
User Details
@endsection

@section('contentheader_title')
User Details
@endsection

@section('main-content')
<!-- userid -->
<div class="form-group">
	<label>UserID</label>
	<input type="text" class="form-control" disabled> <!-- TODO: add form -->
	<br/ >
	<label>Status: <span class="text-green">Enabled</span></label>
	<button type="button" class="btn btn-danger pull-right btn-sm">Disable User</button>
	<br />
</div>

<!-- this part can be generalized with the one in projects.blade.php -->
<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">Project List</h3>	
	</div>

	<div class="box-body no-padding">
		<table class="table table-striped">
			<tr>
				<th>Project Name</th>
				<th>Website</th>
				<th>Credentials</th>
			</tr>

			<!-- TODO: this should be looped -->
			<tr>
				<td>Project-A</td>
				<td><a href="#">http://example.com/</td>
				<td>
					<ul>
						<li><a href="#">qwerty</a></li>
						<li><a href="#">asdf</a></li>
						<li><a href="#">zxcv</a></li>
					</ul>
				</td>
			</tr>
			<tr>
				<td>Project-B</td>			                 
				<td><a href="#">http://example.com/</a></td>
				<td>
					<ul>
						<li><a href="#">tyui</a></li>
						<li><a href="#">ghjkl</a></li>
					</ul>
				</td>
			</tr>
			<!-- loop ends here -->

			<tr>
				<td colspan="100%">
					<div class="box-footer clearfix text-center">
						<ul class="pagination pagination-sm no-margin">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
@endsection
