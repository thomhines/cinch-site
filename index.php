<!DOCTYPE html>
<html lang="en-us">
<head>
<title>cinch</title>
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />


<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="img/favicon/favicon-160x160.png" sizes="160x160" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />


<script type="text/javascript" src="/cinch/cinch/?files=[jquery/1.10.2],!/js/jquery.scrollTo-1.4.3.1-min.js,/js/jquery.sticky.js,/js/scripts.js&force=true&debug=true"></script>

<link href='http://fonts.googleapis.com/css?family=Antic+Slab|Quicksand:400,700' rel='stylesheet' type='text/css'>
<link rel="Stylesheet" href="/cinch/cinch/?files=/css/reset.css,/css/fontello.css,/css/style.scss&force=true&debug=true" type="text/css" media="all" />


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<?php include_once('ga.php'); ?>

	<header>
		<div class="container">
			<h1>cinch</h1>
			<h2 class="tagline">A simple, streamlined way to combine, compress, and cache web files</h2>
		</div>
	</header>
	
	<nav>
		<div class="container">
			<ul>
				<li><a href="#features">Features</a></li>
				<li><a href="#how_to_use">How to Use</a></li>
				<li><a href="#settings">Settings</a></li>
				<li><a href="#about">About</a></li>
			</ul>
			<a class="github" href="https://github.com/thomhines/cinch">Fork me on GitHub</a>
			<a class="download button" href="cinch.zip">Download cinch 0.3</a>
		</div>
	</nav>
	
	<section>
		<div class="container">
		
			<h4 class="description">Cinch is a PHP plugin that allows developers to minify and combine all of their Javascript & CSS files, reducing file sizes and making web pages load faster&mdash;<u>automatically</u>.</h4>
			
			<!-- FEATURES -->
			<h2 id="features">Features</h2>
			
			<div class="column">
				<h3>Good to Developers</h3>
				<div class="cake logo"></div>
				<h4>Easy to install and use</h4>
				<p><a href="#how_to_use">Installation</a> is a cinch (pun intended). File type detection, minification, concatination, pre-processor handling, cacheing, compression. And it's all automatic.</p>
				
				<div class="less logo"><a href="http://lesscss.org/">LESS</a></div>
				<div class="sass logo"><a href="http://sass-lang.com/">Sass</a></div>
				<div class="coffeescript logo"><a href="http://coffeescript.org/">CoffeeScript</a></div>
				<h4>Pre-Processor Handling</h4>
				<p>Automatically converts JS and CSS pre-processor formats such as Sass, SCSS, Less and CoffeeScript.</p>
				
				<div class="google logo"></div>
				<h4>Google Hosted Libraries</h4>
				<p>Built-in access to all libraries in <a href="https://developers.google.com/speed/libraries/">Google&rsquo;s Hosted Libraries</a> service.</p>				
<!--
				<div class="auto logo"></div>
				<h4>Everything Automatic</h4>
