@extends('layouts.table')

@section('table')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($children as $child)
        <tr>
            <td>{{ $child->first_name }}</td>
            <td>{{ $child->last_name }}</td>
            <td>{{ $child->grade }}</td>
            <td><a href="{{route('admin.editChildren',$child->id)}}">Edit</td>
            <td><a href="{{route('admin.showChild',$child->id)}}">Show</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection