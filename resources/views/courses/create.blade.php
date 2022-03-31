@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form action="/courses" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                    value="{{ isset($data) ? $data->name : ''}}">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Course Section</label>
                    <input type="text" class="form-control" id="section" name="section" aria-describedby="name"
                    value="{{ isset($data) ? $data->section : ''}}">
                    @error('section')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <input type="hidden" name="ownerId" value="{{ $ownerId }}"/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
