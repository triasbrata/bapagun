@extends('admin_template')
@section('content')
	  {!! Form::model($data,['route'=>[$update,$data->id], 'method'=>'PATCH','class'=>'form']) !!}
	  <section class="content">
	  	<div class="row">
	  		<div class="col-xs-12">
	  			<div class="box box-primary">
	  				<div class="box-header">
	  					<div class="box-tools pull-right">
	  						<a href="{{ route($index) }}" class="btn btn-box-tool" title="Tambah Data"><i class="fa fa-close"></i></a>
							<button class="btn btn-box-tool" type="reset" title="Ulangi"><i class="fa fa-undo"></i></button>
							<button class="btn btn-box-tool" type="submit" title="Simpan"><i class="fa fa-save"></i></button>
	  					</div>
	  				</div>
	  				<div class="box-body">
	  					@include($form)
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </section>
	  {!! Form::close() !!}
@stop