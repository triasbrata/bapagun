
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
						<span>User Id</span>
						<small>{{$data->user_id}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Nama Siswa</span>
						<small>{{$data->nama}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Jenis Kelamin</span>
						<small>{{$data->gender}}</small>
					</div>
				</div>
			</li>
			
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>NIS</span>
						<small>{{$data->nis}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>NISN</span>
						<small>{{$data->nisn}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Tempat Lahir</span>
						<small>{{$data->tempat_lahir}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Tanggal Lahir</span>
						<small>{{$data->tanggal_lahir}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>NIK</span>
						<small>{{$data->nik}}</small>
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
						<span>Agama</span>
						<small>{{$data->agama}}</small>
					</div>
				</div>
			</li>
			
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Kewarganegaraan</span>
						<small>{{$data->kewarganegaraan}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Anak Ke</span>
						<small>{{$data->urutan_saudara}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Jumlah Saudara Kandung</span>
						<small>{{$data->jumlah_saudara_kandung}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Jumlah Saudara Tiri</span>
						<small>{{$data->jumlah_saudara_tiri}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Jumlah Saudara Angkat</span>
						<small>{{$data->jumlah_saudara_angkat}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Status</span>
						<small>{{$data->status}}</small>
					</div>
				</div>
			</li>
			<li class="tile">
				<div class="tile-content ink-reaction">
					<div class="tile-text">
						<span>Bahasa Dirumah</span>
						<small>{{$data->bahasa_dirumah}}</small>
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