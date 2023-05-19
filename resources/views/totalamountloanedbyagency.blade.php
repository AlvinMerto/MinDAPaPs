@include('layouts.head')

			<div class='theright-panel'>
				<div class="thedisplay-div">
					<ul class='nav-li'> 
						<li> <i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Loans, Grants and Projects 
							<ul class='nav-li-li'>
								<li data-nav='loanedbyagency'> <i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp; 
									ODA Distribution on programs and projects in terms of total amount (in PHP) as of year 2022
								</li>
								<li data-nav='grantamountbyagency'> <i class="fa fa-handshake-o" aria-hidden="true"></i> &nbsp; 
									Percent share on programs and projects by ODA agency as of Year 2022
								</li>
								<li data-nav='granted_grantperagency'> <i class="fa fa-money" aria-hidden="true"></i> &nbsp; 
									Percent share and distribution on ODA programs and projects in terms of grant amount (in PHP) as of year 2022
								</li>
								<li data-nav='granted_loanedperagency'> <i class="fa fa-money" aria-hidden="true"></i> &nbsp; 
									Percent share and ODA distribution on ODA programs and projects in terms of loan amount (in PHP) as of year 2022
								</li>
								<!-- <li data-nav='distribution_programproject'> <i class="fa fa-money" aria-hidden="true"></i> &nbsp; 
									DISTRIBUTION OF PROGRAMS AND PROJECTS BY SECTOR As of YEAR 2022
								</li> -->
							</ul>
						</li>
					</ul>
				</div>
				
				<div class='the-super-inner-div flex-it'>
					<div class='thedisplay-div'>
						<span id='displayithere'> 
							<h2 id='thetitle' style='text-align: center;'>  </h2> 
							
							<div id='chart'></div>
							<p style="text-align: center;">  Various ODA agencies that submitted list of PAPs to MinDA </p>
						</span>
					</div>
					<div class='theminda-div description'>
						<div class='logo-div'>
							<img src="{{ asset('/minda_images/logo-masthead-large.png') }}"/>
						</div>
						<span id='thetablehere'> </span>
					</div>
				</div>
			</div>
		</div>

		
		<script>
			var url = "{{ url('/') }}";
                        var options = {
				           // series: [7, 14, 79],
                           series: [1, 1, 1],
				           chart: {
					          type: 'pie',
					          fontFamily: 'Helvetica, Arial, sans-serif',
					          events : {
					          	beforeMount : function(event, chartContext, config){
					          		$.getJSON(url+"/loanedbyagency", function(response){
				                		chart.updateSeries(response.series);
				                		plottotable("loanedbyagency","ODA Distribution on programs and projects in terms of total amount (in PHP) as of year 2022");
				                		$(document).find(".nav-li li").eq(0).addClass("selectedli");
				                	});
					          	},
					          	dataPointSelection : function (event, chartContext, config){
					          		// console.log(config.dataPointIndex + " " + config.seriesIndex);
					          		let rowid = config.dataPointIndex;

					          		$(document).find(".therow").removeClass("selectedrow");
					          		$(document).find("#row_"+rowid).addClass("selectedrow")
					          	}
					          }
				        	},
				        	// dataLabels: {
							//   enabled: true,
							//   enabledOnSeries: undefined,
							//   formatter: function (val, opts) {
							//         // return val;
							//   		// console.log(opts);
							//   		// return w.config.series[seriesIndex].name + ":  " + value;
							//   },
							//   textAnchor: 'middle',
							//   distributed: false,
							//   offsetX: 0,
							//   offsetY: 0,
							//   style: {
							//       fontSize: '9px',
							//       fontFamily: 'Helvetica, Arial, sans-serif',
							//       fontWeight: 'bold',
							//       colors: undefined
							//   },
							//   background: {
							//     enabled: true,
							//     foreColor: '#fff',
							//     padding: 4,
							//     borderRadius: 2,
							//     borderWidth: 1,
							//     borderColor: '#fff',
							//     opacity: 0.9,
							//     dropShadow: {
							//       enabled: false,
							//       top: 1,
							//       left: 1,
							//       blur: 1,
							//       color: '#000',
							//       opacity: 0.45
							//     }
							//   },
							//   dropShadow: {
							//       enabled: false,
							//       top: 1,
							//       left: 1,
							//       blur: 1,
							//       color: '#000',
							//       opacity: 0.45
							//   }
							// },
					        labels: ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','USAID','WORLDBANK','UNDP','NZAid'],
					        stroke: {
					          colors: ['#fff']
					        },
					        fill: {
					          opacity: 0.9
					        },
					        responsive: [{
					          breakpoint: 480,
					          options: {
					            chart: {
					              width: 200
					            },
					            legend: {
					              position: 'bottom'
					            }
					          }
					        }]
				        };

                var chart = new ApexCharts(document.querySelector("#chart"), options);

                chart.render();

                $(document).ready(function(){
                	// $.getJSON("http://localhost:8000/loanedbyagency", function(response){
                	// 	chart.updateSeries(response.series);
                	// 	plottotable("loanedbyagency");
                	// 	$(document).find(".nav-li li").eq(0).addClass("selectedli");
                	// });
                });

                $(document).on("click",".nav-li-li li", function(){
                	let nav = $(this).data("nav");

                	let text = $(this).text();

                	$(this).siblings().removeClass("selectedli");
                	$(this).addClass("selectedli");

                	$.getJSON(url+"/"+nav, function(response){
                		chart.updateSeries(response.series);
                		// chart.updateOptions({
                		// 	series : response,
                		// 	xaxis : { categories : [
                		// 		"Multi-sectoral",
						// 		"Energy",
						// 		"Agriculture",
						// 		"Transport",
						// 		"DRR",
						// 		"Public Sector Management",
						// 		"Economic Development",
						// 		"Environment",
						// 		"Social protection",
						// 		"Agrbusiness financing",
						// 		"Health",
						// 		"Renewable energy"
                		// 	]
                		// });
                		plottotable(nav, text);
                	});
                });

                function plottotable(nav, title = false) {
                	$(document).find("#thetitle").html(title);
                	$.ajax({
                		url 	 : url+"/"+nav+"_table",
                		type     : "get",
                		data 	 : { data : nav },
                		dataType : "html",
                		success  : function(data){
                			$(document).find("#thetablehere").html(data);
                		}, error : function(){
                			alert('error')
                		}
                	})
                }
        </script>
	</body>
</html>