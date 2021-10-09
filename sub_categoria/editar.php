<?php	
	include('cabecalho.php');
	error_reporting(0);
	ini_set(�display_errors�, 0 );
			
	$row=null;
	$result=null;
	if (($_GET["id"]!=null)){
		$sql	= "SELECT id,titulo,id_categoria FROM sub_categoria  where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
	}
?>
<div id="individual_cadastro">
	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_sub_categoria">
			<div class="botao_anterior">
				LISTA 
			</div>
		</a>
	</div>
	</div>

		<div id="input_cadastro">
			<form method="post" action="../control/sub_categoria.php">
				<table >
					<tr>
						<td><input type="hidden" name="id" value="<?php if ($result!=null) echo $row["id"]?>"></td>
					</tr>
					<tr>
					<td>Titulo:<input type="text" name="titulo" size="70" value="<?php if ($result!=null) echo $row["titulo"]?>"></td>
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
	
<?php
	include('rodape.php');
?>
