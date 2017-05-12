<?php
/*
 *
 *O  ABSPATH, na linha 17, define o caminho absoluto da pasta deste webapp no sistema de arquivos.
 *Ela vai ser usada para chamar os outros arquivos  e templates via PHP (usando o include_once),
 *já que ela guarda o caminho físico da pasta.
 *
 *E o BASEURL, na linha 21, define o caminho deste webapp no servidor web.
 *Esse valor deve ser igual ao nome da pasta que você criou no começo do projeto.
 *Ela será usada para montar os links da aplicação, já que ela guarda a URL inicial.
*/

	/* caminho absoluto para a pasta do sistema*/
	if (!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__) . '/');

	/* caminho no server para o sistema*/
	if(!defined('BASEURL'))
		define('BASEURL', '/webapp-atoa/');

	/* caminho do arquivo de banco de dados*/
	if (!defined('DBAPI')) 
		define('DBAPI', ABSPATH . 'inc/database.php');

	// define os caminhos para HEADER e FOOTER
	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>