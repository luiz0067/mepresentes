<?php
	include('../adm/conecta.php');
?>
<?php
	if ($_POST) {	
		if ($_POST['acao']=='Excluir'){ 
		if($sql){
			$sql = 'delete FROM modelo where id='.$_POST["id"];
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_modelo");
				$erro = "Dados excluidos com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_modelo");
				  $erro = "Não foi possivel excluir os dados";
			  }
			mysql_query($sql, $link);
		}
		else if ($_POST ['acao']=='Alterar'){
			$sql = "update modelo set nome='".$_POST["nome"]."', id_marca='".$_POST["id_marca"]."' where (id=".$_POST["id"].");";
			if($sql){
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_modelo");
				$erro = "Dados alterados com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_modelo");
			  	$erro = "Não foi alterar os dados";
			  }
			mysql_query($sql, $link);
		}
		else if( $_POST['acao']=='Inserir'){
			$sql = "insert into modelo (nome,id_marca) values ('".$_POST["nome"]."','".$_POST["id_marca"]."');";
			if($sql){
			echo $sql;
				$erro = "Dados salvos com sucesso!";
					header("Location: ../adm/principal.php?pg=cadastro_modelo");
		
			  } else{
		  	
			  	$erro = "Não foi salvar os dados";
					header("Location: ../adm/principal.php?pg=cadastro_modelo");
	
			  }
			mysql_query($sql, $link);
		}
	}
	if ($_GET['acao']=='deletar'){
		$id = $_GET['id'];
		$sql = "Delete FROM modelo where id=$id";
		mysql_query($sql, $link);
		echo $sql;
		if($sql){
		$erro = "Dados alterados com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_endereco");
		} 
		else
		{
		$erro = "Não foi possível alterar os dados";
			header("Location: ../adm/principal.php?pg=cadastro_endereco");
		}
	}
?> 
<?php
	include('../adm/rodape.php');
?>