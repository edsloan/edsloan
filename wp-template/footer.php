<div id="top-nav" class="container">
  <div class="row">
        <div class="five columns sub-nav">
          <a href="http://www.twitter.com/thetechstream" target="_blank"><img src="../../../../edsloan2/images/tweet.png" style="float:left; margin-right:10px;"/></a>
        <div>
            <ul id="twitter_update_list"></ul>
            <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
          <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?count=1&exclude_replies=true&screen_name=thetechstream&callback=twitterCallback2"></script>
        </div>
      </div>
          <div class="one column">
            <a id="jump-link" href="#top-nav" title="Jump to the top."><img src="../../../../edsloan2/images/jump.png"/></a>
          </div>
        
  </div>
</div>
    </body>
</html>
<?php
	// 5. Close connection
	if (isset($connection)) {
		mysql_close($connection);
	}
?>