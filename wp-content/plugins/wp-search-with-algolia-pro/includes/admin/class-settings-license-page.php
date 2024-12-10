<?php
/**
 * License_Page class.
 *
 * @package WebDevStudios\WPSWAPro
 */

namespace WebDevStudios\WPSWAPro\Admin;

use WebDevStudios\WPSWAPro\Utils;

/**
 * Add and render our license page.
 */
class Settings_License_Page {

	/**
	 * @var string Plugin's name.
	 */
	private string $plugin_name;

	/**
	 * @var string Plugin's slug.
	 */
	private string $plugin_slug;

	/**
	 * @var string License page slug.
	 */
	private string $page_slug;

	/**
	 * @var string License activation status field name.
	 */
	private string $status_slug;

	/**
	 * @var string License setting.
	 */
	private string $license_setting;

	/**
	 * @var string License setting slug.
	 */
	private string $license_key_slug;

	/**
	 * @var string Activate license field name.
	 */
	private string $activate_key;

	/**
	 * @var string Deactivate license field name.
	 */
	private string $deactivate_key;

	/**
	 * @var string Nonce string.
	 */
	private string $nonce;

	/**
	 * @var false|mixed|null Plugin license.
	 */
	private string $license;

	/**
	 * @var false|mixed|null Activation status.
	 */
	private string $status;

	/**
	 * @var string Capability level
	 */
	private string $capability = 'manage_options';

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @param string $plugin_name Plugin name
	 * @param string $plugin_slug Plugin slug
	 */
	public function __construct( $plugin_name, $plugin_slug ) {
		$this->plugin_name      = $plugin_name;
		$this->plugin_slug      = $plugin_slug;

		$this->page_slug        = $this->plugin_slug . '-license_page';
		$this->status_slug      = $this->plugin_slug . '_license_status';
		$this->license_setting  = $this->plugin_slug . '_license';
		$this->license_key_slug = $this->plugin_slug . '_license_key';
		$this->activate_key     = $this->plugin_slug . '_activate';
		$this->deactivate_key   = $this->plugin_slug . '_deactivate';
		$this->nonce            = $this->plugin_slug . '_license_nonce';
		$this->license          = ( Utils::wpswa_pro_is_network_activated() ) ?
			get_site_option( $this->license_key_slug ) :
			get_option( $this->license_key_slug );
		$this->status           = ( Utils::wpswa_pro_is_network_activated() ) ?
			get_site_option( $this->status_slug ) :
			get_option( $this->status_slug );
	}

	/**
	 * Run our hooks.
	 *
	 * @since 1.0.0
	 */
	public function do_hooks() {
		$admin_hook = ( Utils::wpswa_pro_is_network_activated() ) ? 'network_admin_menu' : 'admin_menu';

		add_action( $admin_hook, [ $this, 'add_license_page' ], 20 );
		add_action( 'admin_init', [ $this, 'register_option' ] );
		add_action( 'admin_init', [ $this, 'activate_license' ] );
		add_action( 'admin_init', [ $this, 'deactivate_license' ] );
		add_action( 'admin_notices', [ $this, 'admin_notices' ] );
	}

	/**
	 * Register our menu page.
	 *
	 * @since 1.0.0
	 */
	public function add_license_page() {
		$parent = ( Utils::wpswa_pro_is_network_activated() ) ? 'wpswa_pro_network' : 'algolia';
		add_submenu_page(
			$parent,
			sprintf( esc_html__( '%s License', 'wp-search-with-algolia-pro' ), $this->plugin_name ),
			esc_html__( 'Pro License' ),
			$this->capability,
			$this->page_slug,
			[ $this, 'license_page' ]
		);
	}

	/**
	 * Register our option.
	 *
	 * @since 1.0.0
	 */
	public function register_option() {
		register_setting(
			$this->license_setting,
			$this->license_key_slug,
			[ $this, 'edd_sanitize_license' ]
		);
	}

	/**
	 * Sanitize the license key.
	 *
	 * @since 1.0.0
	 *
	 * @param string $new Newly saved license.
	 * @return string
	 */
	public function edd_sanitize_license( string $new ): string {
		$old = $this->license;
		if ( $old && $old != $new ) {
			if ( ( Utils::wpswa_pro_is_network_activated() ) ) {
				delete_site_option( $this->status_slug );
			} else {
				delete_option( $this->status_slug );
			}

		}
		return $new;
	}

	/**
	 * Activate a license.
	 *
	 * @since 1.0.0
	 */
	public function activate_license() {

		if ( empty( $_POST ) || isset( $_POST[ $this->deactivate_key ] ) ) {
			return;
		}

		if ( empty( $_POST[ $this->license_key_slug ] ) ) {
			return;
		}

		// Run a quick security check.
		if ( ! check_admin_referer( $this->nonce, $this->nonce ) ) {
			return;
		}

		$license_key = '';
		if ( ! empty( $_POST[$this->license_key_slug] ) ) {
			$license_key = sanitize_text_field( $_POST[ $this->license_key_slug ] );
		}

		$response = $this->activate_deactivate( 'activate_license', $license_key );

		// Make sure the response came back okay.
		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {

			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = esc_html__( 'An error occurred, please try again.', 'wp-search-with-algolia-pro' );
			}

		} else {

			$license_data = json_decode( wp_remote_retrieve_body( $response ) );

			if ( false === $license_data->success ) {
				switch( $license_data->error ) {

					case 'expired' :
						$message = sprintf(
							esc_html__( 'Your license key expired on %s.', 'wp-search-with-algolia-pro' ),
							date_i18n(
								get_option( 'date_format' ),
								strtotime(
									$license_data->expires,
									current_time( 'timestamp' )
								)
							)
						);
						break;

					case 'revoked' :
						$message = esc_html__( 'Your license key has been disabled.', 'wp-search-with-algolia-pro' );
						break;

					case 'missing' :
						$message = esc_html__( 'Invalid license.', 'wp-search-with-algolia-pro' );
						break;

					case 'invalid' :
					case 'site_inactive' :
						$message = esc_html__( 'Your license is not active for this URL.', 'wp-search-with-algolia-pro' );
						break;

					case 'item_name_mismatch' :
						$message = sprintf(
							esc_html__( 'This appears to be an invalid license key for %s.', 'wp-search-with-algolia-pro' ),
							$this->plugin_name
						);
						break;

					case 'no_activations_left':
						$message = esc_html__( 'Your license key has reached its activation limit.', 'wp-search-with-algolia-pro' );
						break;

					default :
						$message = esc_html__( 'An error occurred, please try again.', 'wp-search-with-algolia-pro' );
						break;
				}
			}
		}

		if ( ! empty( $message ) ) {
			$base_url = $this->get_license_page_admin_url();
			$redirect = add_query_arg( [ 'sl_activation' => 'false', 'message' => urlencode( $message ) ], $base_url );

			wp_redirect( $redirect );
			exit();
		}

		if ( Utils::wpswa_pro_is_network_activated() ) {
			update_site_option( $this->status_slug, $license_data->license );
			update_site_option( $this->license_key_slug, $license_key );
		} else {
			update_option( $this->status_slug, $license_data->license );
			update_option( $this->license_key_slug, $license_key );
		}

