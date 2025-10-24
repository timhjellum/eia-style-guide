<a id="scrollTop" href>
	<div></div>
</a>
<aside>
	<nav>
		<ul>
		</ul>
	</nav>
</aside>
<main>
	<h1 class="eia-h1">Introduction</h1>
	<section>
		<div class="eia-container">
			<!-- h2 class="eia-h2"></h2 -->
			<!-- p class="eia-para"></p -->
			<h3 class="eia-h3">Example</h3>
			<div class="eia-card">
				<div class="l-margin-bottom eia-container-resizer"></div>
				<!-- /section>
	<section class="fileTypes">
		<div id="FileTypes" class=""></div>
	</section>
	<section class="grid">
		<div id="Grid" class=""></div>
	</section>
	<section class="list">
		<div id="List" class=""></div>
	</section>
	<section class="menu">
		<div id="Menu" class=""></div>
	</section>
	<section class="social">
		<div id="Social" class=""></div>
	</section-->
			</div>
		</div>
	</section>
</main>
<footer>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</footer>
<link href="https://www.eia.gov/global/styles/global.min.css" type="text/css" media="screen, projection" rel="stylesheet">
<script>
window.addEventListener('load', activateSection)

function activateSection() {
	//default is 700. 
	fullpage_api.setResponsive(true);
};


const iconFileType = [{
		name: 'api',
	},
	{
		name: 'csv',
	},
	{
		name: 'doc',
	},
	{
		name: 'efile',
	},
	{
		name: 'html',
	},
	{
		name: 'image',
	},
	{
		name: 'interactive',
	},
	{
		name: 'json',
	},

	{
		name: 'pdf',
	},
	{
		name: 'pedro',
	},
	{
		name: 'ppt',
	},
	{
		name: 'txt',
	},
	{
		name: 'xls',
	},
	{
		name: 'zip',
	},
];
const iconGrid = [{
		name: 'grid-column',
	},
	{
		name: 'grid-key',
	},
	{
		name: 'grid-line',
	},
	{
		name: 'grid-map',
	},
	{
		name: 'grid-parent-column',
	},
	{
		name: 'grid-parent-line',
	},
	{
		name: 'grid-parent-map',
	},
	{
		name: 'grid-parent-pin',
	},
	{
		name: 'grid-pin',
	},
];
const iconList = [{
		name: 'close-menu',
	},
	{
		name: 'search-submit',
	},
	{
		name: 'analysis',
	},
	{
		name: 'cancel',
	},
	{
		name: 'column-chart',
	},
	{
		name: 'compare',
	},
	{
		name: 'd-arrow',
	},
	{
		name: 'download',
	},
	{
		name: 'edit',
	},
	{
		name: 'filter',
	},
	{
		name: 'grab-dot',
	},
	/*
		{
			name: 'grid-column',
		},
	
		{
			name: 'grid-line',
		},
		{
			name: 'grid-map',
		},
		{
			name: 'grid-parent-column',
		},
		{
			name: 'grid-parent-line',
		},
		{
			name: 'grid-parent-map',
		},
		{
			name: 'grid-parent-pin',
		},
		{
			name: 'grid-pin',
		},
		{
			name: 'grid-key',
		},
		*/
	{
		name: 'help',
	},
	{
		name: 'key',
	},
	{
		name: 'l-arrow',
	},
	{
		name: 'l-range',
	},
	{
		name: 'line-chart',
	},
	{
		name: 'map',
	},
	{
		name: 'pause',
	},
	{
		name: 'pin',
	},
	{
		name: 'play',
	},
	{
		name: 'r-arrow',
	},
	{
		name: 'r-range',
	},
	{
		name: 'remove',
	},
	{
		name: 'reset',
	},
	{
		name: 'reset-animation',
	},
	{
		name: 'scroll-h',
	},
	{
		name: 'scroll-v',
	},
	{
		name: 'search-icon',
	},
	{
		name: 'slide',
	},
	{
		name: 'sort',
	},
	{
		name: 'sort-down',
	},
	{
		name: 'sort-up',
	},
	{
		name: 'submit',
	},
	{
		name: 'checkmark',
	},
	{
		name: 'dash',
	},
	{
		name: 'dot',
	},
	{
		name: 'add-chart',
	},
	{
		name: 'add-download',
	},
	{
		name: 'full-screen',
	},
	{
		name: 'options',
	},
	{
		name: 'table',
	},
	{
		name: 'lock',
	},
	{
		name: 'unlock',
	},
	{
		name: 'submit',
	},
	{
		name: 'clone',
	},
	/*
	{
		name: 'd',
	},
	{
		name: 'a',
	},
	{
		name: 'p',
	},
	{
		name: 'da',
	},
	{
		name: 'ap',
	},
	{
		name: 'dp',
	},
	{
		name: 'dap',
	},
	*/
	{
		name: 'print',
	},
	{
		name: 'info',
	},
	{
		name: 'tour',
	},
	{
		name: 'external-link',
	},
];
const iconMenu = [{
		name: 'ico-menu analysis-projections-icon',
	},
	{
		name: 'ico-menu a-z-index-icon',
	},
	{
		name: 'ico-menu beta-icon',
	},
	{
		name: 'ico-menu coal-icon',
	},
	{
		name: 'ico-menu upcoming-icon',
	},
	{
		name: 'ico-menu consumption-icon',
	},
	{
		name: 'ico-menu data-tools-model-icon',
	},
	{
		name: 'ico-menu electricity-icon',
	},
	{
		name: 'ico-menu email-complex-icon',
	},
	{
		name: 'ico-menu email-simple',
	},
	{
		name: 'ico-menu energy-explained-icon',
	},
	{
		name: 'ico-menu energy-in-brief-icon',
	},
	{
		name: 'ico-menu environment-icon',
	},
	{
		name: 'ico-menu disruptions-icon',
	},
	{
		name: 'ico-menu faq-icon',
	},
	{
		name: 'ico-menu featured-reports-icon',
	},
	{
		name: 'ico-menu markets-finance-icon',
	},
	{
		name: 'ico-menu follow-us-icon',
	},
	{
		name: 'ico-menu eia-glossary-icon',
	},
	{
		name: 'ico-menu international-icon',
	},
	{
		name: 'ico-menu maps-icon',
	},
	{
		name: 'ico-menu natural-gas-icon',
	},
	{
		name: 'ico-menu nuclear-icon',
	},
	{
		name: 'ico-menu open-data-icon',
	},
	{
		name: 'ico-menu petroleum-icon',
	},
	{
		name: 'ico-menu press-room-icon',
	},
	{
		name: 'ico-menu regional-icon',
	},
	{
		name: 'ico-menu renewable-icon',
	},
	{
		name: 'ico-menu reports-icon',
	},
	{
		name: 'ico-menu rss-complex-icon',
	},
	{
		name: 'ico-menu survey-forms-icon',
	},
	{
		name: 'ico-menu teachers-icon',
	},
	{
		name: 'ico-menu today-in-energy-icon',
	},
	{
		name: 'ico-menu total-energy-icon',
	},
	{
		name: 'ico-menu states-icon',
	},
	{
		name: 'ico-menu whats-new-icon',
	},
];
/*
		{
			name: 'ico reports-icon',
		},
		{
			name: 'email-simple',
		},
		{
			name: 'rss-complex-icon',
		},
		/*
		{
			name: 'residential-icon',
		},
		{
			name: 'commercial-icon',
		},
		{
			name: 'industrial-icon',
		},
		*/
