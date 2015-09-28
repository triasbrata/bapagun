@extends('main')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card card-underline">
				<div class="card-head">
					<header>
						{!! $namaForm !!}
					</header>
				</div>
				<div class="card-body">
				
				{!!Form::open(['route'=>'ajax.rombel.request', 'method'=>'POST','id'=>'form_rombel'])!!}
					<div class="responsive-table">
						<table class="table no-margin datatable" id="table-ajax">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Siswa</th>
									<th>{!!Form::select('tahun_ajaran',$lists,null,['class'=>'form-control select','data-next-chain'=>'kelas'])!!}</th>
									<th>{!!Form::select('kelas',['test'],null,['class'=>'form-control select', 'disabled'=>'disabled' ,'data-next-chain'=>'jurusan'])!!}</th>
									<th>{!!Form::select('jurusan',['test'],null,['class'=>'form-control select', 'disabled'=>'disabled' ,'data-next-chain'=>'ruangan'])!!}</th>
									<th>{!!Form::select('ruangan',['test'],null,['class'=>'form-control select', 'disabled'=>'disabled' ,'data-next-chain'=>'semester'])!!}</th>
									<th>{!!Form::select('semester',['ganjil' => 'Ganjil','genap'=>'Genap'],null,['class'=>'form-control select', 'disabled'=>'disabled'])!!}</th>							
								</tr>
							</thead>
						</table>
					</div>
				{!!Form::close()!!}			
				</div>
			</div>
		</div>
	</div>
@stop
@section('javascript')
	<script type="text/javascript" src="{{asset('js/ajax_rombel.js')}}"></script>
@stop