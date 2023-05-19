@include('layouts.head')
	<style>
		
	</style>
			<div class='theright-panel'>
				<div class="thedisplay-div">
					<ul class='nav-li'> 
						<li> <i class="fa fa-bars" aria-hidden="true"> </i> &nbsp; Number of Projects 
							<ul class='nav-li-li'> 
								<li data-nav='regionbyagency'> <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;  
									Distribution of programs and projects by ODA agency and by sector as of year 2022
									<!-- Number of Programs and Projects per Region in Mindanao by ODA Agency  -->
								</li>
								<li data-nav='byagency'> <i class="fa fa-building" aria-hidden="true"></i> &nbsp;   
									Number of Programs and Projects in Mindanao by Agency  
								</li>
								<li data-nav='bysector'> <i class="fa fa-puzzle-piece" aria-hidden="true"></i> &nbsp;   
									Distribution of programs and projects by sector as of year 2022
									<!-- Number of Programs and Projects in Mindanao per Sector   -->
								</li>
								<!-- <li data-nav='totalamount'> <i class="fa fa-money" aria-hidden="true"></i> &nbsp; 
									Number of Programs and Projects per Agency   
								</li> -->
								<li data-nav='perprovince'> 
									Distribution of programs and projects and by province in Mindanao as of year 2022
								</li>
								<!-- <li data-nav='distribution_programproject'> <i class="fa fa-money" aria-hidden="true"></i> &nbsp; 
									Distribution of programs and projects by sector as of year 2022
								</li> -->
							</ul>
						</li>
					</ul>
				</div>
				
				<div class='the-super-inner-div flex-it'>
					<div class='thedisplay-div'>
						<span id='displayithere'> 
							<h2 id='thetitle'> </h2>			
							
							<div id='chart' style='margin-top: 0px;'></div>
							<p>  Various ODA agencies that submitted list of PAPs to MinDA </p>
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
					        series: [],
					        chart: {
					          type: 'bar',
					          stacked: true,
					          height: 760,
					          events : {
					          	dataPointSelection : function (event, chartContext, config){
					          		// console.log(config.dataPointIndex + " " + config.seriesIndex);
					          		let tr_id = config.seriesIndex;
					          		let rowid = config.dataPointIndex;

					          		$(document).find(".therow_tr").removeClass("selectedrow");
					          		$(document).find("#tdrow_"+tr_id).addClass("selectedrow");

					          		$(document).find(".therow").removeClass("selectedtd");
					          		$(document).find(".row_"+rowid).addClass("selectedtd")

					          		$(document).find("#yawa_"+rowid).addClass("selectedrow");
					          		$(document).find(".puta_"+tr_id).addClass("selectedtd");

					          		$(document).find("#row1"+rowid).addClass("selectedrow");
					          		$(document).find(".td1_"+tr_id).addClass("selectedtd");
					          	}
					          }
					        },
					        plotOptions: {
					          bar: {
					            horizontal: true,
					            dataLabels: {
					              position: 'top',
					            },

					          }
					        },
					        dataLabels: {
					          enabled: true,
					          offsetX: -6,
					          style: {
					            fontSize: '10px',
					            colors: ['#fff']
					          }
					        },
					        stroke: {
					          show: true,
					          width: 1,
					          colors: ['#fff']
					        },
					        tooltip: {
					          shared: true,
					          intersect: false
					        },
					        xaxis: {
					          // categories: ["BARMM", "Region 13", "Region 12", "Region 11", "Region 10", "Region 9", "Not Specified"],
					        	categories: ["Agrbusiness financing", 
					        				 "Agriculture", 
					        				 "Central government",
					        				 "DRR", 
					        				 "Economic Development", 
					        				 "Energy", 
					        				 "Environment", 
					        				 "Health",
					        				 "Public Sector Management",
					        				 "Renewable energy",
					        				 "Social protection",
					        				 "Transport",
					        				 "Multi Sector",
					        				 "Not Specified"],
					        	},
					        };

					        var chart = new ApexCharts(document.querySelector("#chart"), options);
					        chart.render();

                $(document).ready(function(){
                	$.getJSON(url+"/regionbyagency", function(response){
                		chart.updateSeries(response);
                		plottotable("regionbyagency"," Distribution of programs and projects by ODA agency and by sector as of year 2022");
                		$(document).find(".nav-li li").eq(0).addClass("selectedli");
                	});
                });

                $(document).on("click",".nav-li-li li", function(){
                	let nav      = $(this).data("nav");
                	let thetitle = $(this).text();
                	// alert(thetitle);
                	$(this).siblings().removeClass("selectedli");
                	$(this).addClass("selectedli");

                	$.getJSON(url+"/"+nav, function(response){
                		if (nav == "byagency") {
                			chart.updateOptions({
                				series : response,
                				xaxis : {
                					categories : ["ADB","AUS","EU","FAO","GIZ","JICA","KOICA","NEDA","USAID","WORLDBANK"]
                				}
                			});
                		} else if (nav == "bysector") {
                			chart.updateOptions({
                				series : response,
                				xaxis : {
                						categories : [
							                 "Multi-sectoral", 		
							                 "Energy",
							                 "Agriculture",
							                 "Transport",
							                 "DRR",
							                 "Public Sector Management",
							                 "Economic Development",
							                 "Environment",
							                 "Social protection",
							                 "Agrbusiness financing",
							                 "Health",
							                 "Renewable energy"
							        	]

                					// categories : [
                					// 	"Agriculture, Agrarian Reform and Natural Resources (AARNR)",
									// 	"Agriculture (includes agribusiness financing)",
									// 	"Community Development",
									// 	"Construction",
									// 	"Disaster Risk Response and Management",
									// 	"Economic Development",
									// 	"Education",
									// 	"Energy",
									// 	"Environment",
									// 	"Government (includes related to governance)",
									// 	"Health",
									// 	"Planning",
									// 	"PPOS",
									// 	"Public Administration",
									// 	"Public Sector Management",
									// 	"Social Development",
									// 	"Social Protection",
									// 	"Social Reform and Community Development",
									// 	"Transport",
									// 	"Water and other urban infrastructure and services",
									// 	"Not Specified",
                					// ]
                				}
                			});
                		} else if (nav == "totalamount") {
                			chart.updateOptions({
                				series : response,
                				xaxis : {
                					categories : ["ADB","AUS","EU","FAO","GIZ","JICA","KOICA","NEDA","USAID","WORLDBANK"]
                				}
                			});
                		} else if (nav == "perprovince") {
                			$(document).find("#thetablehere").html("");
                			chart.updateOptions({
                				series : response,
                				xaxis : {
                					categories : [
                						"Agusan del Norte",
										"Agusan del Sur",
										"Basilan",
										"Bukidnon",
										"Cagayan de Oro",
										"Camiguin",
										"Compostela Valley",
										"Cotabato",
										"Davao de Oro",
										"Davao del Norte",
										"Davao del Sur",
										"Davao Occidental",
										"Davao Oriental",
										"Dinagat Island",
										"Dinagat Islands",
										"Lanao del Norte",
										"Lanao del Sur",
										"Maguindanao",
										"Misamis Occidental",
										"Misamis Oriental",
										"North Cotabato",
										"Not Specified",
										"Sarangani",
										"South Cotabato",
										"Sultan Kudarat",
										"Sulu",
										"Surigao del Norte",
										"Surigao del Sur",
										"Tawi-Tawi",
										"Zamboanga del Norte",
										"Zamboanga del Sur",
										"Zamboanga Sibugay"
                					]
                				}
                			})
                		} else if (nav == "distribution_programproject") {
                			// distribution_programproject
                			chart.updateOptions({
                				series : response,
                				xaxis : { categories : [
							                 "Multi-sectoral", 		
							                 "Energy",
							                 "Agriculture",
							                 "Transport",
							                 "DRR",
							                 "Public Sector Management",
							                 "Economic Development",
							                 "Environment",
							                 "Social protection",
							                 "Agribusiness financing",
							                 "Health",
							                 "Renewable energy"
							        ]
                				}
                			})
                		} else {
                			chart.updateOptions({
                				series : response,
                				xaxis : {
                					categories: ["Agrbusiness financing", 
					        				 "Agriculture", 
					        				 "Central government",
					        				 "DRR", 
					        				 "Economic Development", 
					        				 "Energy", 
					        				 "Environment", 
					        				 "Health",
					        				 "Public Sector Management",
					        				 "Renewable energy",
					        				 "Social protection",
					        				 "Transport",
					        				 "Multi Sector",
					        				 "Not Specified"
					        				],
                					// categories : ["BARMM", "Region 13", "Region 12", "Region 11", "Region 10", "Region 9", "Not Specified"]
                					// categories : ["BARMM", "Region 13", "Region 12", "Region 11", "Region 10", "Region 9", "Not Specified"]
                				}
                			});
                			// chart.updateSeries(response);
                		}

                		// if (nav != "perprovince") {
                			plottotable(nav, thetitle);
                		// }

                		// if (nav == "perprovince") {
                		// 	$(document).find("#thetablehere").html("DISTRIBUTION OF PROGRAMS AND PROJECTS AND BY PROVINCE IN MINDANAO As of YEAR 2022");
                		// } else {
                		// 	$(document).find("#thetablehere").html("");
                		// }

                	});
                });

                function plottotable(nav, title = false) { 

                	if (nav == "perprovince") {
                		$(document).find("#thetitle").html("DISTRIBUTION OF PROGRAMS AND PROJECTS AND BY PROVINCE IN MINDANAO As of YEAR 2022");
                		return;
                	} else {
                		$(document).find("#thetitle").html(title);
                	}

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