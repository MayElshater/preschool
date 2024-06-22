@extends('layouts.table')
@section('table')
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Number Of Children</th>
                                            <th>More</th>
                                            <th>Edit</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ($classes as $class)
                                        <tr>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ $class->no_of_children }}</td>
                                            <td>Details button/link</td>
                                            <td>Edit button/link</td>
                                        </tr>
                                     @endforeach
                                        
                                    </tbody>
                                </table>

@endsection