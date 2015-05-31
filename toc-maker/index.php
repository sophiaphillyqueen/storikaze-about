<?php
$original_page_info = array (
  "srfile" => __FILE__,
  "pgtitle" => "The Table of Contents Generator"
);
require_once "../framework/main.php";
srkd_header();
?>

<p class = "first">
The Table of Contents generator generates WordPress code that
can serve as a Table of Contents for a site using Storikaze's
<?php hllink("WordPress plugin","wp-plugin") ?>.
</p>

<p class = "standard">
The TOC generator is available from GitHub at project-URL: <?
oslink("https://github.com/sophiaphillyqueen/storikaze-toc-maker") ?>.
</p>

<h3>Installation</h3>

<p class = "standard">
To download the Storikaze TOC generator, first thing you should do
is, within your home directory, create a sub-directory named "bin",
and make sure it is on your execution path.
(Later versions of the installer may be more flexible, but the
current version only installs in "bin" in your home directory.)
</p>

<p class = "standard">
Next, go to whatever directory in which you wish to store the static
resources for this utility, and type (or copy-paste) the following litany:
</p>

<?php srkd_code("install-code-01"); ?>

<p class = "standard">
It should be noted that the directory created in this command
is not merely the source-code directory to be kept or disposed-of
at your behest upon the completion of installation.
Rather, it is the full static-resource directory, and will need
to remain at it's present location for this utility to work.
If you delete it, you will break the utility -- and if you
move it to a different location, you must upon doing so re-run the installation
script (that is, "install.sh") in order to avoid breaking the utility.
</p>

<p>
As a matter of fact, the only thing that gets <em>installed</em> by
this installation script is the outer-wrapper of this utility -
who's sole function is pretty-much to be the utility's presence
on the command-line execution path. The outer-wrapper in turn
will invoke the inner-wrapper (which is located in this newly
created directory) which does the bulk of the command-line parsing
before calling the core of the utility, which is a tree of PHP scripts.
</p>

<p>
You may complain that this is a very non-standard way of packaging
software --- but remember, the standard way of doing these things
was developed long before there ever was a such thing as Git
or <?php oslink("Github","http://github.com"); ?> - and as such,
doesn't take full advantage of such technologies.
Due to the way this software is designed, it can be kept
up-to-date with a simple "git pull" operation.
Rarely if ever will keeping the software up-to-date involve
any more than that, because the only thing that is "installed"
per-se by the installation script is the outer wrapper, which
should rarely if ever change.
</p>

<?php srkd_footer(); ?>