<?php
$original_page_info = array (
  "srfile" => __FILE__,
  "pgtitle" => "Welcome to Storikaze"
);
require_once "framework/main.php";
srkd_header();
?>

<p class = "first">
Storikaze is a set of programs which (combined with <? oslink("http://wordpress.org","WordPress software"); ?>)
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

<?php srkd_footer(); ?>