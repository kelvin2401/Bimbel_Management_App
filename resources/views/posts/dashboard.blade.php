@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
						<th scope="col">Tugas</th>
					</tr>
				</thead>
				<tbody>
					@forelse($assignments as $assignment)
					<tr>
						<td>{!! $assignment->file !!}</td>
						<td>
							<form action="" method="POST">
								<a href="{{ route('posts.download',$assignment->file) }}" class="btn btn-outline-primary">Download</a>
						</td>
					@empty
					<tr>
						<td colspan="3">No assignments found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
