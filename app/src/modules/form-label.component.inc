<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Label and Input</h2>
<div class="uk-section uk-section-muted uk-padding">
	<h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
	<ul>
		<li>
			The <code> for="name"</code> associates the label with the form input
		</li>
		<li>
			the <code>id="name"</code> should reference the label <code> for="name"</code>
		</li>
		<li>
			The <code>&lt;fieldset&gt;...&lt;/fieldset&gt;</code> and <code>&lt;legend&gt;&lt;/legend&gt;</code> should be utilized
		</li>
	</ul>
</div>

<p class="_note p">The user can click on the label to set focus to the form control. This is useful on small screens and to some people with motor disabilities, particularly when targeting small checkboxes and radio buttons. Clicking on labels is also an easy way to check for proper form labeling. If clicking the label sets focus to or activates the form control, then that label is programmatically associated.</p>
<!-- HTML -->
<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>
<pre><code class="language-html" id="InputLabel"></code></pre>
<!-- Copy Button -->
<p>
	<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#InputLabel">
		<span uk-icon="copy"></span>Copy to clipboard
	</button>
</p>