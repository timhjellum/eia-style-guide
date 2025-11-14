jQuery(document).ready(function($){
    $('#map').vectorMap({
        map: 'us_aea_en',
        series: {
            regions: [{
                values: averageMapData,
                scale: ['#a9d6e5', '#012a4a'],
                normalizeFunction: 'polynomial',
                max: 50
            }]
        },
        backgroundColor: '#ffffff',
        onRegionTipShow: function(e, el, code) {
            el.css('color', 'black');
            el.css('background', '#ffffff');
            el.html(
                el.html() + '<br>' +
                'Average retail price of electricity: ' + averageMapData[code] + ' cents per kilowatthour<br>' +
                'Net generation: ' + new Intl.NumberFormat('en-US', {maximumFractionDigits: 0}).format(netMapData[code]) + ' thousand megawatt hours<br>' +
                'Retail sales: ' + new Intl.NumberFormat('en-US', {maximumFractionDigits: 0}).format(retailMapData[code]) + ' million kilowatt hours'
            );
        }
    });
});
