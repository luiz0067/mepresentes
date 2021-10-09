<?php
	$row=null;
	$result=null;
	$result=mysql_query($sql, $link);
	if (($_GET["id"]!=null)){
		$sql	= "SELECT * FROM tipo_produto where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
		if ($result!=null)
		$data_evento=$row["data_evento"];
	}
		$tipo_produto=0;
		if (isset($_GET["tipo_produto"])){
		$tipo_produto=$_GET["tipo_produto"];	
	}
		else if (isset($_POST["tipo_produto"])){
		$tipo_produto=$_POST["tipo_produto"];
	}	 
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - CIDADE
		</div>
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=cadastro_tipo_produto">
			<div class="botao_anterior">
				LISTA CIDADE
			</div>
		</a>
	</div>
		<div id="input_cadastro">
			<form method="post" action="../control/tipo_produto.php">
				<table >
				<tr>
					<td><input type="hidden" name="id" value="<?php if ($result!=null) echo $row["id"]?>"></td>
				</tr>
				<tr>
					<td>Categoria dos clientes:<input type="text" name="nome" size="70" value="<?php if ($result!=null) echo $row["nome"]?>"></td>
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
</div>

