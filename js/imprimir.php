

<?php 
include_once './includes/cabecalho.php';
include_once './conexao/conexao.php';
include_once './includes/seguranca.php';
   
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM contratos WHERE id = '$id'");

  while($registros = $querySelect->fetch_assoc()):
  $id = $registros['id'];
  $nome= $registros['nome'];
  $nomedamae = $registros['nomedamae'];
  $nomedopai = $registros['nomedopai'];
  $sexo = $registros['sexo'];
  $cpf = $registros['cpf'];
  $rg = $registros['rg'];
  $oe = $registros['oe'];
  $nascimento = $registros['nascimento'];
  $naturalidade = $registros['naturalidade'];
  $nacionalidade = $registros['nacionalidade'];
  $rendamensal = $registros['rendamensal'];
  $telefone = $registros['telefone'];
  $telcomercial = $registros['telcomercial'];
  $celular = $registros['celular'];
  $funcao = $registros['funcao'];
  $endereco = $registros['endereco'];
  $numero = $registros['numero'];
  $cidade = $registros['cidade'];
  $cep = $registros['cep'];
  $estado = $registros['estado'];
  $email = $registros['email'];
  $conjuge = $registros['conjuge'];
  $nconjuge = $registros['nconjuge'];
  $sconjuge = $registros['sconjuge'];
  $cpfconjuge = $registros['cpfconjuge'];
  $rgconjuge = $registros['rgconjuge'];
  $eoconjuge = $registros['oeconjuge'];
  $rendaconjuge = $registros['rendaconjuge'];
  $banco = $registros['banco'];
  $tipodeconta = $registros['tipodeconta'];
  $conta = $registros['conta'];
  $agencia = $registros['agencia'];
  $prazo = $registros['prazo'];
  $reserva = $registros['reserva'];
  $indice = $registros['indice'];
  $bem = $registros['bem'];
  $valorparcelamensal = $registros['valorparcelamensal'];
  $seguro = $registros['seguro'];
  $ttadm = $registros['ttadm'];
  $valorcredito = $registros['valorcredito'];
  $adesao = $registros['adesao'];
  $txcorretagem = $registros['txcorretagem'];
  $txconsultoria = $registros['txconsultoria'];
  endwhile;
?>
<body>
<div class="row container">
                                                     <!-- PAGINA 1º IMPRESSÃO DO CONTRATO -->
