<?php if(!is_single()) : ?>
	<div class="map-sidebar">
		<div class="viewing-post">
		</div>
		<?php
		if(is_front_page() && !is_paged())
			get_template_part('section', 'sticky-posts');
		?>
	</div>
<?php endif; ?>
<div class="map-container"><div id="map_<?php echo jeo_get_map_id(); ?>" class="map"></div></div>
<script type="text/javascript">jeo(<?php echo jeo_map_conf(); ?>);</script>
