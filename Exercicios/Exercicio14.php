<html>
<body>

<?php

function contadorDeAcessos()
{
    static $Num = 1;
    echo "Esta página foi consultada ". $Num ." vezes <br/>";
    $Num++;
}

for($i = 1; $i <= 5; $i++)
{
    contadorDeAcessos();
}


?>

</body>
</html>
