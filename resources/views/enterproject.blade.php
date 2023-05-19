<html>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<style>
			input[type="text"], textarea {
				padding: 12px;
				width: 100%;
				margin-bottom: 5px;
			}

			textarea {
				min-height: 200px;
			}

			input[type="submit"] {
				padding:10px;
				width: 100%;
			}

			.projectlocation {
				border: 5px dotted #a69c9c;
				padding: 17px;
				margin-bottom: 17px;
				margin-top: 15px;
			}

			.thelocations {
				padding: 0px;
				margin: 0px 0px 10px 0px;
				overflow: hidden;
			}

			.thelocations li {
				list-style: none;
				float: left;
				margin: 2px;
				border: 1px solid #ccc;
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<!-- <form method='post'> -->
			<input type='text' placeholder='Project Title' name='projecttitle' id='projecttitle'/> <br/>
			<textarea placeholder="Project Description" name='projectdesc' id='projectdesc'></textarea> <br/>
			<input type='text' placeholder='Sector' name='projectsector' id = 'projectsector'/> <br/>
			<input type='text' placeholder='Project Status' name='projectstatus' id='projectstatus'/> <br/>
			<input type='text' placeholder='Project Donor ID' name='donorid' id='donorid' list='donorlist'/> <br/>
			<input type='text' placeholder='Project Donor in Text' name='donortext' id='donortext'/> <br/>

			<div class='projectlocation'> 
				<ul class='thelocations'></ul>
				<input type='text' placeholder='Project Location ID' name='locationid' id='locationid' list='locationlist'/> <br/>
				<textarea placeholder="Project Location in Text" name='locationtext' id='locationtext'></textarea> <br/>
				<button style='padding: 9px;' id='enterlocation'> Enter Location </button>
			</div>
			<input type='submit' value='Save' name='savebutton' id='saveall'/>
		<!-- </form> -->

		<datalist id='donorlist'>
			<option value='adb'> ADB </option>
			<option value='aus'> AUS </option>
			<option value='eu'> EU </option>
			<option value='giz'> GIZ </option>
			<option value='jica'> JICA </option>
			<option value='koica'> KOICA </option>
			<option value='neda'> NEDA </option>
			<option value='nedamespes'> NEDA - MES_PES </option>
			<option value='unfao'> UN FAO </option>
			<option value='undp'> UNDP </option>
			<option value='usaid'> USAID </option>
			<option value='worldbank'> WORLD BANK </option>
			<option value='nzaid'> NZ AID </option>
		</datalist>

		<datalist id='locationlist'>
			<option value='mindanao'> Entire Mindanao </option>
			<option value='dinagatisland'> Dinagat Island </option>
			<option value='surigaodelnorte'> Surigao Del Norte </option>
			<option value='surigaodelsur'> Surigao Del Sur </option>
			<option value='agusandelnorte'> Agusan Del Norte </option>
			<option value='butuan'> Butuan </option>
			<option value='agusandelsur'> Agusan Del Sur </option>
			<option value='davaodelnorte'> Davao Del Norte </option>
			<option value='davaodeoro'> Davao De Oro </option>
			<option value='davaooriental'> Davao Oriental </option>
			<option value='davaocity'> Davao City </option>
			<option value='davaodelsur'> Davao Del Sur </option>
			<option value='davaooccidental'> Davao Occidental </option>
			<option value='generalsantos'> General Santos </option>
			<option value='sarangani'> Sarangani </option>
			<option value='camiguin'> Camiguin </option>
			<option value='misamisoriental'> Misamis Oriental </option>
			<option value='cagayandeoro'> Cagayan De Oro </option>
			<option value='iligan'> Iligan </option>
			<option value='bukidnon'> Bukidnon </option>
			<option value='cotabato'> Cotabato </option>
			<option value='southcotabato'> South Cotabato </option>
			<option value='lanaodelnorte'> Lanao Del Norte </option>
			<option value='lanaodelsur'> Lanao Del Sur </option>
			<option value='cotabatocity'> Cotabato City </option>
			<option value='maguindanao'> Maguindanao </option>
			<option value='sultankudarat'> Sultan Kudarat </option>
			<option value='misamisoccidental'> Misamis Occidental </option>
			<option value='zamboangadelsur'> Zamboanga Del Sur </option>
			<option value='zamboangadelnorte'> Zamboanga Del Norte </option>
			<option value='zamboangasibugay'> Zamboanga Sibugay </option>
			<option value='zamboangacity'> Zamboanga City </option>
			<option value='basilan'> Basilan </option>
			<option value='sulu'> Sulu </option>
			<option value='tawitawi'> Tawi-Tawi </option>
		</datalist>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>		
		<script>
			var url = "{{ url('/') }}";

			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let loc 			   = [];
            let locationdetails    = {};

            $(document).on("click","#enterlocation", function(){
            	let theloc       = $(document).find("#locationid").val();
            	let locdets      = $(document).find("#locationtext").val();

            	loc.push( theloc );
            	locationdetails[theloc] = locdets;

            	$("<li data-locid='"+theloc+"'> "+theloc+" </li>").appendTo(".thelocations");
            	$(document).find("#locationid").focus();
            });

            $(document).on("click",".thelocations li", function(){
            	let thelocid = $(this).data("locid");

            	let indx  = loc.indexOf( thelocid );
                			loc.splice(indx,1);

            	delete locationdetails[thelocid];

            	$(this).remove();
            })

            // saving all 
            	$(document).on("click","#saveall", function(){

            		let projecttitle 	= $(document).find("#projecttitle").val();
            		let projectdesc 	= $(document).find("#projectdesc").val();
            		let projectsector 	= $(document).find("#projectsector").val();
            		let projectstatus 	= $(document).find("#projectstatus").val();
            		let donorid 		= $(document).find("#donorid").val();
            		let donortext 		= $(document).find("#donortext").val();

            		$.ajax({
            			url 	: url+"/saveentry",
            			type    : "post",
            			data    : { 
            				loc 		    : JSON.stringify(loc),
            				locationdetails : JSON.stringify(locationdetails),
            				projecttitle    : projecttitle,
            				projectdesc     : projectdesc,
            				projectsector   : projectsector,
            				projectstatus   : projectstatus,
            				donorid         : donorid,
            				donortext	    : donortext
            			}, 
            			dataType : "json",
            			success : function(data){
            				alert("saved");
            				window.location.reload();
            			}, error: function(){
            				alert("ERROR");
            			}
            		});
            	});
            // 
		</script>
	</body>
</html>