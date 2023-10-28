<!--

import FormLayout from "../Containers/FormLayout"
import { CopyToClipboard } from "react-copy-to-clipboard-container"

import { tomorrow } from "react-syntax-highlighter/dist/esm/styles/hljs"

import IconicListItems from "../IconicListItems/IconicListItems"

class AccessibilitySelectItemDropdown -->
<!-- code

<div class="form-container" style="width: 250px">
  <!-- set or inherit width here
<fieldset>
  <legend>Select an item:</legend>
  <div class="dropdown-container">
    <div class="dropdown-button">
      <span class="text" for="previousReports">Select Year</span>
      <span class="eia ico d-arrow">
        <span>dropdown arrow</span>
      </span>
    </div>
    <div class="dropdown-menu">
      <ul id="previousReports">
        <li class="eia ico pdf">
          <a>2020</a>
        </li>
        <li class="eia ico pdf">
          <a>2019</a>
        </li>
        <li class="eia ico pdf">
          <a>2018</a>
        </li>
        <li>
          <a>See all</a>
        </li>
      </ul>
    </div>
  </div>
</fieldset>
</div>


-->


<h2 id="" class="uk-h3 tm-heading-fragment uk-margin-xlarge-top">Accessible EIA Branded Select</h2>
<div class="uk-section uk-section-muted uk-padding">
	<h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
	<ul>
		<li>
			The <code> for="previousReports"</code> associates the label with the form input
		</li>
		<li>
			The <code>id="previousReports"</code> should reference the label <code> for="previousReports"</code>
		</li>
		<li>
			The <code>&lt;fieldset&gt;...&lt;/fieldset&gt;</code> and <code>&lt;legend&gt;&lt;/legend&gt;</code> should be utilized
		</li>
	</ul>

	<div class="uk-text-default uk-text-normal uk-text-uppercase">Live Examples</div>
	<dl class="uk-description-list uk-description-list-divider">
		<dd>
			<a></a>
		</dd>
	</dl>
	<!-- Example -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
	<div class="primary form-area">
		<div class="form-container" style="width: 255px">
			<fieldset>
				<legend>Previous reports</legend>
				<div class="dropdown-container">
					<div class="dropdown-button">
						<span class="text" for="previousReports">
							Select Year
						</span>
						<span class="eia ico d-arrow">
							<span>dropdown arrow</span>
						</span>
					</div>
					<div class="dropdown-menu">
						<ul id="previousReports">
							<li class="eia ico pdf">
								<a>2020</a>
							</li>
							<li class="eia ico pdf">
								<a>2019</a>
							</li>
							<li class="eia ico pdf">
								<a>2018</a>
							</li>
							<li>
								<a>See all</a>
							</li>
						</ul>
					</div>
				</div>
			</fieldset>
		</div>
	</div>

	<!-- HTML -->
	<div class="uk-text-default uk-text-normal uk-text-uppercase">HTML</div>


	<pre><code class="language-html" id="SelectItemDropdown"></code></pre>
	<!-- Copy Button -->
	<p>
		<button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#SelectItemDropdown">
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