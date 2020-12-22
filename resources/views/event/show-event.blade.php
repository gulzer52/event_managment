@extends('layout.default')
@section('content')
<h2>View Branch</h2>
<table class="table table-striped">
	<thead>
		<td>Event Name</td>
		<td>Event Date</td>
		<td>Action</td>
	</thead>
	<tbody>
		@foreach($events as $event)
		<tr>
			<td>{{$event->name}}</td>
			<td>{{$event->date}}</td>
			<td>
				<a href="{{url('/admin/edit-event/'.$event->id)}}" class="btn btn-primary">Edit</a>
				<a href="{{url('/admin/delete-event/'.$event->id)}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection