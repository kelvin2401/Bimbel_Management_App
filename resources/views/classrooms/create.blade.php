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
						@if (auth()->user()->is_admin==1)	
                        	<div class="text-left"><a href="{{ route('posts.create',$course_id) }}" class="btn btn-outline-primary">Buat Pengumuman Baru</a></div>
						@endif
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
						<td>{!! $post->file !!}</td>
						<td>
							<form action="{{ route('posts.destroy',$post->id) }}" method="POST">
								<a href="{{ route('assignments.create',$post->id) }}" class="btn btn-outline-primary">Kumpul Tugas</a>
								<a href="{{ route('posts.download',$post->file) }}" class="btn btn-outline-primary">Download</a>
								@if (auth()->user()->is_admin==1)
									<a href="{{ route('posts.index',$post->id) }}" class="btn btn-outline-primary">Lihat Tugas</a>
									<a href="{{ route('posts.edit',$post->id) }}" class="btn btn-outline-primary">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-outline-danger ml-1">Delete</button>
								@endif
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
