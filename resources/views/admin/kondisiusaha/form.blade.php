@inject('usaha','App\UnitUsaha')
@inject('tujuanPemasaran','App\TujuanPemasaran')
@inject('tempatPemasaran','App\TempatPemasaran')
@inject('bahanBaku','App\BahanBaku')
@inject('permodalan','App\Permodalan')
@inject('manajement','App\Manajement')
<div class="row">
	<div class="col-md-12">
		<div class="col-md-12">
			<h4 class="text-primary">Data Unit Usaha</h4>
		</div>
		<div class="col-md-4">
			<div class="form-group floating-label">
				{!!Form::select('unit_usaha_id',$usaha->lists('nama','id'),null,['class'=>'form-control', 'id'=>'unit_usaha_id'])!!}
				{!!Form::label('unit_usaha_id','Nama Unit Usaha')!!}
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
				{!!Form::select('tujuan_pemasaran[]',$tujuanPemasaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'tujuan_pemasaran','multiple'=>'multiple'])!!}
				{!!Form::label('tujuan_pemasaran','Tujuan Pemasaran')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('tempat_pemasaran[]',$tempatPemasaran->lists('label','id'),null,['class'=>'form-control', 'id'=>'tempat_pemasaran','multiple'=>'multiple'])!!}
				{!!Form::label('tempat_pemasaran','Tempat Pemasaran')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<h4 class="text-primary">Bahan Baku Usaha</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('bahan_baku[]',$bahanBaku->lists('label','id'),null,['class'=>'form-control', 'id'=>'bahan_baku','multiple'=>'multiple'])!!}
				{!!Form::label('bahan_baku','Sumber Bahan Baku')!!}
			</div>
		</div>
		<div class="col-md-12">	
			<h4 class="text-primary">Keuangan</h4>
		</div>
		<div class="col-md-12">	
			<div class="form-group floating-label">
				{!!Form::select('permodalan[]',$permodalan->lists('label','id'),null,['class'=>'form-control', 'id'=>'permodalan','multiple'=>'multiple'])!!}
				{!!Form::label('permodalan','Sumber Utama Modal')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				<div class="input-group">
					<span class="input-group-addon" style="font-size:24px;">Rp.</span>
					<div class="input-group-content">
						{!!Form::text('omset',null,['class'=>'form-control inputmask', 'data-inputmask'=>"'mask':'99999999'",'id'=>'omset'])!!}
						{!!Form::label('omset','Omzet')!!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				<div class="input-group">
					<span class="input-group-addon" style="font-size:24px;">Rp.</span>
					<div class="input-group-content">
						{!!Form::text('aset',null,['class'=>'form-control inputmask', 'data-inputmask'=>"'mask':'99999999'",'id'=>'aset'])!!}
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
				{!!Form::select('manajement',$manajement->lists('label','id'),null,['class'=>'form-control', 'id'=>'manajement'])!!}
				{!!Form::label('manajement','Sistem Manajement')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<div class="input-group-content">
					{!!Form::text('pekerja_pria',null,['class'=>'form-control', 'id'=>'pekerja_pria'])!!}
					{!!Form::label('pekerja_pria','Jumlah Pekerja Laki-Laki')!!}
				</div>
				<span class="input-group-addon">Orang</span>
			</div>
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<div class="input-group-content">
					{!!Form::text('pekerja_wanita',null,['class'=>'form-control', 'id'=>'pekerja_wanita'])!!}
					{!!Form::label('pekerja_wanita','Jumlah Pekerja Perempuan')!!}
				</div>
				<span class="input-group-addon">Orang</span>
			</div>
			</div>
		</div>
		<div class="col-md-12">	
		<h4 class="text-primary">Perijinan</h4>
		</div>
		<div class="col-md-4">	
			<div class="form-group floating-label">
					{!!Form::text('pirt',null,['class'=>'form-control', 'id'=>'pirt'])!!}
					{!!Form::label('pirt','Izin PIRT')!!}
			</div>
		</div>
		<div class="col-md-4">	
			<div class="form-group floating-label">
				{!!Form::text('mn',null,['class'=>'form-control', 'id'=>'mn'])!!}
				{!!Form::label('mn','Izin NM')!!}
			</div>
		</div>
		<div class="col-md-4">	
			<div class="form-group floating-label">
				{!!Form::text('halal',null,['class'=>'form-control', 'id'=>'halal'])!!}
				{!!Form::label('halal','Izin Halal')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('iso',null,['class'=>'form-control', 'id'=>'iso'])!!}
				{!!Form::label('iso','Izin ISO')!!}
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
				{!!Form::text('lain_lain',null,['class'=>'form-control', 'id'=>'lain_lain'])!!}
				{!!Form::label('lain_lain','Izin Lain')!!}
			</div>
		</div>
		<div class="col-md-12">	
		<h4 class="text-primary">Media Sosial</h4>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<span class="input-group-addon">facebook.com/</span>
				<div class="input-group-content">
					{!!Form::text('facebook',null,['class'=>'form-control', 'id'=>'facebook'])!!}
					{!!Form::label('facebook','Alamat Akun Facebook')!!}
				</div>
			</div>
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<span class="input-group-addon" style="font-size:24px;">@</span>
				<div class="input-group-content">
					{!!Form::text('twitter',null,['class'=>'form-control', 'id'=>'twitter'])!!}
					{!!Form::label('twitter','Alamat Akun Twitter')!!}
				</div>
			</div>
			</div>
		</div><div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<span class="input-group-addon" style="font-size:24px;">@</span>
				<div class="input-group-content">
					{!!Form::text('line',null,['class'=>'form-control', 'id'=>'line'])!!}
					{!!Form::label('line','Alamat Akun Line')!!}
				</div>
			</div>
			</div>
		</div>
		<div class="col-md-6">	
			<div class="form-group floating-label">
			<div class="input-group">
				<span class="input-group-addon" style="font-size:24px;">@</span>
				<div class="input-group-content">
					{!!Form::text('instagram',null,['class'=>'form-control', 'id'=>'instagram'])!!}
					{!!Form::label('instagram','Alamat Akun instagram')!!}
				</div>
			</div>
			</div>
		</div>
	</div>
</div>