<fieldset class="formulario">

    <!-- <img src="./images/logo/montenegro.jpeg" style="width: 20%" class="left"> </br></br> -->

    <h3 class="light center"><b>INTERMEDIAÇÕES FINANCEIRAS</b></h3></br></br>

    <h4 class="light center">Proposta Comercial para Intermediação na Aquisição de Consórcios</h4>

    <div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nome" value="<?php echo $nome?>"  placeholder="NOME COMPLETO \ RAZÃO SOCIAL " ReadOnly autofocus>
    <label for="nome">Nome completo \ Razão Social</label>
    </div>
    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nomedamae"  value="<?php echo $nomedamae?>" placeholder="NOME DA MÃE"  ReadOnly>
        <label for="nomedamae">Nome da Mãe</label>
    </div>
    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nomedopai" value="<?php echo $nomedopai?>"  placeholder="NOME DO PAI"  ReadOnly>
        <label for="nomedopai">Nome do Pai</label>
    </div>
    </br>
    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="cpf" value="<?php echo $cpf?>"  placeholder="CPF \ CNPJ" ReadOnly >
        <label for="cpf">CPF \ CNPJ</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="rg" value="<?php echo $rg?>"  placeholder="RG " ReadOnly >
        <label for="rg">RG \ IE</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="oe"  value="<?php echo $oe?>" placeholder="ORGÃO EMISSOR " ReadOnly >
        <label for="oe">Orgão Emissor</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> location_on</i>
        <input type="text" name="cep"  value="<?php echo $cep?>" placeholder="CEP"  ReadOnly>
        <label for="cep">CEP</label>
    </div>
    <div class="input-field col s2">
    <i class="material-icons prefix"> account_circle</i>
        <input type="text" name="sexo"  value="<?php echo $sexo?>" placeholder="SEXO" ReadOnly >
        <label for="sexo">Sexo</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="naturalidade"  value="<?php echo $naturalidade?>" placeholder="NATURALIDADE" ReadOnly >
        <label for="naturalidade">Naturalidade</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="nacionalidade"  value="<?php echo $nacionalidade?>" placeholder="NACIONALIDADE" ReadOnly >
        <label for="nacionalidade">Nacionalidade</label>
    </div>
        <div class="input-field col s4">
        
        <i class="material-icons prefix"> content_paste</i>
       
        <input type="date" name="nascimento" value="<?php echo $nascimento?>"  placeholder="DATA NASCIMENTO \ FUNDAÇÃO" ReadOnly >
        <label for="nascimento">Nascimento</label>
    </div>
    <div class="input-field col s2">
    <i class="material-icons prefix"> attach_money</i>
    
        <input type="text" name="rendamensal"  value="<?php echo $rendamensal?>" placeholder="RENDA MENSAL" ReadOnly >
        <label for="rendamensal">Renda Mensal</label>
    </div>
    <div class="input-field col s4">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="funcao" value="<?php echo $funcao?>"  placeholder="FUNÇÃO"  ReadOnly>
        <label for="funcao">Função</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">location_on</i>
    <input type="text" name="endereco" value="<?php echo $endereco?>"  placeholder="ENDEREÇO" ReadOnly >
    <label for="endereco">Endereço</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">location_on</i>
        <input type="text" name="numero"  value="<?php echo $numero?>" placeholder="NUMERO" ReadOnly >
        <label for="numero">Numero</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">location_on</i>
        <input type="text" name="cidade" value="<?php echo $cidade?>"  placeholder="CIDADE" ReadOnly >
        <label for="cidade">Cidade</label>
    </div>

    
    
    <div class="input-field col s3">
    <i class="material-icons prefix">location_on</i>
        <input type="text" name="estado" value="<?php echo $estado?>" placeholder="ESTADO" ReadOnly >
        <label for="estado">Estado</label>
    
        
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">phone</i>
        <input type="text" name="telefone" value="<?php echo $telefone?>"  placeholder="TELEFONE" ReadOnly>
        <label for="telefone">Telefone</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">phone</i>
        <input type="text" name="telcomercial"  value="<?php echo $telcomercial?>" placeholder="TELEFONE COMERCIAL" ReadOnly>
        <label for="telcomercial">Telefone Comercial</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">smartphone</i>
        <input type="text" name="celular" value="<?php echo $celular?>"  placeholder="CELULAR"  >
        <label for="celular">Celular</label>
    </div>
    <div class="input-field col s6">
    <i class="material-icons prefix">email</i>
        <input type="text" name="email" value="<?php echo $email?>"  placeholder="EMAIL" ReadOnly >
        <label for="email">Email</label>
        
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">group_add</i>
        <input type="text" name="conjuge" value="<?php echo $conjuge?>"  placeholder="CÔNJUGE"  ReadOnly>
        <label for="conjuge">Cônjuge</label>
    </div>
    <div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nconjuge" value="<?php echo $nconjuge?>"  placeholder="NOME DO CÔNJUGE"  ReadOnly>
        <label for="nconjuge">Nome completo do Cônjuge</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="sconjuge" value="<?php echo $sconjuge?>"  placeholder="SEXO DO CÔNJUGE"  ReadOnly>
        <label for="sconjuge">Sexo do Cônjuge</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="cpfconjuge" value="<?php echo $cpfconjuge?>"  placeholder="CPF " ReadOnly >
        <label for="cpfconjuge">CPF do Cônjuge</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix">account_circle</i>
        <input type="text" name="rgconjuge"  value="<?php echo $rgconjuge?>" placeholder="RG "  ReadOnly>
        <label for="rgconjuge">RG do Cônjuge</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix"> content_paste</i>
        <input type="text" name="oeconjuge" value="<?php echo $eoconjuge?>"  placeholder="ORGÃO EMISSOR RG " ReadOnly >
        <label for="oeconjuge">Orgão Emissor do Cônjuge</label>
    </div>

    <div class="input-field col s3">
    <i class="material-icons prefix"> attach_money</i>
        <input type="text" name="rendaconjuge" value="<?php echo $rendaconjuge?>"  placeholder="RENDA MENSAL "  ReadOnly>
        <label for="rendaconjuge">Renda Mensal do Cônjuge</label>
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix"> domain</i>
        <input type="text" name="banco" value="<?php echo $banco?>"  placeholder="BANCO" ReadOnly >
        <label for="banco">Banco</label>
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix"> description</i>
        <input type="text" name="tipodeconta"  value="<?php echo $tipodeconta?>" placeholder="TIPO DE CONTA"  ReadOnly>
        <label for="tipodeconta">Tipo de Conta</label>
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix"> credit_card</i>
        <input type="text" name="agencia" value="<?php echo $agencia?>"  placeholder="AGÊNCIA"  ReadOnly>
        <label for="agencia">Agência</label>
    </div>

    <div class="input-field col s2">
    <i class="material-icons prefix"> credit_card</i>
        <input type="text" name="conta" value="<?php echo $conta?>"  placeholder="CONTA"  ReadOnly>
        <label for="conta">Conta</label>

    </div>   
     <div class="input-field col s2">
    <i class="material-icons prefix"> date_range</i>
        <input type="text" name="prazo" value="<?php echo $prazo?>"  placeholder="PRAZO"  ReadOnly>
        <label for="prazo">Prazo</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> filter_none</i>
        <input type="text" name="reserva" value="<?php echo $reserva?>"  placeholder="FUNDO DA RESERVA"  ReadOnly>
        <label for="reserva">Fundo da Reserva</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> attach_money</i>
        <input type="text" name="valorcredito" value="<?php echo $valorcredito?>"  placeholder="VALOR DO CREDITO"  ReadOnly>
        <label for="valorcredito">Valor do credito</label>
    </div>
    <div class="input-field col s4">
    <i class="material-icons prefix"> donut_small</i>
        <input type="text" name="indice" value="<?php echo $indice?>"  placeholder="INDICE DE CORREÇÃO"  ReadOnly>
        <label for="indice">Indice de Correção</label>
    </div>
    <div class="input-field col s2">
    <i class="material-icons prefix"> domain</i>
        <input type="text" name="bem" value="<?php echo $bem?>"  placeholder="TIPO DO BEM"  ReadOnly>
        <label for="bem">Tipo do Bem</label>
    </div>
    <div class="input-field col s4">
    <i class="material-icons prefix"> attach_money</i>
        <input type="text" name="valorparcelamensal" value="<?php echo $valorparcelamensal?>"  placeholder="VALOR APROXIMADO PARCELAS"  ReadOnly>
        <label for="valorparcelamensal">Valor aproximado das Parcelas Mensais</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> attach_money</i>
        <input type="text" name="ttadm"  value="<?php echo $ttadm?>" placeholder="TOTAL DA TAXA DE ADMINISTRAÇÃO"  ReadOnly>
        <label for="ttadm">Total da Taxa Administração</label>
    </div>
    <div class="input-field col s3">
    <i class="material-icons prefix"> insert_chart</i>
        <input type="text" name="seguro" value="<?php echo $seguro?>"  placeholder="SEGURO PRESTAMISTA"  ReadOnly>
        <label for="seguro">Seguro Prestamista</label>
    </div> 

    <div class="input-field col s2">
    <i class="material-icons prefix"> attach_money</i>
        <input type="text" name="adesao" value="<?php echo $adesao?>"  placeholder="ADESÃO"  ReadOnly>
        <label for="adesao">Adesão</label>
    </div> 

