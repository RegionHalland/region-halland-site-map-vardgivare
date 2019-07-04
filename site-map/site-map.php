<?php 
    
    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    	
	$wp_did_header = true;
  	require_once($_SERVER['DOCUMENT_ROOT'] . '/index.php');
  	$matches = preg_grep('/wp-blog-header.php/', get_included_files());
  	if (!empty($matches)) {
    	$abspath = dirname(reset($matches)) . '/';
    	define('ABSPATH', $abspath);
    	require_once(ABSPATH . 'wp-load.php');
  	}

	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	);
	
	$myPages = get_pages($args);

?>	
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	foreach ($myPages as $page) {
	 	$strPermaLink = get_permalink($page->ID);
	?>
	<url>
      <loc><?=$strPermaLink?></loc>
   </url>
	<?php } 
?>
</urlset>