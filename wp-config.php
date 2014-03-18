<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', ' ');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', ' ');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', ' ');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' ');
define('SECURE_AUTH_KEY',  ' ');
define('LOGGED_IN_KEY',    ' ');
define('NONCE_KEY',        ' ');
define('AUTH_SALT',        ' ');
define('SECURE_AUTH_SALT', ' ');
define('LOGGED_IN_SALT',   ' ');
define('NONCE_SALT',       ' ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = ' ';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define( 'WPLANG', 'fr_FR' );

/**
* Limiter le nombre de révisions enregistrées
* Afin de limiter le poids de la base de données
*/
define( 'WP_POST_REVISIONS', 5 );

/**
* Système de cache
*/
define( 'WP_CACHE', false );

/**
* Augmenter le délai avant la sauvegarde automatique lors de la saisie
*/
define( 'AUTOSAVE_INTERVAL', 60*60 );

/**
* Limiter la durée de conservation des éléments dans la corbeille
*/
define( 'EMPTY_TRASH_DAYS', 3 );

/**
* Interdire l'édition de fichiers PHP dans l'administration
*/
define( 'DISALLOW_FILE_EDIT', true );

/**
* Évite de conserver les images générées lors d’une modification annulée
*/
define( 'IMAGE_EDIT_OVERWRITE', true );

/**
* Augmenter la taille mémoire limite
*/
define( 'WP_MEMORY_LIMIT', '64M' );

/**
* Interdire l’envoi de fichiers non filtrés par WordPress dans l’administration
*/
define( 'ALLOW_UNFILTERED_UPLOADS', false );

/**
* Évite de ré-installer les extensions et thèmes par défaut lors des mises à jour WordPress
*/
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );


/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', WP_DEBUG );
define( 'WP_DEBUG_LOG', WP_DEBUG );
define( 'SCRIPT_DEBUG', WP_DEBUG );

/**
* Mise à jour automatique des sous-versions
*/
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/** Chemin absolu vers le dossier de WordPress. */
//if ( !defined('ABSPATH') )
//  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
