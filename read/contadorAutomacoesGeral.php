<?php
include_once './conexao/conexao.php'; 
//$id = $_SESSION['id'];
$sql = $conexao->query("SELECT * FROM nf_danfe")->fetch_All();
$contadorAuto = count($sql);


?>