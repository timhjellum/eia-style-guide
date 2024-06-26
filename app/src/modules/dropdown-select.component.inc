<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Select Dropdown</h2>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="uk-card uk-card-default uk-padding">
	<div class="l-row l-two-col-left-wide">
		<div class="primary l-col form-area">
			<fieldset>
				<legend>Select your Items:</legend>
				<select name="cars" id="cars">
					<option value="ItemOne">Item One</option>
					<option value="ItemOne">Item Two</option>
					<option value="ItemOne">Item Thr</option>
					<option value="ItemOne">Item Fou</option>
				</select>
			</fieldset>
		</div>
	</div>
	<div class="l-col"></div>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="Select"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Select">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>
<hr class="uk-margin-large" />