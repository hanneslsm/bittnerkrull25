<?php
/**
 * Register the 'case_study_pdf' meta field for posts.
 *
 * This meta field stores the URL of a case study PDF and is exposed via the REST API.
 *
 * @since 1.0.0
 */
function bittnerkrull_register_case_study_pdf_meta() {

	$args = array(
		'type'         => 'string',
		'description'  => 'URL of the case study PDF',
		'single'       => true,
		'show_in_rest' => true,
		'auth_callback' => function() {
			return current_user_can( 'edit_posts' );
		},
	);

	register_meta( 'post', 'case_study_pdf_link', $args );
}
add_action( 'init', 'bittnerkrull_register_case_study_pdf_meta' );
