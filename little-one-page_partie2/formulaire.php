
<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-partie2.css">
    <title></title>

  </head>
  <body>
    <?php
      if(isset($_POST['valider'])) {
            $nom = htmlentities($_POST['fullname'], ENT_QUOTES);
            $email = htmlentities($_POST['mail'], ENT_QUOTES);
            $tel = htmlentities($_POST['tel'], ENT_QUOTES);
            $comment = htmlentities($_POST['mail'], ENT_QUOTES);
          }

          echo "<h1>Votre formulaire:</h1>";
          echo $name;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $tel;
          echo "<br>";
          echo $comment;

          ?>
  </body>
</html>
