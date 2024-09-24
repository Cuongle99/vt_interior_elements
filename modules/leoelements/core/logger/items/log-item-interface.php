<?php
/**
 * 2007-2022 Apollotheme
 *
 * NOTICE OF LICENSE
 *
 * LeoElements is module help you can build content for your shop
 *
 * DISCLAIMER
 *
 *  @author    Apollotheme <apollotheme@gmail.com>
 *  @copyright 2007-2022 Apollotheme
 *  @license   http://apollotheme.com - prestashop template provider
 */

namespace LeoElements\Core\Logger\Items;

use LeoElements\Leo_Helper; 

if ( ! defined( '_PS_VERSION_' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Interface Log_Item_Interface
 *
 * @package Elementor\Core\Logger
 *
 * @property string $date
 * @property string $type
 * @property string $message
 * @property int $times
 * @property array $meta
 * @property array $times_dates
 * @property array $args
 *
 */

interface Log_Item_Interface extends \JsonSerializable {

	const MAX_LOG_ENTRIES = 42;

	/**
	 * Log_Item_Interface constructor.
	 *
	 * @param array $args
	 */
	public function __construct( $args );

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function __get( $name );

	/**
	 * @return string
	 */
	public function __toString();

	/**
	 * @param $str
	 * @return Log_Item_Interface | null
	 */
	public static function from_json( $str );

	/**
	 * @param string $format
	 * @return string
	 */
	public function format( $format = 'html' );

	/**
	 * @return string
	 */
	public function get_fingerprint();

	/**
	 * @param Log_Item_Interface $item
	 * @param bool               $truncate
	 */
	public function increase_times( $item, $truncate = true );

	/**
	 * @return string
	 */
	public function get_name();
}
