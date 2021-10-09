<?php
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT * FROM Albuns where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
	
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$Albuns=0;
		if (isset($_GET["Albuns"])){
		$Albuns=$_GET["Albuns"];	
	}
		else if (isset($_POST["Albuns"])){
		$Albuns=$_POST["Albuns"];
	}	 
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - Albuns
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_albuns">
			<div class="botao_anterior">
				LISTA Albuns
			</div>
		</a>
	</div>
		<form method="post" action="../control/albuns.php" enctype="multipart/form-data" name="form1" id="form1">
			<div id="inputs_formularios">
				<div class="tudo_input">
					<div class="left_input">
						<input name="id" style="width:530px;" type="hidden" value="<?php echo $row["id"]?>">
					</div>
				
					<div class="clear"></div>
				</div>	
				<div class="tudo_input">
					<div class="input_padrao">
					Titulo:
					</div>
					<input name="titulo" style="width:530px;" type="text" value="<?php echo $row["titulo"]?>">
						<div class="clear"></div>
				</div>
				<div class="tudo_input">
					<div class="input_padrao">
					Data:
					</div>
					<input name="data_emissao" style="width:530px;" type="text" value="<?php echo $row["data_emissao"]?>">
						<div class="clear"></div>
				</div>
				<div class="tudo_input">
					<div class="input_padrao">
					OBS:
					</div>
					<input name="obs" style="width:530px;" type="text" value="<?php echo $row["obs"]?>">
						<div class="clear"></div>
				</div>
				<div class="tudo_input">
					<div class="input_padrao">
						Imagem:
					</div>
				
						<input name="imagem" style="width:530px;" type="file" value="<?php echo $row["imagem"]?>">

					<div class="clear"></div>
				</div>
				<div style="margin-top:20px;">	
					<input type="submit" name="acao" value="Inserir">						
					<input type="submit" name="acao" value="Alterar">									
				</div>
			</div>
		</form>
	</div>
</div>