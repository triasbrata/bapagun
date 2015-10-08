
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
								<span>Bahan Baku</span>
								<small>{{$data->label}}</small>
							</div>
						</div>
					</li>
					<li class="tile">
						<div class="tile-content ink-reaction">
							<div class="tile-text">
								<span> Data Created at</span>
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



				</ul>
			</div>
		</div>

	</div>

</div>
@stop