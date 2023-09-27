<?php 
include_once './conexao/conexao.php';

//$id = $_SESSION['id'];
$querySelect = $conexao->query("SELECT * FROM nf_danfe");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $prestador= $registros['prestador'];
    $tomador= $registros['tomador'];
    $numeroNota = $registros['numeronota'];
    $dtEmissao = $registros['dtemissao'];
    $cnpjPrestador = $registros['cnpjprestador'];
    $cnpjTomador = $registros['cnpjtomador'];
    $valorTotal = $registros['valortotal'];
    $porcICMS = $registros['porcicms'];
    $icms = $registros['icms'];
    $porcCOFINS = $registros['porccofins'];
    $cofins = $registros['cofins'];
    $porcPIS = $registros['porcpis'];
    $pis = $registros['pis'];
    $date = $registros['date'];


echo "<tr><center>";
echo "<td>$id</td><td>$prestador</td><td>$tomador</td><td>$numeroNota</td><td>$dtEmissao</td><td>$cnpjPrestador</td><td>$cnpjTomador</td><td>$valorTotal</td><td>$porcICMS</td><td>$icms</td>
<td>$porcCOFINS</td><td>$cofins</td><td>$porcPIS</td><td>$pis</td><td>$date</td>";
echo "</tr></center>";
endwhile;

?>