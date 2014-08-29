<!DOCTYPE html>
<html lang="en-us">
<head>
<title>cinch</title>
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />


<link rel="shortcut icon" href="img/favicons/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
<meta name="apple-mobile-web-app-title" content="cinch">
<link rel="icon" type="image/png" href="img/favicons/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="img/favicons/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
<meta name="application-name" content="cinch">

<?php $relpath = dirname($_SERVER['PHP_SELF']); ?>

<link href='http://fonts.googleapis.com/css?family=Antic+Slab|Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<?php
/*
include('cinch/cinch.php');
cinch(array(
	files => array(
		'[jquery#1.11.1]',
		'[jquery.scrollTo]',
		'js/jquery.sticky.js',
		'js/scripts.js',
		'[meyer-reset]',
		'[reset-css]',
		'css/fontello.css',
		'css/style.scss'
	),
	force => true,
	debug => true,
	path => '/cinch/beta/'
));
*/
?>
<script type="text/javascript" src="<?= $relpath ?>/cinch/?files=[jquery/1.11.1],[sticky],/js/scripts.js"></script>
<link rel="Stylesheet" href="<?= $relpath ?>/cinch/?files=[reset-css],css/fontello.css,css/style.scss" type="text/css" media="all" />

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

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
				<li><a href="#more_info">More Info</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="download_buttons">
		<a class="github" href="https://github.com/thomhines/cinch">Fork me on GitHub</a>
		<a class="download button" href="https://github.com/thomhines/cinch/archive/v0.8.zip">Download cinch 0.8</a>
	</div>
	
	<section class="description">
		<div class="container">
			<h4>Cinch is a PHP package manager that allows developers to minify and combine all of their Javascript & CSS files, reducing file sizes and making web pages load faster&mdash;<u>automatically</u>.</h4>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- FEATURES -->
			<h2 id="features">Features</h2>
			
			<div class="column">
				<h3>Good to Developers</h3>
<!--
				<div class="cake logo"></div>
				<h4>Easy to install and use</h4>
				<p><a href="#how_to_use">Installation</a> is a cinch (pun intended). Cinch handles minification, concatenation, pre-processing, cacheing, compression... And it's all automatic.</p>
-->

				<div class="less logo"><a href="http://lesscss.org/">LESS</a></div>
				<div class="sass logo"><a href="http://sass-lang.com/">Sass</a></div>
				<div class="coffeescript logo"><a href="http://coffeescript.org/">CoffeeScript</a></div>
				<h4>Pre-Processor Handling</h4>
				<p>Automatically converts JS and CSS pre-processor formats such as Sass, SCSS, Less and CoffeeScript. Plus, with the use of <a href='https://github.com/javiermarinros'>Javier Marín's</a> css_optimizer, dealing with pesky CSS annoyances like vendor prefixes are a thing of the past.</p>

				<div class="reload logo"></div>
				<h4>Live Reload</h4>
				<p>Cinch checks the status of your web files and automatically loads new styles and scripts when a change is detected.</p>
								
				<div class="bower logo"></div>
				<h4>Built-In Bower Support</h4>
				<p>Built-in access to thousands of software libraries and packages such as <a href="http://jquery.com/">jQuery</a>, <a href="http://prototypejs.org/">Prototype</a>, <a href="http://960.gs/">Bootstrap</a> and a bunch more, all available automatically. See the entire list at <a href="http://bower.io/search/">Bower</a>.</p>

				<p></p>
			</div>
			
			<div class="column">
				<h3>Good to Servers</h3>
				<div class="rabbit logo"></div>
				<h4>Light-Weight and Fast</h4>
				<p>Don&rsquo;t need minification? Only using .less files? Cinch loads only the dependencies you need, keeping server load small and speeding up execution times.</p>
				
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
				<p>Cinch combines all of your JS and CSS files into just one file. This reduces the number of HTTP requests your users' browser will need to make, speeding up your site and making scripts run more consistently.</p>
				
				<div class="minify logo"></div>
				<h4>Minification</h4>
				<p>Minifying files gets rid of all unnecessary white space and comments in your files, decreasing the amount of bandwidth and time needed to download them.</p>
				
				<div class="gzip logo"></div>
				<h4>GZIP Compression</h4>
				<p>Cinch uses gzip when available to compress files even further before sending them to your users.</p>
			</div>
		</div>
	</section>
			
	<section class="how_to_use">
		<div class="container">	
			<!-- HOW TO USE -->
			<h2 id="how_to_use">How to Use Cinch</h2>
			<ol>
				<li>Upload <a href="https://github.com/thomhines/cinch/archive/v0.8.zip">cinch</a> to the root folder of your site</li>
				<li>Replace the links in your &lt;script&gt; and &lt;link&gt; tags with a URL that points to your &lsquo;cinch&rsquo; folder</li>
			</ol>
			
			
			<h6>Example</h6>
			
			<code>&lt;script src="<b>/js/jquery.min.js</b>" type="text/javascript"&gt;&lt;/script&gt;<br>&lt;script src="<b>/js/functions.js</b>" type="text/javascript"&gt;&lt;/script&gt;<br>&lt;script src="<b>/js/scripts.js</b>" type="text/javascript"&gt;&lt;/script&gt;</code>
		
			<p>looks like this in cinch:</p>
			
			<code>&lt;script src="<b class="red">/cinch/?files=/js/jquery.min.js,/js/functions.js,/js/scripts.js</b>" type="text/javascript"&gt;&lt;/script&gt;</code>
			