</fieldset>
</form>
</div>


<div class="row container">
<fieldset class="formulario">
<form>
<font size="3">

O Proponente concorda em pagar o valor da adesão conforme a tabela apresentada, a título de primeira parcela composta de taxa de administração do consórcio juntamente com a corretagem por intermediação da aquisição do seu consórcio feito por parte da Empresa GRUPO PERNAMBUCO CORRETORA. E deverá ser paga através de boleto bancário, transferência identificada ou Pix, onde o favorecido será sempre a GRUPO PERNAMBUCO CORRETORA. Seu grupo e cota será enviado juntamente com sua via de contrato pelo e-mail após compensação bancária.
</font>
</form>
</fieldset>
</div><div class="row container">
<fieldset class="formulario">
<form>
<font size="3">
ESTE DOCUMENTO NÃO CONFIGURA RECIBO DE PAGAMENTO. O RECIBO DE PAGAMENTO SERÁ SEMPRE O COMPROVANTE BANCÁRIO DEVIDAMENTE AUTENTICADO. NÃO RESPONSABILIZAMOS POR OUTRAS FORMAS DE PAGAMENTO NÃO PREVISTAS AQUI.

</font>
</form>
</fieldset>
</div></div><div class="row container">
<fieldset class="formulario">
<form>
<center>
<br>
________________________________________________________
</br>
Assinatura
</br>
_________________________/____/________
</br>
Local e Data
</br>
As Taxas e valores inseridos nessa proposta são aproximados, pois podem variar de acordo com a disponibilidade de vagas no grupo no momento do cadastro.
</center>

