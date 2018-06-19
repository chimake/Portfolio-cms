$(function () {
    "use strict";    
    initCounters();
    getMorris('line', 'line_chart');
});

function getMorris(type, element) {
    
    if (type === 'line') {
        Morris.Line({
            element: element,
            data: [
                {
                    period: '2012',
                    WebDesign: 458,
                    Photography: 450,
                    Technology: 501,
                    Lifestyle: 410,
                    Sports: 400
                },{
                    period: '2013',
                    WebDesign: 340,
                    Photography: 201,
                    Technology: 150,
                    Lifestyle: 214,
                    Sports: 250
                },{
                    period: '2014',
                    WebDesign: 458,
                    Photography: 450,
                    Technology: 501,
                    Lifestyle: 410,
                    Sports: 400
                }, {
                    period: '2015',
                    WebDesign: 265,
                    Photography: 521,
                    Technology: 265,
                    Lifestyle: 220,
                    Sports: 436
                }, {
                    period: '2016',
                    WebDesign: 200,
                    Photography: 215,
                    Technology: 280,
                    Lifestyle: 300,
                    Sports: 249
                },
                {
                    period: '2017',
                    WebDesign: 865,
                    Photography: 450,
                    Technology: 501,
                    Lifestyle: 410,
                    Sports: 400
                }
            ],
            xkey: 'period',
            ykeys: ['WebDesign', 'Photography', 'Technology', 'Lifestyle', 'Sports'],
            labels: ['WebDesign', 'Photography', 'Technology', 'Lifestyle', 'Sports'],
            pointSize: 2,
            fillOpacity: 0,
            pointStrokeColors: ['#fe6283', '#359ef0', '#fcce56', '#48c2c2', '#9d67ff'],
            behaveLikeLine: true,
            gridLineColor: '#515151',
            lineWidth: 1,
            hideHover: 'auto',
            lineColors: ['#fe6283', '#359ef0', '#fcce56', '#48c2c2', '#9d67ff'],
            resize: true
        });
    }
}
//===============================================================================
$(function() {
	"use strict";
	var mapData = {
        "IN": 2000000,
        "AU": 760,
        "US": 298,
        "JP": 198,								
        "GB": 120,
        "FR": 157,
        "CA": 1024,
        "SA": 89,
	};
	
	if( $('#world-map-markers').length > 0 ){
		$('#world-map-markers').vectorMap(
		{
			map: 'world_mill_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderOpacity: 0.25,
			borderWidth: 0,
            color: '#e6e6e6',
            
			regionStyle : {
				initial : {
				    fill : '#f4f4f4'
				}
			},

			markerStyle: {
			    initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 1,
                    'stroke-opacity': 0.4
                },
			},
		   
			markers : [{
				latLng : [21.00, 78.00],
				name : 'INDIA : 350'			  
			  },{
				latLng : [-33.00, 151.00],
				name : 'Australia : 250'				
			  },{
				latLng : [36.77, -119.41],
				name : 'USA : 250'			  
			  },{
				latLng : [35.65, 139.83],
				name : 'Japan : 250'			  
			  },{
				latLng : [51.50, -0.11],
				name : 'United Kingdom  : 250'			  
			  },{
				latLng : [48.86, 2.34],
				name : 'France : 120'			  
			  },{
				latLng : [49.24, -123.11],
				name : 'Canada : 120'			  
			  },{
				latLng : [25.20, 55.27],
				name : 'UAE : 250'			  
			  }],

			series: {
				regions: [{
					values: {
                        "IN": '#60bafd',
                        "AU": '#50d38a',
                        "US": '#49c5b6',
                        "JP": '#eabb5b',
                        "GB": '#ff758e',
                        "FR": '#37bf8d',
                        "CA": '#6b7381',
						"SA": '#667add',						
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
