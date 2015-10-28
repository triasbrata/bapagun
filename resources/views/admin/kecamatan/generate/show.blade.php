@extends('admin_template')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-danger">
      <div class="box-header">
      	<div class="box-tools pull-right">
      		<a href="{{ route($index) }}" class="btn btn-box-tool" title="Tambah Data"><i class="fa fa-close"></i></a>
      	</div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-6">
              <ul class="list-unstyled">
                    <li>
                      <h4>No. NIK</h4>
                      <span>{{ $data->no_nik  }}</span>
                    </li>
                    <li>
                      <h4>Nama Penduduk</h4>
                      <span>{{ $data->nama  }}</span>
                    </li>
                    <li>
                      <h4>Jenis Kelamin</h4>
                      <span>{{ $data->jenis_kelamin == 1 ? "Laki-laki" : "Perempuan"  }}</span>
                    </li>
                    <li>
                      <h4>Agama</h4>
                      <span>{{ $data->agama  }}</span>
                    </li>
                    <li>
                      <h4>Tempat, Tanggal Lahir</h4>
                      <span>{{ "{$data->tempat_lahir}, {$data->tanggal_lahir}"  }}</span>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6">
              <ul class="list-unstyled">
                    <li>
                      <h4>Provinsi</h4>
                      <span>{{ $data->provinsi->label  }}</span>
                    </li>
                    <li>
                      <h4>Kabupaten/Kota</h4>
                      <span>{{ $data->kabupaten->label  }}</span>
                    </li>
                    <li>
                      <h4>Kecamatan</h4>
                      <span>{{ $data->kecamatan->label}}</span>
                    </li>
                    <li>
                      <h4>Desa/Kelurahan</h4>
                      <span>{{ $data->desa->label  }}</span>
                    </li>
                    <li>
                      <h4>Alamat</h4>
                      <span>{{ $data->alamat}}</span>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop