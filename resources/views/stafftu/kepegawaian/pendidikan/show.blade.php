
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
	<div class="row">
		<div class="col-sm-6">
			<div  class="card-body">
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
								<span>Nama Pegawai</span>
								<small>{{$data->pegawai->nama}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Jurusan</span>
								<small>{{$data->jurusans->label}}</small>

							</div>
						</div>
					</li>
					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Ijazah</span>
								<small>{{$data->pendidikan->label}}</small>

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
		<div class="col-sm-6">
			<div  class="card-body">
				<ul class="list divider-full-bleed">
					
					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Akta</span>
								<small>{{$data->akta->label}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Tahun Lulus</span>
								<small>{{$data->tahun_lulus}}</small>

							</div>
						</div>
					</li>

					

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Nama Perguruan Tinggi</span>
								<small>{{$data->nama_instansi_pendidikan}}</small>

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


	</div>

</div>
@stop