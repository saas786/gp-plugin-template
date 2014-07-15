<?php
gp_title( sprintf( __('Plugin Template &lt; %s &lt; GlotPress'), esc_html( $project->name ) ) );
gp_breadcrumb( array(
	gp_project_links_from_root( $project ),
	__('Plugin Template')
) );
gp_tmpl_header();
?>
	<h2><?php printf( __('Plugin Template %s'), $project->name ); ?></h2>


<?php gp_tmpl_footer();