<html>
<body>

<?php
static $coisa = 0;

function descoisar($coisa)
{
    $coisa ++;
}

for ($i = 1; $i <= 10; $i++)
{
    descoisar($coisa);
}


echo "<h1>" . $coisa . "<h1>";

?>

<body>
<html>