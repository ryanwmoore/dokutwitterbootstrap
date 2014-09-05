# About

This special branch of dokutwitterbootstrap is an attempt to integrate the
devoops bootstrap theme (http://www.bootstrapstage.com/devoops/) with this
project. It is not a totally finished project/branch.

See template.info.txt for main info

Effort has been put into making the template's public facing content look okay.
Some back end functionality (e.g., the admin interface) may look distorted, but
should still be functional.

# Installation from Github

Do something like the following:

1. Install DokuWiki as you normally would. See
   [DokuWiki.org](https://www.dokuwiki.org).
2. ```cd dokuwiki/lib/tpl```
3. ```mkdir dokutwitterbootstrap```
4. ```cd dokutwitterbootstrap```
5. ```git init```
6. ```git pull git://github.com/ryanwmoore/dokutwitterbootstrap.git devoops```
7. Using DokuWiki's admin interface, change the wiki's template to
   dokutwitterbootstrap.

##  Bugs

The only major ``bug'' that I am aware of is that, when attempting to upload a
new file to the median manager, a file upload button might not appear.  Click on
the words "select files..." and the file upload select box will appear.

# DokuWiki Specifics

This template supports the use of a ```nav.html``` file (a sample is included).
Add any Wiki-wide links that you would like to, with each link being inside an
li element. I tried adding support for a Wiki-based navigation page, instead of
raw HTML, but due to how DokuWiki outputs lists, the output clashed with
existing CSS and was unusable.

This template does support a ```footer.html``` file, which will be output after
the page information and site license.

This template does support a ```meta.html``` file, which will be output right
before the head element is closed.

# License

This DokuWiki theme is based off of the [DokuWiki Starter
template](https://github.com/selfthinker/dokuwiki_template_starter/), released
under GPL v2.0. Therefore, this template is also released under that license.
I've modified the starter template to make use of Twitter Bootstrap
code/functionality. Twitter Bootstrap is licensed under Apache License v2.0.
According to http://www.apache.org/licenses/GPL-compatibility.html , the Free
Software Foundation does not consider GPL2 to be compatible with Apache 2.0. I
don't really know how much it matters to the average user. Consult a lawyer if
you're worried about this potential incompatibility.

This special branch builds off of the bootstrap devoops theme. That theme is
licensed under the MIT license.

# Disclaimer

I'm not intimately familiar with either DokuWiki template coding or Bootstrap.
I may have done stupid things. If so, please make appropriate changes and
send a pull request.

