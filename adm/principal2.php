<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
	<?php	
		include('cabecalho.php');
	?>
	<head>
		<meta http-equiv="Content-Type" />
		<title>CRM Midiamix</title>
		<link rel="stylesheet" type="text/css" href="../css/estilocrm.css" />
		<link rel="shortcut icon" href="./imagenscrm/mini_logo.png" type="image/x-icon" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
		<script type="text/javascript" src="../js/functions.js"></script>
		<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
		<script src="../ckeditor/_samples/sample.js" type="text/javascript"></script>
		<link href="../ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/jquery.uploadify.min.js" type="text/javascript"></script>
	</head>
	<body onLoad="relogio();">
	<div id="tudo">
		<div class="topo_adm" style="background-color:#000;">
			<div id="barrasair">
				<div id="sair">
					<a class="textosair" href="./logout.php">
						<div id="botaooff">
							<img src="imagenscrm/off.gif" width="26" height="30" border="0" />
						</div>
						<div id="divtextosair">
							SAIR
						</div>
					</a>
				</div>
				<div class="branco" style="width:750px; height:30px;">
					<div id="sair" style="margin-left:40px;">
						<a class="textosair" target="_blank" href="../index.php">
						<div id="botaooff">
							<img src="imagenscrm/mini_logo.png" width="26" height="30" border="0" />
						</div>
							<div id="divtextosair">
								VER SITE
							</div>
						</a>
					</div>
				</div>
				<div id="encerramento">
					<a class="texto3">Sessão encerra em:&nbsp;</a><label id="cronometro"></label><br>
				</div>
			</div>
		</div>
		<div class="linhas" style="background-color:#E8E8E8; ">
			<div class="linhalogo" >
				<div id="containercrm">
					<div id="crmmidiamix"><img src="imagenscrm/crmmidiamix.jpg" width="210" height="84" /></div>
				</div>
				<div id="containercliente">
					<div class="foto_m">
						<img src="imagenscrm/logo.jpg" width="150" height="100" />
					</div>
				</div>
				<div id="riscobarra"></div>
				<div id="containerjava">
					<div class="branco" style="width:197px; height:76px; margin-top:14px; display:inline;">
						<div class="branco" style="height:71px; width:80px; font-family:Verdana, Geneva, sans-serif; font-size:14px; padding-top:5px; color:#666666;">
							Tecnologia
						</div>
						<div class="branco" style="margin-top:25px;"> 
							<img src="imagenscrm/php.png" width="80" height="50" border="0">
						</div>
						<div id="logojava"></div>
					</div>
					<div class="branco" style="width:197px; height:50px;">
						<div id="logomix"></div>
						<div class="branco" style="width:153px; height:50px; display:block; overflow:hidden; font-family:Verdana, Geneva, sans-serif; font-size:08px; color:#666666;">Developed by<br>
							<a style="font-size:10px;">
								Studio Midiamix
							</a>
							<br>
							Todos os direitos reservados&copy;
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="linhastotal" style="background-image:url(imagenscrm/risco1.gif); background-repeat:repeat-x;">
			<div class="linhascentro">
				<div id="risco1"></div>
			</div>
		</div>
		<div class="linhastotal">
			<div class="linhascentro">
				<div id="barrausuario">
					<div id="bemvindo"> 
						<? 
							session_start();
							echo "Bem vindo, ".$_SESSION["usuario"];
						?>
					</div>
					<div class="branco" style="width:511px; height:45px; float:left;"></div>
					<div id="ferramentas">
						<div id="trocarsenha">
							<a href="?pg=cadastro_usuario" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','imagenscrm/senha1.gif',1)">
								<img src="imagenscrm/senha2.gif" alt="Trocar Senha" name="Image2" width="124" height="45" border="0" id="Image2" />
							</a>
						</div>
						<div id="suporte">
							<a href="?pg=suporte" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','imagenscrm/suporte1.gif',1)">
								<img src="imagenscrm/suporte2.gif" alt="Suporte" name="Image3" width="114" height="45" border="0" id="Image3" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="linhastotal" style="background-image:url(imagenscrm/risco1.gif); background-repeat:repeat-x;">
			<div class="linhascentro">
				<div id="risco1"></div>
			</div>
		</div>
		<div class="linhastotal" style="background-image:url(imagenscrm/risco1.gif); background-repeat:repeat-x;">
			<div class="linhascentro">
				<div id="risco1"></div>
			</div>
		</div>
		<div class="menuprincipal">
			<div id="menuscontainer">
				<div id="menudecomando">MENUS CADASTRO</div>
				<div class="branco" style="width:257px; height:28px;"></div>
				<ul id="menulateral">			
					
					<li>
						<a href="?pg=cadastro_veiculo" >
							Cadastro Veículo
						</a>
					</li>		
					
					<li>
						<a href="?pg=cadastro_fotos" >
							Cadastro Fotos
						</a>
					</li>				
				</ul>
				
				</ul>						
			</div>
		</div>
		<div id="divisorconteudovertical"></div>
		<?php 
			$pg=$_GET["pg"];