const iconSocial = [{
		name: 'facebook',
	},
	{
		name: 'twitter',
	},
	{
		name: 'youtube',
	},
	{
		name: 'flickr',
	},
	{
		name: 'linkedin',
	},
	{
		name: 'email',
	},
	{
		name: 'rss',
	},

];
const scrollSpy = document.getElementById('scrollSpy')

iconFileType.forEach((element) => {
	let name = element.name

	const cardHeader = document.createElement('div')
	cardHeader.className = ('eia-card-header')
	const cardGrid = document.createElement('div')
	cardGrid.className = (' uk-flex-middle')
	cardGrid.setAttribute('uk-grid', '')
	const h3 = document.createElement('h3')
	const h3Text = h3.innerHTML = name
	cardHeader.appendChild(cardGrid)
	cardGrid.appendChild(h3)


	const cardBody = document.createElement('div')
	cardBody.className = ('')
	const anchor = document.createElement('a')
	anchor.setAttribute('href', '/')
	anchor.className = ('ico ' + name)
	const anchorInner = document.createElement('span')
	anchorInner.innerHTML = name
	cardBody.appendChild(anchor)
	anchor.appendChild(anchorInner)


	const cardFooter = document.createElement('div')
	cardFooter.className = ('eia-card-footer')
	const pre = document.createElement('pre')
	const code = document.createElement('code')
	code.className = ('language-html')
	code.id = name

	const p = document.createElement('p')
	const button = document.createElement('button')
	button.className = ('copy-element eia-button eia-button-primary')
	button.setAttribute('data-clipboard-action', 'copy')
	button.setAttribute('data-clipboard-target', '#' + name)
	const span = document.createElement('span')
	span.setAttribute('uk-icon', 'copy')
	button.appendChild(span)
	const buttonInner = document.createTextNode('copy')
	button.appendChild(buttonInner)

	cardFooter.appendChild(pre)
	pre.appendChild(code)
	code.innerHTML = '&lt;a class="eia ico ' + name + '"&gt;\n' +
		'	&lt;span&gt;' + name + '&lt;/span&gt;\n' +
		'&lt;/a&gt;';
	p.appendChild(button)
	cardFooter.appendChild(p)

	const divWrapper = document.createElement('div')
	divWrapper.className = ('eia-carduk-margin-top uk-margin-left eia-icon-wrapper')
	divWrapper.appendChild(cardHeader)
	divWrapper.appendChild(cardBody)
	divWrapper.appendChild(cardFooter)

	const FileTypes = document.querySelector('#FileTypes')
	FileTypes.appendChild(divWrapper)

})

