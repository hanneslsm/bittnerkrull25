/** Register Block Styles
 * --------------------------------------------- */

/**
 * Core Cover
 */
wp.blocks.registerBlockStyle('core/cover', {
	name: 'cover--bittnerkrull-vorteile',
	label: 'BK Vorteile',
});

wp.blocks.registerBlockStyle('core/cover', {
	name: 'cover--bittnerkrull-produkte',
	label: 'BK Produkte',
});


/**
 * Core Details
 */
wp.blocks.registerBlockStyle('core/details', {
	name: 'details-plus',
	label: 'Plus style',
});


/**
 * Core Group
 */
wp.blocks.registerBlockStyle('core/group', {
	name: 'group-spotlight',
	label: 'Hover: Spotlight',
});


wp.blocks.registerBlockStyle('core/group', {
	name: 'group--bittnerkrull-logo-wall',
	label: 'BK Logo Wall',
});

/**
 * Core Paragraph
 */
wp.blocks.registerBlockStyle('core/paragraph', {
	name: 'paragraph-kicker',
	label: 'Kicker Text',
});

wp.blocks.registerBlockStyle('core/paragraph', {
	name: 'paragraph-intro',
	label: 'Intro Text',
});


/**
 * Core Image
 */
wp.blocks.registerBlockStyle('core/image', {
	name: 'image--bittnerkrull-screenshot',
	label: 'BK Screenshot',
});


/**
* Multiple Blocks
*/

['core/group', 'core/paragraph'].forEach(block => {
	wp.blocks.registerBlockStyle(block, {
		name: 'on-mobile-left',
		label: '📱 Left',
	});
});

['core/group', 'core/paragraph'].forEach(block => {
	wp.blocks.registerBlockStyle(block, {
		name: 'on-tablet-left',
		label: '📱📺 Left',
	});
});
