<?php include('./adm/conecta.php')


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<script src="js/jquery.cycle.all.2.72.js" type="text/javascript"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
<link href="css/lightbox.css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<style type="text/css"></style>

<script>
 function trocardecor (elemento,cor){
 elemento.style.color=cor;}
</script>
<script> 
	
	var $j = jQuery.noConflict();
	$j('#lightbox').css("background","red");
	
	var jQuery = $;
	$(function(){
			$('#slides').cycle({
					fx: 'zoom', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					pager:  '#paginador',
					speed: 300,
					timeout: 5000,
					cleartype: false,
					pause: true
			});
	});

</script>

</head>
<body>

<div id="topo_tudo">
  <div class="topo">
    <div class="cont">
      <div class="topo_imagem">
      	<nav id="menu-principal">
        	<ul id="menucima">
				<li class="menucima"><a href="?pg=contato" class="text-menu" border="1px">Contato</a></li>
    
                <li class="menucima"><a href="?pg=home" class="text-menu">Home</a></li> 
            </ul>
        </nav>
      </div>
     </div>
    </div>
  </div>
  <div class="top_tudo">
    <div class="tudo_topo">
	<a href="?pg=home">
      <div class="logo"></div>
    </div>
    </a>
	  <div class="nome_site">

  </div>
  </div>
  

  <div class="clear"></div>

				<div class="topo1">
		 <div id="conteudomenu">
		<?php
	
			
			$sql    = 'SELECT id,titulo FROM categoria ;';
			$result = mysql_query($sql, $link);
			while ($row = mysql_fetch_assoc($result)){
	
		?>
		<a href="?pg=categoria_produto&id_categoria=<?php echo $row['id'];?>">
			<div class="menuletra16calibra">

			<?php echo $row['titulo'];?>
			</div>
			</a>
			<?php
			}
		
		?>
		
	
	</div>
	
	  </div>
	 <div id="tudo"> 
		

	
		  <div id="meio">
			
		
	
	
	
			
				<div id="banner">
				<div id="imagem_banner">
					<div id="slides">
							<?php		
							$sql = "SELECT id,titulo,imagem FROM slide  order by id desc;"; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>
							
					
							<a href="<?php echo $row['titulo']?>" target=""> 
							<img src="./uploads/banner/g_<?php echo $row['imagem']?>" width="980" height="361	px" alt="1" alt="mepresente"  
								title="mepresente" name="mepresente" 
								border="0" /> 
							</a>
										
				 		
						<?php
							}
						?>
						</div>
					</div>
				
				</div>

			
			
			<?php 
				$pg=$_GET["pg"];
				if($pg=="home")
					include('home.php');
				else if($pg=="contato")
					include('contato.php');
				else if($pg=="categoria_produto")
					include('categoria_produto.php');
				else if($pg=="categoria_foto")
					include('categoria_foto.php');
				else if($pg=="produto")
					include('produto.php');
				else if($pg=="links")
					include('links.php');	
				else if($pg=="fotos")
					include('fotos.php');
				else if($pg=="Brothers")
					include('Brothers.php');
				else
					include('home.php');
				?>
			  </div>
			  
			
<div id="rodape">


	<div class="fundo_rodape">
		
		<div class="fundo_rodape1">
		<div class="fundo_rodape2">
		</div>
		<div class="logo_fundo">
			<a href="?pg=home">
		 <img src=" ./imagens/layout/logo_fundo.png" style="margin-top:10px;width:171;height:104;float:left;margin-left:20px;"/>
			<a>
		</div>
		<div id="rede_socias">
			
		<div class="img_contato" style="float:right;margin-top:23px;">
		<img src="./imagens/layout/letra1.png" style="widht:;height:33;boder:0"><img src="./imagens/layout/atendimento.png" style="widht:;height:33;boder:0">
		
		</div>
		
		<div class="img_contato"style="float:left;margin-left:90px;margin-top:35px;">
		<a href="http://www.facebook.com/marcos.sampaio.125" target="_blank"> 
		<img src="./imagens/layout/letra2.png" style="widht:;height:33;boder:0 margin-right:10px;"><img src="./imagens/layout/face.png" style="widht:;height:33;boder:0">
		</a>
		</div>
			<div class="clear" ></div>	
		<a href="http://www.studiomidiamix.com.br/" target="_blank">	
		<div class="img_midia">
		<img src="./imagens/layout/midiamix.png" style="margin-top:23px;float:right;widht:95;height:33;boder:0;margin-bottom:;">
		
		</div>
		</a>
		<div class="img_direitos">
		
		<img src="./imagens/layout/Direitos.png" style="margin-top:20px;float:right;margin-right:10px;widht:171;height:33;boder:0">
		</div>
		</div>
		
			</div>
	</div>








	
</div>


</body>