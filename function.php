    function text_after_content($content) {
    if(!is_feed() && !is_home()) {
    $content.= "<h2>This is title</h2>";
    $content.= "<p>This is <a href='http://yourlink.com'>text</a></p>";
    }
    return $content;
    }

    add_filter ('the_content', 'text_after_content');
