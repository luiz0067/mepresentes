<?php
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT * FROM foto where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$foto=0;
		if (isset($_GET["foto"])){
		$foto=$_GET["foto"];	
	}
		else if (isset($_POST["id_categoria"])){
		$foto=$_POST["id_categoria"];
	}	 
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - foto
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_foto">
			<div class="botao_anterior">
				LISTA foto
			</div>
		</a>
	</div>
		<form method="post" action="../control/foto.php" enctype="multipart/form-data" name="form1" id="form1">
			<div id="inputs_formularios">
				<div class="tudo_input">
					<div class="left_input">
						<input name="id" style="width:530px;" type="hidden" value="<?php echo $row["id"]?>">
					</div>
					<div class="clear"></div>
				</div>
			
				<tr>
					<div class="input_padrao">
						Bebidas
					</div>
					<select name="id_categoria" <?php if ($result!=null) echo $row["id_categoria"]?>>
						<?php
						$row_sub_categoria=null;
						$result_sub_categoria=null;		
						$sql_categoria_noticias    = 'SELECT * FROM imagem order by titulo asc;';
						$result_sub_categoria = mysql_query($sql_categoria_noticias, $link);
						if (!$result_sub_categoria) {
							echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
							echo 'Erro MySQL: ' . mysql_error();
							exit;
						}
						while ($row_sub_categoria = mysql_fetch_assoc($result_sub_categoria)){
							$selected="";
							if ($result!=null){
								if($row["id_categoria "]==$row_sub_categoria['id'])
									$selected="selected";
							}
						?>
							<option value="<?php echo $row_sub_categoria['id'];?>" <?php echo $selected?>>              
								<?php echo $row_sub_categoria['titulo'];?>
							</option>
						<?php
							}
							mysql_free_result($result_sub_categoria);
						?>
					</select>
					</td>
					
				</tr>
				
					
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