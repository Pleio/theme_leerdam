<?php
?>
/* <style> */

/* Theme Specific */

.theme-leerdam-header-graydient {
	position: absolute;
	top: 0px;
	right: 0px;
}

.theme-leerdam-header-lieke {
	position: absolute;
	top: 10px;
	left: 10px;
}

.theme-leerdam-header-leerdam {
	position: absolute;
	right: 10px;
	top: 10px;
}

.theme-leerdam-widget-vijfheerenlanden .elgg-widget-content {
	background: url(<?php echo THEME_GRAPHICS; ?>logo_vijfheerenlanden.png) center 12px no-repeat;
	padding-top: 110px;
}

.theme-leerdam-widget-vijfheerenlanden .elgg-widget-content a {
	color: #<?php echo THEME_COLOR_6;?>;
}

.theme-leerdam-widget-vijfheerenlanden .elgg-list li:before {
	content: "\25BA";
	padding-right: 5px;
}
.theme-leerdam-widget-vijfheerenlanden .elgg-list li > div {
	display: inline;
}

.theme-leerdam-widget-glz-news-header {
	position: relative;
}

.theme-leerdam-widget-glz-news-header img {
	width: 100%;
}

.theme-leerdam-widgets-glz-news-news {
	position: absolute;
	bottom: 4px;
	width: 100%;
}

.theme-leerdam-widgets-glz-news-text {
	color: white;
	padding: 5px;
	position: relative;
}

.theme-leerdam-widgets-glz-news-overlay {
	background: black;
	opacity: 0.6;
	position: absolute;
	width: 100%;
	color: transparent;
	padding: 5px 0;
}

.theme-leerdam-widget-giessenlanden {
	background-color: #<?php echo THEME_COLOR_3;?>;
}

.theme-leerdam-widget-giessenlanden > .elgg-head {
	background: #<?php echo THEME_COLOR_3;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/giessenlanden.png) top right no-repeat;
}

.theme-leerdam-widget-zederik {
	background-color: #<?php echo THEME_COLOR_5;?>;
}

.theme-leerdam-widget-zederik > .elgg-head {
	background: #<?php echo THEME_COLOR_5;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/zederik.png) top right no-repeat;
}

.theme-leerdam-widget-leerdam {
	background-color: #<?php echo THEME_COLOR_4;?>;
}

.theme-leerdam-widget-leerdam > .elgg-head {
	background: #<?php echo THEME_COLOR_4;?> url(<?php echo THEME_GRAPHICS; ?>widgets/glz_news/leerdam.png) top right no-repeat;
}

.elgg-widget-instance-glz_news .elgg-widget-content {
	padding: 0px;
}

.elgg-widget-instance-glz_news .elgg-output {
	margin: 0 0 0 5px;
}

.elgg-widget-instance-glz_news .elgg-output ul {
	margin: 0px;
}
.elgg-widget-instance-glz_news .elgg-output ul a{
	color: #<?php echo THEME_COLOR_6; ?>;
}
.elgg-widget-instance-glz_news .elgg-menu-item-collapse {
	display: none;
}
.elgg-widget-instance-glz_news > .elgg-head h3 {
	padding-left: 4px;
}

/* special blog widget header */
.theme-leerdam-widgets-blog {
	overflow: visible;
}

.theme-leerdam-widgets-blog.elgg-module-widget > .elgg-head {
	background-color: white;
}

.theme-leerdam-widgets-blog .elgg-menu-item-collapse {
	display: none;
}

.theme-leerdam-widgets-blog.elgg-module-widget > .elgg-head h3 {
	background: url(<?php echo THEME_GRAPHICS; ?>widgets/widgets-blog.png) top center no-repeat;
	color: transparent;
	font-size: 0px;
	padding: 0;
	float: none;
	width: 100%;
	height: 40px;
	position: absolute;
	top: -7px;
}

.elgg-list,
.elgg-list .elgg-item {
	border: none;
}

.elgg-list .elgg-item {
	padding: 5px;
}

.elgg-list-entity .elgg-item:nth-child(odd) {
	background: #ececec;
}
.elgg-list-entity .elgg-item:nth-child(even) {
	background: #f4f4f4;
}

#elgg-widget-col-1.elgg-col-1of3 {
	width: 20%;
}

#elgg-widget-col-1.elgg-col-1of3 .elgg-module-widget {
	margin-bottom: 10px;
}

#elgg-widget-col-2.elgg-col-1of3 {
	width: 26%;
	margin-right: 2%;
}
#elgg-widget-col-3.elgg-col-1of3 {
	width: 50%;
	margin-right: 2%;
}

#elgg-widget-col-3 .elgg-module-widget > .elgg-head {
	background-color: #<?php echo THEME_COLOR_3; ?>;
}

#elgg-widget-col-3 .elgg-widget-content h3,
#elgg-widget-col-3 .elgg-widget-content h3 a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

.elgg-widget-instance-search > .elgg-head {
	background: transparent url(<?php echo THEME_GRAPHICS; ?>bouwsteen_zoeken.png) top right no-repeat;
}

.elgg-widget-instance-search > .elgg-head h3 {
	color: #ba9b00;
	padding-left: 10px;
}

.elgg-widget-instance-search > .elgg-head h3 a {
	color: #ba9b00;
}

