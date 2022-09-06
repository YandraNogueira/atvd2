<?php 
extract($_POST); // Transforma automaticamente campos name em variáveis

echo $id."<br>";
echo $nome."<br>";
echo $cargo;

$dado = $id."\r\n".$nome."\r\n".$cargo."\r\n";

$refFile = fopen("Cadastros/$id.txt","a+");

fwrite($refFile,$dado);

fclose($refFile);

?>