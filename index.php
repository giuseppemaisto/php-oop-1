<?php 
class Movie {
    public $titolo;
    public $anno;
    public static $paese = 'America';

    public function __construct($_titolo, $_anno,){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
       
    }

    public function setPoster($poster){
        $this->poster = $poster;
    }
    public function getPoster($poster){
        $this->poster = $poster;
    }


    public function PrintMovieTitolo(){
        
       return $this->titolo;
       
      
    }
    public function PrintMovieAnno(){
        
        return $this->anno;
        
       
     }

}



$movie_1 = new Movie('Star Wars: Una nuova speranza', '1977', 'america');
$movie_2 = new Movie('Star Wars: L impero colpisce ancora', '1980', 'america');




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
               
                  <h1><?php echo "Titolo film.  " .$movie_1->PrintMovieTitolo();?></h1>

                  <h2><?php echo "anno di Uscita.  " .$movie_1->PrintMovieAnno();?></h2>

                  <h3><?php echo "paese di produzione: " .Movie::$paese?></h3>
               
            </div>

            <div class="col-12">
               
               <h1><?php echo "Titolo film.  " .$movie_2->PrintMovieTitolo();?></h1>

               <h2><?php echo "anno di Uscita.  " .$movie_2->PrintMovieAnno();?></h2>

               <h3><?php echo "paese di produzione: " .Movie::$paese?></h3>
            
         </div>
        </div>
    </div>
</body>
</html>