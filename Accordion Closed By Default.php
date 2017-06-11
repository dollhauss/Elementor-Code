/*--ACCORDION CLOSED BY DEFAULT--*/

function elementor_accordion_title() { ?>
	<script>
		jQuery(document).ready(function() {
			jQuery( '.elementor-accordion-title' ).removeClass( 'active' );
			jQuery( '.elementor-accordion-content' ).css( 'display', 'none' );
		});
	</script>
<?php }
add_action( 'wp_footer', 'elementor_accordion_title', 99 );
