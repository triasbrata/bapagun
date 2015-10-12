@inject('kabupaten','App\Kabupaten')
@inject('kecamatan','App\Kecamatan')
@inject('desa','App\Desa')
@inject('hitungJenisUsaha','App\HitungJenisUsaha')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Portal K-UKMK</title>

  <!-- CSS  -->
  {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  .owl-controls{
    margin:30px 0 15px;
    height: auto;
    display: block;
    position: relative;
  }
  .select-overflow{
    overflow-x:auto;
    height: 200px;
  }
  </style>
</head>
<body>
  @include('incl.umum.nav')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Cari Usaha</h1>
        <div class="row center" style="height:300px">
          {!! Form::open(['route'=>'umum.cari']) !!}
            <div class="input-field col s12">
              {!!Form::text('nama',null,[ 'id'=>'tujuan_pemasaran'])!!}
            </div>
            <div class="input-field col s4">
            {!!Form::select('kabupaten_id',$kabupaten->lists('label','id'),null,[ 'id'=>'kabupaten_id'])!!}
            </div>
            <div class="input-field col s4">
              {!!Form::select('kecamatan_id',$kecamatan ->lists('label','id'),null,[ 'id'=>'kecamatan_id'])!!}
            </div>
            <div class="input-field col s4">
              {!!Form::select('desa_id',$desa->lists('label','id'),null,[ 'id'=>'desa_id'])!!}
            </div>
            <div class="row center">
              <button class="btn-large waves-effect waves-light teal lighten-1">Cari</button>
            </div>
          {!! Form::close() !!}
        </div>
        <br><br><br><br>
      </div>
    </div>
    <div class="parallax"><img src="imgs/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <h5>Product Jasa</h5>
        <table>
          <thead>
            <tr>
              <th>Nama Usaha</th>
              <th>Produk Unggulan Usaha</th>
              <th>Keterangan Usaha</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $list)
            <tr>
              <td>
                {!! link_to_route('umum.profil',$list['nama'],$list['id']) !!}
              </td>
              <td>{{ $list['nama'] }}</td>
              <td>
              {{ $hitungJenisUsaha->hitung($list['kondisi.omset'],$list['kondisi.aset']) }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4>Produk Unggulan Kalimantan Timur</h4>
          <div class="owl-carousel">
            <a href="profil1.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil2.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil3.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil4.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil5.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil6.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil7.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil8.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil9.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
            <a href="profil10.html" class="item">
              <div class="card">
                <div class="card-image">
                  <img src="imgs/product.png" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">Product name</small>
                  <p class="black-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="imgs/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <div class="container">
    <div class="section">

      <div class="row center">
        <h4>Jenis Usaha</h4>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="imgs/pertanian.jpg" alt="">
              <span class="card-title">Pertanian</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Tanaman Bahan Makanan</li>
                <li class="collection-item text-left">Tanamana Perkebunan</li>
                <li class="collection-item text-left">Peternakan dan Hasil-hasilnya</li>
                <li class="collection-item text-left">Kehutanan</li>
                <li class="collection-item text-left">Perikanan</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="imgs/air_dan_listrik.jpg" alt="">
              <span class="card-title">Listrik & Air Bersih</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Listrik</li>
                <li class="collection-item text-left">Air Bersih</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="imgs/angkutan.jpg" alt="">
              <span class="card-title">Pengangkutan & Komunikasi</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Angkutan Rel</li>
                <li class="collection-item text-left">Angkutan Jalan Raya</li>
                <li class="collection-item text-left">Angkutan Laut</li>
                <li class="collection-item text-left">Angkutan Sungai, Danau dan Penyeberangan</li>
                <li class="collection-item text-left">Angkutan Udara</li>
                <li class="collection-item text-left">Jasa Penunjang Angkutan</li>
                <li class="collection-item text-left">Pos dan Telekomunikasi</li>
                <li class="collection-item text-left">Jasa Penunjang Komunikasi</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="imgs/pertambangan.jpg" alt="">
              <span class="card-title">Pertambangan & Penggalian</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Minyak & Gas Bumi</li>
                <li class="collection-item text-left">Pertambangan Tanpa Migas</li>
                <li class="collection-item text-left">Penggalian</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="imgs/industri_pengolahan.jpg" alt="">
              <span class="card-title">Industri Pengolahan</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Penggalian Minyak Bumi</li>
                <li class="collection-item text-left">Gas Alam Cair (LNG)</li>
                <li class="collection-item text-left">Perikanan</li>
                <li class="collection-item text-left">Makanan, Minuman & Tembakau</li>
                <li class="collection-item text-left">Tekstil, Barang kulit dan Alas Kaki</li>
                <li class="collection-item text-left">Barang Kayu & Hasil Hutan Lain</li>
                <li class="collection-item text-left">Kertas & Barang Cetakan</li>
                <li class="collection-item text-left">Pupuk, Kimia & Barang Dari Karet</li>
                <li class="collection-item text-left">Semen, Barang Lain Bukan Logam</li>
                <li class="collection-item text-left">Logam Dasar/ Besi & Baja</li>
                <li class="collection-item text-left">Alat Angkutan, Mesin dan Peralatan</li>
                <li class="collection-item text-left">Barang Lainnya</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="imgs/hotel.jpg" alt="">
              <span class="card-title">Perdangan, Hotel & Restaurant</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Bergagang Besar & Eceran</li>
                <li class="collection-item text-left">Hotel</li>
                <li class="collection-item text-left">Restoran</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="imgs/bangunan.jpg" alt="">
              <span class="card-title">Bangunan</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Bangunan</li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img src="imgs/bank.jpg" alt="">
              <span class="card-title">Keuangan, Persewaan & Jasa Perusahaan</span>
            </div>
            <div class="card-content no-padding">
              <ul class="collection no-margin">
                <li class="collection-item text-left">Bank</li>
                <li class="collection-item text-left">Lembaga Keuangan Tanpa Bank</li>
                <li class="collection-item text-left">Jasa Penunjangan Keuaangan</li>
                <li class="collection-item text-left">Sewa Bangunan</li>
                <li class="collection-item text-left">Jasa Perusahaab</li>
              </ul>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <img src="imgs/jasa.jpg" alt="">
              <span class="card-title">Jasa-Jasa</span>
            </div>
            <div class="card-content no-padding">
              <div class="card-content no-padding">
                <ul class="collection no-margin">
                  <li class="collection-item text-left">Pemerintah Umum</li>
                  <li class="collection-item text-left">Jasa Sosial Kemasyarakatan</li>
                  <li class="collection-item text-left">Jasa Hiburan dan Rekresasi</li>
                  <li class="collection-item text-left">Jasa Perorangan dan Rumahtangga</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('incl.umum.footer')


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  (function($){
    $(function(){
      var owl = $('.owl-carousel');
      owl.owlCarousel({
          items:3,
          loop:true,
          margin:0,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true,
          nav:true
      });

    }); // end of document ready
  })(jQuery); // end of jQuery name space
  </script>

</body>
</html>