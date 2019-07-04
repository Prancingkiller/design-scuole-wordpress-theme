<?php
$argomenti = dsi_get_argomenti_of_post();
if(count($argomenti)) {
	?>
		<div class="badges mb-2">
			<?php foreach ( $argomenti as $item ) { ?>
				<a href="<?php echo get_term_link($item); ?>" title="<?php _e("Vai all'argomento", "design_scuole_italia"); ?>: <?php echo $item->name; ?>"
				   class="badge badge-sm badge-pill badge-outline-purplelight"><?php echo $item->name; ?></a>
			<?php } ?>
		</div><!-- /badges -->
	<?php
}