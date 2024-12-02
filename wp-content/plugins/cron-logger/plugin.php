<?php
/**
 * Plugin Name: Cron Logger
 * Description: Logs for wp-cron.php runs.
 * Version: 1.3.0
 * Requires at least: 5.3
 * Tested up to: 6.6.2
 * Author: Palasthotel <rezeption@palasthotel.de> (Edward Bock)
 * Author URI: https://palasthotel.de
 * Domain Path: /languages
 * Text Domain: cron-logger
 * Requires PHP: 8.1
 * @copyright Palasthotel
 * @package Palasthotel\CronLogger
 */

namespace CronLogger;

require_once dirname( __FILE__ ) . "/vendor/autoload.php";

class Plugin extends Components\Plugin {

	/**
	 * ---------------------------------------------
	 * constants
	 * ---------------------------------------------
	 */
	const DOMAIN = "cron-logger";

	const ACTION_INIT = "cron_logger_init";

	const ACTION_WP_CRON_START = "cron_logger_wp_cron_start";
	const ACTION_WP_CRON_FINISH = "cron_logger_wp_cron_shutdown";

	const FILTER_EXPIRE = "cron_logger_expire";

	const TABLE_LOGS = "cron_logs";
	const OPTION_VERSION = "_cron_logger_version";

	const SCHEDULE = "cron_logger";

	public Timer $timer;
	public Log $log;

	/**
	 * Plugin constructor
	 */
	function onCreate(): void {

		$this->loadTextdomain(
			Plugin::DOMAIN,
			"languages"
		);

		$this->timer    = new Timer();
		$this->log      = new Log();
		new Updates( $this );
		new Services( $this );
		new Page( $this );
		new Schedule($this);
		new Ajax($this);
	}

	/**
	 * on activation
	 */
	function onSiteActivation(): void {
		$this->log->createTables();
	}
}

Plugin::instance();
