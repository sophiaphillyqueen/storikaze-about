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

<h3>Installation - basic (read this first)</h3>

<p class = "standard">
To download the Storikaze TOC generator, first thing you should do
is, within your home directory, create a sub-directory named "bin",
and make sure it is on your execution path.
Of course, if you wish to install it somewhere else, <a href = "#install_cstlc">there
does exist a way to do this</a> - but since this is the most basic way, it is probably a good idea to at least <em>read</em> this section first.
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

<p class = "standard">
As a matter of fact, the only thing that gets <em>installed</em> by
this installation script is the outer-wrapper of this utility -
who's sole function is pretty-much to be the utility's presence
on the command-line execution path. The outer-wrapper in turn
will invoke the inner-wrapper (which is located in this newly
created directory) which does the bulk of the command-line parsing
before calling the core of the utility, which is a tree of PHP scripts.
</p>

<p class = "standard">
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

<a name = "install_cstlc" /><h3>Installation - at a custom location</h3>

<p class = "standard">
Now - there is a way to install the TOC generator at a place other than "bin"
in your home directory. There can be any number of possible reasons <em>why</em>
you would want to do this. This document doesn't second-guess what
those reasons might be --- however, for the sake of example, this document
will <em>assume</em> that you are installing it in the directory <b>/some/crazy/bin</b>.
If that is not where you are wanting to install it, these directions should
translate to whatever place you <em>do</em> want to install it very easily.
<p class = "standard">

<p class = "standard">
First thing, you obviously have to make sure that <b>/some/crazy/bin</b> is in your executions path - and if you are installing this utility to share with fellow users, it will also have to be on <em>their</em> execution path.
This, of course, will only allow you to share it with users who have both read-permission and execute-permission to <b>/some/crazy/bin</b>.
You, of course, in addition to all these privileges will <em>also</em> need <em>write</em> privileges -- but you are the <em>only</em> one who needs <em>write</em> privileges.
</p>

<p class = "standard">
Then, select a directory in which to install the static-resource files.
This needs to be a directory that you have both read <em>and</em> write
permissions ---- and that everyone <em>else</em> you want to share the utility
with has <em>read</em> permissions.
Upon selecting that directory, <em>go</em> to that directory, and from there,
type (or copy-paste) the following litany:
</p>

<?php srkd_code("install-code-02"); ?>

<p class = "standard">
This works because "install.sh" checks for the file "ins-opt-code/dir-of-install.txt" (pathname relative to the directory in which "install.sh" resides) -- and if that file exists, it replaces the path of the directory in which to install the command with the contents of that file.
It is important, though, that the path specified in "ins-opt-code/dir-of-install.txt" is an absolute path, not a relative one.
</p>


<?php srkd_footer(); ?>