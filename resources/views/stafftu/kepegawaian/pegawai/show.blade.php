
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
								<span>User ID</span>
								<small>{{$data->user->username}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Nama Pegawai</span>
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
								<span>NIP</span>
								<small>{{$data->nip}}</small>

							</div>
						</div>
					</li>

					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span>Tempat Tanggal Lahir</span>
								<small>{{ucfirst($data->tempat_lahir)}}</small>

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
								<span>Status Kepegawaian</span>
								<small>{{$data->status_kepegawaian}}</small>

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
										<span>Jenis PTK</span>
										<small>{{$data->jenis_ptk}}</small>
									</div>
								</div>
							</li>

							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Pengawas Bidang Studi</span>
										<small>{{$data->pengawas_bidang_studi}}</small>
									</div>
								</div>
							</li>

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
										<span>Nama Ibu Kandung</span>
										<small>{{$data->nama_ibu_kandung}}</small>
									</div>
								</div>
							</li>

							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Status Perkawinan</span>
										<small>{{$data->status_perkawinan}}</small>
									</div>
								</div>
							</li>

							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>NPWP</span>
										<small>{{$data->npwp}}</small>
									</div>
								</div>
							</li>

							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Kewarganegawaan</span>
										<small>{{$data->kewarganegaraan}}</small>
									</div>
								</div>
							</li>

							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span></span>
										<small>{{$data->kewarganegaraan}}</small>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
				</div>

	</div>

</div>
@stop