<?php
/**
 * Constants for asset types.
 *
 * We introduce these asset types for the extension JSON definition. The naming and usage
 * of these asset types follows the same definitions that WordPress uses for blocks.
 * That is, we apply the same naming such that the prefix indicates where the assets are loaded
 * and no prefix indicates that the assets are loaded in the editor and the frontend.
 *
 *     `style`           -->  editor + frontend
 *     `script`          -->  editor + frontend
 *     `editorStyle`     -->  editor
 *     `editorScript`    -->  editor
 *     `frontendStyle`   -->  frontend
 *     `frontendScript`  -->  frontend
 *
 * @link          https://goeckeritz.xyz
 * @author        kuserich
 * @since         1.0.0
 *
 * @package       Kuserich
 * @subpackage    Kuserich/Asset_Type
 */

namespace Kuserich;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( Asset_Type::class ) ) :

	/**
	 * Constants used throughout this library.
	 */
	class Asset_Type {

		/**
		 * Name of the style asset that is enqueued in the editor and the frontend.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const STYLE = 'style';

		/**
		 * Name of the script asset that is enqueued in the editor and the frontend.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const SCRIPT = 'script';

		/**
		 * Name of the script asset that is enqueued in the editor.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const EDITOR_SCRIPT = 'editorScript';

		/**
		 * Name of the style asset that is enqueued in the editor.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const EDITOR_STYLE = 'editorStyle';

		/**
		 * Name of the script asset that is enqueued in the frontend.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const FRONTEND_SCRIPT = 'frontendScript';

		/**
		 * Name of the script asset that is enqueued in the frontend.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const FRONTEND_STYLE = 'frontendStyle';

		/**
		 * Mapping of names to slugs.
		 *
		 * Names are used in the JSON definition whereas slugs are used in handles.
		 *
		 * @var      string
		 * @since    1.0.0
		 */
		public const SLUGS = array(
			self::STYLE           => 'style',
			self::SCRIPT          => 'script',
			self::EDITOR_SCRIPT   => 'editor-script',
			self::EDITOR_STYLE    => 'editor-style',
			self::FRONTEND_SCRIPT => 'frontend-script',
			self::FRONTEND_STYLE  => 'frontend-style',
		);
	}

endif;
