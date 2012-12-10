  <?php require("blog/wp-blog-header.php"); ?>
  <?php require_once("includes/functions.php"); ?>
    <?php require_once("includes/connection.php"); ?>
    <?php find_selected_page(); ?>
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
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link href='http://fonts.googleapis.com/css?family=Orienta|Sanchez' rel='stylesheet'>
  
  
  <!-- Included CSS Files (Compressed) 
  <link rel="stylesheet" href="css/foundation.min.css"> -->
  <link rel="stylesheet" href="css/app.css">

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
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
  <script src="images/shadowbox/shadowbox.js"></script>
  <script>
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

</head>
<body>
<div id="top-nav" class="container">
  <div class="row">
    <div class="twelve columns">
        <div class="three columns">
          <a href="index.html"><img src="images/title.png" class="logo"/></a>
        </div>

        <nav>
            <div class="nine columns">
              <ul class="hide-for-small topNav">
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
              <ul class="show-for-small mobiletopNav">
                <li><a href="#about" >About</a></li>
                <li><a href="#portfolio" >Portfolio</a></li>
                <li><a href="#blog" >Blog</a></li>
                <li><a href="#contact" >Contact</a></li>
              </ul>
            </div>
        </nav>
    </div>
  </div>
</div>

<div id="content" class="container">
  <div class="row">
    <div class="twelve columns pull-one mobile">
      <img src="images/skyline.jpg" class="skyline"/>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <h2 id="about">About</h2>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <p><b>Great, you made it!</b></p>

      <p>Well, let me start off introducing myself, my name is Ed Sloan, I'm 23 years old and i currently live in the UK. I am an aspiring web developer, with a passion in providing engaging and intuitive user interfaces, with a focus on high usability and functionality.</p>

      <p>I have always had a strong interest in all things technological, ever since the good old days of endlessly playing games on the classic Atari. My first real exposure to coding was on a school project, which involved implementing functions to be used within a spreadsheet. At the end of 2010, i decided to take a plunge and develop a mere interest into the beginnings of a potential career, by setting up a personal tech <a href=”http://www.techstream.org.uk”>blog</a>. This was great, but i wanted to expand my skills further, so i started to learn web code and my obsession has not ceased to lose momentum since.</p>

      <p>As of present I have a strong grasp of both HTML5 and CSS3. This site was my first real plunge into PHP, I currently have a decent level of understanding PHP, which is constantly evolving. With regards to CMS, my preferences lie with either Drupal or Wordpress. For design, my weapons of choice are Illustrator and Photoshop, both are superb for layout and logo design. In the near future I’m looking to add Java and i-OS app development coding to my armory, with the latter hopefully being put to use with some potential ideas I’ve been developing.</p>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <h2 id="portfolio">Portfolio</h2>
    </div>
  </div>


  <div class="row">
    <div class="twelve columns">
      <p>Here is a selection of some of my latest projects. Click the image to see more information.<p>

      <div>
        <a href="images/shadowbox/sb1.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="Photoshop" style="background:none;" class="grid_4"><img src="images/shadowbox/sb1-thumb.jpg" /></a>
        <a href="images/shadowbox/sb2.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="CMS inplace" style="background:none;" class="grid_4"><img src="images/shadowbox/sb2-thumb.jpg" /></a>
        <a href="images/shadowbox/sb3.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="Integrated WordPress Blog" style="background:none;" class="grid_4"><img src="images/shadowbox/sb3-thumb.jpg" /></a><br /><br />
      </div>

      <div>
        <a href="images/shadowbox/sb4.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="Admin login screen with validation" style="background:none;" class="grid_4"><img src="images/shadowbox/sb4-thumb.jpg" /></a>
        <a href="images/shadowbox/sb5.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="Placeholder example logo 1" style="background:none;" class="grid_4"><img src="images/shadowbox/sb5-thumb.jpg" /></a>
        <a href="images/shadowbox/sb6.jpg" rel="shadowbox[gallery]" title="www.edsloan.co.uk" rev="Placeholder example logo 2" style="background:none;" class="grid_4"><img src="images/shadowbox/sb6-thumb.jpg" /></a><br /><br />
      </div>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <h2 id="blog">Blog</h2>
    </div>
  </div>

    <div class ="row"> 
      <p class="twelve columns">Latest articles</p>
        <?php $posts = get_posts('numberposts=10');
                      foreach ($posts as $post) : start_wp(); ?>
                          <!--start: content-text-post-header-->
                          <div id="content-text-post-header">
                              <h4 class="twelve columns">•<a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank" title="Permalink to <?php the_title_attribute(); ?>">
                              <?php the_title(); ?></a></h4>
                              <h6 class="twelve columns post-date"><?php the_date(); ?></h6>
                          </div><!--content-text-post-header: end-->
                          <?php endforeach; ?>
</div>


  <div class="row">
    <div class="twelve columns">
      <h2 id="contact">Contact</h2>
    </div>
  </div> 

  <div class="row">
      <div class="eight columns">
        <p>It’s now your time to shine,</p>

        <p>If you´ve liked what you´ve seen and you are looking to use my services, please fill out the form below.</p>

        <p>If you want to discuss a project that I may be interested in? Please include some details (a link to your site or project always helps).</p>

        <p>General feedback, comments or questions are always welcome to, Thanks. Ed.</p>
      </div>

      <div class="four columns">
            <img src="images/email.png" /><br />
      </div>

      <div id="contact-form">
          <form class="required-form" action="mail_form.php" method="post" onSubmit="alert('Thank you for your message.');">
            <p id="comment-notes" class="twelve columns"><small>All fields are required.</small></p>  

            <p id="contact-form-author" class="four columns"><label for="author">Name</label><input id="author" name="author" type="text" value="" size="30" placeholder = "" required/></p>
          
            <p id="contact-form-email" class="four columns"><label for="email">Email</label><input id="email" name="email" type="email" value="" size="30" placeholder="" required /></p>
          
            <p id="contact-form-subject" class="four columns"><label for="subject">Subject</label><input id="subject" name="subject" type="text" value="" size="30" placeholder="" required /></p>
          
            <!--start: contact-form-message-->
            <div id="contact-form-message" class="twelve columns">
                <p><label for="message">Message</label><textarea name="message" type="text" id="message" rows="10" tabindex="4" required ></textarea></p>
            </div><!--contact-form-message: end-->
          
            <p id="comment-notes" class="twelve columns"><small>All details sent will be handled with the strictest level of confidentiality.</small></p>
          
            <br />
  
            <p class="twelve columns">
              <input type="submit" class="two columns contact-submit" name="send" value="Send Message" />
            </p>
          </form>
      </div><!--contact-form: end-->
  </div>
</div>


<div id="top-nav" class="container">
  <div class="row">
        <div class="six columns sub-nav">
          <a href="http://www.twitter.com/thetechstream" target="_blank"><img src="images/tweet.png" style="float:left; margin-right:10px;"/></a>
        <div>
            <ul id="twitter_update_list"></ul>
            <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
          <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?count=1&exclude_replies=true&screen_name=thetechstream&callback=twitterCallback2"></script>
        </div>
      </div>
          <div class="one column">
            <a id="jump-link" href="#top-nav" title="Jump to the top."><img src="images/jump.png"/></a>
          </div>
        
  </div>
</div>

<!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
<?php
  // 5. Close connection
  if (isset($connection)) {
    mysql_close($connection);
  }
?>
