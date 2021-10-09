
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			EDITAR - CLIENTES
		</div>
		
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=editar_categoria">
			<div class="botao_anterior">
				CADASTRAR NOVO
			</div>
		</a>
	</div>
		<div id="relatorio_input" >
		<table cellpadding= "7" cellspacing = "0" border= "1" width="900">
			<tr bgcolor="#CCCCCC" height="40" >
				<td>Alterar</td>
				<td>Excluir</td>
				<td>Nº</td>
				<td>Titulo</td>
				
			</tr>
			  <A NAME="resultado"></A>
			<?php
				
			$sql    = 'SELECT id, titulo FROM categoria  order by id desc';
				$result = mysql_query($sql, $link);
				while ($row = mysql_fetch_assoc($result)){
					
		
			?>
				<tr>
					<td>
						<a href="?pg=editar_categoria&id=<?php echo $row['id'];?>">
							<div style="color:#000000; float:left;">
								<img src="./imagens/editar.gif" width="21" height="21" border="0" />
							</div>
						</a>
					</td>
					<td>
					
						<a href="../control/categoria.php?acao=deletar&id=<?php echo $row['id'];?>" >
							<div style="color:#000000; float:left; margin-left: 10px;">
								<img src="./imagens/excluir.png" width="21" height="21" border="0" />
							</div>
						</a>
					</td>
					<td><p><?php echo $row['id'];?></p> </td>
					<td><p><?php echo $row['titulo'];?></p> </td>
						
					
				</tr>
			<?php
				}
				
			?>
		</table>

		</div>
	</div>
	</div>


