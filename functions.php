<?php //Functions collection 

require_once locate_template('/functions/theme-support.php');
require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/scripts-styles-fonts.php');
require_once locate_template('/functions/seo.php');
require_once locate_template('/functions/templates.php');
require_once locate_template('/functions/search-action.php');
require_once locate_template('/functions/related-posts.php');
require_once locate_template('/functions/comments-layout.php');
require_once locate_template('/functions/widgets.php');

//Admin Area
require_once locate_template('/functions/admin/admin-category.php');
require_once locate_template('/functions/admin/admin-user.php');
require_once locate_template('/functions/admin/admin-welcome.php');

//Customize the Theme
require_once locate_template('/customizer/customizer.php');
