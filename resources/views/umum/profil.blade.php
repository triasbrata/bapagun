
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>K-UKMK Kalimantan Timur</title>

  <!-- CSS  -->
  <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  @include('incl.umum.nav')
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="card">
          <div class="card-header">
            <h5>Data Usaha</h5>
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col l6 s12 m12">
                <ul class="list">
                  <li class="list-item">
                    <span class="title">Nama Usaha/Nama Brand</span>
                    <span class="value">{{ $unitUsaha->nama }}</span>
                  </li>
                  <li class="list-item">
                    <span class="title">Email</span>
                    <span class="value">{{ $unitUsaha->email }}</span>
                  </li>
                  <li class="list-item">
                    <span class="title">No Telp</span>
                    <span class="value">{{ $unitUsaha->telp }}</span>
                  </li>
                  <li class="list-item">
                    <span class="title">Alamat Usaha</span>
                    <span class="value">{{$unitUsaha->alamat}}, Kel. {{ucwords(strtolower($unitUsaha->desa->label))}}, Kec. {{ucwords(strtolower($unitUsaha->kecamatan->label))}}, Kab. {{ucwords(strtolower($unitUsaha->kabupaten->label))}}</span>
                  </li>
                </ul>
              </div>
              <div class="col l6 s12 m12">
                  <ul class="list">
                    <li class="list-item">
                      <span class="title">Kordinat Usaha</span>
                      <span class="value">{{ $unitUsaha->kordinat }}</span>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <?php 
          $kondisiUsaha = $unitUsaha->singleLastReport()[0]->kondisi[0];
         ?>
        <div class="card">
          <div class="card-header">
            <h5>Kondisi Usaha</h5>
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col l6 s12 m12">
                <ul class="list">
                  <li class="list-item">
                    <span class="title">Tahun</span>
                    <span class="value">{{ $kondisiUsaha->tahun }}</span>
                  </li>
                  <li class="list-item">
                    <span class="title">Bulan</span>
                    <span class="value">{{ $kondisiUsaha->bulan }}</span>
                  </li>
                  <li class="list-item">
                    <span class="title">Tujuan Pemasaran</span>
                    <span class="value">
                      @foreach($kondisiUsaha->tujuan_pemasaran as $tujuan)
                        {{ $tujuan->label }} <br>
                      @endforeach
                    </span>
                  </li>
                  <li class="list-item">
                    <span class="title">Tempat Pemasaran</span>
                    <span class="value">
                      @foreach($kondisiUsaha->tempat_pemasaran as $tempat)
                        {{ $tempat->label }} <br>
                      @endforeach
                    </span>
                  </li>
                  <li class="list-item">
                    <span class="title">Sumber Bahan Baku</span>
                    <span class="value">
                      @foreach($kondisiUsaha->bahan_baku as $bahan)
                        {{ $bahan->label }} <br>
                      @endforeach
                    </span>
                  </li>
                  <li class="list-item">
                    <span class="title">Sumber Utama Modal</span>
                    <span class="value">
                      @foreach($kondisiUsaha->permodalan as $modal)
                        {{ $modal->label }} <br>
                      @endforeach
                    </span>
                  </li>
                  <li class="list-item">
                    <span class="title">Aset Usaha</span>
                    <span class="value">
                      Rp. {{$kondisiUsaha->aset}}
                    </span>
                  </li>
                  <li class="list-item">
                    <span class="title">Omzet/bln Usaha</span>
                    <span class="value">
                      Rp. {{$kondisiUsaha->omset}}
                    </span>
                  </li>
                </ul>
              </div>
              <div class="col l6 s12 m12">
                  <ul class="list">
                    <li class="list-item">
                      <span class="title">Izin Usaha</span>
                      <span class="value">
                        PIRT : {{$kondisiUsaha->pirt}} <br>
                        NM : {{$kondisiUsaha->nm}} <br>
                        HALAL : {{$kondisiUsaha->halal}} <br>
                        ISO : {{$kondisiUsaha->iso}} <br>
                        Lain-lain : {{$kondisiUsaha->lain_lain}} <br>
                      </span>
                    </li>
                    <li class="list-item">
                      <span class="title">Sistem Manajement</span>
                      <span class="value">
                        {{ $kondisiUsaha->manajement[0]->label }}
                      </span>
                    </li>
                    <li class="list-item">
                      <span class="title">Pekerja</span>
                      <span class="value">
                        Pria :{{ $kondisiUsaha->tenaga_kerja[0]->pekerja_pria }} <br>
                        Wanita :{{ $kondisiUsaha->tenaga_kerja[0]->pekerja_wanita }}
                      </span>
                    </li>
                    <li class="list-item">
                      <span class="title">Media Online</span>
                      <span class="value">
                        <dd>
                          <dt></dt>
                        </dd>
                        Facebook: {{ $kondisiUsaha->facebook }} <br>
                        tiwtter   : {{  $kondisiUsaha->twitter }}<br>
                        Instagram : {{  $kondisiUsaha->instagram }}<br>
                        Line      : {{  $kondisiUsaha->line }}<br>
                      </span>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Produk</h5>
          </div>
          <div class="card-content center">
          <div class="owl-carousel">
          @foreach ($unitUsaha->produk as $produk)
            <div class="item">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('imgs/produk/'.$produk->foto) }}" alt="">
                </div>
                <div class="card-content">
                  <small class="black-text card-title">{{ $produk->nama }}</small>
                  <p class="black-text">
                    @if(empty($produk->keterangan))
                      Kel. {{ucwords(strtolower($unitUsaha->desa->label))}}, Kec. {{ucwords(strtolower($unitUsaha->kecamatan->label))}}, Kab. {{ucwords(strtolower($unitUsaha->kabupaten->label))}}
                    @else
                      {{ $produk->keterangan }}
                    @endif
                  </p>
                </div>
              </div>
            </div>
            
          @endforeach
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @include('incl.umum.footer')


  <!--  Scripts-->
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
  <script type="text/javascript">
  (function($){
    $(function(){
      var owl = $('.owl-carousel');
      owl.owlCarousel({
          items:3,
          loop:true,
          margin:5,
          autoplay:true,
          autoplayTimeout:1000,
          autoplayHoverPause:true,
          nav:true
      });

    }); // end of document ready
  })(jQuery); // end of jQuery name space
  </script>

</body>
</html>
