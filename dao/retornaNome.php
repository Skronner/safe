<?php

$con=mysqli_connect("localhost","root","umbrella360","organograma");
// Check connection
if (mysqli_connect_errno())
{
	echo "Falha ao conectar ao banco de dados: " . mysqli_connect_error();
}

$sql="SELECT nome FROM tb_funcionarios WHERE chave like '".$_GET['chave']."'";
$result=mysqli_query($con,$sql);

// Fetch all
$todos = mysqli_fetch_all($result,MYSQLI_ASSOC);


//echo $todos->nome;

header('Content-type:application/json;charset=utf-8');
$teste = json_encode($todos);
echo $teste;


// Free result set
mysqli_free_result($result);

mysqli_close($con);

?>