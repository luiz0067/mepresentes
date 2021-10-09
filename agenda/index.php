<?php	
	include('cabecalho.php');
	error_reporting(0);
	ini_set(�display_errors�, 0 );
			
	$row=null;
	$result=null;
	if (($_GET["id"]!=null)){
		$sql	="SELECT id,imagem,video,facebook,curtir,data_evento,titulo,conteudo FROM agenda where (id=0".$_GET["id"].")";
		$result=mysql_query($sql, $link);
		$row = mysql_fetch_assoc($result);
	}
?>
<div id="individual_cadastro">
	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=editar_agenda">
			<div class="botao_anterior">
				CADASTRAR NOVO
			</div>
		</a>

	</div>

	<div id="relatorio_input">
		<table cellpadding= "4" cellspacing = "0" border= "1" width="900 ">
			<tr bgcolor="#CCCCCC" height="40" >
				<td>ID</td>
				<td>Titulo</td>
				<td>Valor</td>
				<td>Imagem</td>
				
				
				
			</tr> 
			<?php
				if ($result!=null){
					mysql_free_result($result);
				}
				$sql    = 'SELECT * FROM agenda order by id desc;';
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
						<a href="principal.php?pg=cadastro_agenda&id=<?php echo $row['id'];?>" VALUE="EDITAR" NAME="EDITAR">
							<div style="color:#000000; float:left;" VALUE="EDITAR" NAME="EDITAR">
								<img src="./imagens/editar.gif" width="21" height="21" VALUE="EDITAR" NAME="EDITAR" border="0" />
							</div>
						<a/>
						<a href="../control/agenda.php?acao=deletar&id=<?php echo $row['id'];?>" >
							<div style="color:#000000; float:left; margin-left: 10px;">
								<img src="./imagens/excluir.png" width="21" height="21" border="0" />
							</div>
						</a>
					</td>
				       
						<td><?php echo $row['titulo'];?>&nbsp </td>       
						<td><?php echo $row['facebook'];?>&nbsp </td>     
						<td>
						<a href="../uploads/fotos/g_<?php echo $row['imagem'];?>"><a/><br>
						<img  width="60" height="60" src="../uploads/fotos/g_<?php echo $row['imagem'];?>">
					</td> 						
						
						            
					
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

				
			