</form>
</fieldset>
</div><br><br><br><br><br><br><br>
                                                                     <!-- PAGINA 2º IMPRESSÃO DO CONTRATO -->
<div class="row container">
<fieldset class="formulario">
<form>
<!-- <img src="./images/logo/montenegro.jpeg" style="width: 20%" class="left"> </br></br> -->

<h3 class="light center"><b>TERMO DE INTERMEDIAÇÃO PARA ADESÃO A CONSÓRCIO</b></h3></br></br>
<font size="5">
<p>Os signatários do presente instrumento, de um lado, na qualidade de</p><br>

<p>INTERMEDIADOR: M T BIANCO PALAHRES PROMOCOES DE VENDAS E CONSORCIOS, pessoa jurídica de direito privado, inscrita no CNPJ sob o n° 41.908.632/0001-35, por meio de seu representante legal MARIA TEREZA BIANCO PALHARES, brasileiro(a), empresário(a), inscrito no CPF sob o nº 178.266.508-01 e do RG : 266318381 sediada na Rua Gomes Taborda, nº 1709 , Bairro Cordeiro, Recife, PE.</p></br>
<p>e, de outro lado, na qualidade de</p><br>
<p>Eu, <?php echo $nome ;?>, inscrito no CPF/MF sob o <?php echo $cpf ;?>, RG nº <?php echo $rg ;?>, residente e domiciliado <?php echo $endereco ;?>, <?php echo $numero ;?> na cidade de <?php echo $cidade ;?></br>
1.	O intermediador é uma corretora de crédito, sua atuação é em intermediar a negociação de cotas de consórcios nos termos do Art. 722 do Código Civil, realizando a reunião entre clientes interessados no produto e administradoras que se encaixem em seu perfil, qual seja, FICHA DE CADASTRO DE CLIENTE PARA ADESÃO AO CONSORCIO.</br></br>
2.	A assinatura do presente termo gera obrigação a intermediadora de:</br>
A)	Apresentar um grupo de consórcio de acordo com o perfil do cliente.</br></br>
B)	Realizar o cadastro do cliente junto a administradora fiscalizada pelo Banco Central do Brasil.</br></br>
C)	Enviar contrato de adesão ao grupo de consórcio, assim como orientar o cliente acerca do contrato firmado para aceitação ou recusa</br></br>
D)	Atender as necessidades do cliente no período de contratação, esclarecendo dúvidas, via E-mail e Telefone, estando a sua disposição até Prazo do serviço de corretagem que é de 120 (cento e vinte) dias, após esse prazo será finalizada a sua obrigação do objeto deste instrumento.</br></br>
E)	Realizar o repasse a administradora dos valores correspondentes as parcelas pagas conforme descritas do detalhamento financeiro.</br></br>
3.	O cliente declara que recebeu todas as informações e esclareceu suas dúvidas acerca dos serviços prestados pela intermediadora acerca da contratação de consórcio, devendo comunicar até a ligação de checagem qualquer dúvida ou divergência de informação relativo ao presente termo ou a contratação do consórcio.</br></br>
4.	Após a assinatura do presente instrumento é dada completa anuência para inclusão do cliente em grupo de consórcio, nos termos pactuados durante o atendimento, seguindo os parâmetros indicados no FICHA DE CADASTRO DE CLIENTE PARA ADESÃO AO CONSORCIO.</br></br>
5.	O cliente poderá se recusar a assinar o contrato com a administradora recomendada pela intermediadora de acordo com o seu perfil, estando a intermediadora resguardada no direito de apresentar nova oportunidade que atenda ao seu perfil.</br></br>
6.	Após a finalização do cadastro junto a administradora selecionada de acordo com o perfil do cliente, o mesmo receberá um E-mail diretamente da administradora com todas as informações acerca do contratado, assim como CONTRATO, BOLETOS E AFINS. Devendo comunicar em caso de não recebimento.</br></br>
7.	O contratante está ciente que além do contrato de intermediação será firmado contrato junto a administradora, sob o qual a intermediadora não possui gerencia, devendo dúvidas e cancelamentos serem realizados diretamente com administradora, responsável pelo consórcio, nos termos de Lei 11795/2008.</br></br>
8.	O presente instrumento, assim como o contrato firmado junto a administradora, não possui garantia de data de contemplação, quer seja por sorteio ou lance</br></br>
9.	O contratante deverá realizar o pagamento das parcelas diretamente a administradora, não realizando a contratada qualquer intermediação com respeito aos demais pagamentos não relacionados ao presente termo. </br></br>
10.	Fica pactuado entre as partes o pagamento da taxa de corretagem em razão do serviço de intermediação para contratação do consórcio, bem como assessoria prestada durante este período.</br></br>
11.	Ainda que haja o cancelamento do contrato de intermediação, ou do consórcio, não haverá restituição dos valores pagos relativos à corretagem nos termos do Art. 725 do Código Civil.  </br></br>
12.	Em caso de cancelamento da cota ou de desistência junto a administradora, o consorciado será ressarcido após o encerramento do grupo, e o valor pago poderá sofrer descontos administrativos, previstos junto a administradora nos termos da lei nº 11.795/2008. </br></br>
13.	No consórcio não é possível a promessa de contemplação imediata, uma vez que, nos termos do art. 22, §1º, da Lei nº 11.795/2008, o consorciado somente será contemplado por meio de sorteio ou lance.</br></br>
14.	 Autorizo a intermediadora a repassar os dados e documentos apresentados para administradora, estando ciente que tal transação é necessária para formalização da contratação do consórcio perante a administradora</br></br>
</font>
<center>
<br>
_____________________________________
</br>
CLIENTE
</br><br>
_____________________________________
</br>
INTERMEDIADOR

