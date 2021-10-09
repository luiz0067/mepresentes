<?php
	include('../adm/conecta.php');
?>
<?php
	if ($_POST) {	
		if ($_POST ['acao']=='Alterar'){
			if($sql){
			$sql = "update categoria_cliente set nome='".$_POST["nome"]."' where (id=".$_POST["id"].");";
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
				$erro = "Dados alterados com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
			  	$erro = "Não foi alterar os dados";
			  }
			mysql_query($sql, $link);
		}
		if ( $_POST['acao']=='Inserir'){
			$sql = "insert into categoria_cliente (nome) values ('".$_POST["nome"]."');";
			if($sql){
			//echo $sql;
				$erro = "Dados salvos com sucesso!";
				header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
			  } else{
		  	
			  	$erro = "Não foi salvar os dados";
			  	header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
			  }
			mysql_query($sql, $link);
		}
	}
	if ($_GET['acao']=='deletar'){
		$id = $_GET['id'];
		$sql = "delete FROM categoria_cliente where id=$id";
		mysql_query($sql, $link);
		echo $sql;
		if($sql){
		$erro = "Dados alterados com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
		} 
		else
		{
		$erro = "Não foi possível alterar os dados";
			header("Location: ../adm/principal.php?pg=cadastro_categoria_cliente");
		}
	}
?> 
<?php
	include('../adm/rodape.php');
?>