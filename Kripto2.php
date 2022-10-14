<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriptografi - Chipperteks to Plainteks</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-4">Chipperteks to Plainteks</h3>
        <form class="row g-3" action="" method="post">
            <div class="col-auto">
                <input type="text" name="inputC" placeholder="Masukkan Teks!" class="form-control">
                <div class="form-text">chipperteks diatas akan di enkripsi menjadi Plainteks</div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Deskripsi</button>
            </div>
        </form>

        <?php
            function enkripsi2(){
                $inputC=$_POST["inputC"];
                $key = array(
                    '1' => '!', '2' => '@', '3' => '#', '4' => '$', '5' => '%',
                    '6' => '^', '7' => '&', '8' => '*', '9' => '(', '0' => ')',

                    'a' => '~', 'e' => '?', 'i' => '>', 'u' => '<', 'o' => '+',

                    'b' => 'N', 'c' => 'X', 'd' => 'F', 'f' => 'D', 'g' => 'H',
                    'h' => 'G', 'j' => 'K', 'k' => 'I', 'l' => 'J', 'm' => 'B',
                    'n' => 'Y', 'p' => 'O', 'q' => 'A', 'r' => 'E', 's' => 'W',
                    't' => 'R', 'v' => 'C', 'w' => 'Q', 'x' => 'Z', 'y' => 'T', 'z' => 'V',
                );

                $deskripsi = str_replace($key, array_keys($key), $inputC);

                echo "<br><h6>Kata yang Dienkripsi :</h6>", $inputC;
                echo "<br>";
                echo "<h6>Hasil Deskripsi :</h6>", $deskripsi;
            };
        ?>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                enkripsi2();
            }
        ?>
    </div>