<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Enctype</h2>

<h4>enctype</h4>
<p>
	Defines the <a href="https://www.iana.org/assignments/media-types/media-types.xhtml">MIME type</a> of the information sent to the server. Only works if the method is <code>post</code>.
</p>
<code>"application/x-www-form-urlencoded"</code>
<strong class="value-is-default">Default.</strong>
<p>
	The <strong>default</strong> value.
</p>
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
				<div>
					<div class="form-container">
						<label>Email</label>
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

<code>"text/plain"</code>
<p>For HTML5 plain text.</p>
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
				<div>
					<div class="form-container">
						<label>Email</label>
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
<code>"multipart/form-data"</code>
<p>
	Needed when using an <code>&lt;input type="file"&gt;</code> element.
</p>
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
					<label>Upload</label>
					<input type="file" />
				</div>
			</fieldset>
		</div>
	</div>

	<div class="l-col"></div>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

<pre><code class="language-html" id="Enctype"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Enctype">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>