<h4> <?php // echo $title; ?> </h4>
<table class='description'>
	<thead>
		<?php 
			if (isset($tblheader)) { 
				foreach($tblheader as $tbh) {
					echo "<th>";
						echo $tbh;
					echo "</td>";	
				}
			} else {
				echo "<th style='padding: 15px 0px;'> AGENCY </th>
					  <th> AMOUNT </th>
					  <th> Percent Share </th>";
			}
		?>
	</thead>
	<tbody>
		<?php
			// $thetblindex = ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','NEDA','USAID','WORLDBANK'];
			$thetblindex = ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','USAID','WORLDBANK','UNDP','NZAid'];

			foreach($data as $key => $d) {
				$idx = array_search($key, $thetblindex);
				echo "<tr id='row_{$idx}' class='therow'>";
					echo "<td> {$thetblindex[$idx]} </td>";
					foreach($d as $dd) {
						echo "<td>";
							echo $dd;
						echo "</td>";
					}
				echo "</tr>";
			}
		?>
	</tbody>
</table>