<?php 

	define('__ROOT__', dirname(dirname(__FILE__)));
	require_once(__ROOT__."\\safe\\resources\\config.php");
		
	echo count($config['db']['organograma']['username']);
	echo $config['db']['organograma']['username'];
	
	$texto = "Texto de teste";

	require_once(TEMPLATES_PATH."/header.php");
?>
<body>
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
		  xhttp.open("GET", "dao/retornaNome.php?chave="+document.getElementById("txtChave").value, true);
		  xhttp.send();		  
		}
	</script>
<div id = "container" class = "container">	

<i class="material-icons">face</i>
	<div id = "titulo" class = "col s4"><h2>SAFE</h2></div>
	<div id = "divisor" class = "divider"></div>	
	<div id="identificador">
		<div><label>Chave</label><input class = "col s4" type="text" id="txtChave"></div>
		 
		<div class = "col s8" id="nomeFunci">Nome</div>
		<button type="button" onclick="buscarFunci()" class="waves-effect waves-light btn">Buscar Funci</button>
		
		<div id="Teste">Teste <?php echo $texto ?></div>
	</div>
	
</div>	



</body>
</html>