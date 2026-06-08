<html>
<body>

<?php
$senha = "MuitoSecreta";
$hash_seguro = password_hash($senha, PASSWORD_BCRYPT);

if (password_verify($senha, $hash_seguro))
{
    echo "Senha válida!";
}

?>

</body>
</html>
