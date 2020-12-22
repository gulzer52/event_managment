@extends('layout.default')
@section('content')
<h2>All Shedule</h2>
<table class="table table-striped">
	<thead>
        <th>Speaker Name</th>
		<th>Event Name</th>
		<th>Date</th>
        <th>Start Time</th>
        <th>End Time</th>
		<th>Action</th>
	</thead>
	<tbody>
	
		@foreach($shedules as $shedule)
		<tr>
			<td>{{$shedule->sname}}</td>
			<td>{{$shedule->name}}</td>
			<td>{{$shedule->date}}</td>
            <td>{{$shedule->startt}}</td>
            <td>{{$shedule->endt}}</td>
			<td>
				<a href="{{url('/admin/shedule-delete',['id'=> $shedule->id])}}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection