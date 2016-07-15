@extends('layouts.app')

@section('htmlheader_title')
Create API Key
@endsection

@section('contentheader_title')
Create API Key
@endsection

@section('main-content')
<div class="small-box bg-aqua">
	<div class="inner">
		<h3>Server Key</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum iaculis leo ac ultrices.</p>
	</div>
	<div class="icon">
		<i class="fa fa-server"></i>
	</div>
	<a href="#" class="small-box-footer">
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
	<a href="#" class="small-box-footer">
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



@endsection
