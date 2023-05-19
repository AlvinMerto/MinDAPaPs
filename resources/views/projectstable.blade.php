<h4> Number of Projects per Region by Agency </h4>
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
	</thead>
	<tbody>
		<?php
			// $agencyidx   = ['Agrbusiness financing','Agriculture', 'EU','FAO','GIZ','JICA','KOICA','NZAid','UNDP','USAID','WORLDBANK'];
			$agencyidx = [
	            "Agrbusiness financing",
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
	        ];
					
			foreach($data as $key => $d) {
				$a_idx = array_search($key,$agencyidx);
				echo "<tr id='row1{$a_idx}' class='therow_tr'>";
					echo "<td>";
						echo $key;
					echo "</td>";
					$idx = 0;
					foreach($d as $dd) {
						echo "<td class='td1_{$idx} therow'>";
							echo $dd;
						echo "</td>";
						$idx++;
					}
				echo "</tr>";
			}
		?>
	</tbody>
</table>