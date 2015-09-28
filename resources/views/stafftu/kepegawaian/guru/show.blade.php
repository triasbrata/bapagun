
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
								<span>ID Guru</span>
								<small>{{$data->id}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>NIP Pegawai</span>
								<small>{{$data->pegawai->nip}}</small>

							</div>
						</div>
					</li><li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>NUPTK Pegawai</span>
								<small>{{$data->pegawai->nuptk}}</small>

							</div>
						</div>
					</li><li class="tile">
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
								<span>Nama Pegawai</span>
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