-->

				<p></p>
			</div>
			
			<div class="column">
				<h3>Good to Servers</h3>
				<div class="rabbit logo"></div>
				<h4>Light-Weight and Fast</h4>
				<p>Don&rsquo;t need minification? Only using .less files? Cinch loads only the dependencies you need, keeping server load small and speeding up execution.</p>
				
				<div class="cache logo"></div>
				<h4>Smart Cacheing</h4>
				<p>Cinch creates a static version of your combined JS/CSS files anytime changes have been detected in your site&rsquo;s files, which it will serve to users until new changes are made.</p>
				
				<div class="headers logo"></div>
				<h4>Efficient Headers</h4>
				<p>If the user already has the latest version of your files, &lsquo;304 Not Modified&rsquo; headers are sent to the user instead of sending the site files again.</p>
			</div>
			
			<div class="column">
				<h3>Good to Users</h3>
				<div class="concat logo"></div>
				<h4>Concatenation</h4>
				<p>Cinch combines all of your JS/CSS files into just one file. This reduces the number of HTTP requests your users browsers will need to make.</p>
				
				<div class="minify logo"></div>
				<h4>Minification</h4>
				<p>Minifying files gets rid of all unneccesary parts of your files, decreasing the amount of bandwidth and time needed to download them.</p>
				
				<div class="gzip logo"></div>
				<h4>GZIP Compression</h4>
				<p>Cinch uses gzip when available to compress files even further before sending them to users.</p>
			</div>
			
			
			
			<!-- HOW TO USE -->
			<h2 id="how_to_use">How to Use Cinch</h2>
			<p>To install, just</p>
			<ol>
				<li>upload <a href="cinch.zip">cinch</a> to the root folder of your site,</li>
				<li>replace the links in your &lt;script&gt; and &lt;link&gt; tags with a URL that points to your &lsquo;cinch&rsquo; folder,</li>
				<li>add your filenames</li>
			</ol>
			<p>and you're done!</p>
			
			
			<h6>Example:</h6>
			
			<code>&lt;script src="<b>/js/jquery.min.js</b>" type="text/javascript"&gt;&lt;/script&gt;<br>
			&lt;script src="<b>/js/functions.js</b>" type="text/javascript"&gt;&lt;/script&gt;<br>
			&lt;script src="<b>/js/scripts.js</b>" type="text/javascript"&gt;&lt;/script&gt;</code>
		
			<p>turns into:</p>
			
			<code>&lt;script src="<b class="red">/cinch/?files=/js/jquery.min.js,/js/functions.js,/js/scripts.js</b>" type="text/javascript"&gt;&lt;/script&gt;</code>
			
			
						
			<h3>More Examples</h3>
			
			<p>All settings can be applied to any group of files. Settings can be adjusted by adding them to the query string in a &lt;script&gt; or &lt;link&gt; tag, separated by ampersands (&amp;), as shown below.</p>

	

			<h6>Javascript:</h6>
			<div class="code_example js">
				<code>&lt;script src="/cinch/?<span class="red">files=</span><span class="green">[jquery/1.10.2]</span><span class="red">,/js/ajax.js</span>&<span class="purple">min=false</span>&<span class="blue">debug=true</span>" type="text/javascript"&gt;&lt;/script&gt;</code>
				<div class="code_label"><i class="red icon-down"></i> list of .JS files</div>
				<div class="code_label"><i class="green icon-up"></i> include jquery from the Google libraries</div>
				<div class="code_label"><i class="purple icon-down"></i> turn off minification</div>
				<div class="code_label"><i class="blue icon-up"></i> turn on debug output</div>
			</div>
			
			<h6>CSS:</h6>
			<div class="code_example css">
				<code>&lt;link href="/cinch/?<span class="red">files=/css/reset.css,</span><span class="green">!</span><span class="red">/css/layout.</span><span class="purple">less</span><span class="red">,/css/text.sass</span>&<span class="blue">force=true</span>" type="text/css"&gt;</code>
				<div class="code_label"><i class="red icon-down"></i> list of .CSS files</div>
				<div class="code_label"><i class="green icon-up"></i> Use &lsquo;!&rsquo; to disable minification on a file</div>
				<div class="code_label"><i class="purple icon-down"></i> it's ok to mix different file types</div>
				<div class="code_label"><i class="blue icon-up"></i> force cinch to always rebuild cache</div>
			</div>
			
			
			
			<!-- SETTINGS -->
			<h2 id="settings">Settings</h2>
			<h5>All settings work for both JS and CSS type files. Values marked in orange are the default value for that setting and will be used if no other value is given.</h5>
	
			<h3>Required</h3>
			
			<h4 class="setting">Files=(comma-separated file list)</h4>
			<p>A list of JS or CSS files to include.</p>
			
			<p><span class="note">NOTE</span>: Files should contain relative path from site root to the files being listed (eg. /js/scripts.js).</p>
			
			
			<h3 class="options">Options</h3>
			
			<h4 class="setting">!(filename)</h4>
			<p>To disable minification on an individual file, simply add &lsquo;!&rsquo; to the beginning of that file&rsquo;s path.</p>
			
			<h6>Example</h6>
			
			<code>src="/cinch/?files=<b class="red">!</b>/js/plugin.min.js,/js/scripts.js"</code>
			
			
			<p class="caption">In this example, &lsquo;scripts.js&rsquo; will be minified, but &lsquo;plugin.min.js&rsquo; will not.</p>
			
			
			<h4 class="setting">[library-name/version]</h4>
			
			<p>To include a library from <a href="https://developers.google.com/speed/libraries/">Google&rsquo;s Hosted Library</a> selection, enclose the name of the library and the version number in a pair of square brackets, separated by a forward slash (/).</p>
			
			<h6>Example</h6>
			
			<code>src="/cinch/?files=<b class="red">[jquery/1.10.2]</b>"</code>
			
			<p class="caption">Available libraries are: &lsquo;angularjs&rsquo;, &lsquo;chrome-frame&rsquo;, &lsquo;dojo&rsquo;, &lsquo;ext-core&rsquo;, &lsquo;jquery&rsquo;, &lsquo;jqueryui&rsquo;, &lsquo;mootools&rsquo;, &lsquo;prototype&rsquo;, &lsquo;scriptaculous&rsquo;, &lsquo;swfobject&rsquo;, and &lsquo;webfont&rsquo;. Check Google&rsquo;s <a href="https://developers.google.com/speed/libraries/devguide">Developer Guide</a> for more information on these libraaries and what versions are available.</p>
			
	
			<h3>Optional</h3>
			<p>Settings can be adjusted by adding them to the query string in a &lt;script&gt; or &lt;link&gt; tag, separated by an ampersand (&amp;).</p>
			<p class="caption">*Values marked in red are the default and will be used if no value is given.</p>
	
			<h4 class="setting">t=(js|css|<span class="default">auto</span>)</h4>
			<p>Indicates the type of files being sent to cinch. When set to auto, cinch will do it&rsquo;s best to automatically detect which type of files are being used, based on the extension of the first file in the list.</p>
			
			
			<h4 class="setting">force=(true|<span class="default">false</span>)</h4>
			<p>Forces cinch to rebuild the cache and update the user&rsquo;s browser with the newest code on every page load, even if no changes have been detected</p>
			
			
			<h4 class="setting">min=(<span class="default">true</span>|false)</h4>
			<p>Enables/disables minification on files.</p>
			
			<p><span class="note">NOTE</span>: Files marked with a &lsquo;!&rsquo; will not be minified regardless of this setting&rsquo;s value.</p>
			
			
			<h4 class="setting">clearcache=(true|<span class="default">false</span>)</h4>
			<p>Deletes all cache files on the server.</p> 
			
			<p><span class="note">NOTE</span>: This option can be run independently without a files list from the browser to clear the cache without coding it into an HTML link (eg. http://example.com/cinch/?clearcache=true).</p>
			<p><span class="note">NOTE</span>: A cache file is created for every combination of JS/CSS sent to cinch, and they are not automatically deleted. If you are making frequent changes, it may be desirable to clear this folder from time to time. Alternately, the files can be deleted manually and will be rebuilt automatically during the next page load.</p>
			
			
			<h4 class="setting">debug=(true|<span class="default">false</span>)</h4>
			<p>When enabled, output files display filenames and errors. Otherwise, errors are ignored and hidden.</p>
			
			<div class="cinchicon"></div>
		</div>
	</section>
	
	<!-- ABOUT -->
	<footer>
		<div class="container">
			<h2 id="about">About</h2>
			<div class="column">
				<h3>Special Thanks</h3>
				<p>A lot of the heavy lifting in cinch was made possible by the work of others:</p>
	
				<h4><a href="http://razorsharpcode.blogspot.com/2010/02/lightweight-javascript-and-css.html">JS minification</a></h4>
				<p>found at <a href="http://razorsharpcode.blogspot.com/">Razor-Sharp Code</a></p>
				
				<h4><a href="http://leafo.net/lessphp/">LESS</a>/<a href="http://leafo.net/scssphp/">SCSS</a> Processing</h4>
				<p>by <a href="http://leafo.net/">leafo</a></p>
				
				<h4><a href="https://github.com/alxlit/coffeescript-php">CoffeeScript</a> Processing</h4>
				<p>by alxlit</p>
			</div>
			<div class="column">
				<h3>Requirements</h3>
				<p>Each dependency is loaded only when necessary, and each has it&rsquo;s own level of requirements.
	
				<h4>Core functionality<br>
				<span>(minification and concatenization)</span><br>
				PHP 4.3+</h4>
				
				<h4>Sass/SCSS Compiler<br>
				5.1+ <span>(Maybe? This is just a guess)</span></h4>
				
				<h4>LESS Compiler<br>
				PHP 5.1+</h4>
				
				<h4>CoffeeScript Compiler<br>
				PHP 5.3+</h4>
			</div>
			<div class="column">
				
				<h3>License</h3>
				<p>Cinch is built and distributed under the <a href="">MIT license</a>. Feel free to use and adapt cinch to suit your needs or make it better.</p>
				
				<h3>Feedback</h3>
				<p>Found a bug? Have a suggestion?<br><a href="https://github.com/thomhines/cinch/issues">Post it here</a>.</p>
				
				
			</div>
		</div>
	</footer>

</body>

</html>