<?php
include_once './conexao/conexao.php'; 
//$id = $_SESSION['id'];
$sql = $conexao->query("SELECT * FROM exec WHERE tipo = 'Iniciou'")->fetch_All();
$contIniciou = count($sql);


?>