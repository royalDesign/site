<?php 
echo "<pre>";
print_r($user);

/*
function conecta(){ 
   //CONEXAO OFLLINE

   $host = "localhost";
   $usuario = "root";
   $senha = "";
   $bandoDados = "sgc";

   //CONEXAO 000WEBHOST
/*
   $host = "localhost";
   $usuario = "id2664418_cso";
   $senha = "c9p5au8naa2017";
   $bandoDados = "id2664418_cso";
*/
   //MUTANT HOST
   /*
   $host = "fdb7.mutanthost.com";
   $usuario = "2508089_sigpress";
   $senha = "c9p5au8naa2017";
   $bandoDados = "2508089_sigpress";

   try{
   $pdo = new PDO("mysql:host=$host;dbname=$bandoDados","$usuario","$senha");  
   
   }catch (PDOException $erro){
       echo"Erro ao conectar com o banco de dados".$erro->getMessage();
   }
   return $pdo;
}//end Conecta

function str_tab_txt($limit,$str){
return $str.str_repeat(' ',$limit - strlen($str));
}
/*
//=================================|EXPORTAÇÃO TXT|==========================================

//Popula 
$query = "SELECT * FROM users ORDER BY name";
$search = conecta()->prepare($query);
$search->execute();
$rows = $search->fetchAll(PDO::FETCH_ASSOC);


echo "|Nome|============================|Cargo|=====================|Telefone|"."\r\n"."\r\n";
foreach ($rows as $row) {

  echo str_tab_txt(35,$row['name']).str_tab_txt(35,$row['office'])."\r\n";

}

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment');
header('Content-Disposition: attachment; filename="arquivo.txt"');
//=================================|EXPORTAÇÃO TXT fim|==========================================


//=================================|EXPORTAÇÃO EXCEL fim|==========================================
$query = "SELECT * FROM users ORDER BY name";
$search = conecta()->prepare($query);
$search->execute();
$rows = $search->fetchAll(PDO::FETCH_ASSOC);

// Definimos o nome do arquivo que será exportado
$arquivo = 'planilha.xls';
// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td colspan="3">Planilha teste</tr>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td><b>Nome</b></td>';
$html .= '<td><b>Cargo</b></td>';
$html .= '</tr>';

foreach ($rows as $row) {

$html .= '<tr>';
$html .= '<td>'.utf8_decode($row['name']).'</td>';
$html .= '<td>'.utf8_decode($row['office']).'</td>';
$html .= '</tr>';

}

$html .= '</table>';
// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
// Envia o conteúdo do arquivo
echo $html;
exit;
*/


?>

      
<!-- Main content -->
<section class="content">
<?php
/*
$sql = "show tables";
$resp = conecta()->prepare($sql);
$resp->execute();

$retorno = $resp->fetchAll(PDO::FETCH_ASSOC);



foreach ($retorno as $ret): 

$sql = "show create table ".$ret['Tables_in_sgc'];
$resp = conecta()->prepare($sql);
$resp->execute();
$create = $resp->fetch(PDO::FETCH_ASSOC);

//$sql = str_replace('apresentacao', 'demonstracao', $create['Create Table']);
//$resp = conecta()->prepare($sql);
//$resp->execute();
*/

?>


<p><?php //echo str_replace('apresentacao', 'demonstracao', $create['Create Table']) ;?></p>

<?php //endforeach; ?>

</section>
