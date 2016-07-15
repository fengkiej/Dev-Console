@extends('layouts.app')

@section('htmlheader_title')
Consent Screen
@endsection

@section('contentheader_title')
Consent Screen
@endsection

@section('main-content')
<!-- proj name-->
<div class="form-group">
	<label>Email Address</label>
	<input type="email" class="form-control"> <!-- TODO: add form -->
	<br />
	
	<label>Product Name</label>
	<input type="text" class="form-control"> <!-- TODO: add form -->
	<br />

	<label>Homepage URL</label>
	<input type="text" class="form-control"> <!-- TODO: add form -->
	<br />

	<label>Product Logo</label>
	<input type="file"> <!-- TODO: add form -->
	<br />

	<label>Privacy Policy URL</label>
	<input type="text" class="form-control"> <!-- TODO: add form -->
	<br />

	<label>TOS URL</label>
	<input type="text" class="form-control"> <!-- TODO: add form -->
	<br />

	<div align="right">
		<button type="button" class="btn btn-success">Save</button>
		<button type="button" class="btn btn-danger">Cancel</button>
	</div>
</div>

<br />
</div>

@endsection
