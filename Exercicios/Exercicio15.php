<html>
<body>

<?php
date_default_timezone_set('America/Sao_Paulo');

setlocale(LC_ALL, "pt_BR.utf-8", "pt_BR", "portuguese");


echo "Hoje é ";

$fmt = new IntlDateFormatter("pt_BR", IntlDateFormatter:: FULL, IntlDateFormatter::NONE, "America/Sao_Paulo");

echo $fmt->format(new DateTime("today"));


?>

</body>
</html>
