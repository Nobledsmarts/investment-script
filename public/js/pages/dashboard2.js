//[Dashboard Javascript]

//Project:	Master Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';

	var options = {
          series: [{
          name: 'Total Spend',
          data: [23, 31, 40, 101, 40, 36, 32, 23, 14, 18, 15, 12, 13, 11, 40, 10, 40, 26, 12, 23, 16, 8]
        }],
          chart: {
          height: 300,
          type: 'bar',
		  zoom: {
            enabled: false
          }
        },
        plotOptions: {
          bar: {
            borderRadius: 100,
			  columnWidth: '30%',
			  endingShape: 'rounded',
          }
        },
        dataLabels: {
          enabled: false,
          formatter: function (val) {
            return  "$" + val + "k";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#3699ff"]
          }
        },
        
        xaxis: {
			type: 'datetime',
          categories: ['01/01/2021 GMT', '01/02/2021 GMT', '01/03/2021 GMT', '01/04/2021 GMT', '01/05/2021 GMT', '01/06/2021 GMT', '01/07/2021 GMT', '01/08/2021 GMT', '01/09/2021 GMT', '01/10/2021 GMT', '01/11/2021 GMT', '01/12/2021 GMT', '01/13/2021 GMT', '01/14/2021 GMT', '01/15/2021 GMT', '01/16/2021 GMT', '01/17/2021 GMT', '01/18/2021 GMT', '01/19/2021 GMT', '01/20/2021 GMT', '01/21/2021 GMT', '01/22/2021 GMT'],          
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
        };

        var chart = new ApexCharts(document.querySelector("#spend_trend"), options);
        chart.render();
	
	
		var bar = new ProgressBar.Circle(progressbar1, {
		  color: '#3699ff',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#3699ff', width: 4 },
		  to: { color: '#3699ff', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-plane'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.78);
	
	
		var bar = new ProgressBar.Circle(progressbar2, {
		  color: '#EA5455',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#EA5455', width: 4 },
		  to: { color: '#EA5455', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-hotel'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.5);
	
	
		var bar = new ProgressBar.Circle(progressbar3, {
		  color: '#FF9F43',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#FF9F43', width: 4 },
		  to: { color: '#FF9F43', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-train'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.4);
	
	
	
		var bar = new ProgressBar.Circle(progressbar4, {
		  color: '#28C76F',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#28C76F', width: 4 },
		  to: { color: '#28C76F', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-car'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.3);
	
	
	
		var bar = new ProgressBar.Circle(progressbar5, {
		  color: '#3699ff',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#3699ff', width: 4 },
		  to: { color: '#3699ff', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-subway'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.25);
	
	
	
		var bar = new ProgressBar.Circle(progressbar6, {
		  color: '#7367F0',
		  // This has to be the same size as the maximum width to
		  // prevent clipping
		  strokeWidth: 30,
		  trailWidth: 5,
		  easing: 'easeInOut',
		  duration: 1400,
		  text: {
			autoStyleContainer: false
		  },
		  from: { color: '#7367F0', width: 4 },
		  to: { color: '#7367F0', width: 4 },
		  // Set default step function for all animate calls
		  step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 150);
			if (value === 0) {
			  circle.setText('');
			} else {
			  circle.setText("<i class='fa fa-spoon'></i>");
			}

		  }
		});
		bar.text.style.fontSize = '1.5rem';

		bar.animate(0.15);
	
	
	
	
	
	
}); // End of use strict
