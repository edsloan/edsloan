<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Ed Sloan | Web Developer</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" href="../../../../edsloan2/css/styles.css">
  <link rel="stylesheet" href="../../../../edsloan2/css/foundation.css">
  <link rel="shortcut icon" href="../../../../edsloan2/images/favicon.ico" type="image/x-icon" />
  <link href='http://fonts.googleapis.com/css?family=Orienta|Sanchez' rel='stylesheet' type='text/css'>
  
  
  <!-- Included CSS Files (Compressed) 
  <link rel="stylesheet" href="css/foundation.min.css"> -->
  <link rel="stylesheet" href="css/app.css">

  <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
        <script src='http://static.ak.fbcdn.net/connect.php/js/FB.Share' type='text/javascript'></script>
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script> 
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
        });
      }
    }
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
 
});
  </script>
  <script type="text/javascript" src="../../../../edsloan2/images/shadowbox/shadowbox.js"></script>
  <script type="text/javascript">
    Shadowbox.init({
      counterType: "skip",
    counterLimit: 6,
      continuous: true
    });
  </script>
  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

        
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
    
<body>
<div id="top-nav" class="container">
  <div class="row">
    <div class="twelve columns">
        <div class="three columns">
          <a href="../../../../edsloan2/index.php"><img src="../../../../edsloan2/images/title.png" class="logo"/></a>
        </div>

        <nav>
            <div class="nine columns">
              <ul class="hide-for-small topNav">
                <li><a href="../../../../edsloan2/index.php#about">About</a></li>
                <li><a href="../../../../edsloan2/index.php#portfolio">Portfolio</a></li>
                <li><a href="../../../../edsloan2/index.php#blog">Blog</a></li>
                <li><a href="../../../../edsloan2/index.php#contact">Contact</a></li>
              </ul>
              <ul class="show-for-small mobiletopNav">
                <li><a href="../../../../edsloan2/index.php#about" >About</a></li>
                <li><a href="../../../../edsloan2/index.php#portfolio" >Portfolio</a></li>
                <li><a href="../../../../edsloan2/index.php#blog" >Blog</a></li>
                <li><a href="../../../../edsloan2/index.php#contact" >Contact</a></li>
              </ul>
            </div>
        </nav>
    </div>
  </div>
</div>