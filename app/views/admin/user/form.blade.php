@extends('template')
@section('content')
	<header class="page-header">
		<h2>User</h2>
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
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>ID User</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Group</label>
							<select class="form-control">
								<option>Sample</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select class="form-control">
								<option>Sample</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
			</form>
		</section>
		
	<!-- end: page -->
@stop