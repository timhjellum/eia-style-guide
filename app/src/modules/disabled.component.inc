<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Disabled</h2>

<code>disabled</code>
<p>Disables the controls the fieldset contains.</p>

<code>n/a</code>
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

			<fieldset disabled="">
				<legend>Subscribe to the Newsletter</legend>
				<div>
					<div class="form-container">
						<input type="email" name="email" />
						<input type="email" name="email" placeholder="e.g. alex@smith.com" />
					</div>
					<div class="button-container">
						<button type="submit" id="submitFeedback" tabIndex="0" role="button" class="submit">
							ok
						</button>
					</div>
				</div>
			</fieldset>
		</div>
	</div>

	<div class="l-col"></div>
</div>
<!-- HTML -->
<code>disabled</code>
<p>Disables the input.</p>
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
					<input disabled="" />
					<input type="email" name="email" placeholder="e.g. alex@smith.com" />
				</div>
			</fieldset>
		</div>
	</div>

	<div class="l-col"></div>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="Disabled"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Disabled">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>