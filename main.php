<?php
/**
 * DokuWiki Twitter Boostrap Template
 *
 * @link     http://dokuwiki.org/template:starter
 * @author   Ryan Moore <rwmoore07@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
@require_once(dirname(__FILE__).'/tpl_functions.php'); /* include hook for template functions */

$showTools = !tpl_getConf('hideTools') || ( tpl_getConf('hideTools') && $_SERVER['REMOTE_USER'] );
?><!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>">
<head>
    <meta charset="UTF-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <?php tpl_metaheaders()?>
    <title><?php tpl_pagetitle() ?> [<?php echo strip_tags($conf['title']) ?>]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <?php tpl_metaheaders() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
    <?php tpl_includeFile('meta.html') ?>
    <link href="<?php echo tpl_getMediaFile(array("css/modifications.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("css/dokuwikicompatibility.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("css/bootstrap.min.css")); ?>" rel="stylesheet">
    <link href="<?php echo tpl_getMediaFile(array("css/bootstrap-responsive.min.css")); ?>" rel="stylesheet">


    <?php tpl_includeFile('meta.html') ?>

</head>

<body data-spy="scroll" data-target="#sidetoc">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./"><?php echo $conf['title']; ?></a>
          <div class="nav-collapse collapse">
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
            <ul class="nav">
              <?php
                tpl_includeFile('nav.html');
                _tpl_output_tools_twitter_bootstrap($conf['useacl'] && $showTools);
              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="sidebar-nav affix" id="sidetoc">

            <?php _tpl_toc_to_twitter_bootstrap(); ?>

          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="row-fluid">
            <div class="span9 dokuwiki" id="dokuwiki__top">

                <?php html_msgarea() /* occasional error and info messages on top of the page */ ?>
                <?php tpl_content(false); ?>

            </div>
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer class="navbar navbar-static-bottom">
          <div class="row-fluid">
            <div class="span12">

              <div>
                  <?php _tpl_output_page_tools($showTools, 'li'); ?>
                  <?php tpl_pageinfo() /* 'Last modified' etc */ ?>

                  <?php tpl_license('button') /* content license, parameters: img=*badge|button|0, imgonly=*0|1, return=*0|1 */ ?>
                  <?php tpl_indexerWebBug() /* provide DokuWiki housekeeping, required in all templates */ ?>
                  <?php tpl_includeFile('footer.html') ?>
              </div>

            </div>
          </div>
      </footer>

    </div><!--/.fluid-container-->

    <?php
        //Required by DokuWiki to do its housekeeping (e.g., search indexes).
        tpl_indexerWebBug();
    ?>

    <!--[if ( IE 6 | IE 7 | IE 8 ) ]></div><![endif]-->
    <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>
    <script src="<?php echo tpl_getMediaFile(array("js/bootstrap.min.js")); ?>"></script>
</body>
</html>
