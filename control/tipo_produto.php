<?php
	include('../adm/conecta.php');
?>
<?php
	if ($_POST) {	
		if ($_POST['acao']=='Excluir'){ 
		if($sql){
			$sql = 'delete FROM tipo_produto where id='.$_POST["id"];
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
				$erro = "Dados excluidos com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
				  $erro = "Não foi possivel excluir os dados";
			  }
			mysql_query($sql, $link);
		}
		else if ($_POST ['acao']=='Alterar'){
			$sql = "update tipo_produto set nome='".$_POST["nome"]."' where (id=".$_POST["id"].");";
			if($sql){
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
				$erro = "Dados alterados com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
			  	$erro = "Não foi alterar os dados";
			  }
			mysql_query($sql, $link);
		}
		else if( $_POST['acao']=='Inserir'){
			$sql = "insert into tipo_produto (nome) values ('".$_POST["nome"]."');";
			if($sql){
			//echo $sql;
				$erro = "Dados salvos com sucesso!";
				header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
			  } else{
		  	
			  	$erro = "Não foi salvar os dados";
			  	header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
			  }
			mysql_query($sql, $link);
		}
	}
	if ($_GET['acao']=='deletar'){
		$id = $_GET['id'];
		$sql = "Delete FROM tipo_produto where id=$id";
		mysql_query($sql, $link);
		echo $sql;
		if($sql){
		$erro = "Dados alterados com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
		} 
		else
		{
		$erro = "Não foi possível alterar os dados";
			header("Location: ../adm/principal.php?pg=cadastro_tipo_produto");
		}
	}
?> 
<?php
	include('../adm/rodape.php');
?>












