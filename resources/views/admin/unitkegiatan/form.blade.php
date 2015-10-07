@inject('kabupaten','\App\Kabupaten')
@inject('kecamatan','\App\Kecamatan')
@inject('desa','\App\Desa')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary">Data Unit Usaha</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('nama',null,['class'=>'form-control', 'id'=>'nama'])!!}
					{!!Form::label('nama','Nama Unit Usaha')!!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::text('telp',null,['class'=>'form-control', 'id'=>'telp'])!!}
					{!!Form::label('telp','Nomot Telpon Usaha')!!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::text('email',null,['class'=>'form-control', 'id'=>'email'])!!}
					{!!Form::label('email','Alamat Email usaha')!!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('kabupaten_id',$kabupaten->lists('label','id'),null,['class'=>'form-control', 'id'=>'kabupaten_id'])!!}
					{!!Form::label('kabupaten_id','Kabupaten/Kota')!!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('kecamatan_id',$kecamatan->lists('label','id'),null,['class'=>'form-control', 'id'=>'kecamatan_id'])!!}
					{!!Form::label('kecamatan_id','Kecamatan')!!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('desa_id',$desa->lists('label','id'),null,['class'=>'form-control', 'id'=>'desa_id'])!!}
					{!!Form::label('desa_id','Kelurahan')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::textarea('alamat',null,['class'=>'form-control', 'id'=>'alamat','rows'=>'2'])!!}
					{!!Form::label('alamat','Alamat Usaha')!!}
				</div>
			</div>	
			<div class="col-md-12">
				<div class="form-group floating-label">
					<div class="input-group">
						<div class="input-group-content">
							{!!Form::text('kordinat',null,['class'=>'form-control','readonly'=>'readonly', 'id'=>'kordinat'])!!}
							{!!Form::label('kordinat','Titik Kordinat')!!}
						</div>
						<div class="input-group-btn">
							<button class="btn btn-link" type="button"><i class="text-primary fa fa-location-arrow"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
					<div class="form-control" data-trigger="fileinput">
						<i class="fa fa-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
						<span class="input-group-addon btn-file btn btn-primary">
							<span class="fileinput-new">Pilih Gambar</span>
							<span class="fileinput-exists">Ubah Gambar</span><input type="file" name="foto" accept="image/*">
						</span>
						<a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Batal</a>
					</div>
				</div>			
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<div class="form-group floating-label">
						{!!Form::textarea('keterangan',null,['class'=>'form-control', 'id'=>'keterangan','rows'=>'2'])!!}
						{!!Form::label('keterangan','Keterangan Unit Usaha')!!}
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="text-primary">Data Pemilik Unit Usaha</h4>
				</div>
				<div class="col-md-12">
					<div class="form-group floating-label">
						{!!Form::text('personal_no_ktp',!isset($data)?null:$data->personal->no_ktp,['class'=>'form-control', 'id'=>'personal_no_ktp'])!!}
						{!!Form::label('personal_no_ktp','No. Kartu Tanda Penduduk')!!}
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group floating-label">
						{!!Form::text('personal_nama',!isset($data)?null:$data->personal->nama,['class'=>'form-control', 'id'=>'personal_nama'])!!}
						{!!Form::label('personal_nama','Nama Pemilik Unit Usaha')!!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group floating-label">
						{!!Form::select('personal_jenis_kelamin',['m'=>'Laki-Laki','f'=>'Perempuan'],null,['class'=>'form-control', 'id'=>'personal_jenis_kelamin'])!!}
						{!!Form::label('personal_jenis_kelamin','Jenis Kelamin')!!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group floating-label">
						{!!Form::text('personal_tempat_lahir',!isset($data)?null:$data->personal->tempat_lahir,['class'=>'form-control', 'id'=>'personal_tempat_lahir'])!!}
						{!!Form::label('personal_tempat_lahir','Tempat Lahir')!!}
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group floating-label">
						{!!Form::text('personal_tanggal_lahir',!isset($data)?null:$data->personal->tanggal_lahir,['class'=>'form-control txt-datepicker', 'id'=>'personal_tanggal_lahir'])!!}
						{!!Form::label('personal_tanggal_lahir','Tempat Lahir')!!}
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group floating-label">
						{!!Form::select('personal_agama',['islam'=>'Islam','katolik'=>'Katolik','protestant'=>'Protestant','hindu'=>'Hindu','budha'=>'Budha','kong wu chu'=>'Kong Wu Chu'],!isset($data)?null:$data->personal->agama,['class'=>'form-control', 'id'=>'personal_agama'])!!}
						{!!Form::label('personal_agama','Agama')!!}
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group floating-label">
						{!!Form::textarea('personal_alamat',!isset($data)?null:$data->personal->alamat,['class'=>'form-control', 'id'=>'personal_alamat','rows'=>'2'])!!}
						{!!Form::label('personal_alamat','Alamat')!!}
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>