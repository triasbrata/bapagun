
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
							<span>Nama Siswa</span>
							<small>{{$data->siswa->nama}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Beasiswa</span>
							<small>{{$data->beasiswa}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Tanggal Pindah</span>
							<small>{{$data->tanggal_pindah}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Data Created_at</span>
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
						<span>Alasan Pindah</span>
						<small>{{$data->alasan_pindah}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Tanggal Lulus</span>
						<small>{{$data->tanggal_lulus}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Nomor Sttb</span>
						<small>{{$data->no_sttb}}</small>
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