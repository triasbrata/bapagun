@inject('tipeProgram','\App\TipeProgramTranslate')
@section('title','Keseluruhan Data Unit Kegiatan Masyarakat')
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
								<th>Nama Usaha</th>
								<th>Nama Pemilik Usaha</th>
								<th>Telp</th>
								<th>Tipe Program</th>
								
							</tr>
						</thead>
						<tbody>
							<?php $x=1; ?>
							@foreach ($lists as $usaha)
								<tr>
									<td>{{$x++}}</td>
									<td>{{$usaha->nama_usaha}}</td>
									<td>{{$usaha->personal->name}}</td>
									<td>{{"(0541)-{$usaha->telp}"}}</td>
									<td>{{$tipeProgram->make($usaha->tipe_program)}}</td>
									<td>
										<span></span>	
										<div class="pull-right">
											  {!! Form::open(['route'=>[$destroy,$usaha->id], 'method'=>'DELETE','class'=>'no-margin']) !!}
												  	{!! link_to_route($show,'Detail',$usaha->id,['class'=>'btn btn-warning btn-raised btn-sm']) !!}
												  	{!! link_to_route($edit,'Edit',$usaha->id,['class'=>'btn btn-info btn-raised btn-sm']) !!}
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