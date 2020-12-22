@extends('layout.default')
@section('content')
<h2>View Branch</h2>
<table class="table table-striped">
	<thead>
        <th>Speaker Title</th>
		<th>Speaker Name</th>
		<th>Speaker Email</th>
        <th>Speaker Phone</th>
        <th>Speaker Image</th>
		<th>Action</th>
	</thead>
	<tbody>
		@foreach($speakers as $speaker)
		<tr>
            <td>{{$speaker->title}}</td>
			<td>{{$speaker->sname}}</td>
			<td>{{$speaker->email}}</td>
            <td>{{$speaker->phone}}</td>
            <td><img src="{{asset('images')}}/{{$speaker->image}}" style="max-width:40px; " alt=""></td>
			<td>
				<a href="{{url('admin/edit-speaker/'.$speaker->id)}}" class="btn btn-primary">Edit</a>
				<a href="{{url('admin/delete-speaker/'.$speaker->id)}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection