<?php
/**
 * This partial is used in the Settings_Network class.
 *
 * @author  WebDevStudios <contact@webdevstudios.com>
 * @since   1.3.0
 * @package WebDevStudios\WPSWAPro
 */

namespace WebDevStudios\WPSWAPro;
?>

<div class="wpswap-sites-status">
	<h2><?php esc_html_e( 'Current sites status', 'wp-search-with-algolia-pro' ); ?></h2>
	<table class="wp-list-table widefat plugins striped">
		<thead>
		<tr>
			<th><?php esc_html_e( 'ID', 'wp-search-with-algolia-pro' ); ?></th>
			<th><?php esc_html_e( 'Name', 'wp-search-with-algolia-pro' ); ?></th>
			<th><?php esc_html_e( 'Path', 'wp-search-with-algolia-pro' ); ?></th>
			<th><?php esc_html_e( 'Search engine visibility', 'wp-search-with-algolia-pro' ); ?></th>
		</tr>
		</thead>
		<tfoot>
		<tr>
			<td><?php esc_html_e( 'ID', 'wp-search-with-algolia-pro' ); ?></td>
			<td><?php esc_html_e( 'Name', 'wp-search-with-algolia-pro' ); ?></td>
			<td><?php esc_html_e( 'Path', 'wp-search-with-algolia-pro' ); ?></td>
			<td><?php esc_html_e( 'Search engine visibility', 'wp-search-with-algolia-pro' ); ?></td>
		</tr>
		</tfoot>

		<?php
		$sites = Utils::get_network_and_visibilities();
		foreach( $sites as $site ) { ?>
			<tr>
				<td><?php echo esc_html( $site['id'] ); ?></td>
				<td><?php echo esc_html( $site['name'] ); ?></td>
				<td>
					<?php
						printf(
							'<a href="%s">%s</a>',
							get_site_url(
								$site['id'],
								esc_url( '/wp-admin/admin.php?page=algolia-account-settings'
								)
							),
							esc_html( $site['site'] )
						);
					?>
				</td>
				<td><?php echo esc_html( $site['visibility'] ); ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</div>
