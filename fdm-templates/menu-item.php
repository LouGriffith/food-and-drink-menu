<?php if ( $this->is_singular() ) : ?>
<div id="<?php echo fdm_global_unique_id(); ?>" class="fdm-menu fdm-menu-item">
<?php endif; ?>

	<?php if ( $this->is_singular() ) : ?>
	<div<?php echo fdm_format_classes( $this->classes ); ?>>
	<?php else : ?>
	<li<?php echo fdm_format_classes( $this->classes ); ?>>
	<?php endif; ?>

		<?php echo $this->print_elements( 'header' ); ?>

		<div class="fdm-item-panel">

			<?php echo $this->print_elements( 'body' ); ?>
			<?php 
				if ( current_user_can('edit_post') ) { ?>
					<a class="fdm-edit-item" href="<?php echo get_edit_post_link( $this->id ); ?>">Edit Item</a>
			<?php } ?>
			<div class="clearfix"></div>
		</div>

		<?php echo $this->print_elements( 'footer' ); ?>

	<?php if ( $this->is_singular() ) : ?>
	</div>
	<?php else : ?>
	</li>
	<?php endif; ?>


<?php if ( $this->is_singular() ) : ?>
</div>
<?php endif; ?>
