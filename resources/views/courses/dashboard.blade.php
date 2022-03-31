@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('courses.create') }}">Buat Kelas Baru</a>
                        </li>
                    </ul>
                    <form class="d-flex" type="get" action="/students/search">
                        <input class="form-control me-2" name="query" type="search" placeholder="Cari" aria-label="Search"
                        value= "{{ app('request')->input('query') }}">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
