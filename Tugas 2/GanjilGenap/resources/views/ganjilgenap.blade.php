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
                        <button type="submit" class="btn btn-info">Hasil</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    @if($_POST && isset($_POST['first']))
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Angka</th>
                                <th scope="col">Hasil</th>
                                </tr>
                            </thead>
                            <?php for($bil = $first; $bil <= $second; $bil++){
                                if( ($bil % 2) == 0){
                                    echo "<tr>
                                        <td>Angka $bil </td><td> adalah Ganjil</td>
                                    </tr>";
                                }else {
                                    echo "<tr>
                                        <td>Angka $bil </td><td> adalah Genap</td>
                                    </tr>";
                                }	
                            }
                            ?>
                        </table>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>