iconGrid.forEach((element) => {
	let name = element.name

	const cardHeader = document.createElement('div')
	cardHeader.className = ('eia-card-header')
	const cardGrid = document.createElement('div')
	cardGrid.className = (' uk-flex-middle')
	cardGrid.setAttribute('uk-grid', '')
	const h3 = document.createElement('h3')
	const h3Text = h3.innerHTML = name
	cardHeader.appendChild(cardGrid)
	cardGrid.appendChild(h3)


	const cardBody = document.createElement('div')
	cardBody.className = ('')
	const anchor = document.createElement('a')
	anchor.setAttribute('href', '/')
	anchor.className = ('ico ' + name)
	const anchorInner = document.createElement('span')
	anchorInner.innerHTML = name
	cardBody.appendChild(anchor)
	anchor.appendChild(anchorInner)


	const cardFooter = document.createElement('div')
	cardFooter.className = ('eia-card-footer')
	const pre = document.createElement('pre')
	const code = document.createElement('code')
	code.className = ('language-html')
	code.id = name

	const p = document.createElement('p')
	const button = document.createElement('button')
	button.className = ('copy-element eia-button eia-button-primary')
	button.setAttribute('data-clipboard-action', 'copy')
	button.setAttribute('data-clipboard-target', '#' + name)
	const span = document.createElement('span')
	span.setAttribute('uk-icon', 'copy')
	button.appendChild(span)
	const buttonInner = document.createTextNode('copy')
	button.appendChild(buttonInner)

	cardFooter.appendChild(pre)
	pre.appendChild(code)
	code.innerHTML = '&lt;a class="eia ico ' + name + '"&gt;\n' +
		'	&lt;span&gt;' + name + '&lt;/span&gt;\n' +
		'&lt;/a&gt;';
	p.appendChild(button)
	cardFooter.appendChild(p)

	const divWrapper = document.createElement('div')
	divWrapper.className = ('eia-carduk-margin-top uk-margin-left eia-icon-wrapper')
	divWrapper.appendChild(cardHeader)
	divWrapper.appendChild(cardBody)
	divWrapper.appendChild(cardFooter)

	const GridWrapper = document.querySelector('#Grid')
	GridWrapper.appendChild(divWrapper)

})


iconList.forEach((element) => {
	let name = element.name

	const cardHeader = document.createElement('div')
	cardHeader.className = ('eia-card-header')
	const cardGrid = document.createElement('div')
	cardGrid.className = (' uk-flex-middle')
	cardGrid.setAttribute('uk-grid', '')
	const h3 = document.createElement('h3')
	const h3Text = h3.innerHTML = name
	cardHeader.appendChild(cardGrid)
	cardGrid.appendChild(h3)


	const cardBody = document.createElement('div')
	cardBody.className = ('')
	const anchor = document.createElement('a')
	anchor.setAttribute('href', '/')
	anchor.className = ('ico ' + name)
	const anchorInner = document.createElement('span')
	anchorInner.innerHTML = name
	cardBody.appendChild(anchor)
	anchor.appendChild(anchorInner)


	const cardFooter = document.createElement('div')
	cardFooter.className = ('eia-card-footer')
	const pre = document.createElement('pre')
	const code = document.createElement('code')
	code.className = ('language-html')
	code.id = name

	const p = document.createElement('p')
	const button = document.createElement('button')
	button.className = ('copy-element eia-button eia-button-primary')
	button.setAttribute('data-clipboard-action', 'copy')
	button.setAttribute('data-clipboard-target', '#' + name)
	const span = document.createElement('span')
	span.setAttribute('uk-icon', 'copy')
	button.appendChild(span)
	const buttonInner = document.createTextNode('copy')
	button.appendChild(buttonInner)

	cardFooter.appendChild(pre)
	pre.appendChild(code)
	code.innerHTML = '&lt;a class="eia ico ' + name + '"&gt;\n' +
		'	&lt;span&gt;' + name + '&lt;/span&gt;\n' +
		'&lt;/a&gt;';
	p.appendChild(button)
	cardFooter.appendChild(p)

	const divWrapper = document.createElement('div')
	divWrapper.className = ('eia-carduk-margin-top uk-margin-left eia-icon-wrapper')
	divWrapper.appendChild(cardHeader)
	divWrapper.appendChild(cardBody)
	divWrapper.appendChild(cardFooter)

	const ListWrapper = document.querySelector('#List')
	ListWrapper.appendChild(divWrapper)
})


