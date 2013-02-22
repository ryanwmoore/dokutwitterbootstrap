See template.info.txt for main info
See COPYING for license info

**This software is in an extremely early alpha version. It's recommended that
you set your expectations low.**

# About

This "theme" is actually intended to be modified with a Twitter Bootstrap theme
of your choice. Twitter Bootstrap is a framework to create websites that work
and look great in a range of devices and browsers.  It's quite customizable and
there's many themes available for free and/or pay.

Effort has been put into making the template's public facing content look okay.
Some back end functionality (e.g., the admin interface) may look distorted, but
should be useful.

# License

This DokuWiki theme is based off of the DokuWiki Starter template, released
under GPL v2.0. Therefore, this template is also released under that license.
I've modified the starter template to make use of Twitter Bootstrap
code/functionality. Twitter Bootstrap is licensed under Apache License v2.0.
According to http://www.apache.org/licenses/GPL-compatibility.html , the Free
Software Foundation does not consider GPL2 to be compatible with Apache 2.0. I
don't really know how much it matters to the average user. Consult a lawyer if
you're worried about this incompatibility. 

# Installation from Github

Do something like the following:

1. Install DokuWiki as you normally would. See
   [DokuWiki.org](https://www.dokuwiki.org).
2. ```cd dokuwiki/lib/tpl```
3. ```mkdir dokutwitterbootstrap```
4. ```cd dokutwitterbootstrap```
5. ```git init```
6. ```git pull git://github.com/ryanwmoore/dokutwitterbootstrap.git```
7. Using DokuWiki's admin interface, change the wiki's template to
   dokutwitterbootstrap.

# Customization

This DokuWiki theme will get you started with a very basic Twitter Boostrap
theme. Then, replace the following files with your own Bootstrap files:

* css/
    * bootstrap.min.css
    * bootstrap-responsive.min.css
    * modifications.css: place minor global modifications to the
      bootstrap theme here. See sample modifications.css, which enables
      the use of the floating top navbar 
* img/
    * glyphicons-halflings.png
    * glyphicons-halflings-white.png
* js/
    * bootstrap.min.js: compile all your desired plugins into a single
      minimized javascript file. The sample bootstrap.min.js includes all
      plugins 

## Warning

This theme only supports minified Bootstrap CSS and javascript.


# Base Version

This theme is based off of Twitter Bootstrap 2.3. Specifically the [fluid.html
layout example](http://twitter.github.com/bootstrap/examples/fluid.html).


# Theme Resources

Here's some good free themes to start with: http://bootswatch.com/
That site also has a swatch maker so you can make your own style.

# DokuWiki Specifics

This template supports the use of a ```nav.html``` file (a sample is included).
Add any Wiki-wide links that you would like to, with each link being inside an
li element. I tried adding support for a Wiki-based navigation page, instead of
raw HTML, but due to how DokuWiki outputs lists, the output clashed with
existing CSS and was unusable.

This template does not support any sidebars.

This template does support a ```footer.html``` file, which will be output after
the page information and site license.

This template does support a ```meta.html``` file, which will be output right
before the head element is closed.

# Disclaimer

I'm not intimately familiar with either DokuWiki template coding or Bootstrap.
I may have done stupid things. If so, please make appropriate changes and
submit a pull request.
