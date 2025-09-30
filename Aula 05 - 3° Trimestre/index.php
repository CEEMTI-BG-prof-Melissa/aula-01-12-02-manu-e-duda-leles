<html>
    <head>
        <title> Aula 05 - PHP</title>
    </head>
    <body>
        <?php
            $n1= 2;
            $n2=$_GET["x"];

            echo "Os valores são $n1 e $n2. <br>";
            echo "<br>O valores absoluto de $n1 é " .abs($n1);
            echo "<br><br>O número $n2 <sup>$n1</sup> é igual a " .pow($n2, $n1);
            echo "<br><br><br> A raíz quadrada de $n2 é igual a " .sqrt($n2);

            echo "<br><br> Arredondando o número $n2 é igual a " .round($n2);
            echo "<br><br> Arrendondando o número $n2 para cima é igual a " .ceil($n2);
            echo "<br><br> Arredondando o número $n2 para baixo é igual a " .floor($n2);

            echo "<br><br><br>";
            echo "A parte inteira de $n2 é igual a " .intval($n2);
            echo "<br><br>Um pirulito custa R$" .number_format($n1, 2, ",", ".");
        ?>
    </body>
</html>
