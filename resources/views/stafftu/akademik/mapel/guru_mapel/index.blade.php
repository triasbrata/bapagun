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
								<th>NIP/NUPTK Guru Pengajar</th>
								<th>Nama Guru Pengajar</th>
								<th>Mata Pelajaran</th>
								<th>Kelas</th>
							</tr>
						</thead>
						<tbody>
							<?php $x=1; ?>
							@foreach ($lists as $list)
								<tr>
									<td>{{$x++}}</td>
									<td>{{$list->guru->pegawai->nip}} / {{$list->guru->pegawai->jenis_ptk}}</td>
									<td>{{$list->guru->pegawai->nama}}</td>
									<td>{{$list->mata_pelajaran->label}}</td>
									<td>
										<span>{{$list->mata_pelajaran->kelas->label}}</span>	
										<div class="pull-right">
											  {!! Form::open(['route'=>[$destroy,$list->id], 'method'=>'DELETE','class'=>'no-margin']) !!}
												  	{!! link_to_route($show,'Detail',$list->id,['class'=>'btn btn-warning btn-raised btn-sm']) !!}
												  	{!! link_to_route($edit,'Edit',$list->id,['class'=>'btn btn-info btn-raised btn-sm']) !!}
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