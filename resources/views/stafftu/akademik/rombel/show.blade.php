@extends('main')
@section('content')
<div class="card card-underline">
	<div class="card-head">
		<header>{!! $namaForm !!}</header>
		<div class="tools">
			<div class="btn-group">
				<a href="{{ route($index) }}" class="btn btn-icon-toggle"><i class="md md-undo"></i></a>
			</div>
		</div>
	</div>
	<div class="col-md-6">

		<div class="card-body">
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>ID</span>
							<small>{{$data->id}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Kelas</span>
							<small>{{$data->kelas->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Semester</span>
							<small>{{$data->semester}}</small>
						</div>
					</div>
				</li>
				
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Date Created</span>
							<small>{{$data->created_at}}</small>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-md-6">
		
		<div class="card-body">
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Tahun Ajaran</span>
							<small>{{$data->tahun_ajaran->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Nama Jurusan</span>
							<small>{{$data->jurusan->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Ruangan</span>
							<small>{{$data->ruangan->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Date Created</span>
							<small>{{$data->created_at}}</small>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@stop