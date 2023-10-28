<!--

import FormLayout from "../Containers/FormLayout"

class Autocomplete

-->


<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Autocomplete</h2>

<h4>autocomplete</h4>
<p>Determines if the browser can autocomplete all the form's controls.</p>
<code>"off"</code>
<p>
	The browser will <strong>disable</strong> autocomplete functions. This can however be overriden for each control individually.
</p>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="eia-card">
	<div class="primary form-area">
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
	</div>
	</fieldset>
</div>


<code>"on"</code>
<p>
	The browser will <strong>enable</strong> autocomplete functions. This can however be overriden for each control individually.
</p>
<p>Try pressing "down" in this input. It will show previously entered email addresses.</p>
<!-- Live Examples --
<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
<dl class="uk-description-list uk-description-list-divider">
	<dd><a [routerLink]="['/modules/']" [fragment]="'placeholder'">placeholder</a></dd>
</dl>
-->
<!-- Example -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
<div class="eia-card">
	<div class="primary form-area">
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
	</div>
	</fieldset>
</div>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>

<pre><code class="language-html" id="Autocomplete"></code></pre>

<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#Autocomplete">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>