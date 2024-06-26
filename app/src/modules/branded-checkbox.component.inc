<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">EIA Branded Checkbox</h2>
<h5>Checkboxes</h5>
<p>A toggle checkbox that can only be one of two states: checked or unchecked. The value is only submitted by the form if the checkbox is checked.</p>
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
			<ul class="checkbox-container">
				<li class="custom-checkbox">
					<input type="checkbox" name="elements" class="custom-checkbox-input" value="Item One" id="elementOne" />
					<label for="elementOne" class="custom-checkbox-label">
						<span class="custom-checkbox-label-inside"> Item One</span>
					</label>
				</li>
				<li class="custom-checkbox">
					<input type="checkbox" name="elements" class="custom-checkbox-input" value="Item Two" id="elementTwo" />
					<label for="elementTwo" class="custom-checkbox-label">
						<span class="custom-checkbox-label-inside"> Item Two</span>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="l-col"></div>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="BrandedCheckbox"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#BrandedCheckbox">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>