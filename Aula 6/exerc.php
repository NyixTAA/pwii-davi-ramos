<!DOCTYPE html>
<html lang="en">
<body>
    
    <?php
        $numeros = array("2", "5", "7", "8", "10", "18", "30", "37", "38", "60");

        foreach ($numeros as $numero){
            for ($numero = 1; ; $numero++) {
                if ($numero % 2 == 0) {
                    echo "$numero é par <br>";
                } else {
                    echo "$numero é impar <br>";
                }
            }
        }
    ?>

</body>
</html>