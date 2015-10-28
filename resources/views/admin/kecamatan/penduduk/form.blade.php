@inject('provinsi','App\Provinsi')
@inject('kabupaten','App\Kabupaten')
@inject('kecamatan','App\Kecamatan')
@inject('desa','App\Desa')

<div class="row">
	<div class="col-md-6">
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('no_nik','No. NIK')!!}
					{!!Form::text('no_nik',null,['class'=>'form-control', 'id'=>'no_nik'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('nama','Nama Penduduk')!!}
					{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('jenis_kelamin','jenis_kelamin Penduduk')!!}
					{!!Form::select('jenis_kelamin',['1'=>'Laki-Laki','2'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'jenis_kelamin'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('agama','agama Penduduk')!!}
					{!!Form::select('agama',['islam'=>'Islam','protestant'=>'Protestant','katollik'=>'Katolik','budha'=>'Budha','hindu'=>'Hindu','kong wu chu'=>'Kong Wu Chu'],null,['class'=>'form-control', 'id'=>'agama'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('tempat_lahir','tempat_lahir Penduduk')!!}
					{!!Form::text('tempat_lahir',null,['class'=>'form-control', 'id'=>'tempat_lahir'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('tanggal_lahir','tanggal_lahir Penduduk')!!}
					{!!Form::text('tanggal_lahir',null,['class'=>'form-control datetime-picker', 'id'=>'tanggal_lahir'])!!}
				</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('provinsi_id','Provinsi')!!}
					{!!Form::select('provinsi_id',$provinsi->lists('label','id'),null,['class'=>'form-control', 'id'=>'provinsi_id'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('kabupaten_id','Kabupaten')!!}
					{!!Form::select('kabupaten_id',$kabupaten->lists('label','id'),null,['class'=>'form-control', 'id'=>'kabupaten_id'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('kecamatan_id','Kecamatan')!!}
					{!!Form::select('kecamatan_id',$kecamatan->lists('label','id'),null,['class'=>'form-control', 'id'=>'kecamatan_id'])!!}
				</div>
		</div>
		<div class="col-xs-6">
				<div class="form-group">
					{!!Form::label('desa_id','Desa')!!}
					{!!Form::select('desa_id',$desa->lists('label','id'),null,['class'=>'form-control', 'id'=>'desa_id'])!!}
				</div>
		</div>
		<div class="col-xs-12">
				<div class="form-group">
					{!!Form::label('alamat','alamat Penduduk')!!}
					{!!Form::text('alamat',null,['class'=>'form-control', 'id'=>'alamat','rows'=>'3'])!!}
				</div>
		</div>
	</div>
</div>
@section('javascript')
	{{-- expr --}}
@stop