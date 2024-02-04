<?php
/**
 * Helper functions.
 *
 * @link          https://goeckeritz.xyz
 * @author        kuserich
 * @since         1.7.1
 *
 * @package       Kuserich
 * @subpackage    Kuserich/Includes
 *
 * @phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
 */

namespace Kuserich;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if ( ! class_exists( Utils::class ) ) :

	/**
	 * Utils Class.
	 */
	final class Utils {

		/**
		 * Query a third-party plugin activation.
		 * This statement prevents from producing fatal errors,
		 * in case the the plugin is not activated on the site.
		 *
		 * @since     1.7.0
		 * @param     string $slug        Plugin slug to check for the activation state.
		 * @param     string $filename    Optional. Plugin’s main file name.
		 * @return    bool
		 *
		 * @phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		 */
		public static function is_plugin_activated( string $slug, string $filename = '' ): bool {
			$filename               = empty( $filename ) ? $slug : $filename;
			$plugin_path            = apply_filters( 'kuserich_third_party_plugin_path', sprintf( '%s/%s.php', esc_html( $slug ), esc_html( $filename ) ) );
			$subsite_active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );
			$network_active_plugins = apply_filters( 'active_plugins', get_site_option( 'active_sitewide_plugins' ) );

			// Bail early in case the plugin is not activated on the website.
			// phpcs:ignore WordPress.PHP.StrictInArray.MissingTrueStrict
			if ( ( empty( $subsite_active_plugins ) || ! in_array( $plugin_path, $subsite_active_plugins ) ) && ( empty( $network_active_plugins ) || ! array_key_exists( $plugin_path, $network_active_plugins ) ) ) {
				return false;
			}

			return true;
		}

		/**
		 * Return `true` if "WooCommerce" is installed/activated and `false` otherwise.
		 *
		 * @since     1.7.0
		 * @return    bool
		 */
		public static function is_woocommerce_activated(): bool {
			return self::is_plugin_activated( 'woocommerce' );
		}
	}

endif;
