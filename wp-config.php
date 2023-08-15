<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'WPCACHEHOME', 'C:\laragon\www\sesi\wp-content\plugins\wp-super-cache/' );
define('WP_CACHE', true);
define( 'DB_NAME', 'fiergs' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UG<{D{{lJ-I#b2ep@Ck[YhO:1/MRL(bcq[=)c0JwK?kv:b6e.|ME)7z:8vy/^ ZR' );
define( 'SECURE_AUTH_KEY',  ' 8iWv3ju`j;}~X<-Jx9#1#DwT}|^?A,}R&D(0G;qmj@x}xNF+p(*>=qp?l;ShpZ$' );
define( 'LOGGED_IN_KEY',    'CO,rgqWUCaeA4}hj36-eLR7|E4?eJA3^Wc<3]sKeLb d]8^dSdwiS2p*$G_YUVqE' );
define( 'NONCE_KEY',        'm72M/D]IBH_cLw4:<<0?Qe-O&uIEGLL,*(,gvz@R||7CxdEDf$4P3AC!2xJFb;7 ' );
define( 'AUTH_SALT',        'iV%{C}&ED2k7B+4o6a{gfh$q(0AV:dFdx2rfhy(J!3WP7})q^Gb(W/c-T<PP$65W' );
define( 'SECURE_AUTH_SALT', 'Y<Aplo3rMA9:tPJbA:.{-3/:A6f}Ln =YWIo2e>b+Ss3fhl[l7.1eI0uk,w% `9%' );
define( 'LOGGED_IN_SALT',   '=kNoqD[Dmgz*kK|aE>UFyob6`JJP*lnIu)?i*eSr7p $>r2rmvbuB__Da0>fW,wB' );
define( 'NONCE_SALT',       '4{>mP`6zyS%xMs1Z?Lj?Xpy{h[^,@M9G%CMgSY@5rg||F&{r2cX,4(yo>%}mILA7' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *		
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
