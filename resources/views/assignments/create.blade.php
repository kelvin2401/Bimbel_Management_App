@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form id="add-frm" action="{{ route('assignments.store',$post_id) }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="mb-3">
                    <label for="filename" class="form-label">Nama File</label>
                    <input type="text" class="form-control" id="filename" name="filename">
                </div>
                <input type="hidden" name="post_id" id="post_id" value="{{ $post_id }}"/>
                @csrf
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
