<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Release Schedule</h2>
<h3 class="uk-h3 uk-heading-small">Live Examples</h2>
	<dl class="uk-description-list uk-description-list-divider">
		<dd></dd>
		<dd></dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="eia-card">
		<script>
			function releaseScheduleArticle() {
				var releaseSchedule = document.getElementById("releaseScheduleStyleSwitcher")
				releaseSchedule.setAttribute('class', 'article')
			}

			function releaseSchedulePrimary() {
				var releaseSchedule = document.getElementById("releaseScheduleStyleSwitcher")
				releaseSchedule.setAttribute('class', 'primary')
			}

			function releaseSchedulePrimaryAlt() {
				var releaseSchedule = document.getElementById("releaseScheduleStyleSwitcher")
				releaseSchedule.setAttribute('class', 'primary-alt')
			}

			function releaseScheduleSecondary() {
				var releaseSchedule = document.getElementById("releaseScheduleStyleSwitcher")
				releaseSchedule.setAttribute('class', 'secondary')
			}

			function releaseScheduleSecondaryAlt() {
				var releaseSchedule = document.getElementById("releaseScheduleStyleSwitcher")
				releaseSchedule.setAttribute('class', 'secondary-alt')
			}
		</script>
		<div class="style-switcher">
			<button onclick="releaseScheduleArticle()">Article</button>
			<button onclick="releaseSchedulePrimary()">Primary</button>
			<button onclick="releaseSchedulePrimaryAlt()">Primary-alt</button>
			<button onclick="releaseScheduleSecondary()">Secondary</button>
			<button onclick="releaseScheduleSecondaryAlt()">Secondary-alt</button>
		</div>
		<div class="article" id="releaseScheduleStyleSwitcher">
			<!-- includes/placeholders/release-schedule -->
		</div>

		<!-- HTML -->
		<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
		<div class="uk-margin-medium">


			<pre><code class="language-html" id="releaseSchedule">&lt;ul&gt;
&lt;li class="release-schedule"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li class="release-schedule"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;li class="release-schedule"&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
&lt;/ul&gt;</code></pre>
		</div>
		<!-- Copy Button -->
		<p>
			<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#releaseSchedule">
				<span uk-icon="copy"></span>Copy to clipboard
			</button>
		</p>
		</div>
</section>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$      dilly      $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<section id="dilly">
<div class="eia-container">