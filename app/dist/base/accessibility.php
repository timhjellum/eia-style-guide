<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'Themes';
$subSection		= 'Home';
?>
<!doctype html>
<html>

<head>
	<?php include('../includes/head.inc'); ?>
</head>

<body>
	<?php include('../includes/header.inc'); ?>
	<main>
		<div id="top">
			<!-- start master layout-->
			<div class="grid-wrapper">
				<div class="grid-left">
					<!-- start left navigation-->
					<div></div>
					<!-- end master layout-->
				</div>
				<div class="grid-main">
					<!-- start main template area -->
					<div class="eia-container">
						<h1 class="uk-h1 tm-heading-fragment"><?=$section?> - <?=$subSection?></h1>
						<p class="uk-text-lead"></p>
					</div>
					<div class="accessibility">
						<h2>
							<a href="alt-text-long-descriptions" id="alt-text-long-descriptions"></a>Alternative Text and Long&nbsp;Descriptions
						</h2>
						<p class="uk-text-default">Whenever a page presents images and other non-text content, it should present text alternatives. These text alternatives provide the same information presented by the image.</p>
						<p class="uk-text-default">
							The most common form text alternative is <code>alt</code> text. <code>alt</code> text is a brief label contained in the HTML code for the image. Content editors can generally provide <code>alt</code> text at the same time they upload images into websites. Screen readers read <code>alt</code> text aloud, and browsers pages <code>alt</code> text when images fails to load.
						</p>
						<p class="uk-text-default">
							Long descriptions are lengthier amounts of text provided nearby the image, such as in the next paragraph. Long descriptions are helpful when a brief <code>alt</code> text is not enough to convey information, such as in a complex chart or graph.
						</p>
						<p class="uk-text-default">
							(Developers and content editors should avoid using the <code>longdesc</code> HTML attribute altogether. Confusingly, long descriptions never should be provided directly in the <code>longdesc</code>.)
						</p>
						<h2>
							<a href="image-guidelines" id="image-guidelines"></a>Image&nbsp;Guidelines
						</h2>
						<p class="uk-text-default">
							Understanding what makes good <code>alt</code> text is subtle and important. It should be brief: less than 250 characters. It should convey the purpose of the image, not describe the image. When writing <code>alt</code> text, consider what details the author thought was most important. The same image can have quite different <code>alt</code> text depending on its context. Consult the content editor slides at the top of the page for more examples.
						</p>
						<p class="uk-text-default">Some other best practices include:</p>
						<ul class="ul bullet">
							<li>Avoid “image of”, “photo of”, etc, unless the medium is particularly important.</li>
							<li>
								Avoid using the title attribute in lieu of <code>alt</code> text. Keyboard-only users or mobile users may never see the title.
							</li>
							<li>Image links should describe the purpose of the link, and must never describe the image.</li>
							<li>
								Decorative images should have blank or empty <code>alt</code> text
							</li>
							<li>
								Complex images, like charts or graphs, should have long description located near the image. The image&apos;s <code>alt</code> text should describe where the close by image is.
							</li>
							<li>Posters, flyers, and the like must have the same information presented in nearby text/</li>
							<li>
								<p class="uk-text-default">Provide color contrast and other design elements to help color blind users</p>
							</li>
						</ul>
						<p class="uk-text-default">To learn more about images, consider the following resources:</p>
						<ul class="ul bullet">
							<li>
								<a href="https://www.w3.org/WAI/tutorials/images/">Image Concepts (Web Accessibility Tutorials)</a>
							</li>
							<li>
								<a href="https://www.w3.org/WAI/tutorials/images/decision-tree/">
									An <code>alt</code> Decision Tree (Web Accessibility Tutorials)
								</a>
							</li>
							<li>
								<a href="https://webaim.org/techniques/alttext/">Alternative Text (WebAIM)</a>
							</li>
							<li>
								<a href="http://accessibility.psu.edu/images/imageshtml/">
									Image <code>alt</code> Tag Tips for HTML (Penn State)
								</a>
							</li>
							<li>
								<a href="http://accessibility.psu.edu/images/charts/">Charts &amp; Accessibility (Penn State)</a>
							</li>
						</ul>
						<h2>
							<a href="images-of-text" id="images-of-text"></a>Images of&nbsp;Text
						</h2>
						<p class="uk-text-default">
							In general, websites should avoid images of text. Images of text are best reserved when a particular visual presentation is essential, such as a logo. If the image is of a small amount of text, the <code>alt</code> text must match the text in the image exactly. If the image contains a considerable amount of text, the text should also be elsewhere on the page.
						</p>
						<p class="uk-text-default">In general, text in images should be a generous size to mitigate pixelation when zoomed. A minimum size of 19px is a good rule of thumb, with larger being better. Text in images should match color contrast ratio minimums. For text that is at least 24px and normal weight or 19px and bold, use a contrast ratio that is at least 3:1. Ideally, use a contrast ratio that is at least 4.5:1.</p>
						<h2>
							<a href="complex-images" id="complex-images"></a>Charts, Graphs, and Other Complex&nbsp;Images
						</h2>
						<p class="uk-text-default">
							For charts, graphs, diagrams, illustrations, and other complex images, simple <code>alt</code> text may not be sufficient to convey the information. In such cases, the information should be provided in addition in text on the page. For charts and graphs, authors may want to provide a data table with the equivalent information. For flow charts and diagrams, a discussion of the relevant information in the following paragraphs may be best. In any case, the image&apos;s <code>alt</code> text should direct the user to the long description.
						</p>
						<p class="uk-text-default">
							<strong>Example:&nbsp;</strong>Below is a complex flow chart describing Yale&apos;s foreign language requirements for undergrads. On the site where this chart is presented, the author should present bullet points or paragraphs presenting the same information contained in the flowchart.
						</p>

						<p class="uk-text-default">
							The alt text should be something like <code>alt="Yale College foreign language requirements. See below for discussion"</code>.
						</p>
						<h2>
							<a href="developers" id="developers"></a>Developer Best&nbsp;Practices
						</h2>
						<h4>
							<a href="img-tags-alt-attributes" id="img-tags-alt-attributes"></a>All <code>&lt;img&gt;</code>&nbsp;Tags Must Have <code>alt</code> Attributes
						</h4>
						<p class="uk-text-default">If an image does not have an alt attribute, a screen reader may announce the image&apos;s src attribute instead. So, all images must have an alt attribute. When an image does not have alt text, provide a null alt attribute, like so:</p>
						<pre>
	  <code>&lt;img alt ... /&gt;</code>
	</pre>
						<p class="uk-text-default">or</p>
						<pre>
	  <code>&lt;img alt="" ... /&gt;</code>
	</pre>
						<h4>
							<span>
								<a href="other-ways-text-alternatives" id="other-ways-text-alternatives"></a>Other Ways to Provide Text Alternatives

						</h4>
						<p class="uk-text-default">
							Developers can provide accessible names to images with the <code>aria-label</code> and <code>aria-labelledby</code> attributes. When these attributes are present, assistive technology will ignore the image&apos;s alt text and read the ARIA label instead.
						</p>
						<p class="uk-text-default">
							Developers can
							<a href="https://www.w3.org/TR/WCAG20-TECHS/ARIA15.html">
								associate text elsewhere on the page using the <code>aria-describedby</code>&nbsp;attribute
								<span>
									<span class="element-invisible"> (link is external)

							</a>
							. This can be particularly helpful when using captions for complex images.
						</p>
						<p class="uk-text-default">
							Developers can also
							<a href="http://html5doctor.com/the-figure-figcaption-elements/">
								use the <code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code> to associate visible text with an image
								<span>
									<span class="element-invisible"> (link is external)

							</a>
							. When using&nbsp;<code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;,</code> the <code>alt</code> attribute can be more minimal, and the <code>&lt;figcaption&gt;</code> can be more expressive.
							<a href="https://www.w3.org/WAI/tutorials/images/groups/#a-collection-of-images">
								The <code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code> elements can be used for groups of images
								<span>
									<span class="element-invisible"> (link is external)

							</a>
							, as well.
						</p>
						<h4>
							<a href="hiding-decorative-images" id="hiding-decorative-images"></a>Hiding Decorative Images from Assistive Technology
						</h4>
						<p class="uk-text-default">Images that have no function or information content whatsoever are decorative images. These images can include stock photos included just for “eye candy.” Such images should be hidden from assistive technologies.</p>
						<p class="uk-text-default">Decorative images can be hidden from screen readers in multiple ways:</p>
						<ul class="ul bullet">
							<li>
								using a null <code>alt</code> attribute
							</li>
							<li>
								using ARIA <code>role="presentation"</code>
							</li>
							<li>using a CSS background image</li>
						</ul>
						<h4>
							<a href="svg-accessibility" id="svg-accessibility"></a>SVG Accessibility
						</h4>
						<p class="uk-text-default">
							<span>Implementing images as SVGs can solve accessibility challenges related to pixelated images and zooming. However, ensuring that SVG images are accessible requires some extra care.
						</p>
						<p class="uk-text-default">
							SVG images implemented as <code>&lt;img&gt;</code> tags should also include the <code>role="image"</code>&nbsp;attribute.
						</p>
						<p class="uk-text-default">
							SVG images implemented using the <code>&lt;svg&gt;</code> element should include the <code>&lt;title&gt;</code> and <code>&lt;desc&gt;</code>.
						</p>
						<p class="uk-text-default">
							<span>References for SVG accessibility:
						</p>
						<ul class="ul bullet">
							<li>
								<a href="https://developer.paciellogroup.com/blog/2013/12/using-aria-enhance-svg-accessibility/">Using ARIA to enhance SVG accessibility (The Paciello Group)</a>
							</li>
							<li>
								<a href="https://simplyaccessible.com/article/7-solutions-svgs/">7 solutions for creating more accessible SVGs (Simply Accessible)</a>
							</li>
							<li>
								<a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Element/title">
									The <code>&lt;title&gt;</code> element (Mozilla)
								</a>
							</li>
							<li>
								<a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Element/desc">
									The <code>&lt;desc&gt;</code> element (Mozilla)
								</a>
							</li>
						</ul>



						<div class="l-row full-width-col">
							<div class="l-col"><strong>Default Link</strong></div>
							<div class="l-col">
								<p class="eia">Lorem ipsum dolor sit amet <a>consectetur adipiscing</a> elit.</p>
							</div>
						</div>

						<div class="l-row full-width-col">
							<div class="l-col"><strong>Link / Active / Visited</strong></div>
							<div class="l-col">
								<p class="eia">Lorem ipsum dolor sit amet <a class="link">consectetur adipiscing</a> elit.</p>
							</div>
						</div>
						<div class="l-row full-width-col">
							<div class="l-col"><strong>Hover</strong></div>
							<div class="l-col">
								<p class="eia">Lorem ipsum dolor sit amet <a class="hover">consectetur adipiscing</a> elit.</p>
							</div>
						</div>
						<div class="l-row full-width-col">
							<div class="l-col"><strong>Focus</strong></div>
							<div class="l-col">
								<p class="eia">Lorem ipsum dolor sit amet <a class="focus">consectetur adipiscing</a> elit.</p>
							</div>
						</div>


						<h3 class="h3 base">Screen-reader Only Link with Description</h3>
						<p class="uk-text-default">It&apos;s most important for link text to make sense without the surrounding sentences or content. The link text alone should convey the function and purpose of the link. Link text should also be unique and easy to speak out loud.</p>
						<p class="uk-text-default">Consider these guidelines when writing link text:</p>
						<ul class="ul _bullet">
							<li>Avoid link text like “Click Here,” “More,” and “Read More.” These kinds of links can be confusing when a screen reader reads them out of context.</li>
							<li>Use unique link text where possible. Speech recognition software users may have a bad experience with duplicated link text.</li>
							<li>It is OK to link a full sentence, but avoid longer.</li>
							<li>Use judgment when linking full URLs. When linking a URL, consider users who must speak it out loud and who must listen to a screen reader announce it.</li>
						</ul>

						<p class="uk-text-default">
							<strong>Fallbacks</strong>
						</p>
						<p class="uk-text-default">Occasionally, it may not be possible to make link text alone convey the link&apos;s purpose out of context. In those cases, a few fallback strategies are available:</p>
						<ul class="ul _bullet">
							<li>The link together with the surrounding sentence, paragraph, or list item should be enough to convey a link&apos;s meaning or purpose.
							<li>You may give more context through the link&apos;s title attribute.</li>
							<li>These approaches create a worse experience for users with disabilities, so they should a last resort.</li>
						</ul>
						<p class="uk-text-default">https://usability.yale.edu/web-Accessibilityarticles/links</p>
						<p class="uk-text-default">
							<a href="https://usability.yale.edu/web-Accessibilityarticles/links">https://usability.yale.edu/web-Accessibilityarticles/links</a>
						</p>
					</div>
					<!-- end main template area -->
				</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</div>
		<?php include('./includes/footer.inc'); ?>
	</main>
</body>

</html>