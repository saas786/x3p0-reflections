<?php
/**
 * Registers quote block styles.
 *
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2022 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://github.com/x3p0-dev/x3p0-profile
 */

register_block_style( 'core/separator', [
	'name' => 'hand-drawn',
	'label' => __( 'Hand Drawn', 'x3p0-profile' )
] );

register_block_style( 'core/separator', [
	'name' => 'hatched',
	'label' => __( 'Hatched', 'x3p0-profile' )
] );

register_block_style( 'core/separator', [
	'name' => 'scallop-down',
	'label' => __( 'Scallop Down', 'x3p0-profile' )
] );

register_block_style( 'core/separator', [
	'name' => 'scallop-up',
	'label' => __( 'Scallop Up', 'x3p0-profile' )
] );
