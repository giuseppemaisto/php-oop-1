<?php 
class Movie {
    public $titolo;
    public $anno;
    public $paese;

    public function __construct($_titolo, $_anno, $_paese){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->paese = $_paese;
    }

}

$movie_1 = new Movie('Star Wars: Una nuova speranza', '1977', 'america');
$movie_2 = new Movie('Star Wars: L\impero colpisce ancora', '1980', 'america');
$movie_3 = new Movie('Star Wars: Il ritorno dello Jedi ', '1983', 'america');
$movie_4 = new Movie('Star Wars: il risveglio della forza ', '2015', 'america');
$movie_5 = new Movie('Star Wars: Gli ultimi jedi', '2017', 'america');
$movie_6 = new Movie('Star Wars: L\ascesa di Skywalker', '2019', 'america');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
               
                ?>
            </div>
        </div>
    </div>
</body>
</html>