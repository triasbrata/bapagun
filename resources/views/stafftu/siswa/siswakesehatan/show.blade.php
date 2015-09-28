
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
							<span>Nama Siswa</span>
							<small>{{$data->siswa->nama}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Kebutuhan Khusus Siswa</span>
							<small>{{$data->kebutuhan_khusus->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Golongan Darah</span>
							<small>{{$data->golongan_darah}}</small>
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
		<div class="col-md-6">
			
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Penyakit</span>
							<small>{{$data->penyakit}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Berat Badan</span>
							<small>{{$data->berat}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Tinggi Badan</span>
							<small>{{$data->tinggi}}</small>
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