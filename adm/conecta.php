	<?php
	$host		=	"mysql14.redehost.com.br";
	$login		=	"mepresente";
	$password	=	"M1d14m1x!";
	$base_dados	=	"mepresente";


if (!$link = mysql_connect($host, $login, $password)) {
    echo 'Não foi possível conectar ao mysql';
    exit;
}
if (!mysql_select_db($base_dados, $link)) {
    echo 'Não foi possível selecionar o banco de dados';
    exit;
}
?>