@extends('main')
@section('title', 'Deskripsi Data Unit Kegiatan Masyarakat')
@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="card img-circle">
			<img src='{{ asset("imgs/{$data->foto}") }}' width="100%">
		</div>
	</div>
	<div class="col-md-8">
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
				<div  class="card-body">
					<div class="col-sm-6">
						<ul class="list divider-full-bleed">
							<li>
								<h3 class="text-primary">Data Unit Usaha</h3>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Nama Usaha</span>
										<small>{{$data->nama}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Telpon Unit Usaha</span>
										<small>{{!empty($data->telp)? $data->telp : "-"}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Email Unit Usaha</span>
										<small>{{!empty($data->email) ? $data->email : "-"}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Usaha pada Peta</span>
											@if(!empty($data->kordinat))
												<div id="map"></div>
												<script>
													url = GMaps.staticMapURL({
													  size: [300, 300],
													  lat: {{ explode(',',$data->kordinat)[0] }},
													  lng: {{ explode(',',$data->kordinat)[1] }},
													  markers: [
													    {lat: {{ explode(',',$data->kordinat)[0] }}, lng: {{ explode(',',$data->kordinat)[1] }}},
													  ]
													});

													$('<img/>').attr('src', url).attr('width','100%')
													  .appendTo('#map');
												</script>
											@else
												Kordinat tidak terdaftar
											@endif

									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="col-sm-6">
						<ul class="list divider-full-bleed">
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Kabupaten/Kota</span>
										<small>{{ ucwords(strtolower($data->kabupaten->label)) }}</small>
									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Kecamatan</span>
										<small>{{ucwords(strtolower($data->kecamatan->label))}}</small>
									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Kelurahan/Desa</span>
										<small>{{ucwords(strtolower($data->desa->label))}}</small>
									</div>
								</div>
							</li>
							<li>
								<h3 class="text-primary">Data Pemilik Usaha</h3>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>No. KTP</span>
										<small>{{$data->personal->no_ktp}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Nama Pemilik Usaha</span>
										<small>{{$data->personal->name}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Jenis Kelamin</span>
										<small>{{$data->personal->jenis_kelamin == "m" ? "Laki-Laki":"Perempuan"}}</small>

									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Tempat Tanggal Lahir</span>
										<small>{{"{$data->personal->tempat_lahir}, {$data->personal->tanggal_lahir}"}}</small>
									</div>
								</div>
							</li>
							<li class="tile">
								<div class="tile-content ink-reaction">
									<div class="tile-text">
										<span>Agama</span>
										<small>{{ucwords($data->personal->agama)}}</small>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop