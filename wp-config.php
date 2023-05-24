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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R{Dq*e<65!nxV{d5k)|tVtmjOq.C.4,?;~i[!n@OoD:^2(tk7#S/cf6L)A$zK~BA' );
define( 'SECURE_AUTH_KEY',  'e^3J*?n%g/KZm=i=CVy3C*#2,-<<]RBe4k)eyZ(TWu{D&1xK$/I_w`I^l3pKkQm0' );
define( 'LOGGED_IN_KEY',    'DLAa0m1aeIW[*/oM)[g^wwX7NJ^Y6,X6ST~snLTq:J=2cC@iV~]GwV$c&yJBOgKb' );
define( 'NONCE_KEY',        'n!zdq1{i:v&@qPKcGOO&yHyL?%ze5HWE2|$Q {3lEv/JT$+;#%[6X(dvS9h_v/-;' );
define( 'AUTH_SALT',        'x=Ua3h$@+EFg2b9sXkM~~}NX[1R1}*a~G|M[;4:HA<5f;4g?07?O(w+]o^t_@nAA' );
define( 'SECURE_AUTH_SALT', '$NyBK-Dyaj|CN,;2dxOwhoGcMBoFt)^8w,G629d<@rKl<9oBkXG6?bWBj#x,oT`(' );
define( 'LOGGED_IN_SALT',   ')dvhCTl?-*Qu2[thK38<EPWvKalm$]2IVsRFCInE1Ix{x$nt{=L7@t$c<bS5$b>z' );
define( 'NONCE_SALT',       'chW8)]tirRjzC~(^(I)^=CPxePKILfIlOxb3y#dqLNzK nQUP6g:lLE}V&4MA]/s' );

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
