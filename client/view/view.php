<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css\style.css" />
<style>
  #review-form {
    display: none;
  }


.review {
            
    margin: 100px auto;
    max-width: 600px;
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px;
    padding: 40px;
  }
  
  .review h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .stars {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }
  
  .star {
    font-size: 40px;
    color: #cccccc;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.2s ease-in-out;
  }
  
  .star:hover,
  .star.active {
    color: #f7d40f;
  }
  
  input.rating-value {
    display: none;
  }
  
  textarea[name="comment"] {
    width: 100%;
    height: 150px;
    margin-bottom: 20px;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #cccccc;
    resize: none;
  }
  
  .review button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    background-color: #f7d40f;
    color: #ffffff;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
    margin-top: 20px;
  }
  
  .review button[type="submit"]:hover {
    background-color: #e0c53f;
  }
  

  </style>


  
  <!-- fontawesome-->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <title>Laziza</title>
</head>
<body>
<?php
//require_once("{$ROOT}{$DS}view{$DS}header.php"); require_once($ROOT.$DS."view".$DS."header.php");

$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}"; 

// détermine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; // détermine le nom du fichier
require_once($filepath.$filename);
//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>

</body>
</html>
