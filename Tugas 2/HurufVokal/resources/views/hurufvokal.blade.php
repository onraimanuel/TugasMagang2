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
                        <input type="text" name="name" class="form-control" placeholder="Masukkan kata">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-info">Hasil</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    @if($_POST && isset($_POST['name']))
                    <div class="alert alert-info" role="alert">
                        <p>{{$name}} = {{$jumlah}}</p>
                        <?php
                            echo "yaitu ";
                            foreach($found as $isi){
                                echo $isi." ";
                            }
                        ?>
                    </div>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>