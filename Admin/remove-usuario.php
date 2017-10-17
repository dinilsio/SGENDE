<?php 
			
			
		$conexao = mysqli_connect("localhost","root","","ende");
		function removeUsuario($conexao, $id){


			$query = "delete from usuarios where id = {$id}";
			return mysqli_query($conexao, $query);

		}


$id = $_GET['id'];
removeUsuario($conexao, $id);
header("location: usuarios.php?removido=true");
die();
?>
