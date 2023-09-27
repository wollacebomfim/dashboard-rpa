<?php
include_once './conexao/conexao.php'; 
//$id = $_SESSION['id'];
$sql = $conexao->query("SELECT * FROM exec WHERE tipo = 'Falha'")->fetch_All();
$contFalha = count($sql);


?>