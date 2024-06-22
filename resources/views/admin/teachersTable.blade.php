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
                                            <th>First Name</th>
                                            <th>Subject</th>
                                            <th>Edit</th>
                                            <th>Show</th> 
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>{{ $teacher->first_name }}</td>
                                            <td>{{ $teacher->last_name }}</td>
                                            <td>{{ $teacher->subject }}</td>
                                            <td><a href="{{route('admin.editTeachers',$teacher->id)}}">Edit</td>
                                            <td><a href="{{route('showTeacher',$teacher->id)}}">Show</td>
                                        </tr>
                                     @endforeach
                                        
                                    </tbody>
                                </table>

@endsection