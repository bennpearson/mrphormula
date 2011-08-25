<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>Gridless - An awesome HTML5 &amp; CSS3 boilerplate for mobile first responsive, cross-browser websites</title>

		<!-- Meta tags -->
		<meta name="description" content="Gridless is an optionated HTML5 and CSS3 boilerplate for making mobile first responsive, cross-browser websites with beautiful typography." />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Don't forget to update the bookmark icons in root: http://mathiasbynens.be/notes/touch-icons -->

		<!-- CSS -->
		<link rel="stylesheet" href="../css/style.css">
		
		<!-- JavaScript -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="../js/libs/modernizr-2.0.6.min.js"></script>
	</head>
	<body>
		<header class="group">
			<hgroup id="main-header">
				<h1>Gridless</h1>
			</hgroup>
			<nav id="main-nav">
				<ul>	
					<!--<li><a href="docs/index.html">Documentation</a></li>-->
					<li><a href="https://github.com/thatcoolguy/gridless-boilerplate">GitHub repo</a></li>
				</ul>
			</nav>
		</header>

		<hr />

		<article id="intro">
			<h2>Make future-proof responsive websites with ease.</h2>
			<p>Gridless is an optionated <abbr>HTML</abbr>5 and <abbr>CSS</abbr>3 boilerplate for making mobile first responsive, cross-browser websites with beautiful typography.</p>
		</article>

		<div class="group">

			<section id="demo">
				<a href="demo/demo.html"><button>View demo</button></a>
			</section>

			<section id="download">
				<a href="https://github.com/thatcoolguy/gridless-boilerplate/tarball/master"><button>Download</button></a>
			</section>
		</div>
		
		<hr />

		<section id="features">

			<div class="group">
				<article id="dby">
					<header>
						<h2><abbr>DBY</abbr> (Don't Bore Yourself) approach</h2>
					</header>
					<p>Gridless takes the boring parts of making websites and webapps out. It comes packed with everything you're tired of doing in every new project: <a href="http://necolas.github.com/normalize.css/"><abbr>CSS</abbr> normalization</a>, <a href="http://www.informationarchitects.jp/en/100e2r/">beautiful typography</a>, a well-organized folder structure, <a href="http://mathiasbynens.be/notes/safe-css-hacks"><abbr>IE<abbr> bugfixes</a> and other nice tricks.</p>
				</article>

				<article id="responsive">
					<header>
						<h2>Progressive responsiveness</h2>
					</header>
					<p>Gridless uses <a href="http://www.lukew.com/ff/entry.asp?933">mobile first</a> <a href="http://www.alistapart.com/articles/responsive-web-design">responsive web design</a> to adapt itself to the device's width. This means it'll work anywhere: old feature phones, newer smartphones, tablets, notebooks and bigger desktops. <abbr>IE</abbr>6/7/8 don't support media queries, so we use <a href="https://github.com/scottjehl/Respond/">Respond.js</a> to polyfill that.</p>
				</article>
			</div>

			<div class="group">
				<article id="simple">
					<header>
						<h2>Agnostic starting point</h2>
					</header>
					<p>Gridless is extremely simple and straightforward. It doesn't come with any predefined grid systems <!--<a href="#">(and here's why you shouldn't even be using them)</a>--> or non-semantic classes. Gridless is meant to be a starting point, <strong>which should be edited, tweaked and overwritten to suit each project's design</strong> requirements.
				</article>

				<!--<article id="documented">
					<header>
						<h2>Well documented</h2>
					</header>
					<p>What's a good library without good documentation? Gridless has <a href="docs/index.html">awesome documentation</a> so if you're going mad trying to understand something, just <a href="docs/index.html">check it out</a>.
				</article>-->
			</div>
		</section>

		<hr />

		<div class="group">
			<section id="source">
				<article>
					<header>
						<h2>Source code</h2>
					</header>
					<p id="fork"><a href="https://github.com/thatcoolguy/gridless-boilerplate">Fork me on GitHub: thatcoolguy/gridless-boilerplate</a></p>
					<p>Gridless is open-source, licensed under <a href="http://unlicense.org/">Unlicense</a>. If you'd like to contribute, clone the GitHub repo, send a pull request or an issue.</p>
					<pre><code>$ git clone git://github.com/thatcoolguy/gridless-boilerplate.git</code></pre>
				</article>
			</section>
			<section id="support">
				<article>
					<header>
						<h2>Browser support</h2>
					</header>
					<p>Gridless is cross-browser compatible:</p>
					<div class="group">
						<figure>
							<img src="assets/img/firefox.png" />
							<figcaption>Firefox 3.5+</figcaption>
						</figure>
						<figure>
							<img src="assets/img/opera.png" />
							<figcaption>Opera 11+</figcaption>
						</figure>
						<figure>
							<img src="assets/img/chrome.png" />
							<figcaption>Chrome 11+</figcaption>
						</figure>
						<figure>
							<img src="assets/img/safari.png" />
							<figcaption>Safari 5+</figcaption>
						</figure>
						<figure>
							<img src="assets/img/ie.png" />
							<figcaption>Internet Explorer 6+</figcaption>
						</figure>
					</div>
					<p>Even though some of these browsers are very recent, Gridless should work in any modern browser.</p>
				</article>
			</section>
		</div>
	</body>
</html>