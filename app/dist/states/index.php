<?php
require_once '../includes/variables.inc';
$globalTitle 	= 'U.S. Energy Information Administration (EIA)';
$section		= 'States';
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
	<section class="landing">

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

		<h2 class=" uk-h3 tm-heading-fragment">State Rules</h2>
		<p>A state is something that augments and overrides all other styles. For example, an accordion section may be in a collapsed or expanded state. A message may be in a success or error state.</p>
		<p>States are generally applied to the same element as a layout rule or applied to the same element as a base module class.</p>
		<p>The header element just has an ID. As such we can assume that any styles, if there are any, on this element are for layout purposes and that the <code>is-collapsed</code> represents a collapsed state. One might presume that without this state rule, the default is an expanded state.</p>
		<p>The <code>msg</code> module is simple enough and has an error state applied to it. One could imagine a success state could be applied to the message, alternatively.</p>
		<p>Finally, the field label has a hidden state applied to hide it from sight but still keep it for screen readers. In this case, we are actually applying the state to a base element and not overriding a layout or module.</p>
		<h2 class="uk-h3 tm-heading-fragment">Isnʼt it just a module?</h2>
		<p>There is plenty of similarity between a sub-module style and a state style. They both modify the existing look of an element. However, they differ in two key ways:</p>
		<ol>
			<li>State styles can apply to layout and/or module styles; and</li>
			<li>State styles indicate a JavaScript dependency.</li>
		</ol>
		<p>It is this second point that is the most important distinction. Sub-module styles are applied to an element at render time and then are never changed again. State styles, however, are applied to elements to indicate a change in state while the page is still running on the client machine.</p>
		<p>For example, clicking on a tab will activate that tab. Therefore, an <code>is-active</code> or <code>is-tab-active</code> class is appropriate. Clicking on a dialog close button will hide the dialog. Therefore, an <code>is-hidden</code> class is appropriate.</p>
		<h2 class="uk-h3 tm-heading-fragment">Using !important</h2>
		<p>States should be made to stand alone and are usually built of a single class selector.</p>
		<p>Since the state will likely need to override the style of a more complex rule set, the use of <code>!important</code> is allowed and, dare I say, recommended. (I used to say that <code>!important</code> was never needed but on complex systems, it is often a necessity.) You won&apos;t normally have two states applied to the same module or two states that tend to affect the same set of styles, so specificity conflicts from using <code>!important</code> should be few and far between.</p>
		<p>With that said, be cautious. Leave <code>!important</code> off until you actually and truly need it (and you will see why in this next example). Remember, the use of <code>!important</code> should be avoided for all other rule types. Only states should have it.</p>
		<h2 class="uk-h3 tm-heading-fragment">>Combining State Rules with Modules</h2>
		<p>Inevitably, a state rule will not be able to rely on inheritance to apply its style in the right place. Sometimes a state is very specific to a particular module where styling is very unique.</p>
		<p>In a case where a state rule is made for a specific module, the state class name should include the module name in it. The state rule should also reside with the module rules and not with the rest of the global state rules.</p>
		<p>If you are doing just-in-time loading of your CSS, generic states should be considered part of the base and global styles and loaded on initial page load. The styles for a particular module wonʼt need to be loaded until that particular module is loaded.</p>

	<!-- end main template area -->
	</div>
				<div class="grid-right"></div>
			</div>
			<!-- end master layout-->
		</section>
		<?php include('./includes/footer.inc'); ?>
	</main>
</body>

</html>