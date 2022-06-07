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
                        <div class="text-left"><a href="{{ route('posts.create',$course_id) }}" class="btn btn-outline-primary">Buat Pengumuman Baru</a></div>
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
						<th scope="col">Pengumuman</th>
					</tr>
				</thead>
				<tbody>
					@forelse($posts as $post)
					<tr>
						<td>{!! $post->description !!}</td>
						<td>
							<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
								<a href="{{ route('posts.edit',$post->id) }}"
								class="btn btn-outline-primary">Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-outline-danger ml-1">Delete</button>
						</td>
					@empty
					<tr>
						<td colspan="3">No posts found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
