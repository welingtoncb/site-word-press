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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'heroku_4c673d337482805' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'bcf19ed5d2fd75' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '99a29c58' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'us-cdbr-iron-east-05.cleardb.net' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'Ia+*~MyOb}0>nY`=(VAbj3U~`Ad3Lm2&Glbm9J^R^K7O&w^y)9fxb,|V`L@~FRhA' );
define( 'SECURE_AUTH_KEY',  'c6p3hC-2=HmimaY5_>L%4D,Z)S;PU>U?R,HG oLhCCfiTNh+21v) mOSm~pz&XC,' );
define( 'LOGGED_IN_KEY',    '{T&9PMJW#tihkwo1p3`7Nd*pf;VCCFhk)vm&:<28U= ~XnZqvWVRt [1sUF1<t.c' );
define( 'NONCE_KEY',        'an<FO3qslaO$AC!K]cO[3`<w^Eu7,wumuqDEux3IihD0Uut|xFMOxVc5J$>z#n&q' );
define( 'AUTH_SALT',        '^KIZ8s@:>%)R}gdoI@Tp[<g!&OH46(C45@^C$0cV,/`b|X&w%9kli8sltg0BWSQn' );
define( 'SECURE_AUTH_SALT', 'b<~zn06%w+>Z8W+/wU#}dz #i +Qj3iY03kQ@qNNE^&5#^Nxq2L-PVoVo#/Tw~x+' );
define( 'LOGGED_IN_SALT',   'n(@/mlO*dVKjlqKQZ[MlrhVO[eSf3Xc+VdA_BX9aG|-navLSz[y;VO/v>#Hq1% w' );
define( 'NONCE_SALT',       '/WIo:>(29r}U1.`&<^[Mjh_fx0F0$o8Kz6QDI!JlPmM}-zs}dv=34irUvm}|, r?' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cwp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
