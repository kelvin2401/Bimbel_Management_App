@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form id="add-frm" action="{{ route('courses.update',$course->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="course_name" class="form-label">Course Name</label>
                    <input type="text" value="{{ $course->course_name }}" class="form-control" id="course_name" name="course_name" required>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
