module.exports = data => {
	return (
		require('./template.ejs')({
			...data,
			pageContent: require(`../../views/${data.page}.ejs`)(data),
			primaryNav: require(`../../views/nav/primary-navigation`),
			panorama: require(`../../views/nav/panorama`),
			footer: require(`../../views/nav/footer`),
		})
	)
}