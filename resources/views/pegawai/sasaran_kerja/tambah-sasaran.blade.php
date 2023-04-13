<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <a href="{{ route('tambahSasaran') }}" class="btn btn-primary m-5">Tambah Sasaran</a>
  <div class="box m-5">
    <table class="table">
      <thead>
        <tr> 
          <th scope="col">No</th>
          <th scope="col">Sasaran Kerja</th>
          <th scope="col">Indikator Keberhasilan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @if (count($sasaran) == 0)
          <tr>
            <td colspan="3"> Data kosong</td>
          </tr>
        @endif
        @foreach ($sasaran as $item => $data)    
        <tr>
          <td>{{ $item + 1 }}</td>
          <td>{{ $data->sasaran_kerja }}</td>
          <td><a href="{{ route('indikatorView', $data->id) }}">Tambah</a></td>
          <td><a href="{{ route('sasaranDelete', $data->id) }}">Hapus</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>