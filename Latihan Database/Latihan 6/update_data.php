<?php 
require 'function.php';

$id = $_GET ["code_game"];

$mobil = read("SELECT * FROM daftar_game WHERE code_game = '$id'")[0];


if (isset( $_POST ["submit"])) {

    if ( change_data ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
        echo "
        <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
        
    }

   
    
 }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Harga Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Update Harga Game</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Baru</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Inputkan harga terbaru game</div>
            </div>
        </form>
        <div class="mb-3">
            <button style="background-color: green;" type="submit" name="submit" class="btn btn-secondary btn-lg">UBAH !</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>