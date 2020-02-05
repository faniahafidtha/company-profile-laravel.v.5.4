@extends('home.parent')

@section('main')

<div align="right">
	<a href="{{ route('tb_home.create') }}" class="btn btn-success">Add New</a>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">

	<tr>
		<th>Title Banner</th>
		<th>Banner</th>
		<th>Description</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>{{ $row->title_banner }}</td>
			<td><img src="{{ URL::to('/') }}/banner/{{ $row->file }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->description }}</td>
			<td>{{ $row->status }}</td>
			<td>
				
					<form action="{{ route('tb_home.destroy', $row->id) }}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger">Delete</button>
						<a href="{{ route('tb_home.show', $row->id) }}" class="btn btn-primary">Show</a>
						<a href="{{ route('tb_home.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection