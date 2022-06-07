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
                        <div class="text-left"><a href="{{ route('courses.create') }}" class="btn btn-outline-primary">Buat Kelas Baru</a></div>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
		<div class="col-12 text-center pt-5">

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Nama Kelas</th>
					</tr>
				</thead>
				<tbody>
					@forelse($courses as $course)
					<tr>
						<td>{!! $course->course_name !!}</td>
						<td>
							<form action="{{ route('courses.destroy',$course->id) }}" method="POST">
								<a href="{{ route('classroom.create',$course->id) }}"
								class="btn btn-outline-primary">Akses Kelas</a>
								<a href="{{ route('courses.edit',$course->id) }}"
								class="btn btn-outline-primary">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-danger ml-1">Delete</button>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No courses found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
