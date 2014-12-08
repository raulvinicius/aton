<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'aton');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M|/5OjE4@SP IVuf3;qds8;73Ua[:eVPWZdwLiA|/=Ez)pO!<We%(xr({LqvNqbk');
define('SECURE_AUTH_KEY',  'q]79Rz1b[97iu,hl6M[]E[2Kb7iy-0gCJy$nr=YgOmU.>t|&5a(@J>(HU;J+;cO,');
define('LOGGED_IN_KEY',    'MUdL;~4Qi>ab|mGm+Jz>4.LA(P,_:A[7x<C! t);$Kr!L|<hHk~C;_;:~:U?;sJz');
define('NONCE_KEY',        'nsm!PrN.ALGMcRIn+919,wh6Es<(]<R>%VKod%2T``|oP=J:TC2-,xo):SU+P2`+');
define('AUTH_SALT',        '[`zrV$0]w!$2q5/WRF[3z1n$])(B+&~$vsntJJXTqg1.?F]d:h8^%&_UEtd7GoPp');
define('SECURE_AUTH_SALT', 'EOwCiR,`{.(;*3#JJ%0F`5OnT{}IE<G&yz-s!IS.BDso`C3dAKzRj]=r;97m+%*?');
define('LOGGED_IN_SALT',   'Oqr{2.vv_d/xs@s6oDWagAGd]Q.tcFE(n#s96k/8gxTPQBTW2]54JJ]$A_t<ndfo');
define('NONCE_SALT',       'g;!zR+otX+B.~zc]I87o/+vlKKw|QbddM3WhX:f[3{en|?.sz{VJ48:A{n?_%Cp-');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
