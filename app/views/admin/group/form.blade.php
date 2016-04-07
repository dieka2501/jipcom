@extends('template')
@section('content')
	<header class="page-header">
		<h2>Group</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Add New</h2>
			</header>
			<form>
			<div class="panel-body">
				<div class="form-group">
				<label>Group ID</label>
				<input type="text" class="form-control">
				</div>
				<div class="form-group">
				<label>Nama Group</label>
				<input type="text" class="form-control">
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop