<?php include('./adm/conecta.php')


?>
<div class="conteudo">

					<?php
	
		if (($_GET["id_categoria"]!=null)){
			$sql	= "SELECT id,id_categoria,titulo FROM sub_categoria where (id_categoria=0".$_GET["id_categoria"].")";
		}
		$result_categoria = mysql_query($sql,$link);
		if (($result_categoria!=null)&&(true)){
			while ($row_categoria = mysql_fetch_assoc($result_categoria)){
				$sub_categoria_id=$row_categoria ['id'];
				$categoria_titulo=$row_categoria ['titulo'];
				
	?>
	<div class="Letranovidadeleft" style=" clear: both; margin-bottom:px;">
						<img src="./imagens/layout/img_estrelas.png"style="margin-top:10px;margin-left:30px;">
							</div>
							<div class="letra31"><?php echo $categoria_titulo;?></div>
				
	<?php
		
	?>
		<div class="clear" ></div>	
	<?php
	
	$sql = "SELECT imagem.titulo,imagem.id, imagem.obs, imagem.valor, imagem.imagem, imagem.id_sub_categoria, sub_categoria.titulo AS titulo_sub_categoria
			FROM imagem
			LEFT JOIN sub_categoria ON ( imagem.id_sub_categoria = sub_categoria.id ) 
			where (sub_categoria.id=0".$sub_categoria_id.") order by imagem.id desc ;";
			//echo $sql;
	$result_sub_categoria = mysql_query($sql,$link);
	if (($result_sub_categoria!=null)&&(true)){
		while ($row_sub_categoria = mysql_fetch_assoc($result_sub_categoria)){
			$imagem_id_sub_categoria=$row_sub_categoria ['id_sub_categoria'];
			$imagem_id_produto=$row_sub_categoria ['id'];
			$imagem_titulo=$row_sub_categoria ['titulo'];
			$imagem_imagem=$row_sub_categoria ['imagem'];
			$imagem_valor=$row_sub_categoria ['valor'];

	?>
	<div class="produto">
		<div class="imagem_produto">
			<a href="./uploads/fotos/g_<?php echo $imagem_imagem;?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $imagem_imagem;?>" alt="Mepresente" title="Mepresente" name="Mepresente" border="0" width="167px" height="120px" />
			</a>
		</div>
		
		<div class="clear" ></div>
		<div class="conteudo_produto">
			<div class="titulo_produto">
			<?php echo $imagem_titulo;?>
			</div>
			<div class="subtitulo_produto"style="margin-bottom:10px;">
			A partir de:<?php echo $imagem_valor;?>
			</div>
			<div class="mais">
				
			<a href="?pg=produto&id=<?php echo $imagem_id_produto;?>">
				<div class="letra_mais">
				confira.
				</div>
				</a>
			</div>
		</div>
	</div>
	<?php 
		}
	}	
		}
	}
	?>	
	</div>
	</div>
	</div>
	
	<div class="clear" ></div>
