@extends('main')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card card-underline">
				<div class="card-head">
					<header>
						{!! $namaForm !!}
					</header>
					<div class="tools">
						<div class="btn-group">
							<a href="{{ route($create) }}" class="btn btn-icon-toggle btn-refresh"><i class="md md-add"></i></a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table no-margin datatable">
						<thead>
							<tr>
								<th class="col-xs-1">No.</th>
								
								<th>Ijazah</th>
								<th>Jurusan</th>
								<th>Perguruan Tinggi</th>
							</tr>
						</thead>
						<tbody>
							<?php $x=1; ?>
							@foreach ($lists as $pendidikan)
								<tr>
									<td>{{$x++}}</td>
									<td>{{$pendidikan->pegawai->nama}}</td>
									<td>{{$pendidikan->jurusans->label}}</td>
									<td>{{$pendidikan->nama_instansi_pendidikan}}</td>
									
									<td>
										<span></span>	
										<div class="pull-right">
											  {!! Form::open(['route'=>[$destroy,$pendidikan], 'method'=>'DELETE','class'=>'no-margin']) !!}
												  	{!! link_to_route($show,'Detail',$pendidikan,['class'=>'btn btn-warning btn-raised btn-sm']) !!}
												  	{!! link_to_route($edit,'Edit',$pendidikan,['class'=>'btn btn-info btn-raised btn-sm']) !!}
												  	{!! Form::button('Delete',['class'=>'btn btn-danger btn-raised btn-sm','type'=>'submit']) !!}
											  {!! Form::close() !!}
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@stop