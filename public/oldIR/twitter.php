<?php $current = 9; $title = "twitter"; include 'header.php'; ?>
					<div id="twitter_div">
						<h2>Twitter Updates</h2>
						<ul id="twitter_update_list"></ul>
						<a href="http://twitter.com/emachnic" id="twitter-link">follow me on Twitter</a>
					</div>
          <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
          <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/emachnic.json?callback=twitterCallback2&amp;count=5"></script>
<?php include 'footer.php'; ?>
