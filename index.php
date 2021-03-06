<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		
		<title>jReader - A minimal jQuery and PHP based RSS reader</title>
		
		<link rel="stylesheet" href="bootstrap-1.2.0.css">
	
		<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
		<script type="text/javascript">google.load("jquery", "1.6.0");</script> 

		<script type="text/javascript" src="jreader.jquery.js"></script> 
		
		<script type="text/javascript">
			$().ready(function(){
				$('#feeds li a').jreader();
			});
		</script>
	</head>
	<body>
		<div class="container-fluid">
		
			<div class="page-header">
				<h1>jReader <small>a minimal jQuery and PHP based RSS reader</small></h1>
			</div>
		
				<div class="sidebar">
					<div class="clearfix">
						<h2>Feeds</h2>
						<ul id="feeds">
							<li><a href="http://www.subooa.com.au/blog/feed">Subooa Blog</a></li>
							<li><a href="http://feeds.feedburner.com/TechCrunch">Techcrunch</a></li>
							<li><a href="http://minimalmac.com/rss">Minimal Mac</a></li>
							<li><a href="http://rss1.smashingmagazine.com/feed/">Smashing Magazine</a></li>
							<li><a href="http://feeds.feedburner.com/Noupe">Noupe Design Blog</a></li>
							<li><a href="https://github.com/duellsy/jreader/commits/master.atom">jReader commit history</a></li>
						</ul>
					
						<h3>What is jReader?</h3>
						<p>jReader is a simple, open source, jQuery and PHP based RSS reader for you to use in your site.</p>
						<p>The main guts of the code is in the jQuery and the rss_grab.php file.</p>
						<a target="_blank" href="https://github.com/duellsy/jreader" class="btn primary">Get jReader from GitHub &raquo;</a>
					</div>
				</div>
			
				<div class="content">
					<h2 id="jReaderTitle"></h2>
					<div id="jReaderArticles" class="clearfix">
						<div class="alert-message block-message warning">
					        <p><strong>Welcome to the jReader demo!</strong> Click on a feed in the left column to start reading the news.</p>
						</div>

				        <h2>Developers</h2>
				        <p>To use jReader on your own site, you'll need to at least use these two files:</p>
				        <ol>
				        	<li>rss_grab.php</li>
				        	<li>jreader.jquery.js</li>
				        </ol>
				        
				        <h4>Requirements</h4>
				        <p>This needs to be run in conjunction with jQuery, on a server that supports curl over PHP.</p>
				        
				        <h4>Usage</h4>
				        <p>Typically, you would want to use this with a list of links to RSS feeds similar to what you see in the left column of this demo. To target the list as a jReader list, simply call the .jReader() function on the targeted elements, e.g.,</p>
				        <pre>$().ready(function(){
	$('#feeds li a').jreader();
});</pre>
						<p>You can optionally override any of the settings listed in the default settings table below, by adding them to the call e.g.,</p>
						<pre>$().ready(function(){
	$('#feeds li a').jreader({articleWrapClass: 'article'});
});</pre>
				        
				        <h4>Default settings</h4>
				        <table class="zebra-striped">
				        	<thead>
				        		<tr>
				        			<th>Option</th>
				        			<th>Default</th>
				        			<th>Description</th>
				        		</tr>
				        	</thead>
				        	<tbody>
				        		<tr>
				        			<td>loading</td>
				        			<td>'Loading'</td>
				        			<td>Text to show in the main title when the RSS is being loaded</td>
				        		</tr>
				        		<tr>
				        			<td>titleElement</td>
				        			<td>'#jReaderTitle'</td>
				        			<td>The css selector for the element that will hold the title</td>
				        		</tr>
				        		<tr>
					        		<td>fullArticle</td>
					        		<td>'read full article'</td>
					        		<td>Text to display as the link to read the full article</td>
				        		</tr>
								<tr>
									<td>articlesElement</td>
									<td>'jReaderArticles'</td>
									<td>The css selector for the element that will hold the RSS items once loaded</td>
								</tr>
								<tr>
									<td>articleWrapClass</td>
									<td>'news-item'</td>
									<td>Class(es) to add to the block holding each individual feed item, so you can style it as you see fit</td>
								</tr>
								<tr>
									<td>grabberLocation</td>
									<td>'./'</td>
									<td>The location of the rss_grab.php file</td>
								</tr>
				        	</tbody>
				        </table>

					</div>

					<div id="footer">
						<p>jReader &copy; 2011 Chris Duell of <a href="http://subooa.com.au">Subooa Studios</a> available on <a href="http://github.com/duellsy/jreader">GitHub</a> under MIT Licence</p>
					</div>
				

				</div>
			
			</div>	
			
		</div>
		
		<?php
		if($_SERVER['HTTP_HOST'] == 'jreader.subooa.com.au'){ ?>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-10845673-6']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<?php } ?>
	</body>
</html>