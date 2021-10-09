
<div class="conteudo">

	<div class="conteudo_left">
			<div class="Letranovidadeleft" style=" clear: both; margin-bottom:px;">
						<img src="./imagens/layout/img_estrelas.png"style="margin-top:10px;margin-left:30px;">
							</div>
						
						
						
		
					<div class="letra31">Dê um presente unico</div>
					<div class="letra16" style="font-family:arial;" >
						Atuamos no segmento de presentes personalizados, para as mais diversas ocasiões<br />
						<br />
						Você pode presentear com canecas personalizadas, camisetas, pantufas, chinelos<br />
						entre várias outras opções. Aqui tu pode colocar um texto, vendendo sua ideia<br />
						com uma mensagem bacana etc.<br />
					  - Aniverários<br />
					  - Lembranças de casamento<br />
					  - Brindes institucionais<br />
			
					</div>
			<div class="clear" ></div>	
			<div class="Letranovidadeleft" style=" clear: both; margin-bottom:px;">
						<img src="./imagens/layout/img_estrelas.png"style="margin-top:10px;margin-left:30px;">
							</div>
						<div class="letra31">Dê um presente unico</div> 
					<div class="clear" ></div>
							<div class="letra25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aqui a gente <br />      
											   coloca alguma frase <br />         
												&nbsp;&nbsp;&nbsp;para vender o presente.<br />
												
												</div> 
						<div class="imagem_box" href="./imagens/layout/box1.png" style="width:210px;height:209px;"></div>
		</div>


	
					
	<div class="conteudo_right">
		<div class="Letranovidade" style="margin-right:117px; clear: both; margin-bottom:px;">
						<img src="./imagens/layout/estrelas.png"style="margin-top:10px;">
					</div>

						<div class="clear" ></div>	
									<?php		
								$sql = "SELECT id,titulo,imagem,data_emissao FROM albuns order by id desc limit 0,02 "; //altere (clientes) para o nome de sua tabela.
								$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
								while ($row = mysql_fetch_assoc($result)){	
							?>							
										<div class="novidade">
											<div class="imagem_produto">
														<a href="./uploads/fotos/g_<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]">
													<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" alt="mepresente" title="mepresente" name="mepresente" border="0" width="167px" height="120px" />
												</a>
											</div>
											
											<div class="clear" ></div>
											<div class="conteudo_produto">
												<div class="titulo_produto">
												<?php echo $row['titulo'];?>
												</div>
												<div class="subtitulo_produto">
												A partir de:<?php echo $row['data_emissao'];?>
												</div>
												<div class="mais">
													
												<a href="?pg=categoria_foto&id=<?php echo $row['id'];?>">
								
													<div class="letra_mais">
													Saiba mais
													</div>
													</a>
												</div>
											</div>
										</div>
										<div class="clear" ></div>	
		

						
					<?php
										
																}
																	
																	
																	
														
														
											?>

	</div>
	
	</div>
	</div>
<div class="clear" ></div>	