		$url = $this->get_license_page_admin_url();
		wp_redirect( $url );
		exit();
	}

	/**
	 * Deactivate a license.
	 *
	 * @since 1.0.0
	 */
	public function deactivate_license() {

		if ( empty( $_POST ) || ! isset( $_POST[ $this->deactivate_key ] ) ) {
			return;
		}

		// Run a quick security check.
		if ( ! check_admin_referer( $this->nonce, $this->nonce ) ) {
			return;
		}

		$response = $this->activate_deactivate( 'deactivate_license' );

		// Make sure the response came back okay.
		if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
			if ( is_wp_error( $response ) ) {
				$message = $response->get_error_message();
			} else {
				$message = esc_html__( 'An error occurred, please try again.', 'wp-search-with-algolia-pro' );
			}

			$base_url = $this->get_license_page_admin_url();
			$redirect = add_query_arg( [ 'sl_activation' => 'false', 'message' => urlencode( $message ) ], $base_url );

			wp_redirect( $redirect );
			exit();
		}

		// Decode the license data.
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "deactivated" or "failed"
		if ( $license_data->license == 'deactivated' ) {
			if ( Utils::wpswa_pro_is_network_activated() ) {
				delete_site_option( $this->status );
			} else {
				delete_option( $this->status );
			}

		}

		$url = $this->get_license_page_admin_url();
		wp_redirect( $url );
		exit();
	}

	/**
	 * Send POST request to Pluginize.com to handle a license status change.
	 *
	 * @since 1.0.0
	 *
	 * @param string $action  Activating or deactivating.
	 * @param string $license The license to activate or deactivate.
	 *
	 * @return array|false|\WP_Error
	 */
	private function activate_deactivate( string $action = 'activate_license', string $license = '' ) {
		if ( empty( $license ) ) {
			if ( Utils::wpswa_pro_is_network_activated() ) {
				$license = trim( get_site_option( $this->license_key_slug ) );
			} else {
				$license = trim( get_option( $this->license_key_slug ) );
			}

		}

		if ( empty( $license ) ) {
			return false;
		}

		// Data to send in our API request.
		$api_params = [
			'edd_action' => $action,
			'license'    => $license,
			'item_name'  => urlencode( $this->plugin_name ), // The name of our product in EDD.
			'url'        => home_url()
		];
		return wp_remote_post( WPSWA_PRO_STORE_URL, [ 'timeout' => 15, 'sslverify' => false, 'body' => $api_params ] );
	}

	/**
	 * Handle admin notices.
	 *
	 * @since 1.0.0
	 */
	public function admin_notices() {
		if ( isset( $_GET['sl_activation'] ) && ! empty( $_GET['message'] ) ) {
			if ( isset( $_GET['page'] ) && $this->page_slug === $_GET['page'] ) {
				switch ( $_GET['sl_activation'] ) {
					case 'false':
						$message = urldecode( $_GET['message'] );
						?>
						<div class="error">
							<p><?php echo $message; ?></p>
						</div>
						<?php
						break;

					case 'true':
					default:
						break;
				}
			}
		}
	}

	/**
	 * Render our licenase page output.
	 *
	 * @since 1.0.0
	 */
	public function license_page() {

		$active  = false;
		?>
		<div class="wrap">
		<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
		<?php
			$action = ( Utils::wpswa_pro_is_network_activated() ) ? 'edit.php?action=' . $this->page_slug : 'options.php';
		?>
		<form method="post" action="<?php echo esc_attr( $action ); ?>">

			<?php settings_fields( $this->license_setting ); ?>

			<p><?php printf(
					esc_html__( 'Thank you for activating your %s license.', 'wp-search-with-algolia-pro' ),
					$this->plugin_name
				); ?></p>
			<table class="form-table">
				<tbody>
				<tr>
					<th scope="row">
						<?php esc_html_e( 'License Key', 'wp-search-with-algolia-pro' ); ?>
					</th>
					<td>
						<input id="<?php echo esc_attr( $this->license_key_slug ); ?>" name="<?php echo esc_attr( $this->license_key_slug ); ?>" type="text" class="regular-text" value="<?php echo esc_attr( $this->license ); ?>" />
						<label class="description" for="<?php echo esc_attr( $this->license_key_slug ); ?>"><?php esc_html_e( 'Enter your license key', 'wp-search-with-algolia-pro' ); ?></label>
					</td>
				</tr>
				<?php if ( false !== $this->license ) {
					$active = ( $this->status !== false && $this->status == 'valid' );
					?>
					<tr>
						<th scope="row">
							<?php esc_html_e( 'Activate License', 'wp-search-with-algolia-pro' ); ?>
						</th>
						<td>
							<?php if ( $active ) { ?>
								<input type="submit" class="button-secondary" name="<?php echo esc_attr( $this->deactivate_key ); ?>" value="<?php esc_attr_e( 'Deactivate License', 'wp-search-with-algolia-pro' ); ?>" />
							<?php } else { ?>
								<input type="submit" class="button-secondary" name="<?php echo esc_attr( $this->activate_key ); ?>" value="<?php esc_attr_e( 'Activate License', 'wp-search-with-algolia-pro' ); ?>" />
							<?php } ?>
						</td>
					</tr>
				<?php }

				if ( $active ) { ?>
					<tr>
						<th scope="row">
							<?php esc_html_e( 'Status:', 'wp-search-with-algolia-pro' ); ?>
						</th>
						<td>
							<strong style="color:green;"><?php esc_html_e( 'Active', 'wp-search-with-algolia-pro' ); ?></strong>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php wp_nonce_field( $this->nonce, $this->nonce ); ?>
			<?php submit_button(); ?>
		</form>
		<?php
	}

	/**
	 * Returns the URL for our settings page.
	 *
	 * May be network admin or single site.
	 *
	 * @since 1.3.0
	 * @return string|null
	 */
	private function get_license_page_admin_url(): string {
		return ( Utils::wpswa_pro_is_network_activated() ) ?
			network_admin_url( 'admin.php?page=' . $this->page_slug ) :
			admin_url( 'admin.php?page=' . $this->page_slug );
	}
}
