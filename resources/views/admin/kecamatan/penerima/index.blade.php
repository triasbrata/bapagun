@extends('admin_template')
@section('content')
	<section class="content">
	  <div class="row">
	    <div class="col-xs-12">
	      <div class="box box-danger">
	      	<div class="box-header">
	      		<div class="box-tools pull-right">
	      			<a href="{{ route($create) }}" class="btn btn-box-tool" title="Tambah Data"><i class="fa fa-plus"></i></a>
	      		</div>
	      		
	      	</div>
	        <div class="box-body">
	        	<table class="datatables table table-striped">
	        		<thead>
	        			<tr>
	        				<th>Nama Penduduk</th>
	        				<th>Instansi Pemberi</th>
	        				<th>Bantuan</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			@foreach ($lists as $list)
	        				<tr>
	        					<td>{{ $list->penduduk->nama }}</td>
	        					<td>{{ $list->bantuan->instansi->title }}</td>
	        					<td>
	        						<div class="col-xs-6">
	        						{{ $list->bantuan->title }} : {{ $list->kriteria->title }} ({{ $list->indikator->title }})
	        						</div>
	        						<div class="col-xs-6">
	        							<div class="pull-right">
		        							  {!! Form::open(['route'=>[$destroy,$list->id], 'method'=>'DELETE','class'=>'no-margin']) !!}
		        								  	{{-- {!! link_to_route($show,'Detail',$list->id,['class'=>'btn btn-warning btn-raised btn-sm']) !!} --}}
		        								  	{{-- {!! link_to_route($edit,'Edit',$list->id,['class'=>'btn btn-info btn-raised btn-sm']) !!} --}}
		        								  	{!! Form::button('Delete',['class'=>'btn btn-danger btn-raised btn-sm','type'=>'submit']) !!}
		        							  {!! Form::close() !!}
	        							</div>
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
	</section>
@stop