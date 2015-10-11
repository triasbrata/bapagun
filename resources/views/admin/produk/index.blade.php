@inject('unitUsaha','App\UnitUsaha')
@section('title','Keseluruhan Data Unit Kegiatan Masyarakat')
@extends('main')
@section('content')
	<div class="row">
		<div class="col-md-4">
			<div class="card card-underline">
				<div class="card-head">
					<header>
						{!! $namaForm !!}
					</header>
					<div class="tools">
						<div class="btn-group">
							<a href="#" class="btn btn-icon-toggle btn-add"><i class="md md-add"></i></a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<table class="table no-margin datatable">
						<thead>
							<tr>
								<th>Nama Usaha</th>								
							</tr>

						</thead>
						<tbody>
							@foreach ($lists as $usaha)
								<tr>
									<td >
										<span class="nama-usaha">{{ $usaha->nama}}</span>
										<span class="id-usaha hidden">{{ $usaha->id}}</span>
										<div class="pull-right">
											<div class="btn btn-info btn-sm btn-view">Lihat Produk</div>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card card-underline" id="form-upload" style="display:none">
				<div class="card-head">
						<header>
							<span>Tambah <b>Produk Usaha</b></span>
						</header>
						<div class="tools">
							<div class="btn-group">
								<a href="#" class="btn btn-icon-toggle btn-remove"><i class="md md-remove"></i></a>
							</div>
						</div>
				</div>
				<div class="card-body">
						{!! Form::open(['route'=>'admin.produk.store', 'method'=>'POST','files'=>true,'class'=>'form dropzone dz-clickable',"id"=>"upload-box"]) !!}
							<div class="form-group">
								<div class="form-group floating-label">
									{!! Form::select('unit_usaha_id',$unitUsaha->lists('nama','id'),null,['class'=>'form-control','id'=>'unit_usaha_id']) !!}
									{!! Form::label('unit_usaha_id','Unit Usaha') !!}
								</div>
							</div>
							<div class="fallback">
							   {!! Form::file('unit_usaha_id') !!}
							 </div>
							<div class="dz-default">
								<div class="dz-message">
									<h3>Tarik dan lepaskan gambar kesini untuk menambahkan produk</h3>
									<em>File akan secara otomatis terunggah.<br>File size < 1MB dan Hanya Foto</em>
								</div>
							</div>
						{!! Form::close() !!}
				</div>
			</div>
			<div class="card card-underline">
				<div class="card-head">
						<header>
							<span id="namaAlbum">Produk Terbaru di upload</span>
						</header>
						
				</div>
				<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>Nama Usaha</th>
									<th>Foto Produk</th>
									<th>Nama Produk</th>
									<th>Keterangan Produk</th>
									<th>aksi</th>
								</tr>
							</thead>
							<tbody id="list">
								@foreach($lists as $usaha)
									@foreach($usaha->produk as $produk)
									<tr data-produk="{{ $usaha->id }}">
										<td class="valing">{{ $usaha->nama }}</td>
										<td class="valing"><img src="{{ asset('imgs/produk/'.$produk->foto) }}" width="50px" class="produk"></td>
										<td class="valing">{{$produk->nama}}</td>
										<td class="valing">{{ $produk->keterangan }}</td>
										<td>aksi</td>
									</tr>
									@endforeach
								@endforeach
							</tbody>
						</table>			
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal">
		<div class="modal-dialog" >
			<div class="card">
				<div class="card-head">
					<header>
						<h3>Preview foto produk</h3>
					</header>
				</div>
				<div class="card-content">
					
				</div>
			</div>
		</div>
	</div>
