<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriptografi - Plainteks to Chipperteks</title>
</head>
<body>
    <div class="container">
        <h3 class="mt-4">Plainteks to Chipperteks</h3>
        <form class="row g-3" action="" method="post">
            <div class="col-auto">
                <input type="text" name="inputP" placeholder="Masukkan Teks!" class="form-control">
                <div class="form-text">Plainteks diatas akan di enkripsi menjadi chipperteks</div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Enkripsi</button>
            </div>
        </form>

        <?php
            function enkripsi1(){
                $inputP=$_POST["inputP"];
                $key = array(
                    '1' => '!', '2' => '@', '3' => '#', '4' => '$', '5' => '%',
                    '6' => '^', '7' => '&', '8' => '*', '9' => '(', '0' => ')',

                    'a' => '~', 'e' => '?', 'i' => '>', 'u' => '<', 'o' => '+',

                    'b' => 'N', 'c' => 'X', 'd' => 'F', 'f' => 'D', 'g' => 'H',
                    'h' => 'G', 'j' => 'K', 'k' => 'I', 'l' => 'J', 'm' => 'B',
                    'n' => 'Y', 'p' => 'O', 'q' => 'A', 'r' => 'E', 's' => 'W',
                    't' => 'R', 'v' => 'C', 'w' => 'Q', 'x' => 'Z', 'y' => 'T', 'z' => 'V',
                );

                $enkripsi = str_replace(array_keys($key), $key, $inputP);

                echo "<br><h6>Kata yang Dienkripsi :</h6>", $inputP;
                echo "<br>";
                echo "<h6>Hasil dari Enkripsi :</h6>", $enkripsi;
            };
        ?>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                enkripsi1();
            }
        ?>
    </div>