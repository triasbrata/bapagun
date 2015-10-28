@inject('provinsi','App\Provinsi')
<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('provinsi_id','Provinsi')!!}
				{!!Form::select('provinsi_id',$provinsi->lists('label','id'),null,['class'=>'form-control', 'id'=>'provinsi_id'])!!}
			</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('kabupaten_id','Kabupaten/Kota')!!}
				{!!Form::select('kabupaten_id',[],null,['class'=>'form-control', 'id'=>'kabupaten_id','disabled'])!!}
			</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('kecamatan_id','Kecamatan')!!}
				{!!Form::select('kecamatan_id',[],null,['class'=>'form-control', 'id'=>'kecamatan_id','disabled'])!!}
			</div>
	</div>
	<div class="col-md-12">
			<div class="form-group">
				{!!Form::label('label','Desa/Kecamatan')!!}
				{!!Form::text('label',null,['class'=>'form-control', 'id'=>'label'])!!}
			</div>
	</div>
</div>
@section('javascript')
	<script>
		(function () {
			$("select.form-control[name='provinsi_id']").on('change',function(e) {
				var val = $(this).val();
				$("[name='kabupaten_id']").html('').attr('disabled','disabled');
				$("[name='kabupaten_id']").select2();
				$.ajax({
					url: "{{ route('getRegion',['kabupaten','']) }}/"+val,
					type: 'GET',
					dataType: 'json',
					success:function  (hasilData) {
						if(hasilData != undefined && hasilData.length >= 1){
							$("[name='kabupaten_id']").removeAttr('disabled');
							var _hsl = [{id:"",text:"Pilih Kabupaten/Kota"}];
							var hsl = _hsl.concat(hasilData)
							$("[name='kabupaten_id']").select2({
								data:hsl
							})
						}
					}
				});
			});
			$("select.form-control[name='kabupaten_id']").on('change',function(e) {
				var val = $(this).val();
				$("[name='kecamatan_id']").html('').attr('disabled','disabled');
				$("[name='kecamatan_id']").select2();
				$.ajax({
					url: "{{ route('getRegion',['kecamatan','']) }}/"+val,
					type: 'GET',
					dataType: 'json',
					success:function  (hasilData) {
						if(hasilData != undefined && hasilData.length >= 1){
							$("[name='kecamatan_id']").removeAttr('disabled');
							var _hsl = [{id:"",text:"Pilih Kecamatan"}];
							var hsl = _hsl.concat(hasilData)
							$("[name='kecamatan_id']").select2({
								data:hsl
							})
						}
					}
				});
			});
							
		})(jQuery); 
	</script>
@stop
