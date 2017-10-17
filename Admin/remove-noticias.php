<?php 
			
			
		$conexao = mysqli_connect("localhost","root","","ende");
		function removeNoticias($conexao, $id){


			$query = "delete from noticias where id = {$id}";
			return mysqli_query($conexao, $query);

		}


$id = $_GET['id'];
removeNoticias($conexao, $id);
header("location: noticias.php?removido=true");
die();
?>
