@extends('home.parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('tb_home.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/banner/{{ $data->file }}" class="img-thumbnail" />
	<h3>Title Banner :    {{ $data->title_banner }}  </h3>
	<h3>Description  :    {{ $data->description }}  </h3>
	<h3>Status       :    {{ $data->status }}  </h3>
</div>
@endsection
