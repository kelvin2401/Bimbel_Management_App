@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form id="add-frm" action="{{ route('posts.update',$post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" value="{{ $post->description }}" class="form-control" id="description" name="description" required>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="mb-3">
                    <label for="filename" class="form-label">Nama File</label>
                    <input type="text" class="form-control" id="filename" name="filename">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
