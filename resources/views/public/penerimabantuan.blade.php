@inject('generate','\App\Generate')
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
    <br>
    <br>
    <div class="navbar navbar-default navbar-fixed-top navbar-red">
      <div class="container">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img height="30" alt="Brand" src="{{ asset('public/assets/img/logo.png') }}"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
             <li>
              <a href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="">
              <a href="{{ url('bantuan') }}">Bantuan</a>
            </li>
            <li class="active">
              <a href="{{ url('penerima') }}">Penerima Bantuan</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="section" style="padding-top:50px;">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputNama" placeholder="Nama Bantuan">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputKecamatan" placeholder="Kecamatan">
                </div>
                <div class="col-sm-4">
                  <a class="btn btn-red ahover">Cari</a>
                </div>
              </div>
            </form>
            <table class="table table-hover">
              <thead>
                <tr>
            <th class="col-xs-4">Nama Penerima</th>
            <th class="col-xs-3">Bantuan</th>
            <th class="col-xs-5">Jumlah</th>
                </tr>
              </thead>
              <tbody>
                 @foreach ($generate->all() as $em)
                  <tr>
                    <td>{{ $em->penduduk->nama }}</td>
                    <td>{{ $em->bantuan->title }}</td>
                    <td>{{ $em->bantuan->instansi->title }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-3">
            <h2>Kecamatan</h2>
            <ul class="list-group">

             @foreach (\App\Kecamatan::all() as $em)
               <li class="list-group-item">{{ $em->label }}</li>
            @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>