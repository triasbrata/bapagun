@inject('jenisProduk','\App\JenisProduk')
<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary">Data Unit Usaha</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('nama_usaha',null,['class'=>'form-control', 'id'=>'nama_usaha'])!!}
					{!!Form::label('nama_usaha','Nama Unit Usaha')!!}
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
					{!!Form::select('tipe_program',['mandiri'=>'Mandiri/Personal','ovop'=>'Kelompok  OVOP','wub'=>'Kelompok WUB'],null,['class'=>'form-control', 'id'=>'tipe_program'])!!}
					{!!Form::label('tipe_program','Program Usaha')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('jenis_produk_ukm',$jenisProduk->lists('id','label'),null,['class'=>'form-control', 'id'=>'jenis_produk_ukm','multiple'=>'multiple'])!!}
					{!!Form::label('jenis_produk_ukm','Jenis Produk Usaha')!!}
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
		</div>
		
		
		
	</div>
	
</div>


</div>