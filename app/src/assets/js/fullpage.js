import fullpage from 'fullpage.js'



class FullPage {
	constructor() {
		new fullpage('#scrollingSection', {
			licenseKey: 'L75AH-JQ2RI-EIHJ7-35EKK-JVMSM',
			//parallax: true,
			//parallaxKey: 'V2phR3BsYkd4MWJTNWpiMjA9NFlfdnB6Y0dGeVlXeHNZWGc9eGZ2', //'9091D6F3-396D4EFE-B12B831F-E44444DF',
			//slidesNavigation: true,
			scrollOverflow: false, // required for longer pages
			//scrollOverflowReset: true,
			//scrollOverflowResetKey: 'aDNibVYwYkdsbWVTNWhjSEE9WXBfRTRsYzJOeWIyeHNUM1psY21ac2IzZFNaWE5sZEE9PWx6ZA==', // netlifly.app
			//scrollOverflowResetKey: 'V2ZhR3BsYkd4MWJTNWpiMjA9MTFfZDdwYzJOeWIyeHNUM1psY21ac2IzZFNaWE5sZEE9PVVTRw==', // hjellum.com
			//scrollReset: 97485ED1-08E842A8-AF887993-A84D213F
			scrollingSpeed: 1000,

			parallaxOptions: {
				type: 'reveal',
				percentage: 50,
				property: 'translate'
			},

			// Navigation
			// menu: (default false) A selector can be used to specify the menu to link with the sections. This way the scrolling of the sections will activate the corresponding element in the menu using the class active. This won't generate a menu but will just add the active class to the element in the given menu with the corresponding anchor links. In order to link the elements of the menu with the sections, an HTML 5 data-tag (data-menuanchor) will be needed to use with the same anchor links as used within the sections. Example:

			//menu: '#menu',
			//lockAnchors: false, // default false
			//anchors: [],
			navigation: false, //(default false) If set to true, it will show a navigation bar made up of small circles.
			//navigationPosition: (default none) It can be set to left or right and defines which position the navigation bar will be shown(if using one).
			//navigationTooltips: (default[]) Defines the tooltips to show for the navigation circles in case they are being used.Example: navigationTooltips: ['firstSlide', 'secondSlide'].You can also define them by using the attribute data - tooltip in each section if you prefer.
			//showActiveTooltip: true, // (default false) Shows a persistent tooltip for the actively viewed section in the vertical navigation.
			//slidesNavigation: (default false) If set to true it will show a navigation bar made up of small circles for each landscape slider on the site.
			//slidesNavPosition: (default bottom) Defines the position for the landscape navigation bar for sliders.Admits top and bottom as values.You may want to modify the CSS styles to determine the distance from the top or bottom as well as any other style such as color.
			//scrollOverflow: true, //(default true) defines whether or not to create a scroll for the section / slide in case its content is bigger than the height of it.In order to prevent fullpage.js from creating the scrollbar in certain sections or slides use the class fp-noscroll.For example: <div class="section fp-noscroll"> You can also prevent scrolloverflow from getting applied on responsive mode when using fp-auto-height-responsive in the section element.


			// Scrolling
			//css3: (default true). Defines whether to use JavaScript or CSS3 transforms to scroll within sections and slides. Useful to speed up the movement in tablet and mobile devices with browsers supporting CSS3. If this option is set to true and the browser doesn't support CSS3, a fallback will be used instead.
			//scrollingSpeed: 700,
			autoScrolling: true, // REQUIRED FOR OVERFLOW EXTENSION (default true) Defines whether to use the "automatic" scrolling or the "normal" one. It also has affects the way the sections fit in the browser/device window in tablets and mobile phones.
			//fitToSection: (default true) Determines whether or not to fit sections to the viewport or not. When set to true the current active section will always fill the whole viewport. Otherwise the user will be free to stop in the middle of a section.
			//fitToSectionDelay: (default 1000). If fitToSection is set to true, this delays the fitting by the configured milliseconds.
			scrollBar: true, // Determines whether to use scroll bar for the vertical sections on site or not. In case of using scroll bar, the autoScrolling functionality will still work as expected. The user will also be free to scroll the site with the scroll bar and fullPage.js will fit the section in the screen when scrolling finishes.
			//easing: (default easeInOutCubic) Defines the transition effect to use for the vertical and horizontal scrolling. It requires the file vendors/easings.min.js or jQuery UI for using some of its transitions. Other libraries could be used instead.
			//easingcss3: (default ease) Defines the transition effect to use in case of using css3: true.You can use the pre- defined ones(such as linear, ease - out...) or create your own ones using the cubic - bezier function.You might want to use Matthew Lein CSS Easing Animation Tool for it.

			//loopTop: (default false) Defines whether scrolling up in the first section should scroll to the last one or not.
			//loopBottom: (default false) Defines whether scrolling down in the last section should scroll to the first one or not.
			//loopHorizontal: (default true) Defines whether horizontal sliders will loop after reaching the last or previous slide or not.

			//continuousVertical: continuousVertical: (default false) Defines whether scrolling down in the last section should scroll down to the first one and if scrolling up in the first section should scroll up to the last one. Not compatible with loopTop, loopBottom or any scroll bar present in the site (scrollBar:true or autoScrolling:false).
			//continuousHorizontal: (default false) Extension of fullpage.js. Defines whether sliding right in the last slide should slide right to the first one or not, and if scrolling left in the first slide should slide left to the last one or not. Not compatible with loopHorizontal. Requires fullpage.js >= 3.0.1.
			//scrollHorizontally: (default false) Extension of fullpage.js.Defines whether to slide horizontally within sliders by using the mouse wheel or trackpad.It can only be used when using: autoScrolling: true.Ideal for story telling.Requires fullpage.js >= 3.0.1.
			//interlockedSlides: (default false) Extension of fullpage.js.Determines whether moving one horizontal slider will force the sliding of sliders in other section in the same direction.Possible values are true, false or an array with the interlocked sections.For example[1, 3, 5] starting by 1. Requires fullpage.js >= 3.0.1.
			//dragAndMove: (default false) Extension of fullpage.js.Enables or disables the dragging and flicking of sections and slides by using mouse or fingers.Requires fullpage.js >= 3.0.1.Possible values are:
			/*
			true: enables the feature.
			false: disables the feature.
			vertical: enables the feature only vertically.
			horizontal: enables the feature only horizontally.
			fingersonly: enables the feature for touch devices only.
			mouseonly: enables the feature for desktop devices only(mouse and trackpad).
			*/
			//offsetSections: (default false)Extension of fullpage.js.Provides a way to use non full screen sections based on percentage.Ideal to show visitors there's more content in the site by showing part of the next or previous section. Requires fullPage.js >= 3.0.1. To define the percentage of each section the attribute data-percentage must be used. The centering of the section in the viewport can be determined by using a boolean value in the attribute data-centered (default to true if not specified). For example:
			//Copy< div class="section" data - percentage="80" data - centered="true" >
			//resetSliders: (default false). Extension of fullpage.js.Defines whether or not to reset every slider after leaving its section.Requires fullpage.js >= 3.0.1.
			//fadingEffect: (default false). Extension of fullpage.js.Defines whether to use a fading effect or not instead of the default scrolling one. Possible values are true, false, sections, slides.It can therefore be applied just vertically or horizontally, or to both at the time.It can only be used when using: autoScrolling: true.Requires fullpage.js >= 3.0.1.
			//animateAnchor: (default true) Defines whether the load of the site when given an anchor(#) will scroll with animation to its destination or will directly load on the given section.
			//recordHistory: (default true) Defines whether to push the state of the site to the browser's history. When set to true each section/slide of the site will act as a new page and the back and forward buttons of the browser will scroll the sections/slides to reach the previous or next state of the site. When set to false, the URL will keep changing but will have no effect on the browser's history.This option is automatically turned off when using autoScrolling: false.
			//normalScrollElements: (default null) Demo If you want to avoid the auto scroll when scrolling over some elements, this is the option you need to use. (useful for maps, scrolling divs etc.) It requires a string with the Javascript selectors for those elements. (For example: normalScrollElements: '#element1, .element2').This option should not be applied to any section / slide element itself.
			//scrollOverflowReset: (default false) Extension of fullpage.js.Possible values are true, false, sections, slides.When set to true it scrolls up the content of the section / slide with a scroll bar when leaving to another section / slide.This way the section / slide will always show the start of its content even when scrolling from a section underneath it.Adding the class fp-no - scrollOverflowReset on the section or slide will disable this feature for that specific panel.
			//scrollOverflowMacStyle: (default false). When active, this option will use a "mac style" for the scrollbar instead of the default one, which will look quite different in Windows computers.
			//responsiveWidth: (default 0) A normal scroll(autoScrolling: false) will be used under the defined width in pixels.A class fp-responsive is added to the body tag in case the user wants to use it for their own responsive CSS.For example, if set to 900, whenever the browser's width is less than 900 the plugin will scroll like a normal site.
			//responsiveHeight: 410,// (default 0) A normal scroll(autoScrolling: false) will be used under the defined height in pixels. A class fp-responsive is added to the body tag in case the user wants to use it for their own responsive CSS.For example, if set to 900, whenever the browser's height is less than 900 the plugin will scroll like a normal site.
			//responsiveSlides: (default false) Extension of fullpage.js.When set to true slides will be turned into vertical sections when responsive mode is fired. (by using the responsiveWidth or responsiveHeight options detailed above).Requires fullpage.js >= 3.0.1.
			//touchSensitivity: (default 5) Defines a percentage of the browsers window width/height, and how far a swipe must measure for navigating to the next section / slide
			//bigSectionsDestination: (default null) Demo Defines how to scroll to a section which height is bigger than the viewport and when not using scrollOverflow:true. (Read how to create smaller or bigger sections). By default fullPage.js scrolls to the top if you come from a section above the destination one and to the bottom if you come from a section below the destination one. Possible values are top, bottom, null.
			bigSectionsDestination: 'top',
			//Accessibility
			//keyboardScrolling: (default true) Defines if the content can be navigated using the keyboard.
			// Design
			// horizontal only
			controlArrows: false,
			controlArrowsHTML: [
				'<div class="fp-arrow"></div>',
				'<div class="fp-arrow"></div>'
			],
			verticalCentered: true,
			// sectionsColor: ['#000', '#fff'],
			// paddingTop: '2em',  //(default 0) Defines the top padding for each section with a numerical value and its measure(paddingTop: '10px', paddingTop: '10em'...) Useful in case of using a fixed header.
			// paddingBottom: '2em', // (default 0) Defines the bottom padding for each section with a numerical value and its measure(paddingBottom: '10px', paddingBottom: '10em'...).Useful in case of using a fixed footer.
			fixedElements: '#header', // .footer',
			// dropEffect(default false) Extension of fullpage.js.Defines whether or not to use the drop effect on sections / slides.Read more about how to apply the drop effect option.
			// dropEffectOptions: (default: { speed: 2300, color: '#F82F4D', zIndex: 9999 }). Allows to configure the parameters for the drop effect when using the option dropEffect: true.Read more about how to apply the drop effect option.
			// waterEffect(default false) Extension of fullpage.js.Defines whether or not to use the water effect on sections / slides.Read more about how to apply the water effect option.
			// waterEffectOptions: (default: { animateContent: true, animateOnMouseMove: true }). Allows to configure the parameters for the water effect when using the option waterEffect: true.Read more about how to apply the water effect option.
			// cards: (default false) Extension of fullpage.js.Defines whether or not to use the cards effect on sections / slides.Read more about how to apply the cards option.
			// cardsOptions: (default: { perspective: 100, fadeContent: true, fadeBackground: true }). Allows you to configure the parameters for the cards effect when using the option cards: true.Read more about how to apply the cards option.
			// lazyLoading: (default true) Lazy loading is active by default which means it will lazy load any media element containing the attribute data - src as detailed in the Lazy Loading docs.If you want to use any other lazy loading library you can disable this fullpage.js feature.
			// observer: (default true) Defines whether or not to observe changes in the HTML structure of the page.When enabled, fullPage.js will automatically react to those changes and update itself accordingly.Ideal when adding, removing or hidding sections or slides.
			credits: false,

			// Custom selectors
			sectionSelector: 'section',
			//lideSelector: '.slide',



			// Events
			//beforeLeave: function (origin, destination, direction, trigger) { },
			//onLeave: function (origin, destination, direction, trigger) { },
			//afterLoad: function (origin, destination, direction, trigger) { },
			//afterRender: function () { },
			//afterResize: function (width, height) { },
			//afterReBuild: function () { },
			//afterResponsive: function (isResponsive) { },
			//afterSlideLoad: function (section, origin, destination, direction, trigger) { },
			//onSlideLeave: function (section, origin, destination, direction, trigger) { },
			//onScrollOverflow: function (section, slide, position, direction) { }
		});




		//action buttons
		/*
		document.getElementById('turnOn').addEventListener('click', function () {
		  removeClass(document.getElementById('actions').querySelector('li.active'), 'active');
		  addClass(this, 'active');
		  fullpage_api.parallax.init();
		});
    
		document.getElementById('turnOff').addEventListener('click', function () {
		  removeClass(document.getElementById('actions').querySelector('li.active'), 'active');
		  addClass(this, 'active');
    
		  fullpage_api.parallax.destroy();
		});
    
		//utils
		function removeClass(item, className) {
		  if (item.classList) {
			item.classList.remove(className);
		  }
		  else {
			item.className = item.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
		  }
		  return item;
		}
		function addClass(item, className) {
		  if (item.classList) {
			item.classList.add(className);
		  }
		  else {
			item.className += ' ' + className;
		  }
		  return item;
		}
	*/
	}
}
export default FullPage
