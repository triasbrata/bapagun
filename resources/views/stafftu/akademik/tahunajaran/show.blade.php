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
		<div class="card-body">
			<ul class="list divider-full-bleed">
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Tahun Ajaran</span>
							<small>{{$data->category->label}} ({{$data->category->keterangan}})</small>
						</div>
					</div>
				</li>
				<li class="tile">
					<div class="tile-content ink-reaction">
						<div class="tile-text">
							<span>Label Disclipline</span>
							<small>{{$data->label}}</small>
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
@stop