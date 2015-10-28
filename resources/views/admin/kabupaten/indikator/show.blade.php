@extends('admin_template')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-danger">
      <div class="box-header">
      	<div class="box-tools pull-right">
      		<a href="{{ route($index) }}" class="btn btn-box-tool" title="Tambah Data"><i class="fa fa-close"></i></a>
      	</div>
      </div>
        <div class="box-body">
        </div>
      </div>
    </div>
  </div>
</section>
@stop