.elgg-widget-instance-search > .elgg-body {
	background: #<?php echo THEME_COLOR_2; ?>;
}

.elgg-widget-instance-search > .elgg-body h2,
.elgg-widget-instance-search > .elgg-body a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-widget-instance-search .elgg-widget-content .elgg-button {
	display: block;
	float: right;
	margin-top: 5px;
	background: #B99B00;
	border-color: #B99B00;
	color: #FFF;
}

.elgg-widget-instance-search .elgg-widget-content .elgg-menu-entity {
	display: none;
}

.theme-leerdam-nieuws-listing .elgg-tags,
.theme-leerdam-nieuws-listing .elgg-image {
	display: none;
}

.theme-leerdam-nieuws-listing .blog_tools_blog_image {
	border: none;
	padding: 0;
	margin: 3px 5px 0 0;
}

.theme-leerdam-nieuws-listing .elgg-content img {
    height: 60px;
    width: 60px;
}

.leerdam-rood > .elgg-head,
.elgg-widget-instance-index_members > .elgg-head {
	background: transparent url(<?php echo THEME_GRAPHICS; ?>bouwsteen_collegas.png) top right no-repeat;
}

.leerdam-rood > .elgg-head h3,
.elgg-widget-instance-index_members > .elgg-head h3 {
	color: #<?php echo THEME_COLOR_3; ?>;
	padding-left: 10px;
}

.leerdam-rood > .elgg-head h3 a,
.elgg-widget-instance-index_members > .elgg-head h3 a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

.leerdam-rood .elgg-menu-item-collapse {
	display: none;
}

.elgg-widget-instance-index_members > .elgg-body {
	background: #<?php echo THEME_COLOR_3; ?>;
}

.elgg-widget-instance-index_members .elgg-gallery-users > li {
	margin: 0 3px 0 0;
}

.elgg-widget-instance-birthdays > .elgg-head {
	background: transparent url(<?php echo THEME_GRAPHICS; ?>bouwsteen_verjaardagen.png) top right no-repeat;
}

.elgg-widget-instance-birthdays > .elgg-head h3 {
	color: #<?php echo THEME_COLOR_5; ?>;
	padding-left: 10px;
}
.elgg-widget-instance-birthdays > .elgg-head h3 a {
	color: #<?php echo THEME_COLOR_5; ?>;
}

.elgg-widget-instance-birthdays > .elgg-body {
	background: #<?php echo THEME_COLOR_5; ?>;
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-widget-instance-birthdays > .elgg-body a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-widget-instance-birthdays > .elgg-body .elgg-content,
.elgg-widget-instance-birthdays > .elgg-body a:hover {
	color: white;
}

.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item {
	margin: 0 -10px;
	padding: 5px 10px;
}

.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item:nth-child(odd) {
	background: transparent;
}
.elgg-widget-instance-birthdays .elgg-list-entity .elgg-item:nth-child(even) {
	background: #61b9e1;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-head {
	background: transparent url(<?php echo THEME_GRAPHICS; ?>bouwsteen_nieuws.png) top right no-repeat;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-head h3 {
	color: #<?php echo THEME_COLOR_1; ?>;
	padding-left: 10px;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-head h3 a {
	color: #<?php echo THEME_COLOR_1; ?>;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-body {
	background: #<?php echo THEME_COLOR_1; ?>;
	color: #<?php echo THEME_COLOR_6; ?>;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-body a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

#elgg-widget-col-1 .elgg-widget-instance-rss > .elgg-body a:hover {
	color: white;
}

.elgg-widget-instance-rss .elgg-widget-collapse-button,
.elgg-widget-instance-birthdays .elgg-widget-collapse-button,
.elgg-widget-instance-index_members .elgg-widget-collapse-button,
.elgg-widget-instance-search .elgg-widget-collapse-button {
	display: none;
}

.theme-leerdam-rss-listing .elgg-widget-content > div > a:before {
	content: "\25BA";
	padding-right: 5px;
}

.elgg-sidebar a,
.elgg-sidebar .elgg-head h3,
.elgg-sidebar .elgg-head h3 a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-sidebar a:hover {
	color: white;
}

.elgg-sidebar .elgg-subtext {
	color: #<?php echo THEME_COLOR_7; ?>;
}

.profile {
	width: 78%;
}

.profile .elgg-inner {
	margin: 0;
	border: none;
}

#profile-owner-block {
	background: #<?php echo THEME_COLOR_3; ?>;
	border: none;
}

#profile-details .odd,
#profile-details .even {
	background: #efefef;
}

#profile-details h3,
#profile-details #custom_fields_userdetails .ui-accordion-header {
	border: none;
	background: transparent;
	color: #<?php echo THEME_COLOR_6; ?>;
	padding: 5px 0px;
}

#profile-details a {
	color: #<?php echo THEME_COLOR_3; ?>;
}

.elgg-widget-instance-glz_news .elgg-list-entity .elgg-item {
	background: white;
}

.elgg-widget-instance-glz_news .elgg-list-entity li:before {
	content: "\25BA";
	padding-right: 5px;
}

.elgg-widget-instance-glz_news .elgg-list-entity a {
	color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-widget-edit .elgg-input-dropdown {
	max-width: 160px;
}
