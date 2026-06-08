<html>
<body>

<?php
date_default_timezone_set('America/Sao_Paulo');

setlocale(LC_ALL, "pt_BR.utf-8", "pt_BR", "portuguese");

//echo date("d/m/Y");
//echo date("d/m/ H:i:s");

$ts = strtotime("2024-05-25");
echo date("d/m/Y", $ts);

//echo strftime("%A, %d de %B de %Y", strtotime("today"));

//$fmt = new IntlDateFormatter("pt_BR", IntlDateFormatter:: FULL, IntlDateFormatter::NONE, "America/Sao_Paulo");

//echo $fmt->format(new DateTime("today"));


?>

</body>
</html>
