//[Dashboard Javascript]

//Project:	Master Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
		var options = {
          series: [{
            name: "Expenses",
            data: [30, 41, 20, 51, 80, 60]
        }],
          chart: {
          height: 252,
          type: 'area',
			  foreColor:"#bac0c7",
          zoom: {
            enabled: false
          }
        },
		colors:['#EA5455'],
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            inverseColors: false,
            opacityFrom: 0.5,
            opacityTo: 0,
            stops: [0, 90, 100]
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-main"), options);
        chart.render();
	
	
	
	
	var options = {
        series: [
			{
            name: "Current year",
            data: [0, 40, 110, 70, 100, 60, 130, 55, 140, 125]
        	},
			{
            name: "Last year",
            data: [0, 30, 150, 40, 90, 80, 70, 45, 110, 105]
        	},
				],
        chart: {
			foreColor:"#bac0c7",
          height: 310,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
		colors:['#7367F0', '#EA5455'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          	show: true,
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			width: 4,
			dashArray: 0, 
        },
		 legend: {
		  show: true,
		  position: 'top',
		  horizontalAlign: 'center',
		 },
		markers: {
			size: 6,
			colors: ['#7367F0', '#EA5455'],
			strokeColors: '#ffffff',
			strokeWidth: 2,
			strokeOpacity: 1,
			strokeDashArray: 0,
			fillOpacity: 1,
			discrete: [],
			shape: "circle",
			radius: 5,
			offsetX: 0,
			offsetY: 0,
			onClick: undefined,
			onDblClick: undefined,
			hover: {
			  size: undefined,
			  sizeOffset: 3
			}
		},	
        grid: {
			borderColor: '#f7f7f7', 
          row: {
            colors: ['transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },			
		  yaxis: {
			lines: {
			  show: true,
			},
		  },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  labels: {
			show: true,        
          },
          axisBorder: {
            show: true
          },
          axisTicks: {
            show: true
          },
          tooltip: {
            enabled: true,        
          },
        },
        yaxis: {
          labels: {
            show: true,
            formatter: function (val) {
              return val + "K";
            }
          }
        
        },
      };
      var chart = new ApexCharts(document.querySelector("#charts_widget_2_chart"), options);
      chart.render();
	
	
	
	var options = {
          series: [{
          name: 'Earning',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
		  foreColor:"#bac0c7",
          height: 150,
			  toolbar: {
        		show: false,
			  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '20%',
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,			
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['#7367F0'],
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
			
        },
        yaxis: {
          
        },
		 legend: {
      		show: false,
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#recent_trend"), options);
		chart.render();
	
      
		var options = {
          series: [60, 30],
			labels: ['Booked', 'Cancelled'],
          chart: {
          width: 202,
          type: 'donut',
        },
		colors: ['#7367F0', '#EA5455'],
        dataLabels: {
          enabled: false
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              show: false
            }
          }
        }],
        legend: {
          show: false
        }
        };

        var chart = new ApexCharts(document.querySelector("#analytics_chart"), options);
        chart.render();
	
	
	
	
	jQuery('#world-map-markers').vectorMap(
		{
			map: 'world_mill_en',
			backgroundColor: '#ffffff00',
			borderColor: '#818181',
			borderOpacity: 0.25,
			borderWidth: 1,
			color: '#f4f3f0',
			regionStyle : {
				initial : {
				  fill : '#eef0fe'
				}
			  },
			markerStyle: {
			  initial: {
			r: 5,
			'fill': '#EA5455',
			'fill-opacity':1,
			'stroke': '#000',
			'stroke-width' : 1,
			'stroke-opacity': 0.0
						},
						},
			enableZoom: false,
			hoverColor: '#bcc3fb',
			markers : [
				{
				latLng : [43.73, 7.41],
				name : 'Monaco',
				style: {fill: '#7367F0', r:5}
			  	},
				{
				latLng : [3.2, 73.22],
				name : 'Maldives',
				style: {fill: '#28C76F', r:5}
			  	},
				{
				latLng : [7.35, 134.46],
				name : 'Palau',
				style: {fill: '#3699ff', r:5}
			  	},
				{
				latLng : [1.3, 103.8],
				name : 'Singapore',
				style: {fill: '#FF9F43', r:5}
			  	},
				{
				latLng : [13.16, -59.55],
				name : 'Barbados',
				style: {fill: '#EA5455', r:5}
			  	},
				{
				latLng : [35.88, 14.5],
				name : 'Malta',
				style: {fill: '#172b4c', r:5}
			  	},
			],
			hoverOpacity: null,
			normalizeFunction: 'linear',
			scaleColors: ['#b6d6ff', '#005ace'],
			selectedColor: '#c9dfaf',
			selectedRegions: [],
			showTooltip: true,
			onRegionClick: function(element, code, region)
			{
				var message = 'You clicked "'
					+ region
					+ '" which has the code: '
					+ code.toUpperCase();

				alert(message);
			}
		});

	
}); // End of use strict
