php
Copy code
<!-- resources/views/teacherren/edit.blade.php -->

@extends('layouts.dashMain')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Teacher</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.updateTeachers', $teacher->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $teacher->first_name) }}" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $teacher->last_name) }}" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                         <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <select class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" required>
                                        <option value="">Select Subject</option>
                                        <option value="English Teacher" {{ old('subject', $teacher->subject) == 'English Teacher' ? 'selected' : '' }}>English Teacher</option>
                                        <option value="Math Teacher" {{ old('subject', $teacher->subject) == 'Math Teacher' ? 'selected' : '' }}>Math Teacher</option>
                                        <option value="Science Teacher" {{ old('subject', $teacher->subject) == 'Science Teacher' ? 'selected' : '' }}>Science Teacher</option>
                                        <option value="Computer Teacher" {{ old('subject', $teacher->subject) == 'Computer Teacher' ? 'selected' : '' }}>Computer Teacher</option>
                                    </select>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                           

                            <div class="form-group">
                                <a href="{{ route('admin.teachersTable') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update teacher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection