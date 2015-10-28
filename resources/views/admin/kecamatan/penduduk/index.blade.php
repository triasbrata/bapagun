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
	        				<th>No.NIK</th>
	        				<th>Nama Penduduk</th>
	        				<th>Tempat,Tanggal Lahir</th>
	        				<th>Jenis Kelamin</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			@foreach ($lists as $list)
	        				<tr>
	        					<td>{{ $list->no_nik }}</td>
	        					<td>{{ $list->nama }}</td>
	        					<td>{{ $list->tempat_lahir.",".$list->tanggal_lahir }}</td>
	        					<td>
	        						<div class="col-xs-6">
	        						{{ $list->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan' }}
	        						</div>
	        						<div class="col-xs-6">
	        							<div class="pull-right">
		        							  {!! Form::open(['route'=>[$destroy,$list->id], 'method'=>'DELETE','class'=>'no-margin']) !!}
		        								  	{!! link_to_route($show,'Detail',$list->id,['class'=>'btn btn-warning btn-raised btn-sm']) !!}
		        								  	{!! link_to_route($edit,'Edit',$list->id,['class'=>'btn btn-info btn-raised btn-sm']) !!}
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