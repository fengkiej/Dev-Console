@extends('layouts.app')

@section('htmlheader_title')
	Project Settings
@endsection

@section('contentheader_title')
	Project Settings
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="box box-solid box-primary">
				<div class="col-md-10 margin">

					<!-- proj name-->
	                <div class="form-group">
	                	<label>Project Name</label>

              			<div class="input-group">
	                		<input type="text" class="form-control" disabled> <!-- TODO: add form -->

	                		<div class="input-group-btn">
                 			 <button type="button" class="btn btn-warning">Edit</button>
             				</div>
	                	</div>
							
					<!-- website -->
	                	<label>Website</label>

	                	<div class="input-group">
	                		<input type="text" class="form-control" disabled> <!-- TODO: add form -->

	                		<div class="input-group-btn">
                 			 <button type="button" class="btn btn-warning">Edit</button>
             				</div>
	                	</div>
	               	</div>

	               	<div class="box box-primary box-solid">
	               		<div class="box-header">
	               			<h3 class="box-title">Enabled APIs</h3>	
	               		</div>

	          			<div class="box-body no-padding">
			              <table class="table table-striped">
			                <tr>
			                  <th style="width: 10px">#</th>
			                  <th>API Name</th>
			                  <th style="width: 120px; text-align:center">Action</th>
			                </tr>

			                <!-- TODO: this should be looped -->
			                <tr>
			                  <td>1.</td>
			                  <td>Kaskus Forum</td>
			                  <td><button type="button" class="btn btn-block btn-danger btn-sm">Remove</button></td>
			                </tr>
			                <tr>
			                  <td>2.</td>
			                  <td>Kaskus JB</td>			                 
			                  <td><button type="button" class="btn btn-block btn-danger btn-sm">Remove</button></td>
			                </tr>
			                <tr>
			                  <td>3.</td>
			                  <td>...</td>
			                  <td><button type="button" class="btn btn-block btn-danger btn-sm">Remove</button></td>
			                </tr>
			                <!-- loop ends here -->

			                <tr>
			                 
			                  <td colspan="100%"><button type="button" class="btn btn-block btn-success">Add</button></td>

			                </tr>
			              </table>
			            </div>
	               	</div>
						
				</div>
			</div>
		</div>
	</div>
@endsection
