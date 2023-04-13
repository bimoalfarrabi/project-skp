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
  {{-- <a href="{{ route('sasaranView') }}" class="btn btn-primary">Tambah Sasaran</a> --}}
  <div class="box m-5">
    {{-- <table class="table">
      <thead>
        <tr>
          <th scope="col">Sasaran yang diintervensi</th>
          <th colspan="2"">Meningkatnya kualitas pelayanan pembelajaran dan praktikum sesuai standar di Jurusan	
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"></th>
          <td><b>Sasaran Kerja</b></td>
          <td><b>Ukuran keberhasilan</b></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Jacob</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry the Bird</td>
          <td>Larry the Bird</td>
        </tr>
      </tbody>
    </table> --}}
    <table class="table">
      <thead>
        <tr> 
          <th scope="col">No</th>
          <th scope="col">Sasaran Kerja</th>
          <th scope="col">Indikator Keberhasilan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sasaran as $item => $data)    
        <tr>
          <td>{{ $item + 1 }}</td>
          <td>{{ $data->sasaran_kerja }}</td>
          {{-- @foreach ($collection as $item)
              
          @endforeach --}}
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>