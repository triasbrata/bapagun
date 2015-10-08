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
								<th>Kondisi Tahu</th>
								<th>Kondisi Bulan</th>
								<th>Tanggal Input</th>
								
							</tr>
						</thead>
						<tbody>
							<?php $x=1; ?>
							<?php 
								$bulan = [
									'01'=>"Januari",
									'02'=>"Februari",
									'03'=>"Maret",
									'04'=>"April",
									'05'=>"Mei",
									'06'=>"Juni",
									'07'=>"Juli",
									'08'=>"Agustus",
									'09'=>"September",
									'10'=>"Oktober",
									'11'=>"November",
									'12'=>"Desember",
								];
							 ?>
							@foreach ($lists as $kondisi)
								<tr>
									<td>{{$x++}}</td>
									<td>{{ $kondisi->usaha->nama}}</td>
									<td>{{ $kondisi->tahun}}</td>
									<td>{{ $bulan[$kondisi->bulan] }}</td>
									<td>
										<span>{{ $kondisi->updated_at }}</span>	
										<div class="pull-right">
											  {!! Form::open(['route'=>[$destroy,$kondisi->id], 'method'=>'DELETE','class'=>'no-margin']) !!}
												  	{!! link_to_route($show,'Detail',$kondisi->id,['class'=>'btn btn-warning btn-raised btn-sm']) !!}
												  	{!! link_to_route($edit,'Edit',$kondisi->id,['class'=>'btn btn-info btn-raised btn-sm']) !!}
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