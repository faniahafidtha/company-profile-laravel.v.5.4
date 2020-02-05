@extends('home.parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('tb_home.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('tb_home.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="col-md-4 text-right">Title Banner</label>
		<div class="col-md-5">
			<input type="text" name="title_banner" class="form-control">
		</div>
	</div>

	<br>
	<br>
	<br>

	<div class="form-group">
		<label class="col-md-4 text-right">Banner (Min.3 MB)</label>
		<div class="col-md-8">
			<input type="file" name="file">
		</div>
	</div>

	<br>
	<br>
	<br> 

	<div class="form-group">
		<label class="col-md-4 text-right">Description</label>
		<div class="col-md-5">
			<input type="text" name="description" class="form-control" />
		</div>
	</div>

	<br>
	<br>
	<br>

	<div class="form-group">
		<label class="col-md-4 text-right">Status</label>
		<div class="col-md-5">
			<select name="status" class="form-control" >
				<option></option>
				<option value="Aktif">Aktif</option>
				<option value="Nonaktif">Nonaktif</option>          
			</select>
		</div>
	</div>

	<br><br><br>

	<div class="form-group text-center">
		<input type="submit" name="submit" class="btn btn-primary input-lg" value="Submit">
	</div>

</form>

@endsection



