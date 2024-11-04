/** Register Block Variations
 * --------------------------------------------- */
import {
	registerBlockStyle,
	unregisterBlockStyle
} from '@wordpress/blocks';


/**
 * Core Sapcer
 */
	wp.blocks.registerBlockVariation('core/spacer', {
		name: 'spacer',
		title: 'Spacer',
		isDefault: true,
		attributes: {
			height: 'var:preset|spacing|40',
		},
	});

