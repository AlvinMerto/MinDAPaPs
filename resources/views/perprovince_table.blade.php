<h4> DISTRIBUTION OF PROGRAMS AND PROJECTS AND BY PROVINCE IN MINDANAO As of YEAR 2022 </h4>
<table class='description'>
	<thead>
		<th>  </th>
		<th style='padding: 15px 0px;'> ADB </th>
		<th> AUS </th>
		<th> EU </th>
		<th> FAO </th>
		<th> GIZ </th>
		<th> JICA </th>
		<th> KOICA </th>
		<th> NZAid </th>
		<th> UNDP </th>
		<th> USAID </th>
		<th> WB </th>
		<th> Grand Total </th>
	</thead>
	<tbody>
		<?php
			$agencyidx   = ["Agusan del Norte",
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
							"Zamboanga Sibugay"];
					
			foreach($data as $key => $d) {
				$a_idx = array_search($key,$agencyidx);
				echo "<tr id='tdrow_{$a_idx}' class='therow_tr'>";
					echo "<td>";
						echo $key;
					echo "</td>";
					$idx = 0;
					foreach($d as $dd) {
						echo "<td class='row_{$idx} therow'>";
							echo $dd;
						echo "</td>";
						$idx++;
					}
				echo "</tr>";
			}
		?>
	</tbody>
</table>