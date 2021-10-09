
<div id="individual_cadastro">
	<div id="nome_cadastro">
		<div id="">
			LISTA - TP. PRODUTO
		</div>
	</div>	
	<div id="input_cadastro">
	<div id="menus_m">
		<a href="principal.php?pg=editar_tipo_produto">
			<div class="botao_anterior">
				CADASTRAR NOVO
			</div>
		</a>
	</div>
			<div id="relatorio_input">
			<table cellpadding= "4" cellspacing = "0" border= "1" width="900">
				<tr bgcolor="#CCCCCC" height="40" >
				<td>ID</td>
				<td>Nome</td>
			</tr>
			<?php
				$sql    = 'SELECT id,nome FROM tipo_produto order by id desc;';
				$result = mysql_query($sql, $link);
				while ($row = mysql_fetch_assoc($result)){
			?>
			<tr>
				<td>
					<a href="principal.php?pg=editar_tipo_produto&id=<?php echo $row['id'];?>" VALUE="EDITAR" NAME="EDITAR">
						<div style="color:#000000; float:left;" VALUE="EDITAR" NAME="EDITAR">
							<img src="./imagens/editar.gif" width="21" height="21" VALUE="EDITAR" NAME="EDITAR" border="0" />
						</div>
					<a/>
					<a href="../control/tipo_produto.php?acao=deletar&id=<?php echo $row['id'];?>" >
						<div style="color:#000000; float:left; margin-left: 10px;">
							<img src="./imagens/excluir.png" width="21" height="21" border="0" />
						</div>
					</a>
				</td>
				<td><?php echo $row['nome'];?>&nbsp </td>    
			</tr>
			<?php
				}
		
			?>
			</table>
		</div>
	</div>
</div>

