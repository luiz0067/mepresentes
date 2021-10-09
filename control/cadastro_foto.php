<?php
	include('../adm/conecta.php');
?>

<?php
echo eeeeee;
	function redimensiona($origem,$destino,$maxlargura,$maxaltura,$qualidade){
	list($largura, $altura) = getimagesize($origem);
	if($altura>$largura){
		$diferenca=$altura/$maxaltura;
		$maxlargura=$largura/$diferenca;
	}
	else{
		$diferenca=$largura/$maxlargura;
		$maxaltura=$altura/$diferenca;
	}
	$image_p = ImageCreateTrueColor($maxlargura,$maxaltura)	or die("Cannot Initialize new GD image stream");	
	$origem = imagecreatefromjpeg($origem);
	imagecopyresampled($image_p, $origem, 0, 0, 0, 0,  $maxlargura, $maxaltura, $largura, $altura);
	imagejpeg($image_p, $destino, $qualidade);
	imagedestroy($image_p);
	imagedestroy($origem);
}
	if ($_POST) {
		$folder = "..//uploads//fotos//";	
		//$folder = "..\\upload\\imagens\\projetos\\clientes_projetos\\";
		if (
			(
				($_FILES["imagem"]["type"] == "image/gif")
				|| 
				($_FILES["imagem"]["type"] == "image/jpeg")
				|| 
				($_FILES["imagem"]["type"] == "image/pjpeg")
				|| 
				($_FILES["imagem"]["type"] == "image/png")
				|| 
				($_FILES["imagem"]["type"] == "image/bmp")
			)
		)
		{
			if (($_FILES["imagem"]["size"] < 5*1024*1024)){
				if ($_FILES["imagem"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["imagem"]["error"] . "<br />";
				}
				else
				{
					echo "Tipo: " . $_FILES["imagem"]["type"] . "<br />";
					echo "Tamanho: " . ($_FILES["imagem"]["size"] / 6000) . " Kb<br />";
					$imagem=$_FILES["imagem"]["name"];
					$ext      = substr($imagem, -4);
					$imagem      = md5($imagem).date("dmYHis").$ext;
					$extension=strtolower(end(explode(".", $imagem)));
					if (file_exists($folder . "p_".$imagem))
					{
						$imagem=time().".".$extension;
											
					}
					move_uploaded_file(
						$_FILES["imagem"]["tmp_name"],
						$folder . $imagem
					);				
					redimensiona($folder . $imagem,$folder."h_".$imagem,800,600,75);
					redimensiona($folder . $imagem,$folder."g_".$imagem,580,300,75);
					
					unlink($folder . $imagem);
					//delete_file($folder . $imagem);	
					echo "<a href=\"..uploads/fotos/g_".$imagem."\" target=\"blank\">".$imagem."</a><br>";
				}
			}
			else
			{
				echo "Tamanho muito grande<br>";
			}
		}
		else
		{
			$imagem=$imagem_antiga;
		}
			echo $sql;
		if ($_POST['acao']=='Inserir'){
		
			$sql = "insert into cadastro_foto (imagem,titulo,id_categoria) values ('".$imagem."','".$_POST["titulo"]."','".$_POST["id_categoria"]."');";
			$reultado = mysql_query($sql, $link);
			echo $sql;
			if($reultado){
			$erro = "Dados salvos com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");	
			} 
			else
			{
			$erro = "Não foi salvar os dados";
			header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");
			}
		}
		if ($_POST['acao']=='Alterar'){
		$sql = "update imagem set cadastro_foto='".$imagem."',titulo='".$_POST["titulo"]."' where (id=".$_POST["id"].");";
		echo $sql;
		$reultado = mysql_query($sql, $link);
		if($sql){
				$erro = "Dados salvos com sucesso!";
			header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");
	
			  } else{
				  $erro = "Não foi salvar os dados";
				 header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");
			  }
		}
		
	}	
	if ($_GET['acao']=='deletar'){
		$id = $_GET['id'];
		$sql = "Delete FROM cadastro_foto where id=$id";
		mysql_query($sql, $link);
		echo $sql;
		if($sql){
		$erro = "Dados alterados com sucesso!";
		header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");
		} 
		else
		{
		$erro = "Não foi possível alterar os dados";
		header("Location: ../adm/principal.php?pg=cadastro_cadastro_foto");
		}
	}
?> 
<?php
	include('../adm/rodape.php');
?>












