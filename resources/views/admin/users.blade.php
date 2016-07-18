@extends('layouts.app')

@section('htmlheader_title')
Users
@endsection

@section('contentheader_title')
Users
@endsection

@section('main-content')
<!-- TODO: search box, add form! -->
<div class="input-group">
	<input type="text" name="q" class="form-control" placeholder="Search user...">
	<span class="input-group-btn">
		<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		</button>
	</span>
</div>


<br />

<div class="box box-primary box-solid">
	<div class="box-header">
		<h3 class="box-title">User List</h3>	
	</div>

	<div class="box-body no-padding">
		<table class="table table-striped">
			<tr>
				<th>UserID</th>
				<th>Created At</th>
				<th>Projects</th>
				<th>Group</th>
			</tr>

			<!-- TODO: this should be looped -->
			<tr>
				<td> Admin</td>
				<td>1970-01-01</td>
				<td>-</td>
				<td>1 - Admin</td>
			</tr>
			<tr>
				<td>User1</td>			                 
				<td>1970-01-01</td>
				<td>
					<ul>
						<li><a href="#">Project 1</a></li>
						<li><a href="#">Project 2</a></li>
					</ul>
				</td>
				<td>2 - Kaskus Dev</td>
			</tr>
			<tr>
				<td>User2</td>
				<td>1970-01-01</td>
				<td>
					<ul>
						<li><a href="#">Project 3</a></li>
						<li><a href="#">Project 4</a></li>
						<li><a href="#">Project 5</a></li>
					</ul>
				</td>
				<td>3 - Developer</td>
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
