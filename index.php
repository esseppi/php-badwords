<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
</head>

<body>
   <form action="" method="GET">
      <input type="text" name="search">
      <button>submit</button>

   </form>

   <?php
   $text = 'Inserisci una o più lettere contenute in questa frase per nasconderle';

   if (isset($_GET['search'])) {
      $findWord = $_GET['search'];
      $badText = str_replace($findWord, '***', $text);
      $len = strlen($badText);
      echo "$badText <br> $len lettere";
   } else {
      echo $text;
   }

   ?>

</body>

</html>