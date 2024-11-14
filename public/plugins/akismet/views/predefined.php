<div class="akismet-box">
	<h2><?php esc_html_e( 'Manual Configuration', 'akismet' ); ?></h2>
	<p>
		<?php

		/* translators: %s is the config.php file */
		echo sprintf( esc_html__( 'An Akismet API key has been defined in the %s file for this site.', 'akismet' ), '<code>config.php</code>' );

		?>
	</p>
</div>