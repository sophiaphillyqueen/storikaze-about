<?php
$original_page_info = array (
  "srfile" => __FILE__,
  "pgtitle" => "Welcome to Storikaze"
);
require_once "framework/main.php";
srkd_header();
?>

<p class = "first">
Storikaze is a set of programs which (combined with <? oslink("WordPress software","http://wordpress.org"); ?>)
will allow you to more effectively publish a web-serial.
</p>

<p class = "standard">
The name, "Storikaze", is a portmanteau of "Comikaze", which was the name of a content-management
for web-comics that was once very prominent in the webcomic community.
Originally, the goal of Storikaze was to build a program that would do for web-serial fiction
(i.e., the written form) what Comikaze did for webcomics.
It was later on that it was decided that instead of implementing Storikaze as a
stand-alone system, it would be better to write software that built upon WordPress.
</p>

<p class = "standard">
The main component of the Storikaze toolchain is the <? lclink("WordPress plugin","wp-plugin"); ?>.
Other tools in the toolchain make it easier to work with the WordPress plugin --- however, none
of them have any use at all <em>except</em> in the context of the WordPress plugin -- however,
the WordPress plugin still has some usability even on it's own. For example, the <?
lclink("Table of Contents generator","toc-maker"); ?> makes the process of generating a
Table of Contents for your webfiction easier.
However, without it, it is still possible (albeit harder) to put together a Table of Contents by hand
--- or (in the case of a really short webfiction) even do without the Table of Contents altogether.
However, the reverse is not true. The Table of Contents generator relies on metadata that is hidden in
the post's text-field in one WordPress shortcode that doesn't exist without the Storikaze plugin
- and produces output that relies on WordPress shortcodes that <em>also</em> don't exist
without the Storikaze plugin to implement text-scheduling and date-anticipation.
</p>

<?php srkd_footer(); ?>