<center>
<?php
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

	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT id,titulo,imagem FROM slide where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$slide=0;
		if (isset($_GET["slide"])){
		$slide=$_GET["slide"];	
	}
		else if (isset($_POST["slide"])){
		$slide=$_POST["slide"];
	}	 

?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - CLIENTES
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_slide">
			<div class="botao_anterior">
				LISTA
			</div>
		</a>
	</div>
	</div>
		<div id="input_cadastro">
			<form method="post" action="../control/slide.php" enctype="multipart/form-data" name="form1" id="form1">
				<div id="inputs_formularios">
					<div class="tudo_input">
						<div class="left_input">
							<input name="id" style="width:530px;" type="hidden" value="<?php echo $row["id"]?>">
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="tudo_input">
						<div class="input_padrao">
							Titulo
						</div>
						<div class="left_input">
							<input name="titulo" style="width:530px;" type="text" value="<?php echo $row["titulo"]?>">
						</div>
						<div class="clear"></div>
					</div>
					<div class="tudo_input">
						<div class="input_padrao">
							Imagem:
						</div>
						<div class="left_input">
							<input name="imagem" type="file" value="<?php echo $row["imagem"]?>">
						</div>
						<div class="clear"></div>
					</div>
					<div style="margin-top:20px;">	
						<input type="submit" name="acao" value="Inserir"/>		
						<input type="submit" name="acao" value="Alterar">				
					</div>
				</div>
			</form>
		<div class="divisor">
			<?php
				if(isset($erro)){
					print '<div style="width:80%; font-size:20px; color:#009900; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
					print '<div style="width:80%; height:32px; width:32px;  text-align:center; margin: 0 auto; background-image:url(imagens/loading.gif) ; "></div>';
					echo "<meta HTTP-EQUIV='refresh' CONTENT='2'>";
				}
			?>
		</div>
	</div>
</div>

