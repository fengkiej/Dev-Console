@extends('layouts.app')

@section('htmlheader_title')
Create ClientID
@endsection

@section('contentheader_title')
Create ClientID
@endsection

@section('main-content')
<div class="small-box bg-blue">
	<div class="inner">
		<h3>Web Application</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-laptop"></i>
	</div>
	<a data-toggle="modal" href="#webapp" class="small-box-footer">
		Select <i class="fa fa-arrow-circle-right"></i>
	</a>
</div>

<div class="small-box bg-green">
	<div class="inner">
		<h3>Android</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-android"></i>
	</div>
	<a data-toggle="modal" href="#android" class="small-box-footer">
		Select <i class="fa fa-arrow-circle-right"></i>
	</a>
</div>


<div class="small-box bg-yellow">
	<div class="inner">
		<h3>iOS</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-apple"></i>
	</div>
	<a data-toggle="modal" href="#ios" class="small-box-footer">
		Select <i class="fa fa-arrow-circle-right"></i>
	</a>
</div>


<!-- Modals --> <!-- I think this part might be simplified, still figuring out how -->
<div class="modal" id="webapp">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Web Application</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Key Name</label>
						<input type="text" class="form-control"> <!-- TODO: add form -->
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

<div class="modal" id="android">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Android</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Key Name</label>
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>Cert Fingerprint</label>	                	
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>Package Name</label>	                	
						<input type="text" class="form-control"> <!-- TODO: add form -->

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


<div class="modal" id="ios">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">iOS</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Key Name</label>
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>Bundle ID</label>	                	
						<input type="text" class="form-control"> <!-- TODO: add form -->

						<label>AppStore ID</label>	                	
						<input type="text" class="form-control"> <!-- TODO: add form -->

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
