@extends('template')
@section('content')
	<header class="page-header">
		<h2>News &amp; Events</h2>
	</header>

	<!-- start: page -->
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
					<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
				</div>
		
				<h2 class="panel-title">Add News & Event</h2>
			</header>
			{{Form::open(['url'=>$url,'method'=>'POST','files'=>true])}}
			{{$notip}}
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>News / Events Title</label>
							<input type="text" class="form-control" name='ne_title' value="{{$ne_title}}">
							<input type="hidden" class="form-control" name='id_ne' value="{{$id_ne}}">
						</div>
						
						<div class="form-group" id='divfile'>
							<label>Add Image</label>
							<input type="file" class="form-control" name='image[]'>
						</div>
						<div class="form-group">
				            <button class="btn btn-success" id='clone_file' type="button">Add File</button>
				        </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tags</label>
							<input type="text" class="form-control" name='ne_tag' value="{{$ne_tag}}">
						</div>
						<div class="form-group">
							<label>Type</label>
							{{Form::select('ne_type',['news'=>'News','event'=>'Event'],$ne_type,['class'=>'form-control'])}}
						</div>
					</div>
				</div>
				<br/>
				<div class="row">
				<div class="col-md-12">
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control summernote" data-plugin-summernote data-plugin-options='{ "height": 180 }' name='ne_content'>{{$ne_content}}</textarea>
				</div>
				</div>
				</div>
			</div>
			@if($action == "edit")
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Image</th>
						<th>Action</th>
					</tr>	
				</thead>
				<tbody>
					@foreach($file as $files)
					<tr>
						<td><img src="{{Config::get('app.url')}}assets/upload/{{$files->nef_file}}" width="100" height="100"></td>
						<td><a href="{{Config::get('app.url')}}public/admin/nef/delete/{{$files->id_nef}}?idne={{$id_ne}}" class='btn btn-danger' onclick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@endif
			<div class="panel-footer ">
				<button type="submit" class="btn btn-default">Submit</button>	
				<a href="{{Config::get('app.url')}}public/admin/newsevents" class="btn btn-warning">Back</a>	
			</div>
			</form>

		</section>
		<script src="<?php echo Config::get('app.url');?>assets/js/jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		        $('#clone_file').click(function(){
		            var form_file = "<div class='form-group'>"+
		                            "<label>Add Image</label>"+
		                            "<input type='file' class='form-control' name='image[]' >"+
		                            "</div>";
		            // console.log(form_file);
		            // alert(form_file);
		            $('#divfile').append(form_file);
		        });
		    });
		</script>
	<!-- end: page -->
@stop