<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>
<img class="theme-leerdam-header-lieke" src="<?php echo $site_url; ?>mod/theme_leerdam/_graphics/logo_lieke.png"></img>
<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		&nbsp;
	</a>
</h1>
<img class="theme-leerdam-header-graydient" src="<?php echo $site_url; ?>mod/theme_leerdam/_graphics/header_graydient.png"></img>
<img class="theme-leerdam-header-leerdam" src="<?php echo $site_url; ?>mod/theme_leerdam/_graphics/logo_intranet_leerdam.png"></img>