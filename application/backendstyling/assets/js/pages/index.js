//Project:	Alpino - Responsive Bootstrap 4 Template
//Primary use:	Alpino - Responsive Bootstrap 4 Template
$(function() {
    "use strict";	
	MorrisArea();
});

$(function () {   
    $('.sparkline-pie').sparkline('html', {
        type: 'pie',
        offset: 90,
        width: '138px',
        height: '138px',
        sliceColors: ['#454c56', '#61ccb7', '#5589cd']
    })

    $("#sparkline14").sparkline([8,2,3,7,6,5,2,1,4,8], {
        type: 'line',
        width: '100%',
        height: '28',
        lineColor: '#3f7dc5',
        fillColor: 'transparent',
        spotColor: '#000',
        lineWidth: 1,
        spotRadius: 2,        

    });
    $("#sparkline15").sparkline([2,3,9,1,2,5,4,7,8,2], {
        type: 'line',
        width: '100%',
        height: '28',
        lineColor: '#e66990',
        fillColor: 'transparent',
        spotColor: '#000',
        lineWidth: 1,
        spotRadius: 2,
    });
   
    $('.sparkbar').sparkline('html', {
        type: 'bar',
        height: '100',
        width: '100%',        
        barSpacing: '20',
        barColor: '#e56590',
        negBarColor: '#4ac2ae',
        responsive: true,
    });
});

// Morris-chart
function MorrisArea() {
    Morris.Area({
        element: 'm_area_chart',
        data: [{
                period: '2011',
                Visit: 45,
                Sales: 75                
            }, {
                period: '2012',
                Visit: 130,
                Sales: 110                
            }, {
                period: '2013',
                Visit: 80,
                Sales: 60
            }, {
                period: '2014',
                Visit: 78,
                Sales: 205
            }, {
                period: '2015',
                Visit: 180,
                Sales: 124
            }, {
                period: '2016',
                Visit: 105,
                Sales: 100
            },
            {
                period: '2017',
                Visit: 210,
                Sales: 180
            }
        ],
        xkey: 'period',
        ykeys: ['Visit', 'Sales'],
        labels: ['Visit', 'Sales'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors: ['#191f28', '#6c7787'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 2,
        hideHover: 'auto',
        lineColors: ['#191f28', '#6c7787'],
        resize: true
    });
}

//======
$(window).on('scroll',function() {
    $('.card .sparkline').each(function() {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pullUp");
        }
    });
});

/*VectorMap Init*/

$(function() {
	"use strict";
	var mapData = {
			"US": 298,
			"SA": 200,
			"AU": 760,
			"IN": 2000000,
			"GB": 120,
		};
	
	if( $('#world-map-markers2').length > 0 ){
		$('#world-map-markers2').vectorMap(
		{
			map: 'world_mill_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderOpacity: 0.25,
			borderWidth: 0,
			color: '#e6e6e6',
			regionStyle : {
				initial : {
				  fill : '#e9eef0'
				}
			  },

			markerStyle: {
				initial: {
					r: 8,
					'fill': '#3c434d',
					'fill-opacity': 0.9,
					'stroke': '#fff',
					'stroke-width' : 5,
					'stroke-opacity': 0.8
				},
				hover: {
					'stroke': '#fff',					
					'fill-opacity': 1,
					'stroke-width': 5
				},
			},
		   
			markers : [{
				latLng : [21.00, 78.00],
				name : 'INDIA : 350'			  
				}, {
					latLng : [-33.00, 151.00],
					name : 'Australia : 250'				
				}, {
					latLng : [36.77, -119.41],
					name : 'USA : 250'			  
				}, {
					latLng : [55.37, -3.41],
					name : 'UK   : 250'			  
				}, {
					latLng : [25.20, 55.27],
					name : 'UAE : 250'			  
				}, {
					latLng : [491,540.93],
					name : 'CANADA : 250'			  
				}, {
					latLng : [452,256.55],
					name : 'FRANCE : 50'			  
				}, {
					latLng : [445,610.79],
					name : 'CHINA : 50'				  
				}
			],

			series: {
				regions: [{
					values: {
						"US": '#a4e2da',
						"SA": '#cba1de',
						"AU": '#95d3ff',
						"IN": '#ffd89a',
						"GB": '#ff9a9a',
						"CA": '#999999',
						"FR": '#999999',
						"CN": '#999999',
					},
					attribute: 'fill'
				}]
			},
			hoverOpacity: null,
			normalizeFunction: 'linear',
			zoomOnScroll: false,
			scaleColors: ['#000000', '#000000'],
			selectedColor: '#000000',
			selectedRegions: [],
			enableZoom: false,
			hoverColor: '#fff',
		});
	}
});


