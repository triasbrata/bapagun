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
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>NIP/NUPTK Guru Pengajar</span>
							<small>{{is_null($data->guru->pegawai->nip) ? $data->guru->pegawai->nuptk : $data->guru->pegawai->nip}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Guru Pengajar</span>
							<small>{{$data->huruf}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Mata Pelajaran</span>
							<small>{{$data->mata_pelajaran->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Kategori Mata Pelajaran</span>
							<small>{{$data->mata_pelajaran->kategori->huruf}} ({{$data->mata_pelajaran->kategori->label}})</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Kelas</span>
							<small>{{$data->mata_pelajaran->kelas->label}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Jurusan</span>
							<small>{{$data->mata_pelajaran->jurusan->label}}</small>
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
@stop