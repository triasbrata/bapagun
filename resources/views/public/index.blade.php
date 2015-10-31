@inject('bantuan','App\Bantuan');
@inject('generate','App\Generate');
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
  <link href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}"
  rel="stylesheet" type="text/css">
  <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Make a Style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.css') }}">
</head>

<body>
  <div class="section" style="padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar navbar-default navbar-fixed-top navbar-red">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img height="30" alt="Brand" src="{{ asset('/public/assets/img/logo.png') }}"></a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="hovers" href="#">Beranda</a>
                  </li>
                  <li>
                    <a  class="smoothScrool ahover" href="#bantuan">Bantuan</a>
                  </li>
                  <li>
                    <a  class="smoothScrool ahover" href="#penerima">Penerima Bantuan</a>
                  </li>
                  <li>
                    <a  class="smoothScrool ahover" href="#Tentang">Tentang Aplikasi</a>
                  </li>
                  <li>
                    <a  class="smoothScrool" href="#pesandansaran">Pesan Dan Saran</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slide -->

  <div class="wrapper">
    <div class="carousel slide" id="carousel-example" data-interval="4000"
    data-ride="carousel" >
    <div class="carousel-inner">
      <div class="active item">
        <img src="{{ asset('public/assets/img/bapagunslide.jpg') }}">
        <div class="carousel-caption" style="bottom:0px;">
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/public/assets/img/4.jpg') }}">
        <div class="carousel-caption">
          <h1>Dokumentasi Beri Bantuan Pemerintah</h1>
          <h3>pemerintah Mulai memberikan Bantuan Kepada Warga Dengan Mendatangi Rumahnya </h3>
        </div>
      </div>
      <div class="item">
        <img src="{{ asset('/public/assets/img/5.jpg') }}">
        <div class="carousel-caption">
          <h1>Dokumentasi Beri Bantuan Pemerintah</h1>
          <h3>pemerintah Mulai memberikan Bantuan Kepada Warga Dengan Mendatangi Rumahnya </h3>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
  </div>
</div>



<!-- Cari -->

<div class="container">
  <div id="bantuan">
    <div class="col-md-6 vline animated bounceInLeft">
      <h1 style="color:#D9534F;">Bantuan</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Nama Bantuan</th>
            <th>Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bantuan->take(5)->get() as $el)
            <tr>
              <td>{{ $el->title }}</td>
              <td>{{ $el->keterangan }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <div class=" col-sm-offset-8">
            <a href="{{ url('bantuan') }}" class="btn btn-danger">Lihat Selengkapnya</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div></div>
  <div id="penerima">
    <div class="col-md-6 animated bounceInRight">
      <h1 style="color:#D9534F;">Penerima Bantuan</h1>
      <table class="table">
        <thead>
          <tr>
            <th class="col-xs-4">Nama Penerima</th>
            <th class="col-xs-3">Bantuan</th>
            <th class="col-xs-5">Instantsi Pemberi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($generate->take(5)->get() as $em)
            <tr>
              <td>{{ $em->penduduk->nama }}</td>
              <td>{{ $em->bantuan->title }}</td>
              <td>{{ $em->bantuan->instansi->title }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <div class=" col-sm-offset-8">
            <a href="{{ url('penerima') }}" class="btn btn-danger">Lihat Selengkapnya</a>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <hr>
  </div>
</div>
<!-- tentang -->
<div id="Tentang">
  <div class="row">
    <div class="col-xs-offset-3 col-xs-6">
      <img src="{{  asset('public/assets/img/logo2.png')  }}" class="img-responsive" >
    </div>
  </div><br><br>
  <div class="container">
    <h4 align="center">BAPAGUN Adalah Aplikasi Bantuan Tepat Guna Untuk Membantu Masyarakat
      Mendapatkan Informasi Tentang Bantuan untuk warga miskin Yang Diberikan Pemerintah Dan Juga Untuk membantu Pemerintah dalam Memberikan Bantuan Kepada Warga miskin</h4><br><br>
    </div>
  </div>
</div>
<div id="pesandansaran">
  <div class="section section-danger" style="background:#D9534F;">
    <div class="container">
      <div class="row">

        <div class="col-sm-6">
          <br>
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <div class="col-sm-2">
                <label for="inputEmail3" class="control-label" style="color:white;"></label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" placeholder="Nama">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="inputKecamatan3" class="control-label" style="color:white;"></label>
              </div>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputKecamatan3" placeholder="Kecamatan">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label for="inputPassword3" class="control-label" style="color:white;"></label>
              </div>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>

          </div>
          <div id="textarea">
            <div class="col-sm-6">
              <br>
              <form role="form" >
                <textarea class="form-control" rows="3" placeholder="Kirimkan Pesan Dan Saran Untuk Kami"></textarea>
              </form>
              <div class="col-sm-offset-10 col-sm-2" style="padding-top:10px;">
                <a type="button"  class="btn btn-default" data-toggle="modal"data-target="#kirimpesan">Kirim</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-inverse" style="margin-bottom:-20px;">
    <p align="center" class="footers">Proudly Present to You By FTIKers</p>
  </div>
  <!-- Javascript -->
  <!-- Smooth Scroll Tolong Di Fixkan -->
  <script>
  $(function() {
    $('a.smoothScrool[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>
 <div class="modal fade" id="kirimpesan">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Apakah Anda Yakin?</h4>
        </div>
        <div class="modal-body">
          <p>Pesan Dan Saran Yang Anda Berikan Akan Diteruskan Kepada Pihak Kabupaten</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Kembali</a>
          <a class="btn btn-danger">Kirim</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>