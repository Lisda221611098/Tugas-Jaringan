<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=9c44650d&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
              
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container-new" style="background-image:url('masha.jpeg');">
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="doraemon.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Nobita's Dinasour</h5>
        <p class="card-text">This list of Doraemon films features both feature-length and short films based on the manga and anime series Doraemon. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="frozen.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Frosen</h5>
        <p class="card-text">Olaf and Sven set out on a mission to visit every household in Arendelle to find a new Christmas tradition for Elsa and Anna.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="masha.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Masha and The Bear</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="naruto.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Naruto</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="one piece.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">One Piece</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="spongebob.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Spongebob</h5>
        <p class="card-text">The SpongeBob SquarePants Movie adalah sebuah film animasi berdasarkan acara TV hit Nickelodeon SpongeBob SquarePants.</p>
      </div>
    </div>
  </div>
      </div>
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
