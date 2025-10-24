<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Placeholder</h2>

<h4>placeholder</h4>
<p>Defines a non-selectable placeholder text that only appears when the input is empty.</p>
<code>"e.g. alex@smith.com"</code>
<p>You can hint at the format expected for the input.</p>

<p>As a best practice, it is recommended to have a label to describe the input, and use the placeholder to showcase an example:</p>
<p>Notice how the placeholder disappears on focus, hence the need to maintain a separate label.</p>
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

				<div class="form-container">
					<label>Email</label>
					<input type="email" name="email" placeholder="e.g. alex@smith.com" />
				</div>
				<div class="button-container">
					<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
						ok
					</button>
				</div>

			</fieldset>
		</div>
	</div>
	<div class="l-col"></div>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="FormPlaceholder"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#FormPlaceholder">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>