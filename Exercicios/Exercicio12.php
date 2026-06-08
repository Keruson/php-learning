<html>
<body>

<?php
$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
$frutasnew = join(",", $frutas);
echo $frutasnew."<br/>";
array_push($frutas, "Pêra");

foreach($frutas as $fruta)
{
    echo "Fruta: ".$fruta. "<br/>"; 
}

?>

</body>
</html>
