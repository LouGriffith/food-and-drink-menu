

<section<?php echo fdm_format_classes( $this->classes ); ?>>
	<header class="fdm-section-header">
		<h3><?php echo $this->title; ?></h3>
		
		<?php if ( $this->description ) : ?>
			<p><?php echo $this->description; ?></p>
		<?php endif; ?>
	</header>
	<?php 
		$term_id = $this->id;
		$term_meta = get_option( 'fdm-menu-section_' . $term_id );
		$my_cf = $term_meta[ 'custom_term_meta' ];
		echo $my_cf;
	?>
	<ul class="fdm-items <?php echo $menu_style; ?>">
		<?php echo $this->print_items(); ?>
	</ul>
</section>