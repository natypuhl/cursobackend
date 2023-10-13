<html>
  <head>
    <title>Tarea 5</title>
  </head>
  <body>
    <?php

        for ($i = 1; $i <= 9; $i++) {
            echo $i . "<br>";
        }
        echo "<br>";

        for ($i = 9; $i >= 1; $i--) {
            echo $i . "<br>";
        }
        echo "</br>";

        for ($i = 2; $i <= 20; $i += 2) {
              echo $i . "<br>";
        }
        echo "</br>";
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 != 0) {
                echo $i . "<br>";
            }
        }
        echo "</br>";
      $suma = 0;
      for ($i = 1; $i <= 20; $i++) {
          $suma += $i;
      }
      echo "La suma de los números del 1 al 20 es: " . $suma;
      echo "</br>";
      $suma = 0;
      for ($i = 2; $i <= 20; $i += 2) {
          $suma += $i;
      }
      echo "La suma de los números pares del 1 al 20 es: " . $suma;
     echo "</br>";
    ?>
  </body>
</html>
