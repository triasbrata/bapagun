
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
							<span>Lulusan Dari</span>
							<small>{{$data->lulusan_dari}}</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Tanggal Sttb</span>
							<small>{{$data->tanggal_sttb}}</small>
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
		<div class="col-md-6">
			
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Pindahan Dari</span>
							<small>{{$data->pindahan_dari}}</small>
						</div>
					</div>
				</li>
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
							<span>Tanggal Masuk</span>
							<small>{{$data->tanggal_masuk}}</small>
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