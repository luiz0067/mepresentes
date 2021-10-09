<?php
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT * FROM imagem where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$imagem=0;
		if (isset($_GET["imagem"])){
		$imagem=$_GET["imagem"];	
	}
		else if (isset($_POST["id_categoria"])){
		$imagem=$_POST["id_categoria"];
	}	 
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - Conteudo
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_imagem">
			<div class="botao_anterior">
				LISTA Conteudo
			</div>
		</a>
	</div>
		<form method="post" action="../control/imagem.php" enctype="multipart/form-data" name="form1" id="form1">
			<div id="inputs_formularios">
				<div class="tudo_input">
					<div class="left_input">
						<input name="id" style="width:530px;" type="hidden" value="<?php echo $row["id"]?>">
					</div>
					<div class="clear"></div>
				</div>
			<table >
					<tr>
						<td><input type="hidden" name="id" value="<?php if ($result!=null) echo $row["id"]?>"></td>
					</tr>
					<tr>
					<td>Titulo:<input type="text" name="titulo" size="70" value="<?php if ($result!=null) echo $row["titulo"]?>"></td>
					</tr>
					<tr>
					<td>Valor:<input type="text" name="valor" size="70" value="<?php if ($result!=null) echo $row["valor"]?>"></td>
					</tr>
					<tr>
					<td>	
					Categoria:<select name="id_categoria"  <?php echo $row["id_categoria"]?>>
						<option value="Escolha uma categoria">
							Escolha uma categoria
						</option>
							<?php
						$row_sub_categoria=null;
						$result_sub_categoria=null;		
						$sql_categoria_noticias    = 'SELECT id,titulo FROM categoria order by titulo asc;';
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
					</select></td>
					</tr>
					<tr>
					
					<td> Sub Categoria:
				<select name="id_sub_categoria" <?php if ($result!=null) echo $row["id_sub_categoria"]?>>
						<?php
						$row_sub_sub_categoria=null;
						$result_sub_sub_categoria=null;		
											$sql_categoria_noticias    = 'SELECT sub_categoria.id,  sub_categoria.titulo, sub_categoria.id_categoria AS categoria, categoria.titulo AS categoria_nome
					FROM sub_categoria 
					LEFT JOIN categoria ON ( sub_categoria.id_categoria = sub_categoria.id )';
						$result_sub_sub_categoria = mysql_query($sql_categoria_noticias, $link);
						if (!$result_sub_sub_categoria) {
							echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
							echo 'Erro MySQL: ' . mysql_error();
							exit;
						}
						while ($row_sub_sub_categoria = mysql_fetch_assoc($result_sub_sub_categoria)){
							$selected="";
							if ($result!=null){
								if($row["id_sub_categoria "]==$row_sub_sub_categoria['id'])
									$selected="selected";
							}
						?>
							<option value="<?php echo $row_sub_sub_categoria['id'];?>" <?php echo $selected?>>              
								<?php echo $row_sub_sub_categoria['titulo'];?> - <?php echo $row_sub_sub_categoria['categoria_nome'];?>
							</option>
						<?php
							}
							mysql_free_result($result_sub_sub_categoria);
							
						?>
					</select>
					<div class="tudo_input">
					<div class="input_padrao">
					Beneficios:
					</div>
					<div class="left_input" style="width:320px;">
							<label for="editor1" ></label>
								<textarea id="editor1" name="obs" >
									<?php if ($result!=null) echo $row["obs"]?>
								</textarea>
							<script type="text/javascript">
								window.onload = function()  {
									CKEDITOR.replace( 'editor1' );
									};				 
										window.onload = function() {
										CKEDITOR.replace( 'editor1', {
										toolbar:
										[
											{ name: 'basicstyles', items : [ 'Bold','Italic' ] },
											{ name: 'paragraph', items : [ 'NumberedList','BulletedList' ] },
											{ name: 'tools', items : [ 'Maximize','-','About' ] }
										]}        
									);
								};
							</script>
						</div>
						<div class="clear"></div>
				</div>
						
					</tr>
					<div class="tudo_input">
					<div class="input_padrao">
						Imagem:
					</div>
				
						<input name="imagem" style="width:530px;" type="file" value="<?php echo $row["imagem"]?>">

					<div class="clear"></div>
				</div>
				
				</table>
				<div style="margin-left:145px; margin-top:20px;">			
						<input type="submit" name="acao" value="Inserir">
						<input type="submit" name="acao" value="Alterar">
			
				</div>	
				<div class="divisor">
					<?php
						if(isset($erro)){
							print '<div style="width:80%; font-size:20px; color:#009900; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
							print '<div style="width:80%; height:32px; width:32px;  text-align:center; margin: 0 auto; background-image:url(imagens/loading.gif) ; "></div>';
							echo "<meta HTTP-EQUIV='refresh' CONTENT='2'>";
						}
					?>
				</div>
			</form>
		</div>
	
	</div>
	
