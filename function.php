function text_after_content($content) {
if(!is_feed() && !is_home()) {
$content.= "<h2>Want more awesome snippets like this one?</h2>";
$content.= "<p>Don’t forget to check them at  <a href='http://firstsiteguide.com'>WP Loop</a></p>";
}
return $content;
}

add_filter ('the_content', 'text_after_content');
