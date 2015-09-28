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
	<div class="card-body">
		<div class="col-md-6">
			<ul class="list divider-full-bleed">

				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Kategori Mata Pelajaran</span>
							<small>{{$data->kategori_mata_pelajaran->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Nama Mata Pelajaran</span>
							<small>{{$data->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Singkatan</span>
							<small>{{$data->singkatan}}</small>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="col-md-6">
			<ul class="list divider-full-bleed">

				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Jurusan</span>
							<small>{{$data->jurusan->label}}</small>
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