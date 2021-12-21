<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    
</style>
</head>

<body>
    <form action="index.php" method="get">
      email: <input type="text" name="email" minlength="3">
      </br>
      age: <input type="text" name="age">
      </br>
      <input type="submit">
    </form>

    <p>
      <?php 
      
        // 
        if (strpos($_GET["email"], "@") && strpos($_GET["email"], ".") && is_numeric($_GET("age")) {
          echo '<idv>Accesso riuscito</div>';
        } else {
          echo '<idv>Accesso negato</div>';
        }

      ?>
    </p>

</body>
</html>