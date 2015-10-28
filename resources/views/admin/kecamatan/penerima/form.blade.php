@inject('instansi','App\Instansi')
@inject('penduduk','App\Penduduk')

<div class="row">
	<div class="col-xs-12">
		<div class="col-md-4">
				<div class="form-group">
					{!!Form::label('penduduk_id','Penduduk')!!}
					{!!Form::select('penduduk_id',$penduduk->listNew(),null,['class'=>'form-control', 'id'=>'instansi_id'])!!}
				</div>
		</div>
		<div class="col-md-4">
				<div class="form-group">
					{!!Form::label('instansi_id','Instansi')!!}
					{!!Form::select('instansi_id',$instansi->listNew(),null,['class'=>'form-control', 'id'=>'instansi_id'])!!}
				</div>
		</div>
		<div class="col-md-4">
				<div class="form-group">
					{!!Form::label('bantuan_id','Bantuan')!!}
					{!!Form::select('bantuan_id',[],null,['class'=>'form-control', 'id'=>'bantuan_id','disabled'])!!}
				</div>
		</div>
	</div>
	<div class="col-xs-12 content-kriteria">
	</div>
</div>
@section('javascript')
	<script>
	(function () {
		$(document).on('change','select.form-control[name="instansi_id"]',function  (e) {
			e.preventDefault();
			console.log('msg')
			var val = $(this).val();
				$("[name='bantuan_id']").html(" ").attr('disabled','disabled');
				$("[name='bantuan_id']").select2();
				$.ajax({
					url: "{{ route('getBantuan')}}",
					type: 'GET',
					dataType: 'json',
					data:{id:val},
					success:function  (hasilData) {
						if(hasilData != undefined && hasilData.length >= 1){
							$("[name='bantuan_id']").removeAttr('disabled');
							var _hsl = [{id:"",text:"Pilih Bantuan"}];
							var hsl = _hsl.concat(hasilData)
							$("[name='bantuan_id']").select2({
								data:hsl
							})
						}
					}
				});
			});
		$(document).on('change','select.form-control[name="bantuan_id"]',function  (e) {
			e.preventDefault();
			console.log('msg2')
			var val = $(this).val();
				$(".content-kriteria").html('')
				$.ajax({
					url: "{{ route('getKI')}}",
					type: 'GET',
					dataType: 'json',
					data:{id:val},
					success:function  (hasilData) {
						$.each(hasilData,function(index, el) {
							var option = '';
							$.each(el.indikator, function(i, val) {
								 option+= '<option value="'+val.id+'">'+val.title+'</option>';
							});
							var templt = '<div class="form-group"><label for="indikator['+index+']">'+el.kriteria_text+'</label> <select name="indikator['+index+']" id="indikator['+index+']" class="form-control">'+option+'</select><small class="help-block">'+el.kriteria_ket+'</small></div>'
							$(".content-kriteria").append(templt);
						});

					}
				});
			});
	})(jQuery); 
	</script>
@stop