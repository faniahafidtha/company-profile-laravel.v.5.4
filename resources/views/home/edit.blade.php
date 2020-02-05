@extends('home.parent')

@section('main')

<div align="right">
	<a href="{{ route('tb_home.index') }}" class="btn btn-default">Back</a>
</div>

<br>

<form  action="{{ route('tb_home.update', $data->id) }}" enctype="multipart/form-data" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT')}}
	<div class="form-group">
		<label class="col-md-4 text-right">Title Banner</label>
		<div class="col-md-5">
			<input type="text" name="title_banner" value="{{ $data->title_banner }}" class="form-control">
		</div>
	</div>

	<br>
	<br>
	<br>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Banner (Min.3 MB)</label>
		<div class="col-md-8">
			<input type="file" name="file">
			<img src="{{ URL::to('/') }}/banner/{{ $data->file }}" class="img-thumbnail" width="100">
			<input type="hidden" name="hidden_image" value="{{ $data->file }}">
		</div>
	</div>

	<br>
	<br>
	<br> 

	<div class="form-group">
		<label class="col-md-4 text-right">Description</label>
		<div class="col-md-5">
			<input type="text" name="description" value="{{ $data->description }}" class="form-control">
		</div>
	</div>

	<br>
	<br>
	<br>

	<div class="form-group">
		<label class="col-md-4 text-right">Status</label>
		<div class="col-md-5">
			<select name="status" class="form-control">
				<option value="Aktif" {{ $data->status === "Aktif" ? "selected" : ""}}>Aktif</option>
				<option value="Nonaktif" {{$data->status === "Nonaktif" ? "selected" : ""}}>Nonaktif</option>
			</select>
		</div>
	</div>

	<br><br><br>

	<div class="form-group text-center">
		<input type="submit" name="submit" class="btn btn-primary input-lg" value="submit">
	</div>
</form>
@endsection