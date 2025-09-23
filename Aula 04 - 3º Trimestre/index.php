<html>
    <head>
        <title> Aula 04 - PHP</title>
    </head>
    <body>
        <?php
            $n1=$_GET["a"];
            $n2=$_GET["b"];

            echo "<br><br>A soma de $n1 e $n2 é: " .($n1+$n2);
            echo "<br><br>A multiplicação de $n1 e $n2 é: " .($n1*$n2);
            echo "<br><br>A divisão de $n1 e $n2 é: " .($n1/$n2);
            echo "<br><br>A subtração de $n1 e $n2 é: " .($n1-$n2);
            echo "<br><br>O resto da divisão de $n1 e $n2 é: " .($n1%$n2);
        ?>
    </body>
</html>
