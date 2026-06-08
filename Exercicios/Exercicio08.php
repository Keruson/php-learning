<html>
<body>

<?php

$conteudo = "Log de acesso: " . date('Y-m-d H:i:s');
$fp = fopen("log.txt", "a");

if($fp)
{
    flock($fp, 2);
    fwrite($fp, $conteudo . "\n");
    flock($fp, 3);
    fclose($fp);
}
?>

</body>
</html>