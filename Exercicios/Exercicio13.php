<html>
<body>

<?php
$senha = "senhosa";

if(!empty($senha) && strlen($senha)>8)
{
    $hash_seguro = password_hash($senha, PASSWORD_BCRYPT);
}
else
{
    echo "Senha fraca";
}
?>

</body>
</html>