<br>
</center>
</form>
</div>
</fieldset>
<center><font color="red">NÃO HÁ PROMESSA DE CONTEMPLAÇÃO POR DATA OU VALOR DE LANCE</font></center>
<br><br><br><br><br><br><br><br>
                                    
<div class="row container">
<fieldset class="formulario">
<h3 class="light center"><b>DETALHAMENTO FINANCEIRO</b></h3></br></br></br></br>
<font size="5">
<p>Eu, <b><?php echo $nome?></b>, inscrito no CPF/MF sob o nº <b><?php echo $cpf?></b>, RG nº <b><?php echo $rg?></b>, residente e domiciliado <b><?php echo $endereco?></b>, <b><?php echo $numero?></b>, na cidade de <b><?php echo $cidade?></b>, declaro, para os devidos fins, que, AUTORIZO A intermediação da Empresa CORRETORA, E PARA PRESTAÇÃO DE SERVIÇOS E INTERMEDIAÇÃO NA CONTRATAÇÃO DO CONSÓRCIO realizei o pagamento no valor total de R$ <?php echo $adesao ;?>, sendo esse valor discriminado da seguinte forma.</p>
<br><br>
<center>
<fieldset style="width: 100%;">
<table border="1" class="striped">
<tr>
<td><b>VALOR DA CORRETAGEM</b></td>
<td><b>VALOR PAGO A ADMINISTRADORA</b></td>
</tr>
<tr>
<td><b>R$&nbsp;&nbsp;<?php echo $txcorretagem?></b></td>
<td><b>R$&nbsp;&nbsp;<?php echo $txconsultoria?></b></td>
</tr>
</table>
</fieldset>


</center>
<br><br>
<p>DECLARO PARA OS DEVIDOS FINS QUE ESTOU CIENTE DA DESTINAÇÃO DOS VALORES PAGOS, ASSIM COMO QUE LI O RESPECTIVO TERMO DE INTERMEDIAÇÃO PARA ADESÃO AO CONSÓRCIO. ESTOU CIENTE QUE CASO SEJA REALIZADO O CANCELAMENTO APÓS A FORMALIZAÇÃO DO CONTRATO DE ADMINSTRADORA NÃO SERÃO RESSARCIDOS OS VALORES A TAXA DE CORRETAGEM UMA VEZ QUE HOUVE A PRESTAÇÃO DOS SERVIÇOS CONFORME FIRMADO PERANTE O TERMO DE INTERMEDIAÇÃO.</p></br>
<br>
<center>
</br><br>
DATA ______,________,__________
</br><br><br>
_____________________________________________
</br><br>
<b>CLIENTE</b>
<br><br><br></br>
a) Contemplação por sorteio.</br>
b) Contemplação por lance, livre ou fixo.</br>
c) Todos os participantes do grupo de consórcio, devidamente adimplentes com as suas obrigações, serão contemplados até o encerramento do grupo, por qualquer uma das possibilidades mencionadas. A seleção de contemplados é mensal.
</br>
</fieldset>
</div>
<div id="d">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
<script type="text/javascript">
window.onload = function() { window.print(); }
</script>
</body>
</html>