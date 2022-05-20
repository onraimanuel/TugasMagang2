<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="/hasil" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-3">
                        <input type="number" name="first" class="form-control" placeholder="Angka Pertama">
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="second" class="form-control" placeholder="Angka Kedua">
                    </div>
                    <div class="col-md-3">
                        <select name="operasi" class="form-control">
                            <option value="tambah"> + </option>
                            <option value="kurang"> - </option>
                            <option value="bagi"> / </option>
                            <option value="kali"> x </option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-info">Hasil</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    @if(session('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>