<?php	
	include('cabecalho.php');
	error_reporting(0);
	ini_set(�display_errors�, 0 );
			
	$row=null;
	$result=null;
	if (($_GET["id"]!=null)){
		$sql	="SELECT id,titulo,id_categoria,imagem,id_sub_categoria,obs,valor,marca,modelo,combustivel,cor,opcionais FROM imagem where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
	}
?>
<div id="individual_cadastro">
	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=editar_imagem">
			<div class="botao_anterior">
				CADASTRAR NOVO
			</div>
		</a>

	</div>

	<div id="relatorio_input">
		<table cellpadding= "4" cellspacing = "0" border= "1" width="900 ">
			<tr bgcolor="#CCCCCC" height="40" width="200px" >
				<td>Ação</td>
				<td>Editar</td>
				<td>Categoria</td>
				<td>Sub categoria</td>
				<td>Titulo</td>
				<td>Valor</td>
				<td>Imagem</td>
				<td>obs</td>
			
				
	
				
				
			</tr> 
			<?php
				if ($result!=null){
					mysql_free_result($result);
				}
				$sql    = 'SELECT * FROM imagem order by id desc;';
				$result = mysql_query($sql, $link);
				if (!$result) {
					echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
					echo 'Erro MySQL: ' . mysql_error();
					exit;
				}
				while ($row = mysql_fetch_assoc($result)){
			?>
				<tr>
					<td>
						<a href="principal.php?pg=editar_imagem&id=<?php echo $row['id'];?>" VALUE="EDITAR" NAME="EDITAR">
							<div style="color:#000000; float:left;" VALUE="EDITAR" NAME="EDITAR">
								<img src="./imagens/editar.gif" width="21" height="21" VALUE="EDITAR" NAME="EDITAR" border="0" />
							</div>
						<a/>
						</td>
						<td>
						<a href="../control/imagem.php?acao=deletar&id=<?php echo $row['id'];?>" >
							<div style="color:#000000; float:left; margin-left: 10px;">
								<img src="./imagens/excluir.png" width="21" height="21" border="0" />
							</div>
						</a>
					</td>
				       	<td><?php echo $row['id_categoria'];?>&nbsp </td>               
						<td><?php echo $row['id_sub_categoria'];?>&nbsp </td> 
						  
						<td><?php echo $row['titulo'];?>&nbsp </td>       
						<td><?php echo $row['valor'];?>&nbsp </td>       
					
						
						<td>
						
						<img  width="60" height="60" src="../uploads/fotos/g_<?php echo $row['imagem'];?>">
						</td> 						
						<td style="maxheight:14;"><?php echo $row['obs'];?>&nbsp </td> 
						
					
				</tr>
			<?php
				}
				mysql_free_result($result);
			?>
		</table>
		</div>
	
	</div>
</div>
<?php
	include('rodape.php');
?>

				
			












