<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package project_studio-portfolio
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses project_studio_portfolio_header_style()
 */
function project_studio_portfolio_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'project_studio_portfolio_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => true,
		'flex-width'            => true,
		'wp-head-callback'       => 'project_studio_portfolio_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'project_studio_portfolio_custom_header_setup' );

if ( ! function_exists( 'project_studio_portfolio_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see project_studio_portfolio_custom_header_setup().
	 */
	function project_studio_portfolio_header_style() {
		$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-image' ) === $header_image ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the image been hidden?
		if ( ! has_header_image() ) :
			?>
			
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			#masthead {
				background-image: url('<?php echo esc_attr( $header_image ); ?>');
			}
		<?php endif; ?>
		
		</style>
		<?php
	}
endif;
