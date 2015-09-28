@extends('blank')
@section('title')
	Pilih Pegawai Sebagai
@stop
@section('content')
	<div aria-hidden="false" aria-labelledby="simpleModalLabel" role="dialog" tabindex="-1" id="simpleModal" class="modal fade" >
		<div class="modal-dialog" style="width: 400px">
			<div class="modal-content">
			  	{!! Form::open(['route'=>'pegawai.do.go', 'method'=>'POST',]) !!}
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
						<h4 id="simpleModalLabel" class="modal-title text-center">Role As</h4>
					</div>
					<div class="modal-body">
					               <?php 
						               $x =0; 
						              $color = ['red','pink','purple','deep-purple','indigo','blue'] ;
						              shuffle($color);

					               ?>
						@foreach ($employerDo as $do)
							<label class="inverst role-select">
								<div class="card">
									<div class="card-body less-padding">
										<div class="col-xs-2 material-color {{$color[$x++]}}">
											@if (strtolower(str_replace(' ','',$do->role)) == "stafftu")
												<i class="large-icon md md-domain"></i>
											@endif
											@if (strtolower(str_replace(' ','',$do->role)) == "guru")
												<i class="large-icon md md-poll"></i>
											@endif
											@if (strtolower(str_replace(' ','',$do->role)) == "walikelas")
												<i class="large-icon md md-work"></i>
											@endif
											@if (strtolower(str_replace(' ','',$do->role)) == "kepalasekolah")
												<i class="large-icon md  md-layers"></i>
											@endif
											@if (strtolower(str_replace(' ','',$do->role)) == "administratif")
												<i class="large-icon md md-people"></i>
											@endif

										</div>
										<div class="col-xs-10">
											<span style="font-weight: bold" >{{ucwords($do->role)}}</span>
										</div>
									</div>
								</div>
								{!! Form::radio("role",strtolower(str_replace(' ','',$do->role)), false,['class'=>'hidden']) !!}
							</label>
						@endforeach
				</div><!-- /.modal-content -->
				<div class="modal-footer text-left">
					{!! Form::button('Take Role', ['type'=>'submit','class'=>'btn btn-primary btn-raised']) !!}
				</div>
			{!! Form::close() !!}
		</div><!-- /.modal-dialog -->
	</div>
@stop
@section('javascript')
	<script type="text/javascript">
		$(document).ready(function  () {
			setTimeout(function  () {
				$('#simpleModal').modal('show');
			},400);
		});
		$(document).on('click','.inverst',function  () {
			console.log(this);
			$('.modal-body').children().each(function  (index,el) {
				if(! $(el).hasClass('inverst')){
					$(el).addClass('inverst');
				}
			})
			$(this).removeClass('inverst');
		})
	</script>
@stop