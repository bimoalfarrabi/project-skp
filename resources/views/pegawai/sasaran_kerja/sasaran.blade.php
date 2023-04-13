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
    <form method="POST" action="{{ route('storeSasaran') }}" class="p-5 m-5" style="border: 10px;">
      @csrf
      <fieldset>
        <legend>Halo</legend>
        <div class="mb-3">
          <label for="select" class="form-label">Disabled select menu</label>
          <select id="select" class="form-select">
            <option>Disabled select</option>
          </select>
        </div>
        <div class="mb-3">
          <p>Sasaran Kerja</p>
          <input type="text" class="form-control" name="sasaran_kerja" placeholder="sasaran kerja">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('sasaranView') }}" class="btn btn-primary">Kembali</a>
      </fieldset>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
  </body>
</html>