iconMenu.forEach((element) => {
	let name = element.name

	const cardHeader = document.createElement('div')
	cardHeader.className = ('eia-card-header')
	const cardGrid = document.createElement('div')
	cardGrid.className = (' uk-flex-middle')
	cardGrid.setAttribute('uk-grid', '')
	const h3 = document.createElement('h3')
	const h3Text = h3.innerHTML = name
	cardHeader.appendChild(cardGrid)
	cardGrid.appendChild(h3)


	const cardBody = document.createElement('div')
	cardBody.className = ('')
	const menuSpan = document.createElement('span')
	//anchor.setAttribute('href', '/')
	menuSpan.className = (name)
	//const anchorInner = document.createElement('span')
	//anchorInner.innerHTML = name
	cardBody.appendChild(menuSpan)
	//anchor.appendChild(anchorInner)


	const cardFooter = document.createElement('div')
	cardFooter.className = ('eia-card-footer')
	const pre = document.createElement('pre')
	const code = document.createElement('code')
	code.className = ('language-html')
	code.id = name

	const p = document.createElement('p')
	const button = document.createElement('button')
	button.className = ('copy-element eia-button eia-button-primary')
	button.setAttribute('data-clipboard-action', 'copy')
	button.setAttribute('data-clipboard-target', '#' + name)
	const span = document.createElement('span')
	span.setAttribute('uk-icon', 'copy')
	button.appendChild(span)
	const buttonInner = document.createTextNode('copy')
	button.appendChild(buttonInner)

	cardFooter.appendChild(pre)
	pre.appendChild(code)
	code.innerHTML = '&lt;span class="' + name + '"&gt;\n' +
		'&lt;/span&gt;';
	p.appendChild(button)
	cardFooter.appendChild(p)

	const divWrapper = document.createElement('div')
	divWrapper.className = ('eia-carduk-margin-top uk-margin-left eia-icon-wrapper')
	divWrapper.appendChild(cardHeader)
	divWrapper.appendChild(cardBody)
	divWrapper.appendChild(cardFooter)

	const MenuWrapper = document.querySelector('#Menu')
	MenuWrapper.appendChild(divWrapper)

})

iconSocial.forEach((element) => {
	let name = element.name

	const cardHeader = document.createElement('div')
	cardHeader.className = ('eia-card-header')
	const cardGrid = document.createElement('div')
	cardGrid.className = (' uk-flex-middle')
	cardGrid.setAttribute('uk-grid', '')
	const h3 = document.createElement('h3')
	const h3Text = h3.innerHTML = name
	cardHeader.appendChild(cardGrid)
	cardGrid.appendChild(h3)


	const cardBody = document.createElement('div')
	cardBody.className = ('')
	const anchor = document.createElement('a')
	anchor.setAttribute('href', '/')
	anchor.className = ('ico ' + name)
	const anchorInner = document.createElement('span')
	anchorInner.innerHTML = name
	cardBody.appendChild(anchor)
	anchor.appendChild(anchorInner)


	const cardFooter = document.createElement('div')
	cardFooter.className = ('eia-card-footer')
	const pre = document.createElement('pre')
	const code = document.createElement('code')
	code.className = ('language-html')
	code.id = name

	const p = document.createElement('p')
	const button = document.createElement('button')
	button.className = ('copy-element eia-button eia-button-primary')
	button.setAttribute('data-clipboard-action', 'copy')
	button.setAttribute('data-clipboard-target', '#' + name)
	const span = document.createElement('span')
	span.setAttribute('uk-icon', 'copy')
	button.appendChild(span)
	const buttonInner = document.createTextNode('copy')
	button.appendChild(buttonInner)

	cardFooter.appendChild(pre)
	pre.appendChild(code)
	code.innerHTML = '&lt;a class="eia ico ' + name + '"&gt;\n' +
		'	&lt;span&gt;' + name + '&lt;/span&gt;\n' +
		'&lt;/a&gt;';
	p.appendChild(button)
	cardFooter.appendChild(p)

	const divWrapper = document.createElement('div')
	divWrapper.className = ('eia-carduk-margin-top uk-margin-left eia-icon-wrapper')
	divWrapper.appendChild(cardHeader)
	divWrapper.appendChild(cardBody)
	divWrapper.appendChild(cardFooter)

	const SocialWrapper = document.querySelector('#Social')
	SocialWrapper.appendChild(divWrapper)
})
</script>