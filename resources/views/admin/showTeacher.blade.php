<!-- resources/views/admin/showteacher.blade.php -->

@extends('layouts.dashMain')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Teacher Details</h4>
                    </div>

                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">First Name:</label>
                                <p>{{ $teacher->first_name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold">Last Name:</label>
                                <p>{{ $teacher->last_name }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Subject:</label>
                                <p>{{ $teacher->subject }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold">Published:</label>
                                <p>{{ $teacher->published }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="font-weight-bold">Image:</label>
                                <img src="{{ asset($teacher->image) }}" alt="" style="height:300px">
                            </div>
                        </div>

                       

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="{{ route('admin.teachersTable') }}" class="btn btn-secondary">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
