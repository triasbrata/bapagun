@inject('pegawai',\Akademik\Pegawai)

<div class="row">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h3 class="text-primary">Data Masa Kerja</h3>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary" style="font-style:italic;" >Sesuai SK</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::select('pegawai_id',$pegawai->lists('nama','id'),null,['class'=>'form-control', 'id'=>'pegawai_id'])!!}
					{!!Form::label('pegawai_id','Id Pegawai')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jumlah_tahun_sk_terakhir',null,['class'=>'form-control', 'id'=>'jumlah_tahun_sk_terakhir'])!!}
					{!!Form::label('jumlah_tahun_sk_terakhir','Jumlah Tahun')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jumlah_bulan_sk_terakhir',null,['class'=>'form-control', 'id'=>'jumlah_bulan_sk_terakhir'])!!}
					{!!Form::label('jumlah_bulan_sk_terakhir','Jumlah Bulan')!!}
				</div>
			</div>

			
		</div>
		
		<div class="col-md-6">
			<div class="col-md-12">
				<h4 class="text-primary " style="font-style:italic;">Keseluruhan</h4>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jumlah_tahun_mk_terakhir',null,['class'=>'form-control', 'id'=>'jumlah_tahun_mk_terakhir'])!!}
					{!!Form::label('jumlah_tahun_mk_terakhir','Jumlah Tahun')!!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group floating-label">
					{!!Form::text('jumlah_bulan_mk_terakhir',null,['class'=>'form-control', 'id'=>'jumlah_bulan_mk_terakhir'])!!}
					{!!Form::label('jumlah_bulan_mk_terakhir','Jumlah Bulan')!!}
				</div>
			</div>
		</div>
		
		
		
	</div>
	
</div>


</div>