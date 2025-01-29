<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equitation</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

  <body>
<?php
include 'indexiphp\header.php';
include "data.php";
?>

<?php
echo "<h1 class='titre'> L'ÉQUITATION EST MON ÉQUILIBRE</h1>";
?>
    
    
    <div class="container">
      <div class="row g-5 mt-2">
<?php
foreach ($articles as $key => $item):?>

          <div class="col-lg-4">
          <div class="card">
          
          <img src="assets\images\<?php echo $item ['imagePath']; ?>"alt="images des sports <?php echo $item['name']; ?>">
          <div class="bottom_card">
            <h5 class="card-title"> <?php echo $item['name'] ?></h5>
            <h5 class="date">   <?php echo $item['date'] ?><h5>
            <h5 class="creeater"> <?php echo $item['createdBy'] ?></h5>
            <p class="article"> <?php echo $item ['article'] ?> </p>   
            <a href="/single.php?position=<?php echo $key ?>" class="btn btn-primary"target="_blank" >Go somewhere</a>
          </div>
          </div>
          </div>

<?php endforeach; ?>



    </div>
    </div>

 

<?php
include 'indexiphp\footer.php';
?>

<script src="script.js"> </script>
  </body>
</html> 