/////////////////////////////////////////////////           padrão                         /////////////////////////////////////////////////
			if($pg=="inicial.php")
				include('inicial.php');
			else if($pg=="suporte")
				include('suporte.php');
			else if($pg=="cadastro_usuario")
				include('usuario/index.php');
/////////////////////////////////////////////////           ....                         /////////////////////////////////////////////////
/////////////////////////////////////////////////           Cadastros                         /////////////////////////////////////////////////
			else if($pg=="cadastro_categoria_cliente")
				include('categoria_cliente/index.php');
			else if($pg=="editar_categoria_cliente")
				include('categoria_cliente/editar.php');
			else if($pg=="cadastro_banner")
				include('banner/index.php');
			else if($pg=="editar_banner")
				include('banner/editar.php');
			else if($pg=="cadastro_cidade")
				include('cidade/index.php');	
			else if($pg=="editar_cidade")
				include('cidade/editar.php');				
			else if($pg=="lista_clientes")
				include('cliente/index.php');
			else if($pg=="editar_clientes")
				include('cliente/editar.php');
			else if($pg=="editar_clientes")
				include('cliente/editar.php');
			else if($pg=="editar_marca")
				include('marca/editar.php');
			else if($pg=="cadastro_marca")
				include('marca/index.php');
			else if($pg=="cadastro_bairro")
				include('bairro/index.php');
			else if($pg=="editar_bairro")
				include('bairro/editar.php');
			
			else if($pg=="cadastro_endereco")
				include('endereco/index.php');
			else if($pg=="editar_endereco")
				include('endereco/editar.php');
			
			else if($pg=="cadastro_marca")
				include('marca/index.php');
			else if($pg=="editar_marca")
				include('marca/editar.php');
				
			else if($pg=="cadastro_modelo")
				include('modelo/index.php');
			else if($pg=="editar_modelo")
				include('modelo/editar.php');
			
			else if($pg=="cadastro_tipo_produto")
				include('tipo_produto/index.php');
			else if($pg=="editar_tipo_produto")
				include('tipo_produto/editar.php');
				
			else if($pg=="cadastro_imovel")
				include('imovel/index.php');
			else if($pg=="editar_imovel")
				include('imovel/editar.php');
				
			else if($pg=="cadastro_veiculo")
				include('veiculo/index.php');
			else if($pg=="editar_veiculo")
				include('veiculo/editar.php');
			
			else if($pg=="cadastro_outros")
				include('outros/index.php');
			else if($pg=="editar_outros")
				include('outros/editar.php');
			
			else if($pg=="cadastro_fotos")
				include('fotos/index.php');
			else if($pg=="editar_fotos")
				include('fotos/editar.php');
/////////////////////////////////////////////////           ....                         /////////////////////////////////////////////////
/////////////////////////////////////////////////           padrão                         /////////////////////////////////////////////////
			else
			include('inicial.php');
/////////////////////////////////////////////////           ...                         /////////////////////////////////////////////////

		?>
		</div>
	</body>
</html>
<?php 
	include("rodape.php");
?>