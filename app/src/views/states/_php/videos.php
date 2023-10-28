<!doctype html>
<html>
<?php
$globalTitle 		= 'U.S. Energy Information Administration (EIA)';
$pageTitle 			= "Responsive Videos"
?>

<head>
	<title>
		<!-- title here --> -
		<?=$globalTitle?>
	</title>
	<meta property="og:title" content="<!-- title here --> - <?=$globalTitle?>">

	<link href="style-guide/styles/style-guide.css" type="text/css" media="screen, projection" rel="stylesheet">
	<link href="../global/styles/global.css" type="text/css" media="screen, projection" rel="stylesheet">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery/jquery.migrate.min.js"></script>
	<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
	<script src="vendor/jquery-ui/jquery.ui.touch-punch.min.js"></script>
	<link href="../includes/favicon.ico" rel="shortcut icon">
	<link href="../includes/favicon.ico" rel="icon" type="image/x-icon">
	<link href="../includes/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">

</head>

<body>
	<!-- includes/header.inc') ?>
	<div class="l-row l-two-col-right">
		<div class="l-col states">
			<h1 class="uk-h1 tm-heading-fragment">Videos</h1>
<p class="uk-text-lead"></p>
		</div>
		<div class="l-col states sticky">
			<?php include('includes/sub-nav -->
	</div>
	</div>
	<div class="l-row l-full-width-col section">
		<div class="l-col states">
			<h4>Responsive Video Container</h4>


			<a onclick="twoColumnLeftNarrow()" class="prototype-link l-two-col-left-narrow">
				<div class="prototype-thumb">
					<div class="prototype-column-container w25">
						<div class="prototype-column prototype-secondary"></div>
					</div>
					<div class="prototype-column-container w75">
						<div class="prototype-column"></div>
					</div>
				</div>
			</a>
			<a onclick="twoColumnLeft()" class="prototype-link l-two-col-left">
				<div class="prototype-thumb">
					<div class="prototype-column-container w33">
						<div class="prototype-column prototype-secondary"></div>
					</div>
					<div class="prototype-column-container w66">
						<div class="prototype-column"></div>
					</div>
				</div>
			</a>
			<a onclick="twoColumnRightWide()" class="prototype-link l-two-col-right-wide">
				<div class="prototype-thumb">
					<div class="prototype-column-container w42">
						<div class="prototype-column prototype-secondary"></div>
					</div>
					<div class="prototype-column-container w58">
						<div class="prototype-column"></div>
					</div>
				</div>
			</a>
			<a onclick="twoColumnEven()" class="prototype-link l-two-col-even">
				<div class="prototype-thumb">
					<div class="prototype-column-container w50">
						<div class="prototype-column"></div>
					</div>
					<div class="prototype-column-container w50">
						<div class="prototype-column"></div>
					</div>
				</div>
			</a>
			<!--
		<a onclick="twoColumnLeftWide()" class="prototype-link l-two-col-left-wide">
		<div class="prototype-thumb">
			<div class="prototype-column-container w58">
				<div class="prototype-column"></div>
			</div>
			<div class="prototype-column-container w42">
				<div class="prototype-column prototype-secondary"></div>
			</div>
		</div>
	</a>
	<a onclick="twoColumnRight()" class="prototype-link l-two-col-right">
		<div class="prototype-thumb">
			<div class="prototype-column-container w66">
				<div class="prototype-column"></div>
			</div>
			<div class="prototype-column-container w33">
				<div class="prototype-column prototype-secondary"></div>
			</div>
		</div>
	</a>
	<a onclick="twoColumnRightNarrow()" class="prototype-link l-two-col-right-narrow">
		<div class="prototype-thumb">
			<div class="prototype-column-container w75">
				<div class="prototype-column"></div>
			</div>
			<div class="prototype-column-container w25">
				<div class="prototype-column prototype-secondary"></div>
			</div>
		</div>
	</a>	

	<button onclick="twoColumnLeftNarrow()">Two Column Left Narrow</button>
</div>
	<button onclick="twoColumnLeft()">Two Column Left</button>
</div>
	<button onclick="twoColumnRightWide()">Two Column Right Wide</button>
</div>
	<button onclick="twoColumnEven()">Two Column Even</button>
</div>
	<button onclick="twoColumnRightNarrow()">Two Column Right Narrow</button>
</div>
	<button onclick="twoColumnRight()">Two Column Right</button>
</div>
	<button onclick="twoColumnLeftWide()">Two Column Left Wide</button>
</div>	
-->


		</div>
	</div>
	<div class="l-row l-full-width-col section">
		<div class="l-col primary">
			<div class="l-row l-two-col-left-narrow" id="styleSwitcher">
				<div class="l-col video-container">
					<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
				</div>
				<div class="l-col" id="dilly">

				</div>
				<!--
					<?php /* include('/includes/placeholders/lorem-ipsum.inc'); */ ?>
				-->

			</div>
		</div>
	</div>
	<div class="l-row l-full-width-col section">
		<div class="l-col primary">

			<div class="clipboard-container">
				<h4><span>&lt;/&gt;</span> Source</h4>

				<pre><code class="language-html" id="responsiveVideoContainer">&lt;div class="video-container"&gt;
	&lt;iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"&gt;&lt;/iframe&gt;
	&lt;!-- note: do not hard code width or height of iframe --&gt;
&lt;/div&gt;</code></pre>

			</div>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#responsiveVideoContainer">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
		</div>
	</div>
	</div>
	</div>
	<div class="l-row l-full-width-col section">
		<div class="l-col primary">
			<p>
				Place the below snippit at the bottom of the .php page, preferable below the <code>&lt;?php include('adaptive/global/footer/includes/footer.inc') ?&gt;</code> tag.
			</p>
			<div class="clipboard-container">
				<h4><span>&lt;/&gt;</span> Source</h4>

				<pre><code class="language-html" id="scriptLoad">&lt;script src="/global/scripts/global.videos.min.js"&gt;&lt;/script&gt;</code></pre>

			</div>
			<!-- Copy Button -->
			<p>
				<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#scriptLoad">
					<span uk-icon="copy"></span>Copy to clipboard
				</button>
		</div>
	</div>
	</div>
	</div>













	<!--
<div class="l-two-col-left">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
	<div class="l-two-col-right-wide">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
	<div class="l-two-col-even">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
	<div class="l-two-col-right-narrow">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
	<div class="l-two-col-right">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
	<div class="l-two-col-left-wide">
		<div class="l-col video-container">
			<iframe src="https://www.youtube.com/embed/H0tVVQqcVV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="iframe"></iframe>
		</div>
		<?php include('/includes/placeholders/lorem-ipsum -->
	</div>
-->
	<?php include('/includes/footer -->
</body>

<script>



	function twoColumnLeftNarrow() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-left-narrow')
		updateVideoSize()
	}

	function twoColumnLeft() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-left')
		updateVideoSize()
	}

	function twoColumnRightWide() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-right-wide')
		updateVideoSize()
	}

	function twoColumnEven() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-even')
		updateVideoSize()
	}
	/*
	function twoColumnRightNarrow() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-right-narrow')
		updateVideoSize()
	}
	function twoColumnRight() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-right')
		updateVideoSize()
	}
	function twoColumnLeftWide() {
		var switcher = document.getElementById("styleSwitcher")
		switcher.className = ""
		switcher.setAttribute('class', 'l-row l-two-col-left-wide')
		updateVideoSize()
	}
	*/

	// first get aspect ration of the iframe

	function gcd(a, b) {
		return (b == 0) ? a : gcd(b, a % b);
	}
	var iFrameInitial = document.querySelector('.iframe');
	var w = iFrameInitial.offsetWidth;
	var h = iFrameInitial.offsetHeight;
	var r = gcd(w, h);



	var dillyDilly = document.getElementById("dilly")
	dillyDilly.innerHTML = "Dimensions = " + w + " x " + h + "<br />Aspect ratio = " + w / r + ":" + h / r

	function resizeIFrameToFitContent(iframes) {
		let videoContainer = document.querySelector('.video-container');
		let videoContainerWidth = videoContainer.offsetWidth;
		console.log(videoContainerWidth)

		iframes.width = videoContainerWidth
		iframes.height = videoContainerWidth / ((w / r) / (h / r))
	}
	/*
	window.addEventListener('DOMContentLoaded', function (e) {
		var iframes = document.querySelectorAll(".iframe");
		for (var i = 0; i < iframes.length; i++) {
			resizeIFrameToFitContent(iframes[i]);
		}
	});
*/
	// Setup our function to run on various events
	var updateVideoSize = function (e) {
		var iframes = document.querySelectorAll(".iframe");
		for (var i = 0; i < iframes.length; i++) {
			resizeIFrameToFitContent(iframes[i]);
		}
	};

	// Add our event listeners
	window.addEventListener('DOMContentLoaded', updateVideoSize, false);
	window.addEventListener('resize', updateVideoSize);





</script>

</html>