<!--
			<p>or if you're running it from a PHP file, you can use the alternative syntax:</p>
			
			<code>&lt;?php
	include('cinch/cinch.php');
	cinch(array(
		files => array(
			'[jquery/1.11.1]',
			'js/scripts.js',
			'[normalize]',
			'css/style.scss'
		),
		force => true,
		debug => false
	));
?&gt;</code>
-->
			
			
						
			<h3>More Examples</h3>
			
			<p>All settings can be applied to any group of files. Settings can be adjusted by adding them to the query string in a &lt;script&gt; or &lt;link&gt; tag, separated by ampersands (&amp;), as shown below.</p>

	

			<h6>Javascript:</h6>
			<div class="code_example js">
				<code>&lt;script src="/cinch/?<span class="red">files=</span><span class="green">[jquery]</span><span class="red">,/js/ajax.js</span>&<span class="purple">min=false</span>&<span class="blue">debug=false</span>" type="text/javascript"&gt;&lt;/script&gt;</code>
				<div class="code_label">list of .JS files</div>
				<div class="code_label">include jQuery from an external library</div>
				<div class="code_label">turn off minification</div>
				<div class="code_label">turn off debug output</div>
			</div>
			
			<h6>CSS:</h6>
			<div class="code_example css">
				<code>&lt;link href="/cinch/?<span class="red">files=[normalize],</span><span class="green">!</span><span class="red">/css/layout.</span><span class="purple">less</span><span class="red">,/css/text.scss</span>&<span class="blue">force=true</span>" type="text/css"&gt;</code>
				<div class="code_label">list of .CSS files</div>
				<div class="code_label">use &lsquo;<span class="exclamation">!</span>&rsquo; to disable minification on a specific file</div>
				<div class="code_label">it's ok to mix different file types</div>
				<div class="code_label">force cinch to rebuild cache every time</div>
			</div>
		</div>
	</section>
			
	<section class="settings">
		<div class="container">	
			
			
			
			<!-- SETTINGS -->
			<h2 id="settings">Settings</h2>
			<h5>All settings work for both JS and CSS type files. Values marked in orange are the default value for that setting and will be used if no other value is given.</h5>
			
			<p>Also worth noting, default settings can be changed by editing the <code class="inline">$defaults</code> variable in <code class="inline">cinch/config.php</code>.
	
			<h3>Required</h3>
			
			<h4 class="setting">files=(comma-separated file list)</h4>
			<p>A list of JS or CSS files to include.</p>
			
			<p><span class="note">NOTE</span>: Files should contain relative path from site root to the files being listed (eg. /js/scripts.js).</p>
			
			
			<h3 class="options">Options</h3>
			
			<h4 class="setting">!(filename)</h4>
			<p>To disable minification on an individual file, simply add &lsquo;!&rsquo; to the beginning of that file&rsquo;s path.</p>
			
			<h6>Example</h6>
			
			<code>src="/cinch/?files=<b class="red">!</b>/js/plugin.min.js,/js/scripts.js"</code>
			
			
			<p class="caption">In this example, &lsquo;scripts.js&rsquo; will be minified, but &lsquo;plugin.min.js&rsquo; will not.</p>
			
			
			<h4 id="libraries" class="setting">[bower-package-name/version]</h4>
			
			<p>To include an external package, enclose the name of the package and the version number (optional) in a pair of square brackets, separated by a forward slash(/). If no version is given, the most recent version of the package will be used.</p>			
			<p>A full list of Bower packages can be found on the <a href="http://bower.io/search/">Bower</a> website.</p>
			
			<h6>Examples</h6>
			
			<code>src="/cinch/?files=<b class="red">[jquery/1.10.2]</b>"</code>
			
			<code>src="/cinch/?files=<b class="red">[normalize]</b>"</code>
			
			
			<h3>Optional</h3>
			<p>Settings can be adjusted by adding them to the query string in a &lt;script&gt; or &lt;link&gt; tag, separated by an ampersand (&amp;).</p>
			<p class="caption">*Values marked with a star (*) are the default and will be used if no value is given.</p>
	
			<h4 class="setting">type=(js|css|<span class="default">auto*</span>)</h4>
			<p>Indicates the type of files being sent to cinch. When set to auto, cinch will do it&rsquo;s best to automatically detect which type of files are being used, based on the extension of the first file in the list.</p>
			
			
			<h4 class="setting">force=(true|<span class="default">false*</span>)</h4>
			<p>Forces cinch to rebuild the cache and update the user&rsquo;s browser with the newest code on every page load, even if no changes have been detected.</p>
			
			
			<h4 class="setting">min=(<span class="default">true*</span>|false|pack)</h4>
			<p>Adjusts minification/obfuscation settings on web files.</p>
			
			<p><span class="note">NOTE</span>: Files marked with an exclamation mark (!) will not be minified regardless of this setting&rsquo;s value.</p>
			<p><span class="note">NOTE</span>: The 'pack' setting minifies <u>and</u> obfuscates files. This setting applies only to javascript files. Standard minification will be applied to CSS files if this setting is used.</p>
						
			<h4 class="setting">debug=(<span class="default">true*</span>|false)</h4>
			<p>When enabled, debug information (such as filenames and errors) are displayed at the top of the output files. Otherwise, errors are ignored and all extra annotations are hidden.</p>
						
			<h4 class="setting">reload=(true|<span class="default">false*</span>)</h4>
			<p>Automatically checks for changes to your web files and reloads those files if a new version is found. </p>
			<p><span class="note">NOTE</span>: Since this setting is javascript-based, live reloading requires that cinch process at least one link to javascript.</p>
			<p><span class="note">NOTE</span>: This setting can only be enabled on a javascript link, not CSS.</p>
			
			
			<h3 id="production_mode">Production Mode</h3>
			
			<p>Once development has completed on a site, it is highly recommended that you enable 'Production Mode' within cinch. Production Mode allows developers to disable the creation of new cache files and prevents cinch from clearing old cache files. This has two major effects:</p> 
			<p>1. Reduces server load (as this mode bypasses most of cinch's code and loads directly from cache)<br>
			2. Increases security (by preventing unwanted scripts from being created on the server)</p>
			
			<p>To enable Production Mode, open <code class="inline">cinch/config.php</code> and change the the <code class="inline">define('PRODUCTION', <b>false</b>);</code> to <code class="inline">define('PRODUCTION', <b>true</b>);</code></p>
		
			
		</div>
	</section>
	
	<section class="goodies">
		<div class="container">
			<div class="wide column">
			<h2 id="more_info">FAQs</h2>
				<ul>
					<li>
						<h5>Cinch isn't working. Why is that?</h5>
						<p>There could be a lot of things causing cinch not to run properly on your site: invalid links to cinch or your web files, errors in your code, etc. If you're getting a 404 error on your cinch links, then make sure cinch is properly loaded on your server and your links are correct. If your site is loading cinch, then you can check the top of the output JS/CSS files to see if cinch ran into any bugs or errors. Debug output in cinch is enabled by default.</p>
					</li>
					<li>
						<h5>How do I upgrade to a newer version of cinch?</h5>
						<p>Just overwrite the cinch folder with the new version! All of your dependencies will be automatically re-downloaded and all of your cache files will be rebuilt the next time you visit your page. After you've rebuilt your cache files, don't forget to set the 'PRODUCTION' constant at the top of the <code class="inline">cinch/config.php</code> file if you want to protect your cache folder.</p>
					</li>
<!--
					<li>
						<h5>What if I want to install cinch somewhere other than the root of my site? Or what if I want to call cinch from an HTML file that is in a subdirectory?</h5>
						<p>Lorem ipsum...</p>
					</li>
-->
					<li>
						<h5>How do I link to a package that has both CSS <i>and</i> JS files?</h5>
						<p>In cases, like Bootstrap, that have both CSS and javascript components, just include the package in both your CSS and JS links. Cinch will automatically separate the files into the correct types. If cinch isn't properly detecting which file type you are trying to use, add the <code class="inline">type=css</code> or <code class="inline">type=js</code> properties to your file links.</p>
					</li>
					<li>
						<h5>I get an error whenever I try to link to an external package. What can I do?</h5>
						<p>Some servers are configured to not allow the downloading of files on remote servers, which is what cinch does to load package files. Fortunately, there is an easy workaround: Just copy the files you need to your server and link to them directly with cinch.<br>
						For example, <code class="inline">?files=[jquery]</code> becomes <code class="inline">?files=/js/jquery.min.js</code>.</p>
					</li>
					<li>
						<h5>I have so many cache files!</h5>
						<p>Don't worry! This happens a lot as part of the development process. You can delete all of the files in your <code class="inline">/cinch/cache</code> folder and cinch will rebuild all of your cache files automatically. Or just wait a month and cinch's automatic clean-up scripts will delete old cache files for you.</p>
					</li>
				</ul>
			</div>
		
			<div class="wide column">
				<h2 id="about">Other Notes and Goodies</h2>
				<ul>
					<li>
						If you want to speed up performance and prevent new cache files from being created on your server, enable <a href="#production_mode">Production Mode</a> in cinch. Production Mode bypasses most of cinch's code to serve up the cached web files as quickly as possible.<br>
						<span class="note">NOTE</span>: New changes to any of the raw web files will not be reflected in the cache files or when refreshing the site in a browser.
					</li>
					<li>
						The <a href="http://bourbon.io/">Bourbon</a> mixins library has been packaged with cinch, and will automatically be imported into your Sass files on execution. If you don't need them, no problem; the only extra bulk it will add to your stylesheets will be based on which mixins you use.
					</li>
					<li>
						CSS vendor prefixes are added automatically, along with smart CSS minification, color conversions, and more, thanks to <a href='https://github.com/javiermarinros'>Javier Marín's</a> css_optimizer. No need to write 5 lines of CSS to accommodate each browser anymore.
					</li>
					<li>
						A separate cache file is created for each combination of JS/CSS files that you use, so that different pages with different requirements can still run as quickly as possible. In order to prevent this folder from being overloaded on a busy development server, the cache is automatically cleared about once a month.
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	
	
	<!-- ABOUT -->
	<footer>
		<div class="container">
			<h2 id="about">About</h2>
			<div class="column">
				<h3>Requirements</h3>
				<p>Each dependency is loaded only when necessary, and each has it&rsquo;s own level of requirements.
	
				<h4>Core functionality<br>
				<span>(minification and concatenization)</span><br>
				PHP 5+</h4>
				
				<h4>Sass/SCSS Parser<br>
				5.1+ <span>(Maybe? This is just a guess)</span></h4>
				
				<h4>LESS Parser<br>
				PHP 5.1+</h4>
				
				<h4>CoffeeScript Parser<br>
				PHP 5.3+</h4>
			</div>
			<div class="column">
				<h3>Special Thanks</h3>
				<p>A lot of the heavy lifting in cinch was made possible by the work of others:</p>
				
				<h4>JS minification</h4>
				<p>Nicolas Martin's <a href="http://joliclic.free.fr/php/javascript-packer/en/">PHP port</a> of Dean Edward's <a href="http://dean.edwards.name/packer/">Packer</a></p>
				<p>And Jakub Vrána's <a href="https://github.com/vrana/JsShrink/">JsShrink</a></p>
				
				<h4><a href="http://leafo.net/lessphp/">LESS</a>/<a href="http://leafo.net/scssphp/">SCSS</a> Processing</h4>
				<p>by <a href="http://leafo.net/">leafo</a></p>
				
				<h4><a href="https://github.com/alxlit/coffeescript-php">CoffeeScript</a> Processing</h4>
				<p>by alxlit</p>
				
				<h4>CSS Processing/Minification</h4>
				<p><a href="https://github.com/javiermarinros/css_optimizer">css_optimizer</a> by <a href='https://github.com/javiermarinros'>Javier Marín</a></p>
				
				<h4>Live Reload</h4>
				<p><a href="http://www.livejs.com/">Live.js</a> by <a href='http://twitter.com/mrtnkl'>Martin Kool</a></p>
				
			</div>
			<div class="column">
				
				<h3>License</h3>
				<p>Cinch is built and distributed under the <a href="cinch/LICENSE">MIT license</a>. Feel free to use and adapt cinch to suit your needs or make it better.</p>
				
				<h3>Feedback</h3>
				<p>Found a bug? Have a suggestion? <a href="https://github.com/thomhines/cinch/issues">Post it here</a>.</p>
				<p>Want to see other things I'm working on? <a href="http://thomhines.com/"><br>Check out my site</a>.</p>
				
				
			</div>
		</div>

		<div class="cinchicon"></div>
	</footer>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-46006559-1', 'thomhines.com');
	ga('send', 'pageview');
</script>

</body>

</html>