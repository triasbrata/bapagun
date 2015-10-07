@inject('usaha','App\UnitUsaha')
@inject('tujuanPemasaran','App\TujuanPemasaran')
@inject('tempatPemasaran','App\TempatPemasaran')
@inject('bahanBaku','App\BahanBaku')
@inject('permodalan','App\Permodalan')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<h4 class="text-primary">Data Unit Usaha</h4>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::select('ukm_id',$usaha->lists('nama','id'),null,['class'=>'form-control', 'id'=>'ukm_id'])!!}
				{!!Form::label('ukm_id','Nama Unit Usaha')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('tahun',null,['class'=>'tahun-picker form-control ', 'id'=>'tahun'])!!}
				{!!Form::label('tahun','Tahun Kondisi Usaha')!!}
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::text('bulan',null,['class'=>'form-control bulan-picker', 'id'=>'bulan'])!!}
				{!!Form::label('bulan','Bulan Kondisi Usaha')!!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="col-md-12">
			<h4 class="text-primary">Target Pasar</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('tujuan_pemasaran',$tujuanPemasaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'tujuan_pemasaran','multiple'=>'multiple'])!!}
				{!!Form::label('tujuan_pemasaran','Tujuan Pemasaran')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('tempat_pemasaran',$tempatPemasaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'tempat_pemasaran','multiple'=>'multiple'])!!}
				{!!Form::label('tempat_pemasaran','Tempat Pemasaran')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<h4 class="text-primary">Bahan Baku Usaha</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('bahan_baku',$bahanBaku->lists('label','id'),null,['class'=>'form-control', 'id'=>'bahan_baku','multiple'=>'multiple'])!!}
				{!!Form::label('bahan_baku','Sumber Bahan Baku')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<h4 class="text-primary">Keuangan</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('permodalan',$permodalan->lists('label','id'),null,['class'=>'form-control', 'id'=>'permodalan','multiple'=>'multiple'])!!}
				{!!Form::label('permodalan','Sumber Utama Modal')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				<div class="input-group">
					<span class="input-group-addon" style="font-size:24px;">Rp.</span>
					<div class="input-group-content">
						{!!Form::text('omzet',null,['class'=>'form-control inputmask', 'data-inputmask'=>"'mask':'99,999,999'",'id'=>'omzet'])!!}
						{!!Form::label('omzet','Omzet')!!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				<div class="input-group">
					<span class="input-group-addon" style="font-size:24px;">Rp.</span>
					<div class="input-group-content">
						{!!Form::text('aset',null,['class'=>'form-control inputmask', 'data-inputmask'=>"'mask':'99,999,999'",'id'=>'aset'])!!}
						{!!Form::label('aset','Aset')!!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-12">
			<h4 class="text-primary">Sistem Manajement Usaha & Tenaga Kerja</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('manajement',$tujuanPemasaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'manajement'])!!}
				{!!Form::label('manajement','Sistem Manajement')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('pekerja_pria',null,['class'=>'form-control', 'id'=>'pekerja_pria'])!!}
				{!!Form::label('pekerja_pria','Jumlah Pekerja Laki-Laki')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('pekerja_pria',null,['class'=>'form-control', 'id'=>'pekerja_pria'])!!}
				{!!Form::label('pekerja_pria','Jumlah Pekerja Perempuan')!!}
			</div>
		</div>
		<div class="col-md-12">	
		<h3 class="text-primary">Media Sosial</h3>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('facebook',null,['class'=>'form-control', 'id'=>'facebook'])!!}
				{!!Form::label('facebook','Jumlah Pekerja Laki-Laki')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('twitter',null,['class'=>'form-control', 'id'=>'twitter'])!!}
				{!!Form::label('twitter','Jumlah Pekerja Perempuan')!!}
			</div>
		</div><div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('line',null,['class'=>'form-control', 'id'=>'line'])!!}
				{!!Form::label('line','Jumlah Pekerja Laki-Laki')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('instagram',null,['class'=>'form-control', 'id'=>'instagram'])!!}
				{!!Form::label('instagram','Jumlah Pekerja Perempuan')!!}
			</div>
		</div>
	</div>
</div>