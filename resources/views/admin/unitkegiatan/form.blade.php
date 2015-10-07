@inject('jenisProduk','\App\JenisProduk')
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
					<div class="input-group">
					<span class="input-group-addon">(0541)</span>
						<div class="input-group-content">
							{!!Form::text('telp',null,['class'=>'form-control', 'id'=>'telp'])!!}
							{!!Form::label('telp','Nomot Telpon Usaha')!!}
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group floating-label">
					{!!Form::text('email',null,['class'=>'form-control', 'id'=>'email'])!!}
					{!!Form::label('email','Alamat Email usaha')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('pusat',null,['class'=>'form-control', 'id'=>'pusat'])!!}
					{!!Form::label('pusat','Pusat Usaha')!!}
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
			  		<span class="fileinput-new">Select file</span>
			  		<span class="fileinput-exists">Change</span><input type="file" name="foto_usaha">
			  	</span>
			  	<a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
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
					{!!Form::text('personal_name',!isset($data)?null:$data->personal->name,['class'=>'form-control', 'id'=>'personal_name'])!!}
					{!!Form::label('personal_name','Nama Pemilik Unit Usaha')!!}
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
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('personal_kabupaten',['islam'=>'Islam','katolik'=>'Katolik','protestant'=>'Protestant','hindu'=>'Hindu','budha'=>'Budha','kong wu chu'=>'Kong Wu Chu'],!isset($data)?null:$data->personal->agama,['class'=>'form-control', 'id'=>'personal_kabupaten'])!!}
					{!!Form::label('personal_kabupaten','Kabupaten/Kota')!!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('personal_kecamatan',['islam'=>'Islam','katolik'=>'Katolik','protestant'=>'Protestant','hindu'=>'Hindu','budha'=>'Budha','kong wu chu'=>'Kong Wu Chu'],!isset($data)?null:$data->personal->agama,['class'=>'form-control', 'id'=>'personal_kecamatan'])!!}
					{!!Form::label('personal_kecamatan','Kecamatan')!!}
				</div>
			</div>
			<div class="col-xs-4">
				<div class="form-group floating-label">
					{!!Form::select('personal_kelurahan',['islam'=>'Islam','katolik'=>'Katolik','protestant'=>'Protestant','hindu'=>'Hindu','budha'=>'Budha','kong wu chu'=>'Kong Wu Chu'],!isset($data)?null:$data->personal->agama,['class'=>'form-control', 'id'=>'personal_kelurahan'])!!}
					{!!Form::label('personal_kelurahan','Kelurahan')!!}
				</div>
			</div>
			<div class="col-xs-12">
				<div class="form-group floating-label">
					{!!Form::textarea('personal_alamat',!isset($data)?null:$data->personal->agama,['class'=>'form-control', 'id'=>'personal_alamat','rows'=>'2'])!!}
					{!!Form::label('personal_alamat','Alamat')!!}
				</div>
			</div>
		</div>
		
		
		
	</div>
	
</div>


</div>