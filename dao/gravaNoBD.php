<?php

$con=mysqli_connect("localhost","root","","organograma");
// Check connection
if (mysqli_connect_errno())
{
	echo "Falha ao conectar ao banco de dados: " . mysqli_connect_error();
}


$SQL = "INSERT INTO tb_funcionarios (chave,nome) VALUES (?,?)";
$stmt = $con->prepare($SQL);

$stmt->bind_param("ss", $val1, $val2);

$val1 = $_GET['chave'];
$val2 = $_GET['nome'];


/* Execute the statement */
$stmt->execute();

mysqli_close($con);

?>