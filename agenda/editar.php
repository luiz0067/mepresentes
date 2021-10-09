<?php
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$agenda=0;
		if (isset($_GET["agenda"])){
		$agenda=$_GET["agenda"];	
	}
		else if (isset($_POST["titulo"])){
		$agenda=$_POST["titulo"];
	}	 
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - agenda
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_agenda">
			<div class="botao_anterior">
				LISTA agenda
			</div>
		</a>
	</div>
		<form method="post" action="../control/agenda.php" enctype="multipart/form-data" name="form1" id="form1">
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
						Valor:
					</div>
						<input name="facebook" style="width:530px;" type="text" value="<?php echo $row["facebook"]?>">

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