/** Register Block Styles
 * --------------------------------------------- */
import { registerBlockStyle } from '@wordpress/blocks';

/* ---- */
/**
 * Core Cover
 */
// wp.blocks.registerBlockStyle( 'core/cover', {
// 	name: 'cover--bittnerkrull-vorteile',
// 	label: 'BK Vorteile',
// } );

wp.blocks.registerBlockStyle( 'core/cover', {
	name: 'bittnerkrull-cover-hover-reveal',
	label: 'BK Hover Reveal',
} );

wp.blocks.registerBlockStyle( 'core/cover', {
	name: 'cover-link',
	label: 'Link',
} );

/**
 * Core Gallery
 */

wp.blocks.registerBlockStyle( 'core/gallery', {
	name: 'bittnerkrull-frontpage-logos',
	label: 'BK Logo Wall',
} );

/**
 * Core List
 */
wp.blocks.registerBlockStyle( 'core/list', {
	name: 'list-checkmark',
	label: 'Checkmark',
} );

wp.blocks.registerBlockStyle( 'core/list', {
	name: 'list-crossmark',
	label: 'Crossmark',
} );

/**
 * Core Paragraph
 */
wp.blocks.registerBlockStyle( 'core/paragraph', {
	name: 'paragraph-kicker',
	label: 'Kicker Text',
} );

wp.blocks.registerBlockStyle( 'core/paragraph', {
	name: 'paragraph-intro',
	label: 'Intro Text',
} );
