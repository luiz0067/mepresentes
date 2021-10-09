<?php
	include('../adm/conecta.php');
?>
<?php
	if ($_POST) {	
		if ($_POST['acao']=='Excluir'){ 
		if($sql){
			$sql = 'delete FROM sub_categoria where id='.$_POST["id"];
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
				$erro = "Dados excluidos com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
				  $erro = "Não foi possivel excluir os dados";
			  }
			mysql_query($sql, $link);
		}
		else if ($_POST ['acao']=='Alterar'){
			$sql = "update sub_categoria set titulo='".$_POST["titulo"]."' where (id=".$_POST["id"].");";
			if($sql){
			//echo $sql;
				header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
				$erro = "Dados alterados com sucesso!";
			  } else{
			  	header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
			  	$erro = "Não foi alterar os dados";
			  }
			mysql_query($sql, $link);
		}
		else if( $_POST['acao']=='Inserir'){
			$sql = "insert into sub_categoria (titulo,id_categoria ) values ('".$_POST["titulo"]."','".$_POST["id_categoria"]."');";
			if($sql){
			echo $sql;
				$erro = "Dados salvos com sucesso!";
				header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
			  } else{
			  	$erro = "Não foi salvar os dados";
			  	header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
			  }
			mysql_query($sql, $link);
		}
	}
	if ($_GET['acao']=='deletar'){
		$id = $_GET['id'];
		$sql = "Delete FROM sub_categoria where id=$id";
		mysql_query($sql, $link);
		echo $sql;
		if($sql){
		$erro = "Dados alterados com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
		} 
		else
		{
		$erro = "Não foi possível alterar os dados";
			header("Location: ../adm/principal.php?pg=cadastro_sub_categoria");
		}
	}
?> 
<?php
	include('../adm/rodape.php');
?>
