@extends('layouts.app')

@section('htmlheader_title')
Create Project
@endsection

@section('contentheader_title')
Create Project
@endsection

@section('main-content')


<!-- proj name-->
<div class="form-group">
	<label>Project Name</label>
	<input type="text" class="form-control"> <!-- TODO: add form -->
	
	<br />
	<!-- website -->
	<label>Website</label>	                	
	<input type="text" class="form-control"> <!-- TODO: add form -->
	
</div>

<br />

<button type="button" class="btn btn-block btn-success">Create</button>

@endsection
