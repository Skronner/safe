<?php 
	$texto = "Texto de teste";
?>
<!DOCTYPE html>
<html>
<head>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


	<script type="text/javascript">
	function buscarFunci() {
		document.getElementById("Teste").innerHTML = "Teste2";
			
		  var xhttp = new XMLHttpRequest();
		  document.getElementById("Teste").innerHTML = "Teste3";
			xhttp.onreadystatechange = function() {
				document.getElementById("Teste").innerHTML = "Teste4";
		    if (this.readyState == 4 && this.status == 200) {
		    	document.getElementById("Teste").innerHTML = "Teste5";
				var arrFuncionario = JSON.parse(this.responseText);
				document.getElementById("Teste").innerHTML = "Teste6";
				alert(arrFuncionario[0].nome);
				document.getElementById("Teste").innerHTML = "Test7";
		    	document.getElementById("nomeFunci").innerHTML = arrFuncionario[0].nome;
		      //document.getElementById("nomeFunci").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET", "retornaNome.php?chave="+document.getElementById("txtChave").value, true);
		  xhttp.send();		  
		}
	</script>
</head>
<body>
<div id="todos">
	<div>
		<label>Chave</label>
		<input type="text" id="txtChave">
		<button type="button" onclick="buscarFunci()" class="waves-effect waves-light btn">Buscar Funci</button>
		<div id="nomeFunci">Nome</div>
		<div id="Teste">Teste <?php echo $texto ?></div>
	</div>	
</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


</body>
</html>