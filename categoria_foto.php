<?php 
	include('./adm/conecta.php');
	
?>
<div class="contato">
<?php		
	if (($_GET["id"]!=null)){
			$sql	= "SELECT id,titulo,imagem,data_emissao,obs FROM albuns  where (id=0".$_GET["id"].")";
		}
							$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
							while ($row_albuns = mysql_fetch_assoc($result)){	
							$albuns_id_categoria=$row_albuns ['id'];
							$albuns_titulo=$row_albuns ['titulo'];
							$albuns_imagem=$row_albuns ['imagem'];
							$albuns_data_emissao=$row_albuns ['data_emissao'];
							$albuns_obs=$row_albuns ['obs'];
						?>	
	<div class="letra24" style="margin-left:10px; padding-top:px; margin-bottom:10px;">
	<?php echo $albuns_titulo;?>
	</div>
		<div class="clear" ></div>
	<div class="produto_grande">
		<div class="imagem_produto_grande">
			<img src="./uploads/fotos/g_<?php echo $albuns_imagem;?>" alt="Mepresente"  
			title="Mepresente" name="Mepresente" 
			border="0" width="315" height="279" />
		</div>
		<div class="grande_conteudo_produto">
			<div class="valor">
				<div class="letra_mais" style="margin-left: 15px;">
				A partir de 
				</div>
				<div class="clear" ></div>
				<div class="letra_valor" style="margin-left: 15px;">
				R$ <?php echo $albuns_data_emissao;?>
				</div>
			</div>
			<a href="?pg=contato">
				<div class="letra_mais" style="color:#ffffff; margin-top:15px; margin-right:15px; float:right;">
				Solicite uma proposta
				</div>
			</a>
			<div class="clear" ></div>
						
						<div class="conteudo_contato1" style="margin-left:50px; margin-right:10px; font-size:16px;font-famyli:calibra; color:#ffffff; padding-top:10px; margin-bottom:20px; text-align: justify;">
							<?php echo $albuns_obs	;?>
						</div>

				</div>
	</div>
	<div class="clear" ></div>
	<div class="letra" style="font-size:20px;margin-left:50px;float:left;color:#FF7373;margin-left:10px; 	">
		Mais fotos
	</div>
		<div class="clear" ></div>
	<div class="galeia_produto" style="margin-left:10px; float:left;padding-top:10px; ">
		<div class="imagem_produto_pequena" style="margin-left:7px;float:left; padding-top:10px; ">
	<?php
	
	$sql = "SELECT cadastro_foto.id, cadastro_foto.titulo, cadastro_foto.imagem, cadastro_foto.id_categoria 
			FROM cadastro_foto
			LEFT JOIN albuns 
			ON ( cadastro_foto.id_categoria = albuns.id ) 
			where (albuns.id=0".$albuns_id_categoria.");";
			//echo $sql;
	$result_sub_categoria = mysql_query($sql,$link);
	if (($result_sub_categoria!=null)&&(true)){
		while ($row_sub_categoria = mysql_fetch_assoc($result_sub_categoria)){
			$cadastro_foto_id_sub_categoria=$row_sub_categoria ['id_categoria'];
			$cadastro_foto_id_categoria=$row_sub_categoria ['id'];
			$cadastro_foto_titulo=$row_sub_categoria ['titulo'];
			$cadastro_foto_imagem=$row_sub_categoria ['imagem'];
			

	?>
		
		<a href="./uploads/fotos/g_<?php echo $cadastro_foto_imagem;?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $cadastro_foto_imagem;?>" alt="Samukar" title="Samukar" name="Samukar" border="0"  width="101" height="91"  />
			</a>
		
		
	
		<?php 
		}
	}	
		
		}
	?>	
		</div>
	</div>
</div>
<div class="clear" ></div>
</div>