@stop
@section('javascript')
<script>
	$(document).on('click','.btn-add',function  () {
		$("#form-upload").slideDown(400);
	})
	$(document).on('click','.btn-remove',function  () {
		$("#form-upload").slideUp(400);
	})
	var listProduk = function  (el) {
		elm = $(el);
		var namaUsaha = elm.parents('td').find('span.nama-usaha').text();
		var idUsaha =elm.parents('td').find('span.id-usaha').text();
		$('#namaAlbum').html("Produk dari "+ namaUsaha);
		$.ajax({
			url: 'produk/'+idUsaha,
			type: 'GET',
			dataType: 'json',
			success:function (data) {
				var tbody = $('tbody#list');
				tbody.html('');
				$.each(data.produk,function(index, produk) {
					 var tr = $('<tr>',{'data-produk':produk.id});
					 $('<td>',{class:'valing'}).text(data.nama_usaha).appendTo(tr);
					 $('<td>',{class:'valing'}).html( $('<img>').attr({src:'{{ asset("imgs/produk") }}/'+produk.foto,width:"50px"})).appendTo(tr)
					 var input = $('<input>',{class:'form-control submit-enter',type:'text',name:'nama',value:produk.nama,'placeholder':'Nama produk'});
					 var hidden = $('<input>',{type:'hidden',name:'unit_usaha_id',value:data.unit_usaha_id,});
					 $('<td>').html([input,hidden]).appendTo(tr);
					 var keterangan = $('<input>',{class:'form-control submit-enter',name:'keterangan',value:produk.keterangan,'placeholder':'Nama produk',row:2});
					 var deletebtn = $('<button>',{class:'btn btn-danger delete'}).html($('<i>',{class:'md md-remove'}));
					 $('<td>').html(keterangan).appendTo(tr);
					 $('<td>').html(deletebtn).appendTo(tr);
					 tbody.append(tr);
				});
			}
		})		
	}
	$(document).on('click','.btn-view',function (e) {
		listProduk(this);
	})
	$(document).on('click','.produk',function (e) {
		var gambar = $(this);
		$('#modal').find('.card-content').html($('<img>').attr({src:gambar.attr('src'),width:'100%'}));
		$('#modal').modal()
	})
	$(document).on('keypress','.submit-enter',function  (e) {
		toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": true,
				  "positionClass": "toast-bottom-left",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "swing",
				  "showMethod": "slideDown",
				  "hideMethod": "slideUp"
				};
		var root = $(this).parents('tr');
		if(e.keyCode == 13){
			$.ajax({
				url: '/admin/produk/'+root.find('[name="unit_usaha_id"]').val(),
				type: 'POST',
				dataType: 'json',
				data: {
					_token:"{{ csrf_token()}}",
					_method:"PATCH",
					unit_usaha_id: root.find('[name="unit_usaha_id"]').val(),
					id: root.attr('data-produk'),
					nama: root.find('[name="nama"]').val(),
					keterangan: root.find('[name="keterangan"]').val(),

				},
				success:function  (data) {
					toastr.success(data.message,'');
				},
				error:function  (data) {
					toastr.error(data.message,'');
				}
			});
			
		}
	})
	$(document).on('click','.delete',function  (e) {
		toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": true,
				  "progressBar": true,
				  "positionClass": "toast-bottom-left",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "swing",
				  "showMethod": "slideDown",
				  "hideMethod": "slideUp"
				};
		var root = $(this).parents('tr');
			$.ajax({
				url: '/admin/produk/'+root.find('[name="unit_usaha_id"]').val(),
				type: 'POST',
				dataType: 'json',
				data: {
					_token:"{{ csrf_token()}}",
					_method:"DELETE",
					unit_usaha_id: root.find('[name="unit_usaha_id"]').val(),
					id: root.attr('data-produk'),

				},
				success:function  (data) {
					toastr.success(data.message,'');
					root.remove();
				},
				error:function  (data) {
					console.log(data)
					toastr.error(data.message,'');
				}
			});
	})
	toastr.options = {
			  "closeButton": false,
			  "debug": false,
			  "newestOnTop": true,
			  "progressBar": true,
			  "positionClass": "toast-bottom-left",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "swing",
			  "showMethod": "slideDown",
			  "hideMethod": "slideUp"
			};
Dropzone.options.uploadBox = {
	// uploadMultiple : false,
	
	paramName:"foto",
	maxFilesize: 1,
	acceptedFiles: "image/*",
	success:function(send,result) {
		toastr.success(result.message,'')
	},
	error:function(send,result) {
		if(result.message !== undefined ){
			toastr.error(result.message,'')
		}else if(result.foto !== undefined ){
			$.each(result.foto, function(index, val) {
				toastr.error(val,'')
			});
		}
	}
};

$(document).on('changed','#unit_usaha_id',function(){
	console.log('msg');
});

</script>
@stop