@extends('layouts.app')

@section('htmlheader_title')
Create API Key
@endsection

@section('contentheader_title')
Create API Key
@endsection

@section('main-content')
<div class="small-box bg-blue">
	<div class="inner">
		<h3>Server Key</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-server"></i>
	</div>
	<a data-toggle="modal" href="#serverkey" class="small-box-footer">
		Select <i class="fa fa-arrow-circle-right"></i>
	</a>
</div>

<div class="small-box bg-green">
	<div class="inner">
		<h3>Browser Key</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-globe"></i>
	</div>
	<a data-toggle="modal" href="#browserkey" class="small-box-footer">
		Select <i class="fa fa-arrow-circle-right"></i>
	</a>
</div>

<div class="small-box bg-yellow">
	<div class="inner">
		<h3>Android Key</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-android"></i>
	</div>
	<a href="#" class="small-box-footer">
		In development
	</a>
</div>


<div class="small-box bg-red">
	<div class="inner">
		<h3>iOS Key</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-apple"></i>
	</div>
	<a href="#" class="small-box-footer">
		In development
	</a>
</div>


<!-- Modals -->
<div class="modal" id="serverkey">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Create Server Key</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Key Name</label>
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>IP Whitelist</label>	                	
						<input type="text" class="form-control"> <!-- TODO: change this to listview-->

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Create</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- /.modal -->

<div class="modal" id="browserkey">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Create Browser Key</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Key Name</label>
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>Domain Name</label>	                	
						<input type="text" class="form-control"> <!-- TODO: change this to listview-->

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Create</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- /.modal -->
@endsection
