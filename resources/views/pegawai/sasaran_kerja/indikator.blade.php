<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>{{ $title }}</title>
</head>
<body>
  <div class="box m-5">
    <table class="table">
        <tr>
          <td>Sasaran Kerja</td>
          <td>{{ $sasaran->sasaran_kerja }}</td>
        </tr>
        <tr>
          <td>Indikator Keberhasilan</td>
          {{-- @foreach ([$indikators] as $item)
              @foreach ($item as $indi)
                  <td>{{ $indi->teks_indikator }}</td>
              @endforeach
          @endforeach --}}
          <td>
            @foreach ([$indikators] as $item)
                @foreach ($item as $indi)
                    <p>&bull; {{ $indi->teks_indikator }} <a href="{{ route('indikatorHapus', 
                        [
                          'idIndikator' => $indi->id,
                          'id' => $indi->sasaran->id
                        ]
                      ) 
                    }}">Hapus</a></p>
                @endforeach
            @endforeach
          </td>
        </tr>
    </table>
  </div>
  <div class="wrapper">
    <div class="controls">
      <button type="button" class="btn btn-primary" id="tambah"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></button>
      <button type="button" class="btn btn-primary" id="kurang"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
      </svg></button>
      {{-- <a href="#" id="tambah">Tambah</a>
      <a href="#" id="kurang">Kurang</a> --}}
    </div>
    <form action="{{ Route('indikatorStore', $sasaran->id) }}" method="POST">
      @csrf  
        <div class="box m-5" id="indikator_keberhasilan">
          <input type="text" class="form-control" name="indikators[]" placeholder="indikator keberhasilan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/dynamic.js') }}"></script>
</body>
</html>