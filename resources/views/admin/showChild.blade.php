<!-- resources/views/admin/showChild.blade.php -->

@extends('layouts.dashMain')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Child Details</h4>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">First Name:</label>
                                <p>{{ $child->first_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold">Last Name:</label>
                                <p>{{ $child->last_name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Date of Birth:</label>
                                <p>{{ $child->date_of_birth }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold">Grade:</label>
                                <p>{{ $child->grade }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Class:</label>
                                <p>{{ $child->class->name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="font-weight-bold">Parent Details:</label>
                                <p>{{ $child->parent->first_name }} {{ $child->parent->last_name }}</p>
                                <p>Email: {{ $child->parent->email }}</p>
                                <p>Phone: {{ $child->parent->phone }}</p>
                                <p>Address: {{ $child->parent->address }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="font-weight-bold">Teachers:</label>
                                <ul class="list-group">
                                    @foreach($child->teachers as $teacher)
                                        <li class="list-group-item">
                                            {{ $teacher->first_name }} {{ $teacher->last_name }}: {{ $teacher->subject }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('admin.childrenTable') }}" class="btn btn-secondary">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
