<?php
   
    require_once 'function.php';

    $discs = getDiscs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>I tuoi dischi preferiti</h1>

<div class="container-fluid d-flex justify-content-center gap-5 flex-wrap">
      <?php

          foreach ($discs as $disc) {
          ?>
        <div class="card" style="width: 18rem;">
             <img src="<?php echo $disc['cover'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $disc['title'] ?></h5>
                <p class="card-text"><?php echo $disc['artist'] ?></p>
                <p class="card-text"><?php echo $disc['year'] ?></p>
                <p class="card-text"><?php echo $disc['genre'] ?></p>
                <a href="<?php echo $disc['genre'] ?>" class="btn btn-primary"> Vai all'album</a>
            </div>
        </div>
      <?php
          }
      ?>
      <form action="server.php" method="POST">
    <div class="form-control ">
        <input type="text"id="title" name="title"><label for="">inserisci il titolo</label>
    </div>
    <div class="form-control ">
        <input type="text"id="cover" name="cover"><label for="cover">inserisci il link di un immagine</label>
</div>
<div class="form-control ">
    <input type="text"id="year" name="year"><label for="year">inserisci l'anno di pubblicazione</label>
</div>
<div class="form-control ">
    <input type="text"id="genre" name="genre"><label for="genre">inserisci il genere</label>
</div>
<div class="form-control ">

        <input type="text"id="artist" name="artist"><label for="artist">inserisci l'autore</label>
    </div>
    <button class="btn btn-primary">Aggiungi</button>
</form>
</div>
</body>
</html>