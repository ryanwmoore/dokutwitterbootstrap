<?php
/**
 * DokuWiki Twitter Boostrap Template
 *
 * @link     https://github.com/ryanwmoore/dokutwitterbootstrap
 * @author   Ryan Moore <rwmoore07@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html) + others
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
@require_once(dirname(__FILE__).'/tpl_functions.php'); /* include hook for template functions */

$showTools = !tpl_getConf('hideTools') || ( tpl_getConf('hideTools') && $_SERVER['REMOTE_USER'] );

?><!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>">
<head>
    <meta charset="UTF-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <?php tpl_metaheaders() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
    <?php tpl_includeFile('meta.html') ?>
    <link href="<?php echo tpl_getMediaFile(array("css/modifications.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("css/dokuwikicompatibility.css")); ?>" rel="stylesheet">

    <!-- Start of Devoops's CSS -->
    <link href="<?php echo tpl_getMediaFile(array("plugins/bootstrap/bootstrap.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("plugins/jquery-ui/jquery-ui.min.css")); ?>" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href="<?php echo tpl_getMediaFile(array("plugins/fancybox/jquery.fancybox.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("plugins/fullcalendar/fullcalendar.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("plugins/xcharts/xcharts.min.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("plugins/select2/select2.css")); ?>" rel="stylesheet">
    <!-- End of Devoops's CSS -->

    <link href="<?php echo tpl_getMediaFile(array("css/style.css")); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
            <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#sidetoc">
    <?php /* with these Conditional Comments you can better address IE issues in CSS files,
             precede CSS rules by #IE6 for IE6, #IE7 for IE7 and #IE8 for IE8 (div closes at the bottom) */ ?>
    <!--[if IE 6 ]><div id="IE6"><![endif]--><!--[if IE 7 ]><div id="IE7"><![endif]--><!--[if IE 8 ]><div id="IE8"><![endif]-->

    <?php /* the "dokuwiki__top" id is needed somewhere at the top, because that's where the "back to top" button/link links to */ ?>
    <?php /* classes mode_<action> are added to make it possible to e.g. style a page differently if it's in edit mode,
         see http://www.dokuwiki.org/devel:action_modes for a list of action modes */ ?>
    <?php /* .dokuwiki should always be in one of the surrounding elements (e.g. plugins and templates depend on it) */ ?>
    <div id="dokuwiki__site"><div id="dokuwiki__top"
        class="dokuwiki site mode_<?php echo $ACT ?>">

    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./"><?php echo $conf['title']; ?></a>
            </div>
          <div class="navbar-collapse collapse">
            <div class="navbar-form pull-right">
                <?php _tpl_output_search_bar(); ?>
            </div>

            <p class="navbar-text pull-right">
                <?php
                    if ($_SERVER['REMOTE_USER']) {
                        echo '<span class="user">';
                        tpl_userinfo();
                        echo '</span>';
                    }
                    //TODO: If could link to user's profile? If so, wrap in:
                    //echo 'Logged in as <a href="#" class="navbar-link">'.$username.'</a>';
                ?>
            </p>
            <ul class="nav navbar-nav">
              <?php
                tpl_includeFile('nav.html');
                _tpl_output_tools_twitter_bootstrap($conf['useacl'] && $showTools);
              ?>
            </ul>

          </div><!--/.navbar-collapse -->
        </div>
    </div>


    <?php html_msgarea() /* occasional error and info messages on top of the page */ ?>
    <?php tpl_includeFile('header.html') ?>


        <div class="container">
        <!-- ********** ASIDE ********** -->
          <div class="row">
            <div class="col-md-3">
              <?php if ($conf['sidebar']) { ?>

                  <div class="sidebar" id="sidetoc" role="navigation">
                    <div class="list-group">
                        <?php _tpl_toc_to_twitter_bootstrap(); ?>
                    </div>
                  </div>

              <?php } ?>
            </div>
            <div class="col-md-9">
              <div class="row">

                    <div class="col-md-9" id="dokuwiki__content">

                        <div class="pad">

                            <div class="page" id="content">

                                <?php html_msgarea(); /* occasional error and info messages */ ?>
                                <?php tpl_flush(); ?>
                                <?php tpl_content(false); ?>
                                <div class="clearer"></div>

                            </div>

                        </div>
                    </div>
              </div><!--/row-->
            </div><!--/col-md-9-->
          </div><!--/row-->
        </div><!-- container -->

        <div class="clearer"></div>

    </div></div><!-- /site -->

    <!-- ********** FOOTER ********** -->
    <div class="footer">
      <div class="container">
        <div class="col-md-12">
              <?php _tpl_output_page_tools($showTools, 'li'); ?>
              <br />
              <div class="clearer"></div>
              <div>
              <?php tpl_pageinfo() /* 'Last modified' etc */ ?>

              <?php tpl_license('button') /* content license, parameters: img=*badge|button|0, imgonly=*0|1, return=*0|1 */ ?>
              <?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?>
              <?php tpl_includeFile('footer.html') ?>
              </div>
              <div class="clearer"></div>
              <div>
                <p><a href="http://www.dokuwiki.org">DokuWiki</a>
                    <a href="https://github.com/ryanwmoore/dokutwitterbootstrap">template</a>
                    (released under <a href="http://www.gnu.org/licenses/gpl.html">GPLv2</a>)
                    using <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> and
                    <a href="http://www.bootstrapstage.com/devoops/">Devoops</a>. By
                    <a href="http://rmoore.cs.pitt.edu/">Ryan W. Moore</a>.</p>
              </div>
              <div class="no"><?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?></div>
        </div>
      </div>
    </div>

    <!--[if ( IE 6 | IE 7 | IE 8 ) ]></div><![endif]-->

    <!-- load any scripts that may require a newer jQuery library than DokuWiki provides. -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo tpl_getMediaFile(array("plugins/jquery/jquery.min.js")); ?>"></script>
    <script src="<?php echo tpl_getMediaFile(array("plugins/jquery-ui/jquery-ui.min.js")); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo tpl_getMediaFile(array("plugins/bootstrap/bootstrap.min.js")); ?>"></script>
    <script src="<?php echo tpl_getMediaFile(array("plugins/justified-gallery/jquery.justifiedgallery.min.js")); ?>"></script>
    <script src="<?php echo tpl_getMediaFile(array("plugins/tinymce/tinymce.min.js")); ?>"></script>
    <script src="<?php echo tpl_getMediaFile(array("plugins/tinymce/jquery.tinymce.min.js")); ?>"></script>
    <!-- All functions for this theme + document.ready processing -->

    <!--
    This script is disabled. It's supposed only be used to power the devoops
    demo (see the devoops's index.html).

    <script src="<?php echo tpl_getMediaFile(array("js/devoops.js")); ?>"></script>
    -->

    <script src="<?php echo tpl_getMediaFile(array("js/change_dokuwiki_structure.js")); ?>"></script>

    <!-- restore jQuery for DokuWiki -->
    <script src="<?php echo tpl_getMediaFile(array("js/restore_dokuwikis_jquery.js")); ?>"></script>
</body>
</html>
