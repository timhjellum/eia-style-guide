
<script>
	const pageTitles = [
		{
			titleName: 'All-Sources',
			titleClass: 'bg-all-sources',
		},
		{
			titleName: 'Analysis',
			titleClass: 'bg-analysis',
		},
		{
			titleName: 'Coal',
			titleClass: 'bg-coal',
		},
		{
			titleName: 'Commercial',
			titleClass: 'bg-commercial',
		},
		{
			titleName: 'Conference',
			titleClass: 'bg-conference',
		},
		{
			titleName: 'Countries',
			titleClass: 'bg-countries',
		},
		{
			titleName: 'Electricity',
			titleClass: 'bg-electricity',
		},
		{
			titleName: 'Environment',
			titleClass: 'bg-environment',
		},
		{
			titleName: 'Enduse',
			titleClass: 'bg-enduse',
		},
		{
			titleName: 'Finance',
			titleClass: 'bg-finance',
		},
		{
			titleName: 'Industrial',
			titleClass: 'bg-industrial',
		},
		{
			titleName: 'Maps',
			titleClass: 'bg-maps',
		},
		{
			titleName: 'Models',
			titleClass: 'bg-models',
		},
		{
			titleName: 'Natural-Gas',
			titleClass: 'bg-natural-gas',
		},
		{
			titleName: 'Nuclear',
			titleClass: 'bg-nuclear',
		},
		{
			titleName: 'Petroleum',
			titleClass: 'bg-petroleum',
		},
		{
			titleName: 'Press',
			titleClass: 'bg-press',
		},
		{
			titleName: 'Regions',
			titleClass: 'bg-regions',
		},
		{
			titleName: 'Renewable',
			titleClass: 'bg-renewable',
		},
		{
			titleName: 'Reports',
			titleClass: 'bg-reports',
		},
		{
			titleName: 'Residential',
			titleClass: 'bg-residential',
		},
		{
			titleName: 'RECS',
			titleClass: 'bg-recs',
		},
		{
			titleName: 'States',
			titleClass: 'bg-states',
		},
		{
			titleName: 'Transportation',
			titleClass: 'bg-transportation',
		},
		{
			titleName: 'Tie',
			titleClass: 'bg-tie',
		},
	]

	const scrollSpy = document.getElementById('scrollSpy')

	pageTitles.forEach((element) => {
		let titleName = element.titleName
		let titleClass = element.titleClass

		const li = document.createElement('li')
		const anchor = document.createElement('a')
		anchor.setAttribute('href', ' #' + titleClass)
		anchor.innerHTML = (titleName)

		li.appendChild(anchor)
		scrollSpy.appendChild(li)

		const h2 = document.createElement('h2')
		const h2InnerHTML = titleName
		h2.innerHTML = h2InnerHTML
		const p1 = document.createElement('p')
		const p1InnerHTML = 'Add <code>' + titleClass + '</code> to an anchor tag with the class of <code>.title-banner</code>.'
		p1.innerHTML = p1InnerHTML
		const exampleDiv = document.createElement('div')
		exampleDiv.className = ('')
		const Example = document.createTextNode('Example')
		exampleDiv.appendChild(Example)
		const cardDiv = document.createElement('div')
		cardDiv.className = ('eia-card')
		const moduleOuter = document.createElement('div')
		moduleOuter.className = ('module-outer')
		const moduleInner = document.createElement('div')
		moduleInner.className = ('module-inner')
		const titleBanner = document.createElement('div')
		const titleBannerClassNames = 'title-banner ' + titleClass
		titleBanner.className = (titleBannerClassNames)
		const h1 = document.createElement('h1')
		const alpha = document.createTextNode('The five boxing wizards jump quickly');
		h1.appendChild(alpha)
		const htmlDiv = document.createElement('div')
		htmlDiv.className = ('')
		const htmlInner = document.createTextNode('HTML')
		htmlDiv.appendChild(htmlInner)
		const pre = document.createElement('pre')
		const code = document.createElement('code')
		code.className = ('language-html')
		let codeID = titleClass
		code.id = (codeID)
		/*
		const codeInner = "&lt;div class=title-banner ' + titleClass + '&gt;\
				&lt;h1&gt;The five boxing wizards jump quickly&lt;/h1&gt;\
			&lt;/div&gt;"
			*/



		const p2 = document.createElement('p')
		const button = document.createElement('button')
		button.className = ('copy-element eia-button eia-button-primary')
		button.setAttribute('data-clipboard-action', 'copy')
		//data-clipboard-action="copy"
		button.setAttribute('data-clipboard-target', '#' + titleClass)
		const span = document.createElement('span')
		span.setAttribute('uk-icon', 'copy')
		button.appendChild(span)
		const buttonInner = document.createTextNode('copy')
		button.appendChild(buttonInner)


		cardDiv.appendChild(moduleOuter)
		moduleOuter.appendChild(moduleInner)
		moduleInner.appendChild(titleBanner)
		titleBanner.appendChild(h1)

		htmlDiv.appendChild(pre)
		pre.appendChild(code)
		code.innerHTML = "&lt;div class=title-banner " + titleClass + "<br>" +
			"	&lt;h1&gt;The five boxing wizards jump quickly&lt;/h1&gt;<br>" +
			"&lt;/div&gt;";
		p2.appendChild(button)
		htmlDiv.appendChild(p2)

		const div1 = document.createElement('div')
		div1.appendChild(h2)
		div1.appendChild(p1)
		div1.appendChild(exampleDiv)
		div1.appendChild(cardDiv)
		div1.appendChild(htmlDiv)

		const section = document.createElement('section')
		//div1.innerHTML = (titleName + " and " + titleClass)
		section.appendChild(div1)
		const introduction = document.querySelector('#mainColumn')
		introduction.appendChild(section)

	});

</script>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- $$$$$$$$$$  Introduction $$$$$$$$$$ -->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->