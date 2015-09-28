
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
								<span>Status</span>
								<small>{{$data->status}}</small>

							</div>
						</div>
					</li>
					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Pangkat</span>
								<small>{{$data->pangkat->label}}</small>

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
								<span>Golongan</span>
								<small>{{$data->golongan->label}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Jabatan</span>
								<small>{{$data->jabatan->label}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>TMT Awal</span>
								<small>{{$data->tmt_awal}}</small>

							</div>
						</div>
					</li>

					
					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>TMT Akhir</span>
								<small>{{$data->tmt_akhir}}</small>

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