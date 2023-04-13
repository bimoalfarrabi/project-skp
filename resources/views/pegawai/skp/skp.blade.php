<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ $title }}</title>
  </head>
  <body>
    <div class="tombol mt-5 mx-5">
      <a href="{{ route('pegawai.skp.tambah-skp') }}" class="btn btn-primary">Tambah SKP</a>
    </div>
    @foreach ($periodeSkp as $item)    
    <div class="box m-5">
      <div class="card">
        <div class="card-header">
          {{-- <span>{{ $item->tanggal->isoFormat('dddd, D MMM Y') }}</span> --}}
          {{-- <span>{{ show($item->tanggal, 'j M Y') }}</span> --}}
          {{-- <span>{{ $item->tanggal->format('d/M/Y')}}</span> --}}
          <span>{{ show($item->periode_awal, 'd F Y' ) }} - {{ show($item->periode_akhir, 'd F Y' ) }}</span>
        </div>
        <div class="card-body">
          <a href="{{ route('daftarMatriks') }}" class="btn btn-primary">Matriks</a>
          <a href="{{ route('sasaranView') }}" class="btn btn-primary">Sasaran Kerja</a>
          <a href="#" class="btn btn-primary">Detail SKP</a>
          <a href="#" class="btn btn-primary">Lampiran</a>
          <a href="#" class="btn btn-primary">Evaluasi Pegawai</a>
        </div>
      </div>
    </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>